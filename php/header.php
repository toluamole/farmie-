<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <!-- Title -->
  <title>Famie - Farm Services &amp; Organic Food Store Template | Home</title>
  <!-- Favicon -->
  <link rel="icon" href="img/core-img/favicon.ico">
  <!-- Core Stylesheet -->
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <!-- Preloader -->
  <div class="preloader d-flex align-items-center justify-content-center">
    <div class="spinner"></div>
  </div>

  <!-- ##### Header Area Start ##### -->
  <header class="header-area">
    <!-- Top Header Area -->
    <div class="top-header-area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="top-header-content d-flex align-items-center justify-content-between">
              <!-- Top Header Content -->
              <div class="top-header-meta">
                <p>Welcome to <span>Farmie</span>, we hope you will enjoy our products and have good experience</p>
              </div>
              <!-- Top Header Content -->
              <div class="top-header-meta text-right">
                <a href="#" data-toggle="tooltip" data-placement="bottom" title=" support@farmie.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>Email: support@farmie.com</span></a>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="+23480123454"><i class="fa fa-phone" aria-hidden="true"></i> <span>Call Us: +23480123454</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Navbar Area -->
    <div class="famie-main-menu">
      <div class="classy-nav-container breakpoint-off">
        <div class="container">
          <!-- Menu -->
          <nav class="classy-navbar justify-content-between" id="famieNav">
            <!-- Nav Brand -->
            <a href="./" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>
            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
              <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>
            <!-- Menu -->
            <div class="classy-menu">
              <!-- Close Button -->
              <div class="classycloseIcon">
                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
              </div>
              <!-- Navbar Start -->
              <div class="classynav">
                <ul>
                  <li class="active"><a href="./">Home</a></li>
                  <li><a href="about.php">About</a></li>
                  <!-- <li><a href="#">Pages</a>
                    <ul class="dropdown">
                      <li><a href="index.php">Home</a></li>
                      <li><a href="about.php">About Us</a></li>
                      <li><a href="farming-practice.php">Farming Practice</a></li>
                      <li><a href="shop.php">Shop</a>
                        <ul class="dropdown">
                          <li><a href="our-product.php">Our Products</a></li>
                          <li><a href="shop.php">Shop</a></li>
                        </ul>
                      </li>
                      <li><a href="news.php">News</a>
                        <ul class="dropdown">
                          <li><a href="news.php">News</a></li>
                          <li><a href="news-details.php">News Details</a></li>
                        </ul>
                      </li>
                      <li><a href="contact.php">Contact</a></li>
                    </ul>
                  </li> -->
                  <li><a href="our-products.php">Our Product</a></li>
                  <!-- <li><a href="farming-practice.php">Farming Practice</a></li>
                  <li><a href="news.php">News</a></li> -->
                  <li><a href="contact.php">Contact</a></li>
                  <?php 
                    if (isset($_SESSION['user_id'])) { ?>
                     <li><a href="./admin/home.php">Dashboard</a></li>
                   <?php }
                  ?>
                  <li><a href="./admin">Login</a></li>
                  <li><a href="./admin/signUp.php">Sign Up</a></li>
                </ul>
                <!-- Search Icon -->
                <div id="searchIcon">
                  <i class="icon_search" aria-hidden="true"></i>
                </div>
              </div>
              <!-- Navbar End -->
            </div>
          </nav>

          <!-- Search Form -->
          <div class="search-form">
            <form action="#" method="get">
              <input type="search" name="search" id="search" placeholder="Type keywords &amp; press enter...">
              <button type="submit" class="d-none"></button>
            </form>
            <!-- Close Icon -->
            <div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- ##### Header Area End ##### -->