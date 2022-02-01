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
        <!--STYLESHEETS-->
    <link rel="stylesheet" href="./css/main.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">    <link rel="stylesheet" href="./css/main.css">
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

<div class="contact-content">
    <div class="container contact-form">
            <div class="contact-image">
                <img src="./images/message.jpg" alt="icon_contact"/>
            </div>
                <?php
                //messages
        if(!empty($_SESSION['msg'])){
        // if session message has been set, display it. Errors, success messages etc.
        echo "<div class='select-bar'><div class='".$_SESSION['msgstatus']."'>{$_SESSION['msg']}</div></div>";
        // clear session messages
        unset($_SESSION['msg']);
        unset($_SESSION['msgstatus']);
      }?>
      <!--FORM START-->
            <form action="mail.php" method="POST">
                <h3>Drop Us a Message</h3>
               <div class="row">
                    <div class="col-md-6">
                    <!--username-->
                        <div class="form-group">
                            <input type="text" name="username" id="username" class="form-control" placeholder="Your Name" value="" required/>
                        </div>
                        <!--email-->
                        <div class="form-group">
                            <input type="text" name="email" id="email" class="form-control" placeholder="Your Email" value="" required/>
                        </div>
                    </div>
                    <div class="col-md-6">
                    <!--subject-->
                        <div class="form-group">
                            <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject" value="" required/>
                        </div>
                        <!--messages-->
                        <div class="form-group">
                            <textarea name="message" id="message" class="form-control" placeholder="Your Message" style="width: 100%; height: 150px;" required></textarea>
                        </div>
                    </div>
                </div>
                <!--submit button-->
                <div class="form-group">
                            <input type="submit" name="submit" class="btnContact" value="submit" />
                        </div>
                        
            </form>
    </div>
</div>


    <?php
    //include footer
    include('./includes/footer.php');

    ?>

</body>
</html>