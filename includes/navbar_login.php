


<body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0" href="index.php">
        <img
          src="./images/logo-1.png"
          height="65"
          alt="Paws Logo"
          loading="lazy"
        />
      </a>
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="food_shop.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="grooming.php">Grooming</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

    <!-- Right elements -->
    <div class="d-flex align-items-center" id="right-items">

      <?php

          if (isset($_SESSION['user_id'])) {
            echo '<a href="logout.php"><button type="button" class="btn btn-outline-primary me-2">Log Out</button></a>';
          }
          
          else {
            echo '<a href="login.php"><button type="button" class="btn btn-primary">Login/Register</button></a>';
          }
          
      ?>



      <li class="<?php if($page=='cart'){echo 'active';}?>">
                  <?php if(!empty($_SESSION['shopping_cart'])) {
                    $cart_count = count(array_keys($_SESSION['shopping_cart']));
                    ?>
                    <a href="cart.php" class="site-cart">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="badge rounded-pill badge-notification bg-danger" id="count"><?php echo $cart_count; ?></span>
                    <?php
                  } else {?>
                    <a href="cart.php" class="site-cart">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="badge rounded-pill badge-notification bg-danger" id="count">0</span>
                  <?php } ?>
                    </a>
            </li>
    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>

                  
<!-- Navbar -->











        

