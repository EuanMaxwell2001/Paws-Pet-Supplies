
  <!DOCTYPE html>
  <html lang="en">
<?php 
      //include db and sessions file
      include('includes/dbconnect.php');
      include('includes/sessions.php');
?>
<!--HEADER-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--TITLE-->
    <title>Paws Pet Supplies</title>
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
<meta name="robots">
<meta property="og:title" content="Paws Pet Supplies" />
<meta property="og:description" content="Pet supplies company in Edinburgh, UK" />
<meta property = "og:type" content="pet.supplies."/>
<meta property="og:image" content="images/logo-1.png" />
<meta property="keywords" content="pet supplies edinburgh delivery products food grooming" />
<meta name="description" content="Pet Supplies and Grooming - Leith, Edinburgh - Delivery">
</head>


<div class="content">

    <!--NAVBAR INCLUDE-->
    <?php
    $page='home';
    include('./includes/navbar_login.php');
    ?>

    <!--HERO-->
    <div class="hero">
        <img class="img-fluid" src="images/homebackground.jpg" alt="main page background image">
        <div class="hero-text p-5">
        <h3>Browse</h3>
            <h1>Best Pet Supplies in Edinburgh</h1>
            <button class="button hvr-hollow" onclick="window.location.href='food_shop.php'">Products</button>
            <button class="button hvr-hollow2" onclick="window.location.href='grooming.php'">Grooming</button>
        </div>
    </div>
<!--MOBILE HERO-->
<div class="mobile-hero">
  <div class="px-4 py-5 my-5 text-center">
    <h2 class="display-5 fw-bold">Browse</h2>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Best Pet Supplies in Edinburgh</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3" onclick="window.location.href='food_shop.php'">Products</button>
        <button type="button" class="btn btn-outline-secondary btn-lg px-4 text-dark" onclick="window.location.href='grooming.php'">Grooming</button>
      </div>
    </div>
  </div>
</div>

  

    <section class="browse">
        <h2>Check out our Pet Food <i class="fas fa-level-down-alt"></i> </h2>
    </section>

<div class="dogorcat">
  <div class="container py-4">
    <div class="row align-items-md-stretch">
    <!--dog food-->
      <div class="col-md-6">
      <div class="dogbutton">
        <div class="h-100 p-5 text-white  rounded-3">
          <h2>Dog Food</h2>
          <p>An outstanding selection of dog food to help you find the right nutrition for your dog. Special diets, grain free formulas, dog milk, high meat content formulas.</p>
          <button class="btn btn-outline-light" type="button" onclick="window.location.href='food_shop.php?category=Dog%20Food'">Browse Dog Food</button>
        </div>
      </div>
      </div>
       <!--cat food-->
      <div class="col-md-6">
      <div class="catbutton">
        <div class="h-100 p-5  text-white border rounded-3">
          <h2>Cat Food</h2>
          <p>Give your cat nutritious and delicious food by choosing from our great selection of cat food. Big name brands available.</p>
          <button class="btn btn-outline-light" type="button" onclick="window.location.href='food_shop.php?category=Cat%20Food'">Browse Cat Food</button>
        </div>
      </div>
      </div>
    </div>
</div>

</div>


    <!--footer-->
    <?php

    include('./includes/footer.php');

    ?>





