<?php 
      //include db and sessions file
      include('includes/dbconnect.php');
      include('includes/sessions.php');
?>

<!DOCTYPE html>
<html lang="en">
<!--HEADER-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--TITLE-->
    <title>Paws Pet Supplies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!--STYLESHEETS-->
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/main.css">
    <!--ICONS-->
<script src="https://kit.fontawesome.com/d0b9de03e1.js" crossorigin="anonymous"></script>
<link rel="apple-touch-icon" sizes="180x180" href="http://webdev.edinburghcollege.ac.uk/~HNCWEBMR7/Paws/images/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="http://webdev.edinburghcollege.ac.uk/~HNCWEBMR7/Paws/images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="http://webdev.edinburghcollege.ac.uk/~HNCWEBMR7/Paws/images/favicon-16x16.png">
<link rel="manifest" href="http://webdev.edinburghcollege.ac.uk/~HNCWEBMR7/Paws/images/site.webmanifest">
<link rel="mask-icon" href="http://webdev.edinburghcollege.ac.uk/~HNCWEBMR7/Paws/images/safari-pinned-tab.svg" color="#5bbad5">
<link rel="shortcut icon" href="http://webdev.edinburghcollege.ac.uk/~HNCWEBMR7/Paws/images/favicon.ico">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-config" content="http://webdev.edinburghcollege.ac.uk/~HNCWEBMR7/Paws/images/browserconfig.xml">
<meta name="theme-color" content="#ffffff">
</head>
<div class="content">

<!--NAVBAR INCLUDE-->
    <?php
    include('./includes/navbar_login.php');
    ?>


<body>

	<!-- main -->
<div class="par1">
<div class="box">
        <img src="images/avatar.png" class="avatar" alt="avatar">
            <h1>Login Here</h1>
            <form method="post" action="process/p_login.php">
  	<?php include('.includes/errors.php'); ?>
        <!--username-->
  	<div class="inputBox">
          <input type="text" name="username" required="">
          <span data-error="Wrong" data-success="Right" for="username">Username</span>
  	</div>
           <!--password-->
  	<div class="inputBox">
          <input type="password" name="password" required="">
          <span data-error="Wrong" data-success="Right" for="password">Password</span>
  	</div>
           <!--submit button-->
  	<div class="inputBox">
  		<button type="submit" class="btn-hover color-1" name="submit">Login</button>
  	</div>
                 <!--sign up-->
  	        <p>
  		<a href="signup.php">Sign up</a>
  	        </p>
  </form>

  <?php
    if(!empty($_SESSION['msg'])){
    // if session message has been set, display it. Errors, success messages etc.
    echo "<div class='select-bar'><div class='".$_SESSION['msgstatus']."'>{$_SESSION['msg']}</div></div>";
    // clear session messages
    unset($_SESSION['msg']);
    unset($_SESSION['msgstatus']);
    }?>

</div>
</div>

<!--footer-->
    <?php
    include('./includes/footer.php');
    ?>
