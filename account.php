<!DOCTYPE html>
<html lang="en">
<?php
//include db and sessions file
include('includes/dbconnect.php');
include('includes/sessions.php');?>

<!--HEADER-->
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


    <div class="container py-3">
      <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">Your Account</h1>
      </div>
    </div>
<!--IF THE USER ISNT LOGGED IN DISPLAY THIS CONTENT-->
<?php if($_SESSION['user_id'] == 0){ ?>
          <div class="site-section" data-aos="fade">
            <div class="container">
              <div class="row mb-5">
                <div class="col-md-5">
                  <div class="site-section-heading pt-3 mb-4">
                    <h2 class="text-black">It looks like you're not logged in</h2>
                  </div>
                  <p>Please log in to see any account details you may have</p>
                  <a href="login.php" class="btn btn-sm btn-primary">Log in or Register</a>
                </div>
                <div class="col-md-1"></div>
              </div>
            </div>
          </div>

          <!--IF THE USER IS LOGGED IN DISPLAY THIS CONTENT-->

        <?php }
        if($_SESSION['user_id']>0){?>
          <div class="site-section" data-aos="fade">
            <div class="container-fluid container">
              <?php
                  if(!empty($_SESSION['msg'])){
                  // if session message has been set, display it
                  echo "<div class='select-bar'><div class='".$_SESSION['msgstatus']."'>{$_SESSION['msg']}</div></div>";
                  // clear messages
                  unset($_SESSION['msg']);
                  unset($_SESSION['msgstatus']);
                  }?>



<!--QUERY TO FIND USER ID-->
          <?php
          $query="SELECT * FROM pawsusers WHERE user_id='$_SESSION[user_id]'";
          $result = mysqli_query($con, $query)
          or die ("couldn't run query");

          while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ ?>
          <div class="site-section">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <!-- Account information Form-->
                  <form action="process/update_account.php" method="post">
                    <div class="p-3 p-lg-5 border">
                      <h2>Personal Information</h2>

                      <!--Username-->
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="username" class="text-black">username</label>
                                <input type="text" class="form-control" id="username" name="username" value="<?php echo $row['username'];?>">
                            </div>
                      <!--Email-->
                            <div class="col-md-6">
                                <label for="email" class="text-black">Email</label>
                                <input type="text" class="form-control" id="email" name="email" value="<?php echo $row['email'];?>">
                            </div>
                        </div>

                      <!--Address/Shipping info-->
                      <h2>Shipping Information</h2>
                      <div class="form-group row">
                            <div class="col-md-12">
                            <!--Address-->
                                <label for="address" class="text-black">Address<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="address" name="address" value="<?php echo $row['address'];?>" placeholder="Address">
                            </div>
                      </div>

                      <div class="form-group row">
                          <div class="col-md-6">
                          <!--Country-->
                              <label for="country" class="text-black">Country<span class="text-danger">*</span></label>
                              <select name="country" id="country" class="form-control">
                                  <option value="<?php echo $row['country'];?>"><?php echo $row['country'];?></option>
                                  <option value="United Kingdom">United Kingdom</option>
                                  <option value="Other">Other</option>
                              </select>
                          </div>
                          <!--Postcode-->
                          <div class="col-md-6">
                              <label for="postcode" class="text-black">Postcode<span class="text-danger">*</span></label>
                              <input type="text" class="form-control" id="postcode" name="postcode" value="<?php echo $row['postcode'];?>">
                          </div>
                      </div>
                        <!--Submit button-->
                        <div class="form-group row">
                            <div class="col-lg-12">
                              <input type="submit" name="submit" class="btn btn-primary btn-lg btn-block" value="Update information">
                            </div>
                        </div>
                    </div>
                  </form>
                  <!--Form End-->
                  <!--if something in shopping cart, go back to checkout-->
                  <?php if(isset($_SESSION['shopping_cart'])) {?>
                    <div class="form-group">
                      <a href="checkout.php" class="btn btn-success btn-block">Back To Checkout</a>
                    </div>
                <?php }
              } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


<?php } ?>

<!-- Include footer.php-->
<?php include('includes/footer.php');?>

</body>
</html>
