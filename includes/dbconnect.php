<?php
// start session
session_start();

// connect to db
$con = mysqli_connect('localhost', 'HNCWEBMR7', 'db9Xq7Wtqm', 'HNCWEBMR7');

if($con->connect_error){
		die("Connection Failed!".$con->connect_error);
	}

 ?>
