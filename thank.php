  <?php 
      //include db and sessions file
      include('includes/dbconnect.php');
      include('includes/sessions.php');
?>

<html>
<!--HEADER-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--TITLE-->
    <title>Paws Pet Supplies</title>
    <!--STYLESHEETS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
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

 <?php //PHP Section for adding the last information into the database
if(!isset($_GET['tx'])){
  $_SESSION['msg']="Sorry, you have not made a purchase.";
  $_SESSION['msgstatus']="error";
  header('location: login.php');
} else{
  //put GET information into variables
  $total_amount=$_GET['amt'];
  $paid_status=$_GET['st'];
  $paypal_tx=$_GET['tx'];
  $order_id=$_SESSION['order_id'];

  $insert_orders="UPDATE orders
                  SET paypal_tx='{$paypal_tx}',
                      paid_status='{$paid_status}',
                      total_amount='{$total_amount}'
                  WHERE ID='{$order_id}'";
  //query connects and updates
  mysqli_query($con, $insert_orders) or die(mysqli_error($con));

  //SEND CONFIRMATION EMAIL TO USER
  //find the user in the user table based on the order
  $user_id=$_SESSION['user_id'];
  $user="SELECT * FROM pawsusers WHERE user_id=$user_id";
  $user_result=mysqli_query($con, $user) or die(mysqli_error($con));
  $user_row = mysqli_fetch_array($user_result, MYSQLI_ASSOC);

  $username=$user_row['username'];
    // the variables for the message
       $email_from = "pawspetsupplies@gmail.com";
       $email_to = $user_row['email'];
       $email_subject = "Thank you for your purchase!";
       $email_message = "Hello $username, thank you for shopping  with us.\n
       Paws Pet Supplies";

   // create email headers
   $headers = 'From: '.$email_from."\r\n".
   'Reply-To: '.$email_from."\r\n" .
   'X-Mailer: PHP/' . phpversion();

   if(@mail($email_to, $email_subject, $email_message, $headers)){
     //set success message session and send user back to form
     $_SESSION['msg']="Email sent!";
     $_SESSION['msgstatus']="success";
   }else{
     //set success message session and send user back to form
     $_SESSION['msg']="Sorry, the email couldn't be sent";
     $_SESSION['msgstatus']="error";
   }
  //if the payment went through, unset the sessions so that the user can start the buying process again if needed
  if($_GET['tx']){
  unset($_SESSION['ins_db_complete']);
  unset($_SESSION['shopping_cart']);}
 ?>

 <!-- page content start-->
 <div class="site-section">
   <div class="container">
     <div class="row">
       <div class="col-md-12 text-center">
         <span class="icon-check_circle display-3 text-success"></span>
         <h2 class="display-3 text-black">Thanks!</h2>
         <p class="lead mb-3">
           You order was successfuly completed
       <br>  Here is a summary of your order. It should be with you shortly!
        </p>
         <?php
         $order_id=$_SESSION['order_id'];

         $prod_sql="SELECT * FROM order_line WHERE order_id=$order_id";
         $prod_result = mysqli_query($con, $prod_sql)
         or die ("couldn't run query");

          ?>
             <table class="table table-bordered">
               <thead>
                 <tr>
                   <th class="product-name">Product</th>
                   <th class="product-price">Price</th>
                   <th class="product-quantity">Quantity</th>
                   <th class="product-total">Total</th>
                 </tr>
               </thead>
               <tbody>
                 <!-- create a while loop to display all products from the orderline table which have a matching orderid-->
                 <?php
                 while($result_row = mysqli_fetch_array($prod_result, MYSQLI_ASSOC)){?>
                 <tr>
                   <td class="product-name">
                     <h2 class="h5 text-black"><?php echo $result_row['prod_name']; ?></h2>
                   </td>
                   <td>£<?php echo $result_row['prod_price']; ?></td>
                   <td><?php echo $result_row['quantity']; ?></td>
                   <td><?php echo "£".$result_row['prod_price']*$result_row['quantity']; ?></td>
                 </tr>
               <?php
               $total_price+=($result_row['prod_price']*$result_row['quantity']);
             } //end while?>
             <tr>
               <td class="disabled" disabled></td>
               <td></td>
               <td></td>
               <td><h2>£<?php echo $total_price; ?></h2></td>
             </tr>
               </tbody>
             </table>
         </div>

         <!-- home button-->
         <div class="col-md-12">
         <a href="food_shop.php" class="text-center btn btn-block btn-sm btn-primary">Back to home <i class="fas fa-chevron-right"></i></a>
        </div>
     </div>
  </div>
</div>
 <?php }?>

<!--footer-->
    <?php
    include('./includes/footer.php');
    ?>