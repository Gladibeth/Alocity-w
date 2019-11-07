<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/slick-theme.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.css" rel="stylesheet">
</head>

<body>
  <header id="home">
    <nav class="navbar navbar-expand-lg fixed-top navbar-fixed-js">
      <div class="container">
        <div class="main-brand">
          <a class="navbar-brand" href="<?php bloginfo('url'); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/logo@3x.png">
            </a>
          <button class="navbar-toggler p-2 border-0 hamburger hamburger--elastic ml-autos" data-toggle="offcanvas" type="button">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </button>
        </div>
        <div class="navbar-collapse offcanvas-collapse">
          <ul class="navbar-nav mr-autos">
          <li class="dropdown nav-item">
              <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">
              Products
                </a>
              <ul class="dropdown-menu">
                <li class=" nav-ite  nav-ite-dropm">
                  <a class="nav-link nav-link--line" href="<?php echo get_home_url() ?>/index.php/software">Software</a>
                </li>
                <li class=" nav-item nav-item-drop">
                  <a class="nav-link nav-link--line" href="<?php echo get_home_url() ?>/index.php/hardware">Hardware</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo get_home_url() ?>/index.php/pricing">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo get_home_url() ?>/index.php/company">Company</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link--light" href="<?php echo get_home_url() ?>/index.php/contact">Support</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link--light" href="#Login">Login</a>
            </li>
            <li class="nav-item">
              <a class="btn_custom btn--small btn--filled--yellow" href="" data-target="#get_quate" data-toggle="modal">GET QUOTE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link--light" href="tel:888-512-2115">888-512-2115</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <?php wp_head(); ?> 
  </header>