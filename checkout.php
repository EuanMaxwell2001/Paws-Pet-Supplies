<?php 
      //include db and sessions file
      include('includes/dbconnect.php');
      include('includes/sessions.php');
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--TITLE-->
    <title>Paws Pet Supplies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!--STYLESHEETS-->
    <link rel="stylesheet" href="./css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <!--ICONS and Metadata-->
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

<!--MAIN PAGE CONTENT-->
<div class="content">
    <?php
    $page='checkout';
    //NAVBAR INCLUDE
    include('./includes/navbar_login.php');
    ?>

    <!--INSERT ORDER INTO DATABASE-->
<?php

if(!isset($_SESSION['ins_db_complete'])){
  //assign the available variables and use to create a record in the orders table
  $user_id=$_SESSION['user_id'];
  $paid_status="Pending";

  //INSERT INTO ORDERS TABLE
  $insert_order_sql="INSERT INTO orders (user_id, paid_status)
        VALUES ('$user_id','$paid_status')";
  mysqli_query($con, $insert_order_sql) or die(mysqli_error($con));
  $order_id=mysqli_insert_id($con);

  //INSERT INTO ORDER_LINE TABLE
  //foreach loop to populate the order_line table
  foreach ($_SESSION['shopping_cart'] as $product){
  $prod_id=$product['id'];
  $prod_name=$product['prod_name'];
  $prod_price=$product['prod_price'];
  $quantity=$product['quantity'];

  $insert_orderline_sql="INSERT INTO order_line (user_id, order_id, prod_id, prod_name, prod_price, quantity)
                         VALUES ('$user_id',
                                 '$order_id',
                                 '$prod_id',
                                 '$prod_name',
                                 '$prod_price',
                                 '$quantity')";
  //query connects and updates
  mysqli_query($con, $insert_orderline_sql) or die(mysqli_error($con));
}//end foreach loop
//set session so that if the page is refreshed, another record isn't inserted.
$_SESSION['order_id']=$order_id;
$_SESSION['ins_db_complete'] = "success";
}//End initial if statement
 ?>
<!-- end php for insert into db-->

<!-- display any session messages-->
<?php
    if(!empty($_SESSION['msg'])){
    // if session message has been set, display it. Errors, success messages etc.
    echo "<div class='select-bar'><div class='".$_SESSION['msgstatus']."'>{$_SESSION['msg']}</div></div>";
    // clear session messages
    unset($_SESSION['msg']);
    unset($_SESSION['msgstatus']);
    }?>
<!--/end display any session messages-->


<!-- start site section-->
    <div class="container py-3">
      <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">Checkout</h1>
      </div>
    </div>
    <div class="site-section">
      <div class="container">
        <div class="row">
          <!-- Shipping details from customer-->
          <div class="col-md-6 mb-5 mb-md-0">
            <h2 class="h3 mb-3 text-black">Shipping Information</h2>
            <?php //get user details
            $user_query="SELECT * FROM pawsusers WHERE user_id='{$_SESSION["user_id"]}'";
            $user_result = mysqli_query($con, $user_query)
            or die ("couldn't run query");
            $user_row=mysqli_fetch_array($user_result, MYSQLI_ASSOC);
            ?>
            <div class="p-3 p-lg-5 border">
                  <form class="" action="#" method="post">
                  <!-- Userame-->
                  <div class="form-group row">
                      <div class="col-md-6">
                        <label for="username" class="text-black"> Username</label>
                        <input type="text" class="form-control" value="<?php echo $user_row['username'];?>" id="username" name="username" disabled>
                      </div>
                  <!--Email-->
                      <div class="col-md-6">
                        <label for="email" class="text-black"> Email</label>
                        <input type="text" class="form-control" value="<?php echo $user_row['email'];?>" id="email" name="email" disabled>
                      </div>
                  </div>

                  <!-- Shipping information-->
                  <!--Address-->
                  <div class="form-group row">
                    <div class="col-md-12">
                      <label for="address" class="text-black">Address </label>
                      <input type="text" class="form-control" id="address" name="address" value="<?php echo $user_row['address'];?>" placeholder="Address" disabled>
                    </div>
                  </div>
                  <!--Postcode-->
                  <div class="form-group row">
                    <div class="col-md-6">
                      <label for="postcode" class="text-black">Postcode </label>
                      <input type="text" class="form-control" id="postcode" name="postcode" value="<?php echo $user_row['postcode'];?>" disabled>
                    </div>
                  <!--Country Selection-->
                    <div class="col-md-6">
                      <label for="country" class="text-black">Country </label>
                      <input type="text" class="form-control" name="country" id="country" value="<?php echo $user_row['country'];?>" disabled>
                    </div>
                  </div>

                  <!-- update details button-->
                  <p><strong>Information not correct? Click the button below</strong><i class="fas fa-level-down-alt"></i></p>
                  <div class="input-group-append">
                      <a href="account.php" class="btn btn-primary btn-block">Update Information</a>
                  </div>
                </form>
            </div>
          </div>
          <!--end of shipping details-->


          <!-- Order summary-->
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-12">
                <?php //start running through the shopping cart session
                  if(isset($_SESSION['shopping_cart'])){
                    // create variables for the shopping cart to use in the hidden field
                    $item_name=0;
                    $item_number=0;
                    $item_quantity=0;
                    $item_amount=0;
                    $total_price=0;

                  ?>
                <h2 class="h3 mb-3 text-black">Order Summary</h2>
                <div class="p-3 p-lg-5 border">

                  <!-- paypal form start-->
                  <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                  <input type="hidden" name="cmd" value="_cart">
                  <!-- business email below, in this case a developer email from paypal developer sandbox-->
                  <input type="hidden" name="business" value="euanmaxwell-facilitator@gmail.com">
                  <input type="hidden" name="rm" value="2">
                  <!-- Display order table start-->
                <table class="table site-block-order-table mb-5">
                    <thead>
                      <th>Product</th>
                      <th>Total</th>
                    </thead>
                    <tbody>
                      <?php
                      //Foreach item in the cart, increment the hidden field numbers with the ++
                        foreach ($_SESSION['shopping_cart'] as $product){
                        $item_name++;
                        $item_number++;
                        $item_amount++;
                        $item_quantity++;
                        ?>
                      <!-- display the products-->
                      <tr>
                        <td><?php echo $product['prod_name']; ?><strong class="mx-2">x</strong><?php echo $product['quantity']; ?></td>
                        <td>£<?php echo $product['prod_price']; ?></td>
                      </tr>
                      <!-- hidden inputs for paypal-->
                      <input type="hidden" name="item_name_<?php echo $item_name;?>" value="<?php echo $product['prod_name'];?>">
                      <input type="hidden" name="item_number_<?php echo $item_number;?>" value="<?php echo $product['id'];?>">
                      <input type="hidden" name="amount_<?php echo $item_amount;?>" value="<?php echo $product['prod_price'];?>">
                      <input type="hidden" name="quantity_<?php echo $item_quantity;?>" value="<?php echo $product['quantity'];?>">
                      <!-- these values are required as part of the minimum html form for paypal, the transaction will not work without these-->
                      <input type="hidden" name="currency_code" value="GBP">
                      <input type="hidden" name="upload" value="1">
                      <!-- / end hidden inputs for paypal-->
                      <?php
                      //calculate total price
                      $total_price+=($product['prod_price']*$product['quantity']);
                      } ?>
                      <!-- display total of the order-->
                      <tfoot>
                        <th class="text-black font-weight-bold"><strong>Order Total</strong></th>
                        <th class="text-black font-weight-bold"><strong>£<?php echo $total_price;?></strong></th>
                      </tfoot>
                    </tbody>
                  </table>
                  <!-- /table end-->

                  <!-- if the user has no pre-existing shipping information, display an information message instead of the buy button-->
                  <?php if(empty($user_row['address']) or empty($user_row['postcode']) or empty($user_row['country'])){
                    echo "<div class='select-bar'><div class='information'>Please update your details before continuing</div></div>";
                  } else {?>
                  <!-- paypal button, restyle it please-->
                  <input type="hidden" name="return" value="http://webdev.edinburghcollege.ac.uk/~HNCWEBMR7/Paws/thank.php">
                  <input type="hidden" name="notify_url" value="http://webdev.edinburghcollege.ac.uk/~HNCWEBMR7/Paws/thank.php">
                  <input type="hidden" name="custom" value="<?php echo $_SESSION['user_id'];?>">
                  <div class="form-group col-md-6 mx-auto">
                  <input type="image" name="upload"
                   src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/buy-logo-large.png"
                   alt="PayPal - The safer, easier way to pay online">
                    </div>
                  </form>
                  </div>
                <?php }} ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>


      <script src="scripts/form-validation.js"></script>

          <!--footer-->
    <?php

    include('./includes/footer.php');

    ?>
  </body>
</html>
