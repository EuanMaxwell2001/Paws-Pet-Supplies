<?php
//Database connection + sessions
include('../includes/dbconnect.php');
include('../includes/sessions.php');

//update info for customer if the submit button is pressed
if(isset($_POST['submit'])){
  $id=$_SESSION['user_id'];

//Update sql
$UpdateQuery ="UPDATE pawsusers
              SET username='{$_POST['username']}',
                  email='{$_POST['email']}',
                  address='{$_POST['address']}',
                  postcode='{$_POST['postcode']}',
                  country='{$_POST['country']}'
                  WHERE user_id='{$id}'";

//run sql
mysqli_query($con, $UpdateQuery) or die(mysqli_error($con));

//set session to inform user that customer has been updated
$_SESSION['msg'] = "Your information has been updated";
$_SESSION['msgstatus'] = "success";
header('location:../account.php');
exit();
} else {
  //set error message & redirect
  $_SESSION['msg'] = "Something went wrong";
  $_SESSION['msgstatus'] = "error";
  header('location:../account.php');
}
?>
