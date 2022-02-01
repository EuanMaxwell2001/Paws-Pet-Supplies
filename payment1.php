<?php
//Database connection & sessions
include('../includes/dbconnect.php');
include('../includes/sessions.php');

if($_SESSION['paid_status']="Complete"){



//insert into orders table the user id to create an order.
$orderline_insert="INSERT INTO orders
                   (user_id,
                    paypal_ref,
                    paid_status,
                    total_amount)
                   VALUES
                   ('$_SESSION["user_id"]',
                    '$paypal',
                    '$_SESSION["paid_status"]',
                    '$total_price')";
                    


//check contact information for user
$check_adress=mysqli_query($con,"SELECT address, postcode, country FROM pawsusers WHERE user_id=$_SESSION['user_id']");
$check_row = mysqli_fetch_array($check_adress, MYSQLI_ASSOC);

//if address and contact information for user is empty, insert the data from the checkout form
//check if the fields are empty
if(empty($check_row['address'] || $check_row['postcode'] || $check_row['country'])){
  //Assign form info into variables
  $address=$_POST['address'];
  $postcode=$_POST['postcode'];
  $country=$_POST['country'];

  //insert the information into the fields
  $insert_contact_info="INSERT INTO users
                        (address,
                         postcode,
                         country)
                         VALUES
                         ('$address',
                         '$postcode',
                         '$country')
                        WHERE user_id=$_SESSION['user_id']";
  $run_ins_contact = mysqli_fetch_array($insert_contact_info, MYSQLI_ASSOC);
}





//unset the shopping cart session so that they can start over
unset($_SESSION['shopping_cart']);
header('location: ../thankyou.php');
exit();
} else {
  $_SESSION['msg'] = "Something went wrong with your payment, please try again";
  $_SESSION['msgstatus'] = "error";
  header('location: checkout.php');
}
?>
