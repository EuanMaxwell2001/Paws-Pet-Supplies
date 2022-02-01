<?php
//Database connection + sessions
include('../includes/dbconnect.php');
include('../includes/sessions.php');

///define userinput to variables
$username=trim($_POST['username']);
$pass=trim($_POST['password']);


//If form is submitted
if(isset($_POST['submit'])){
//check user input against database
  $sql="SELECT * FROM pawsusers WHERE username ='$username' AND password='$pass'";
  $result=mysqli_query($con, $sql) or die;

    //if user doesn't exist, set guest sessions and redirect
    if (mysqli_num_rows($result)==0){
      $_SESSION['user_id'] = 0;
      $_SESSION['username'] ="Guest";
      $_SESSION['msg'] = "Unsuccessful login, please check that your username and/or password is correct.";
      $_SESSION['msgstatus'] = "error";
      header('location: ../login.php'); exit;
    }
    //if user does exist, check their age and redirect them with the appropriate sessions set
    if (mysqli_num_rows($result)>0){
    $user_row=mysqli_fetch_array($result);
    // data from DB
      $dob = $user_row['dob'];
    //get current year
      $currentYear = date("Y");
    // calculate birth year of an 18 yr old
      $agecheck = $currentYear - 16;
      $agecheck = $agecheck."-".date("d")."-".date("m");

    //SEND USERS TO RIGHT PLACES and set the right sessions
          if($dob<$agecheck) { // Adult ages
              $_SESSION['user_age']='adult';
              $_SESSION['username']=$user_row['username'];
              $_SESSION['user_id']=$user_row['user_id'];
              $_SESSION['msg'] = "You are now logged in!";
              $_SESSION['msgstatus'] = "success";

            // send to adult
            header('Location: ../account.php');
          } elseif ($dob>$agecheck) { //For children
              $_SESSION['user_age']='junior';
              $_SESSION['username']=$user_row['username'];
              $_SESSION['user_id']=$user_row['user_id'];
              $_SESSION['msg'] = "You are now logged in!";
              $_SESSION['msgstatus'] = "success";
            // send to junior
            header('Location: ../account.php');
          }
           else { //set guest sessions if the login is Unsuccessful
             $_SESSION['user_id'] = 0;
             $_SESSION['username'] ="Guest";
             $_SESSION['msg'] = "Unsuccessful login, please check that your email and/or password is correct.";
             $_SESSION['msgstatus'] = "error";
             header('location: ../login.php');
             exit();
          }
}
}
 ?>
