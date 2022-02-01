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
    <script src="https://kit.fontawesome.com/d0b9de03e1.js" crossorigin="anonymous"></script>
    <!--ICON-->
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
<!--NAVBAR INCLUDE-->
    <?php
    include('./includes/navbar_login.php');
    ?>

<?php   // get id from previous page and begin session for editing
    $status="";
      if (isset($_POST['action']) && $_POST['action']=="remove"){
      if(!empty($_SESSION['shopping_cart'])) {
      foreach($_SESSION['shopping_cart'] as $key=>$value) {
      if($_POST['prod_name'] == $value['prod_name']){
      unset($_SESSION['shopping_cart'][$key]);
      }
      if(empty($_SESSION['shopping_cart'])){
      unset($_SESSION['shopping_cart']);}
        }
      }
      }

      if (isset($_POST['action']) && $_POST['action']=="change"){
      foreach($_SESSION['shopping_cart'] as &$value){
      if($value['prod_name'] === $_POST['prod_name']){
          $value['quantity'] = $_POST['quantity'];
          break; // Stop the loop after product is found
      }
      }
      }
      ?>
    <!--start of actual content-->
    <div class="site-section">
    <div class="container py-3">
      <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">Your Cart</h1>
      </div>
    </div>
      <div class="container">

        <?php //if the shopping cart session has been started
          if(isset($_SESSION['shopping_cart'])){
              $total_price = 0;
          ?>
        <div class="row mb-5">
          <!--removing an item-->
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <!-- table-->
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Image</th>
                    <th class="product-name">Product</th>
                    <th class="product-price">Price</th>
                    <th class="product-quantity">Quantity</th>
                    <th class="product-total">Total</th>
                    <th class="product-remove">Remove</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- create a foreach loop to loop through the chosen products-->
                  <?php foreach ($_SESSION['shopping_cart'] as $product){ ?>
                  <tr>
                    <td class="product-thumbnail">
                      <img src="<?php echo "images/" . $product['image'] . ""; ?>" alt="<?php echo $row['prod_name']; ?>" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black"><?php echo $product['prod_name']; ?></h2>
                    </td>
                    <td>£<?php echo $product['prod_price']; ?></td>
                    <td>
                    <!-- select quantity-->
                      <!-- quantity form start-->
                      <form method='post' action='#'>
                      <input type='hidden' name='prod_name' value="<?php echo $product['prod_name']; ?>" />
                      <input type='hidden' name='action' value="change" />
                      <select name='quantity' class='quantity' onchange="this.form.submit()">
                      <option <?php if($product['quantity']==1) echo "selected";?> value="1">1</option>
                      <option <?php if($product['quantity']==2) echo "selected";?> value="2">2</option>
                      <option <?php if($product['quantity']==3) echo "selected";?> value="3">3</option>
                      <option <?php if($product['quantity']==4) echo "selected";?> value="4">4</option>
                      <option <?php if($product['quantity']==5) echo "selected";?> value="5">5</option>
                      </select>
                      </form>
                    </td>
                    <td><?php echo "£".$product['prod_price']*$product['quantity']; ?></td>
                    <td>
                      <form method='post' action='#'>
                      <input type='hidden' name='prod_name' value="<?php echo $product['prod_name']; ?>" />
                      <input type='hidden' name='action' id="remove" value="remove" />
                      <button type='submit' name="remove" class='remove btn btn-primary btn-sm'>Remove Item</button>
                      </form>
                  </tr>
                  <!--Calculate total price-->
                <?php
                $total_price+=($product['prod_price']*$product['quantity']);
                } //end for each item loop
                ?>
                </tbody>
              </table>
            </div>
          </form>
        </div>


<!-- section for displaying totals-->
        <div class="row">
          <div class="col-md-6">

              <div class="row mb-5">
              
          </div>
          </div>

          <!--CART TOTALS-->
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                  </div>
                </div>

                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black"><?php echo "£".$total_price; ?></strong>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='checkout.php'">Proceed To Payment</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

                <?php } // end shopping cart loop
                if(!isset($_SESSION['shopping_cart'])){
                  $no_items=0;?>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="row mb-5">
                        <!-- continue shopping button takes the user back to the products page-->
                          <h3>You currently have no items in your basket</h3>
                          <a class="btn btn-primary btn-sm" href="food_shop.php">Continue Shopping</a>
                      </div>
                      <!-- end of buttons-->
                    </div>

                    <!-- cart totals-->
                    <div class="col-md-6 pl-5">
                      <div class="row justify-content-end">
                        <div class="col-md-7">
                          <div class="row">
                            <div class="col-md-12 text-right border-bottom mb-5">
                              <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                            </div>
                          </div>

                          <div class="row mb-5">
                            <div class="col-md-6">
                              <span class="text-black">Total</span>
                            </div>
                            <div class="col-md-6 text-right">
                              <strong class="text-black"><?php echo "£".$no_items; ?></strong>
                            </div>
                          </div>
<!--continue to checkout-->
                          <div class="row">
                            <div class="col-md-12">
                              <button disabled class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='checkout.php'">Proceed To Payment</button>
                            </div>

                <?php  }?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

        <?php
//include the footer
    include('./includes/footer.php');

    ?>