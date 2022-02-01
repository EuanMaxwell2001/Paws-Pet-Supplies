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
    //NAVBAR INCLUDE
    include('./includes/navbar_login.php');
    ?>

    <!--TITLE HEADER-->
    <div class="title-header">
        <h1>Our Products</h1>
        <p>Browse our high quality pet foods and accessories</p>
    </div>


    <?php
    //run SQL query
    $query1 = ("SELECT * FROM products");
    $result = mysqli_query($con, $query1)
    or die ("couldn't run query");
    ?>

<!--container-->
<div class="album py-5">
    <div class="container">
            <div class="row mb-2" style="--bs-gutter-x: 0;">
              <div class="row col-md-12 bg-light" style="--bs-gutter-x: 0;">
                <div class="p-3 float-md-left mb-4 col-md-6"><h2 class="text-black">Filter Products: </h2></div>
                <!-- filter categories-->
                <div class="mb-2 col-sm-3">
                  <?php  //run SQL query for displaying all products
                  $query="SELECT * FROM products";
                  //If a category is set, append that onto the sql statement.
                  if(isset($_GET["category"])){
                    $query.=" WHERE prod_type='{$_GET["category"]}'";
                  }
                  //if a "sort by" is set, append that onto the sql statement.
                  if(isset($_GET["sort_by"]) AND $_GET["sort_by"]=='alphabetical'){
                    $query.=" ORDER BY prod_name ASC";
                  } elseif(isset($_GET["sort_by"]) AND $_GET["sort_by"]=='low_to_high') {
                    $query.=" ORDER BY prod_price ASC";
                  } elseif(isset($_GET["sort_by"]) AND $_GET["sort_by"]=='high_to_low') {
                    $query.=" ORDER BY prod_price DESC";
                  }
                  // connect and run or die
                  $result= mysqli_query($con, $query)
                  or die ("couldn't run query");
                  ?>
                  <div class="p-3 dropdown mr-1 ml-md-auto">
                    <!-- dropdown button-->
                    <button type="button" class="btn btn-primary btn-block dropdown-toggle" id="dropdownMenuReference" data-toggle="dropdown">Category</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                      <!-- show all link-->
                      <a class="dropdown-item" href="food_shop.php">Show All <span class="text-black ml-auto">(<?php
                      $amount_items=mysqli_num_rows($result);
                      echo $amount_items;?>)
                        </span>
                      </a>
                      <!-- category links-->
                      <?php
                      $sql_categories="SELECT DISTINCT prod_type FROM products";
                      $cat_result = mysqli_query($con, $sql_categories);
                      while ($cat_row = mysqli_fetch_array($cat_result, MYSQLI_ASSOC))
                      {?>
                      <!-- While loop for categories will display how many items are in each cat-->
                      <a class="dropdown-item" href="food_shop.php?category=<?php echo $cat_row['prod_type'];?>">
                        <?php echo $cat_row['prod_type'];?>
                        <span class="text-black ml-auto">(<?php
                        $item_amount=mysqli_query($con, "SELECT * FROM products WHERE prod_type='{$cat_row["prod_type"]}'");
                              $cat_result_nr=mysqli_num_rows($item_amount);
                              echo $cat_result_nr;?>)
                        </span>
                      </a>
                      <?php } ?>
                      <!-- php while loop for categories ended-->
                    </div>
                  </div>
                </div>
                <!-- other sorting options for displayed items -->
                <div class="mb-2 col-sm-3">
                <!-- If/else statement for displaying other filters-->
                  <div class="p-3 dropdown mr-1 ml-md-auto">
                    <!-- dropdown button-->
                    <button type="button" class="btn btn-primary btn-block dropdown-toggle" id="dropdownMenuReference" data-toggle="dropdown">Sort by:</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                      <a class="dropdown-item" href="food_shop.php?<?php if(isset($_GET["category"])){ echo "category=".$_GET['category']."&";}?>sort_by=alphabetical">Alphabetical</a>
                      <a class="dropdown-item" href="food_shop.php?<?php if(isset($_GET["category"])){ echo "category=".$_GET['category']."&";}?>sort_by=low_to_high">Price: low to high</a>
                      <a class="dropdown-item" href="food_shop.php?<?php if(isset($_GET["category"])){ echo "category=".$_GET['category']."&";}?>sort_by=high_to_low">Price: high to low</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <!-- /filters end-->


      <div id="message"></div>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        
        <?php
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
        {
          ?>
          <a class="col" href="<?php echo'shop_item.php?id=' .$row['id']. ''?>">
          <div class="card shadow-sm">
            <img src=<?php echo" './images/".$row['image']."'"?> class="card-img" alt="<?php echo $row['prod_name'];?>">

            <div class="card-body">
              <p class="card-title"><?php echo $row['prod_name'];?></p>
              
              <div class="d-flex justify-content-between align-items-center">

              </div>
                <div class="card-text">£<?php echo $row['prod_price'];?></div>
              </div>

          </div>
        </a>
        <?php
        }
        ?>

        </div>
        </div>
      </div>
         


        <?php

    include('./includes/footer.php');

    ?>
