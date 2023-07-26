<!DOCTYPE html>
<html lang="en">

<head>
  <!-- ========== Meta Tags ========== -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Anada - Data Science & Analytics Template">

  <!-- ========== Favicon Icon ========== -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/finaluniq_1.png" type="image/x-icon">

  <!-- ========== Start Stylesheet ========== -->
  <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>assets/css/themify-icons.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>assets/css/flaticon-set.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>assets/css/magnific-popup.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>assets/css/owl.theme.default.min.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>assets/css/bootsnav.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>assets/css/style2.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet" />
  <!-- ========== End Stylesheet ========== -->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

  <!-- ========== Google Fonts ========== -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&display=swap"
    rel="stylesheet">
    

</head>

<body>

  <!-- Preloader Start -->
  <div class="se-pre-con"></div>
  <!-- Preloader Ends -->

  <!-- Header 
    ============================================= -->
  <header id="home">

    <!-- Start Navigation -->
    <nav class="navbar navbar-default navbar-fixed dark no-background bootsnav">

      <div class="container">

        <!-- Start Atribute Navigation -->
        <div class="attr-nav button">
          <ul>
            <li><a href="?link=myprofile"><i class="fas fa-user"></i> Profile</a></li>
          </ul>
        </div>
        <!-- End Atribute Navigation -->

        <!-- Start Header Navigation -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
            <i class="fa fa-bars"></i>
          </button>
          <a class="navbar-brand" href="?link=home">
            <!--<img src="<?php echo base_url(); ?>assets/img/finaluniq_1.png" class="logo" alt="Logo">-->
          </a>
        </div>
        <!-- End Header Navigation -->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-menu">
          <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
              <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                <li>


                  <a href="?link=home">Home</a>


                </li>
                <?php if ($_SESSION['userRole'] == 'ADMIN') {
                  echo '<li><a href="?link=viewusers">Users</a></li>';
                } ?>

                <?php if ($_SESSION['userRole'] == 'ADMIN') {
                  echo '<li><a href="?link=products">Products</a></li>';
                } ?>

                <?php if (($_SESSION['userRole'] == 'ADMIN')) {
                  echo '<li><a href="?link=modules">Modules</a></li>';
                } ?>

                <!--Added By Mehdi.Bha-->
                <?php if ($_SESSION['userRole'] == 'ADMIN') {
                  echo '<li><a href="?link=licence">Licence Key</a></li>';
                } ?>
                <!--Added By Mehdi.Bha-->

                <li>
                  <a href="?link=tickets">Tickets</a>
                </li>

                <li>
                  <a href="?link=logout">Logout</a>
                </li>

              </ul>

            </div><!-- /.navbar-collapse -->
          </ul>

          <?php
          if(isset($_GET['link']))
          {
            if ($_GET['link'] == 'home') {redirect("home");}
            if ($_GET['link'] == 'viewusers') {redirect("viewusers");}
            if ($_GET['link'] == 'products') {redirect("products");}
            if ($_GET['link'] == 'modules') {redirect("modules");}
            if ($_GET['link'] == 'licence') {redirect("licence");}
            if ($_GET['link'] == 'tickets') {redirect("tickets?pagination=1");}
            if ($_GET['link'] == 'myprofile') {redirect("myprofile");}
            if ($_GET['link'] == 'logout') {redirect("logout");}

          }
          ?>


        </div><!-- /.navbar-collapse -->
      </div>
    </nav>
    <!-- End Navigation -->



  </header>
  <!-- End Header -->