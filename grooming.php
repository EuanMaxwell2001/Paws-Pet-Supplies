<!DOCTYPE html>
<html lang="en">
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
    <!--header-->

    <!--NAVBAR INCLUDE-->
    <?php
    include('./includes/navbar_login.php');
    ?>
<!--parallax image-->
<div class="parallax1">
</div>
<!--Grooming packages-->
<div class="container py-3">
  <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
    <h1 class="display-4 fw-normal">Grooming Packages</h1>
    <p class="fs-5 text-muted">Browse our different Grooming options to find the best option for your pet!</p>
  </div>

  <main>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
    <!--grooming option 1-->
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Basic</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">£25</h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Bath</li>
              <li>Brush</li>
              <li>Blowdry</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary" onclick="window.location.href='contact.php'">Contact us</button>
          </div>
        </div>
      </div>
      <!--grooming option 2-->
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Deep Clean</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">£50</h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Bath, Brush and Blow Dry</li>
              <li>De-Shedding Treatment</li>
              <li>Nail Clip</li>
              <li>Teeth Cleaning</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary" onclick="window.location.href='contact.php'">Contact us</button>
          </div>
        </div>
      </div>
      <!--grooming option 3-->
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3 ">
            <h4 class="my-0 fw-normal">Spa Treatment</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">£129</h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Bath, Brush and Blow Dry</li>
              <li>De-Shedding Treatment</li>
              <li>Handstripping and Teeth Cleaning</li>
              <li>Nail Clipping and Paw Cleanup</li>
              <li>Luxury Products</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary" onclick="window.location.href='contact.php'">Contact us</button>
          </div>
        </div>
      </div>
    </div>
  </main>
</div>

    <?php
//include footer
    include('./includes/footer.php');

    ?>