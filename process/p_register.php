<?php
//Database connection
include('../includes/dbconnect.php');
include('../includes/sessions.php');
include('../includes/errors.php');

if (isset($_POST['submit']) ){
//Set variables from the register form
$username = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];
$date = $_POST['datepicker'];

// by adding (array_push()) corresponding error unto $errors array
//change these to session msgs
if (empty($username)) { array_push($errors, "User name is required"); }
if (empty($email)) { array_push($errors, "Email is required"); }
if (empty($pass)) { array_push($errors, "Password is required"); }
if (empty($date)) { array_push($errors, "Date of Birth is required"); }

//Check if the user already exists
  $user_check_query = "SELECT * FROM pawsusers WHERE username='$username' LIMIT 1";
  $result = mysqli_query($con, $user_check_query);
  $user = mysqli_fetch_assoc($result);
// if user exists
    if ($user['username'] === $username) {
      //error message
      $_SESSION['msg'] = "The username you are using already exists!";
      $_SESSION['msgstatus'] = "error";
      header('location: ../login.php');
    }

//Explode and rearrange the DOB
$explode_date = explode("/", $date);
$dob = $explode_date[2]."-".$explode_date[1]."-".$explode_date[0];

$count=mysqli_fetch_array($user);
// data from DB
  $dob = $date;
//get current year
  $currentYear = date("Y");
// calculate birth year of an 16 yr old
  $agecheck = $currentYear - 16;
  $agecheck = $agecheck."-".date("d")."-".date("m");

switch ($dob) {
  case ($dob<$agecheck):
    $type='Adult';
    break;
  case($dob>$agecheck);
    $type='Junior';
    break;
}

//Finally, register user if there are no errors in the form
      	$query = "INSERT INTO pawsusers (username, email, dob, password)
        VALUES ('{$username}', '{$email}', '{$date}', '{$pass}')";
      	mysqli_query($con, $query);
        $_SESSION['msg'] = "You have been registered, please log in!";
        $_SESSION['msgstatus'] = "success";
      	header('location: ../login.php');
        exit;
 } else {
   $_SESSION['msg'] = "Something went wrong, please try again!";
   $_SESSION['msgstatus'] = "error";
   header('location: ../login.php');
   exit;
 }
 ?>
