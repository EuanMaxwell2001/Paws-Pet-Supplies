<?php
//Database connection + sessions
include('../includes/dbconnect.php');
include('../includes/sessions.php');




if(isset($_POST['submit'])) {
  //set variables with information from the form
  $username=$_POST['username'];
  $email_from=$_POST['email'];
  $subject=$_POST['subject'];
  $message=$_POST['message'];
//email that the comments will go to
    $email_to="euanmax@gmail.com";
    $email_subject=$subject;

    // if any data is missing from the form inputs
    if(!isset($_POST['username']) ||
        !isset($_POST['email'])    ||
        !isset($_POST['subject'])  ||
        !isset($_POST['message'])) {
        //set error message session and send user back to form
        $_SESSION['msg']="Sorry, there seems to be a problem with the information you submitted, try again.";
        $_SESSION['msgstatus']="error";
        header('location: contact.php');
    }

    $email_message = "Form details below.\n\n";

    //concatenate form information into the email_message to be sent on
    $email_message .= "Username: ".$username."\n";
    $email_message .= "Email: ".$email_from."\n";
    $email_message .= "Subject of Enquiry: ".$subject."\n";
    $email_message .= "Message: ".$message."\n";

// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();

if(@mail($email_to, $email_subject, $email_message, $headers)){
  //set success message session and send user back to form
  $_SESSION['msg']="We have received your email and will be in touch soon.";
  $_SESSION['msgstatus']="success";
  header('location:contact.php');
}else{
  //set success message session and send user back to form
  $_SESSION['msg']="Sorry, there seems to be a problem, try again.";
  $_SESSION['msgstatus']="error";
  header('location:contact.php');
}
}
?>
