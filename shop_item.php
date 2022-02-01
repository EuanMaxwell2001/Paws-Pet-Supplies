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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
   <!--STYLESHEETS-->
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

  <!-- Product Start-->
    <div class="container" id="prod_page">

          <?php
          
          $_SESSION['sess_id']=$id;

          //run SQL query
		  $id = $_GET['id'];
          $query = "SELECT * FROM products WHERE id='$id'";
          $result=mysqli_query($con, $query)
          or die ("couldn't run query");
          //while loop to extract result set
          while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
          {
            ?>

            <!-- php for adding to cart-->
        <?php

          //if the button has been pressed for buying
          if (isset($_POST['id']) && $_POST['id']!=""){
          $id = $_POST['id'];
          //run sql for product id
          $result = mysqli_query($con,"SELECT * FROM products WHERE id='$id'");
          $row = mysqli_fetch_assoc($result);
          // set variable names
          $name = $row['prod_name'];
          $id = $row['id'];
          $price = $row['prod_price'];
          $image = $row['image'];
          $quantity=$_POST['quantity'];

          //Create the cart array
          $cartArray = array(
            $id=>array(
            'prod_name'=>$name,
            'id'=>$id,
            'prod_price'=>$price,
            'quantity'=>$quantity,
            'image'=>$image)
          );

          //Add to cart.
          //If cart is empty, add it
          if(empty($_SESSION['shopping_cart'])){
            $_SESSION['shopping_cart'] = $cartArray;
            $_SESSION['msg'] = "The product has been added to your cart, click on the cart symbol in the top right corner to see it!";
            $_SESSION['msgstatus'] = "success";
          }else{
            // if product exists in cart, tell them
            $array_keys = array_keys($_SESSION['shopping_cart']);
            if(in_array($id,$array_keys)) {
            $_SESSION['msg'] = "The product has already been added to your cart";
            $_SESSION['msgstatus'] = "error";
            } else {
            // if product doesn't exist, but the cart isn't empty, add the new product into the cart array
            $_SESSION['shopping_cart'] = array_merge($_SESSION['shopping_cart'],$cartArray);
            $_SESSION['msg'] = "The product has been added to your cart, click on the cart symbol in the top right corner to see it!";
            $_SESSION['msgstatus'] = "success";
            }

            }
          }
          ?>


  <div class = "card-wrapper">
      <div class = "card">
        <!-- card left -->
        <div class = "product-imgs">
          <div class = "img-display">
            <div class = "img-showcase">
              <img src = <?php echo" './images/".$row['image']."'"?> class="img-fluid z-depth-1-half" alt="<?php echo $row['image'];?>">
            </div>
          </div>
        </div>
        <!-- card right -->
        <div class = "product-content">
          <h2 class = "product-title"><?php echo $row["prod_name"];?></h2>
          <div class = "product-price">
            <p class = "new-price">Price: <span>£<?php echo $row["prod_price"];?></span></p>
          </div>

          <div class = "product-detail">
            <h2>about this item: </h2>
            <p><?php echo $row["prod_desc"];?></p>
            <ul>
              <li>Weight: <span><?php echo $row["prod_weight"];?>kg</span></li>
              <li>Type: <span><?php echo $row["prod_type"];?></span></li>
              <li>Pet: <span><?php echo $row["prod_pet"];?></span></li>
              <li>Shipping Area: <span>United Kingdom</span></li>
              <li>Shipping: <span>Free</span></li>
            </ul>
          </div>

        <div class = "purchase-info">
          <form method='POST' action='#'>
            <input type='hidden' name='id' value="<?php echo $row['id']; ?>" />
            <!--quantity-->
            <select type = "number" name='quantity' class='quantity' id="quantity">
                      <option <?php if($product['quantity']==1) echo "selected";?> value="1">1</option>
                      <option <?php if($product['quantity']==2) echo "selected";?> value="2">2</option>
                      <option <?php if($product['quantity']==3) echo "selected";?> value="3">3</option>
                      <option <?php if($product['quantity']==4) echo "selected";?> value="4">4</option>
                      <option <?php if($product['quantity']==5) echo "selected";?> value="5">5</option>
                      </select>
            <button type = "submit" class = "btn">
              Add to Cart <i class = "fas fa-shopping-cart"></i>
            </button>
            <button onclick="window.location.href='food_shop.php'" type = "button" class = "btn" href="food_shop.php">Browse other products</button>
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
        <?php }?>
          </div>
        </div>
      </div>
      


<!--footer-->
  <?php
    include('./includes/footer.php');
    ?>






