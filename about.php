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
        <!--STYLESHEETS-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">    <link rel="stylesheet" href="./css/main.css">
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

    <!--MAIN PAGE HEADING-->
    <div class="title-header">
        <h1>About Us</h1>
    </div>

<!--ABOUT HERO 1-->
<div class="about-hero">
    <div class="container col-xxl-8 px-4 py-5">
  <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
      <img src="images/shopfront.jpg" class="d-block mx-lg-auto img-fluid"  width="700" height="500" loading="lazy" alt="Shop front image">
    </div>
    <div class="col-lg-6">
      <h1 class="display-5 fw-bold lh-1 mb-3">Our Shop</h1>
      <p class="lead">We currently have one store situated on Leith walk in Edinburgh. It has been in the same location since 1920 and we've built up a loyal, local following.</p>
    </div>
  </div>
</div>
</div>


<!--ABOUT HERO 2-->
<div class="about-hero">
    <div class="container col-xxl-8 px-4 py-5">
  <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-lg-6">
      <h1 class="display-5 fw-bold lh-1 mb-3">Dog Grooming</h1>
      <p class="lead">Our salon has a one dog at a time policy ensuring a stress free experience for your dog we only use the best natural products and sensitive shampoos that are PH balanced for your dogs skin.</p>
    </div>
    <div class="col-10 col-sm-8 col-lg-6">
      <img src="images/dogwash.jpg" class="d-block mx-lg-auto img-fluid"  width="700" height="500" loading="lazy" alt="Dog in bath">
    </div>
  </div>
</div>
</div>

<!--ABOUT HERO 3-->
<div class="about-hero">
    <div class="container col-xxl-8 px-4 py-5">
  <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
    <!--GOOGLE MAPS API-->
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1269.6249151966388!2d-3.174126126482327!3d55.9666389210184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4887b80bda8254ad%3A0xfa5345bcc7fbc661!2s213%20Leith%20Walk%2C%20Edinburgh%20EH7%205HN!5e0!3m2!1sen!2suk!4v1621550009500!5m2!1sen!2suk" width="500" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <div class="col-lg-6">
      <h1 class="display-5 fw-bold lh-1 mb-3">Come and Visit</h1>
      <p class="lead">Situated on Leith walk, we are but a stones throw away from the center of the capital as well as many great places to walk your dog.</p>
    </div>
  </div>
</div>
</div>

    <!--footer-->
  <?php

    include('./includes/footer.php');

  ?>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>