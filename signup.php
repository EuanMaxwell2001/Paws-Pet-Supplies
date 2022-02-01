
<!DOCTYPE html>
<html lang="en">
<!--HEADER-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--TITLE-->
    <title>Paws Pet Supplies</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">    <link rel="stylesheet" href="./css/main.css">
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
	include('.includes/dbconnect.php');
?>


<body>
	<div class="par1">
        <div class="box">
          <img src="images/avatar.png" class="avatar" alt="Avatar">
            <h1>Register Here</h1>
			<!--register form-->
    <form method="post" action="process/p_register.php">
				<!--Username-->
			<div class="inputBox">
				<input type="text" name="username" required="" value="<?php echo $username; ?>">
				<span>Username</span>
			</div>
				<!--Email-->
			<div class="inputBox">
				<input type="email" name="email" required="" value="<?php echo $email; ?>">
				<span>Email</span>
			</div>
			<!--date-->
			<div class="inputBox">
				<input type="date" name="datepicker" value="<?php echo $dob; ?>">
				<span>Date of Birth</span>
			</div>
			<!--password-->
			<div class="inputBox">
				<input type="password" required="" name="password" class="form-control">
				<span>Password</span>
			</div>
			<!--register-->
			<div class="inputBox">
				<button type="submit" class="btn-hover color-1" value="signup" name="submit">Register</button>
			</div>
			<!--Sign in-->
				<p>
					Already a member? <a href="./login.php">Sign in</a>
				</p>
	</form>

</div>
</div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!--footer-->
    <?php
    include('./includes/footer.php');
    ?>




