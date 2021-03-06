<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
  <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
  <meta name="author" content="PIXINVENT">
  <title>E-Wallet || Create your Account</title>
  <link rel="apple-touch-icon" href="<?php echo base_url('app-assets/images/ico/apple-icon-120.png'); ?>">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('app-assets/images/ico/favicon.ico'); ?>">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/css/vendors.css'); ?>">
  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/css/app.css'); ?>">
  <!-- END MODERN CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/css/core/menu/menu-types/horizontal-menu.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/css/core/colors/palette-gradient.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/css/pages/login-register.css'); ?>">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">
  <!-- END Custom CSS-->
</head>

<body class="horizontal-layout horizontal-menu horizontal-menu-padding 1-column  bg-cyan bg-lighten-2 menu-expanded fixed-navbar"
data-open="click" data-menu="horizontal-menu" data-col="1-column">

<!-- fixed-top-->
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-dark navbar-brand-center">
  <div class="navbar-wrapper">
    <div class="navbar-header">
      <ul class="nav navbar-nav flex-row">
        <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
        <li class="nav-item">
          <a class="navbar-brand" href="<?php echo site_url('home'); ?>">
            <img class="brand-logo" alt="modern admin logo" src="<?php echo base_url('app-assets/images/logo/logo.png'); ?>">
            <h3 class="brand-text">E-Wallet Dashboard</h3>
          </a>
        </li>
        <li class="nav-item d-md-none">
          <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
        </li>
      </ul>
    </div>
    <div class="navbar-container">
      <div class="collapse navbar-collapse justify-content-end" id="navbar-mobile">
        <ul class="nav navbar-nav">
          <li class="nav-item"><a class="nav-link mr-2 nav-link-label" href="<?php echo site_url('home'); ?>"><i class="ficon ft-arrow-left"></i></a></li>
          <li class="dropdown nav-item">
            <a class="nav-link mr-2 nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-settings"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="app-content container center-layout mt-2">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <section class="flexbox-container">
          <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-md-4 col-10 box-shadow-2 p-0">
              <div class="card border-grey border-lighten-3 m-0">
                <div class="card-header border-0">
                  <div class="card-title text-center">
                    <img src="<?php echo base_url('app-assets/images/logo/logo-dark.png'); ?>" alt="branding logo">
                  </div>
                </div>
                <div class="card-content">
                  <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-2">
                    <span>Using Account Details</span>
                  </p>
                  <div class="card-body pt-0">
                    <form class="form-horizontal" action="<?php echo base_url('register'); ?>" method="post">
                      <fieldset class="form-group position-relative has-icon-left">
                        <input type="text" class="form-control input-lg" id="user-firstname" name="firstname" placeholder="Your First Name">
                        <div class="form-control-position">
                          <i class="la la-user"></i>
                        </div>
                        <span class="text-danger" style="color: red;"><?php echo form_error('firstname'); ?></span>
                      </fieldset>
                      <fieldset class="form-group position-relative has-icon-left">
                        <input type="text" class="form-control input-lg" id="user-lastname" name="lastname" placeholder="Your Last Name">
                        <div class="form-control-position">
                          <i class="la la-user"></i>
                        </div>
                        <span class="text-danger" style="color: red;"><?php echo form_error('lastname'); ?></span>
                      </fieldset>
                      <fieldset class="form-group position-relative has-icon-left">
                        <input type="text" class="form-control input-lg" id="user-email" name="email" placeholder="Your Email Address">
                        <div class="form-control-position">
                          <i class="la la-user"></i>
                        </div>
                        <span class="text-danger" style="color: red;"><?php echo form_error('email'); ?></span>
                      </fieldset>
                      <fieldset class="form-group position-relative has-icon-left">
                        <input type="password" class="form-control input-lg" id="user-password" name="password" placeholder="Enter Password">
                        <div class="form-control-position">
                          <i class="la la-key"></i>
                        </div>
                        <span class="text-danger" style="color: red;"><?php echo form_error('password'); ?></span>
                      </fieldset>
                      <fieldset class="form-group position-relative has-icon-left">
                        <input type="password" class="form-control input-lg" id="user-password" name="cpassword" placeholder="Confirm Password">
                        <div class="form-control-position">
                          <i class="la la-key"></i>
                        </div>
                        <span class="text-danger" style="color: red;"><?php echo form_error('cpassword'); ?></span>
                      </fieldset>
                      <button type="submit" name="registerBtn" class="btn btn-info btn-lg btn-block"><i class="ft-unlock"></i> Register</button>
                    </form>
                  </div>

                  <div class="card-body pb-0">
                    <p class="text-center"><a href="#" class="card-link">Recover password</a></p>
                    <p class="text-center">Already a User? <a href="<?php echo site_url('login'); ?>" class="card-link">Login to your Account</a></p>
                  </div>

                  <?php
    								if($this->form_validation->run() == TRUE){
    									echo $this->session->flashdata('msgSuccess');
    									echo $this->session->flashdata('msgError');
    								}
    							?>

                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>

  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <footer class="footer fixed-bottom footer-dark navbar-shadow">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2 container center-layout">
      <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2018 <a class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent"
        target="_blank">PIXINVENT </a>, All rights reserved. </span>
      <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span>
    </p>
  </footer>
  <!-- BEGIN VENDOR JS-->
  <script src="<?php echo base_url('app-assets/vendors/js/vendors.min.js'); ?>" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script type="text/javascript" src="<?php echo base_url('app-assets/vendors/js/ui/jquery.sticky.js'); ?>"></script>
  <script src="<?php echo base_url('app-assets/vendors/js/forms/validation/jqBootstrapValidation.js'); ?>"
  type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="<?php echo base_url('app-assets/js/core/app-menu.js'); ?>" type="text/javascript"></script>
  <script src="<?php echo base_url('app-assets/js/core/app.js'); ?>" type="text/javascript"></script>
  <script src="<?php echo base_url('app-assets/js/scripts/customizer.js'); ?>" type="text/javascript"></script>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="<?php echo base_url('app-assets/js/scripts/forms/form-login-register.js'); ?>" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->

</body>
</html>
