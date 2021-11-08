<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
<meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
<meta name="author" content="PIXINVENT">
<link rel="apple-touch-icon" href="<?php echo base_url('app-assets/images/ico/apple-icon-120.png'); ?>">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('app-assets/images/ico/favicon.ico'); ?>">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">
<!-- BEGIN VENDOR CSS-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/css/vendors.min.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/vendors/css/charts/chartist.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/vendors/css/charts/chartist-plugin-tooltip.css'); ?>">
<!-- END VENDOR CSS-->
<!-- BEGIN MODERN CSS-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/css/app.min.css'); ?>">
<!-- END MODERN CSS-->
<!-- BEGIN Page Level CSS-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/css/core/menu/menu-types/horizontal-menu.min.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/css/core/colors/palette-gradient.min.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/css/pages/invoice.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/css/pages/dashboard-bank.min.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/css/plugins/calendars/clndr.min.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/css/pages/single-page.min.css'); ?>">
<!-- END Page Level CSS-->
<!-- BEGIN Custom CSS-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">
<!-- END Custom CSS-->

<!-- fixed-top-->
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow navbar-static-top navbar-light navbar-brand-center">
  <div class="navbar-wrapper">
    <div class="navbar-header">
      <ul class="nav navbar-nav flex-row">
        <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
        <li class="nav-item"><a class="navbar-brand" href="<?php echo site_url('dashboard'); ?>"><img class="brand-logo" alt="modern admin logo" src="<?php echo base_url('app-assets/images/logo/logo.png'); ?>">
            <h3 class="brand-text">Modern Admin</h3></a></li>
        <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a></li>
      </ul>
    </div>
    <div class="navbar-container content">
      <div class="collapse navbar-collapse" id="navbar-mobile">
        <ul class="nav navbar-nav mr-auto float-left">
          <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
          <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
          <li class="nav-item mega-dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Mega</a>
          </li>
          <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
            <div class="search-input">
              <input class="input" type="text" placeholder="Explore Modern...">
            </div>
          </li>
        </ul>
        <ul class="nav navbar-nav float-right">
          <li class="dropdown dropdown-user nav-item">
            <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
              <span class="mr-1">Hello<span class="user-name text-bold-700"> <?php echo $this->session->userdata('ufirstname'); ?> <?php echo $this->session->userdata('ulastname'); ?></span></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="#"><i class="ft-user"></i> Edit Profile</a>
              <a class="dropdown-item" href="#"><i class="ft-mail"></i> My Inbox</a>
              <?php if($this->session->userdata('login')){ ?>
              <div class="dropdown-divider"></div><a class="dropdown-item" href="<?php echo site_url('logout'); ?>"><i class="ft-power"></i> Logout</a>
              <?php } ?>
            </div>
          </li>
          <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-gb"></i><span class="selected-language"></span></a>
            <div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-gb"></i> English</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> Chinese</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-de"></i> German</a></div>
          </li>
          <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-bell"></i><span class="badge badge-pill badge-default badge-danger badge-default badge-up badge-glow">5</span></a>
            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
              <li class="dropdown-menu-header">
                <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span></h6><span class="notification-tag badge badge-default badge-danger float-right m-0">5 New</span>
              </li>
              <li class="scrollable-container media-list w-100"><a href="javascript:void(0)">
                  <div class="media">
                    <div class="media-left align-self-center"><i class="ft-plus-square icon-bg-circle bg-cyan"></i></div>
                    <div class="media-body">
                      <h6 class="media-heading">You have new order!</h6>
                      <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p><small>
                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">30 minutes ago</time></small>
                    </div>
                  </div></a><a href="javascript:void(0)">
                  <div class="media">
                    <div class="media-left align-self-center"><i class="ft-download-cloud icon-bg-circle bg-red bg-darken-1"></i></div>
                    <div class="media-body">
                      <h6 class="media-heading red darken-1">99% Server load</h6>
                      <p class="notification-text font-small-3 text-muted">Aliquam tincidunt mauris eu risus.</p><small>
                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Five hour ago</time></small>
                    </div>
                  </div></a><a href="javascript:void(0)">
                  <div class="media">
                    <div class="media-left align-self-center"><i class="ft-alert-triangle icon-bg-circle bg-yellow bg-darken-3"></i></div>
                    <div class="media-body">
                      <h6 class="media-heading yellow darken-3">Warning notifixation</h6>
                      <p class="notification-text font-small-3 text-muted">Vestibulum auctor dapibus neque.</p><small>
                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                    </div>
                  </div></a><a href="javascript:void(0)">
                  <div class="media">
                    <div class="media-left align-self-center"><i class="ft-check-circle icon-bg-circle bg-cyan"></i></div>
                    <div class="media-body">
                      <h6 class="media-heading">Complete the task</h6><small>
                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last week</time></small>
                    </div>
                  </div></a><a href="javascript:void(0)">
                  <div class="media">
                    <div class="media-left align-self-center"><i class="ft-file icon-bg-circle bg-teal"></i></div>
                    <div class="media-body">
                      <h6 class="media-heading">Generate monthly report</h6><small>
                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last month</time></small>
                    </div>
                  </div></a></li>
              <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all notifications</a></li>
            </ul>
          </li>
          <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-mail">             </i></a>
            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
              <li class="dropdown-menu-header">
                <h6 class="dropdown-header m-0"><span class="grey darken-2">Messages</span></h6><span class="notification-tag badge badge-default badge-warning float-right m-0">4 New</span>
              </li>
              <li class="scrollable-container media-list w-100"><a href="javascript:void(0)">
                  <div class="media">
                    <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="app-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><i></i></span></div>
                    <div class="media-body">
                      <h6 class="media-heading">Margaret Govan</h6>
                      <p class="notification-text font-small-3 text-muted">I like your portfolio, let's start.</p><small>
                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                    </div>
                  </div></a><a href="javascript:void(0)">
                  <div class="media">
                    <div class="media-left"><span class="avatar avatar-sm avatar-busy rounded-circle"><img src="app-assets/images/portrait/small/avatar-s-2.png" alt="avatar"><i></i></span></div>
                    <div class="media-body">
                      <h6 class="media-heading">Bret Lezama</h6>
                      <p class="notification-text font-small-3 text-muted">I have seen your work, there is</p><small>
                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Tuesday</time></small>
                    </div>
                  </div></a><a href="javascript:void(0)">
                  <div class="media">
                    <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="app-assets/images/portrait/small/avatar-s-3.png" alt="avatar"><i></i></span></div>
                    <div class="media-body">
                      <h6 class="media-heading">Carie Berra</h6>
                      <p class="notification-text font-small-3 text-muted">Can we have call in this week ?</p><small>
                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Friday</time></small>
                    </div>
                  </div></a><a href="javascript:void(0)">
                  <div class="media">
                    <div class="media-left"><span class="avatar avatar-sm avatar-away rounded-circle"><img src="app-assets/images/portrait/small/avatar-s-6.png" alt="avatar"><i></i></span></div>
                    <div class="media-body">
                      <h6 class="media-heading">Eric Alsobrook</h6>
                      <p class="notification-text font-small-3 text-muted">We have project party this saturday.</p><small>
                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">last month</time></small>
                    </div>
                  </div></a></li>
              <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all messages</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<!-- ////////////////////////////////////////////////////////////////////////////-->


<div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-fixed navbar-dark navbar-without-dd-arrow navbar-shadow" role="navigation" data-menu="menu-wrapper">
  <div class="navbar-container main-menu-content" data-menu="menu-container">
    <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('dashboard'); ?>">
          <i class="la la-bank"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <!--<li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="la la-edit"></i><span data-i18n="nav.accounts.main">Accounts</span><span class="badge badge badge-pill badge-success float-right mt-0">9</span></a>
        <ul class="dropdown-menu">
          <li data-menu=""><a class="dropdown-item" href="bank-accounts.html" data-toggle="dropdown">All Accounts</a>
          </li>
          <li data-menu=""><a class="dropdown-item" href="bank-add-account.html" data-toggle="dropdown">Add New</a>
          </li>
        </ul>
      </li>-->
      <li class="dropdown nav-item" data-menu="dropdown">
        <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">
          <i class="la la-credit-card"></i>
          <span data-i18n="nav.cards.main">Cards</span>
        </a>
        <ul class="dropdown-menu">
          <li data-menu=""><a class="dropdown-item" href="<?php echo site_url('dashboard/credit_card'); ?>" data-toggle="dropdown">Cards</a>
          </li>
          <!--<li data-menu=""><a class="dropdown-item" href="< ?php echo site_url('dashboard/add_credit_card'); ?>" data-toggle="dropdown">Add New</a>
          </li>-->
        </ul>
      </li>
      <li class="dropdown nav-item" data-menu="dropdown">
        <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">
          <i class="la la-dollar"></i>
          <span data-i18n="nav.payments.main">Payments</span>
        </a>
        <ul class="dropdown-menu">
          <li data-menu=""><a class="dropdown-item" href="<?php echo site_url('dashboard/payment'); ?>" data-toggle="dropdown">Payments</a>
          </li>
          <li data-menu=""><a class="dropdown-item" href="<?php echo site_url('dashboard/deposit_fund'); ?>" data-toggle="dropdown">Deposit Funds</a>
          </li>
          <li data-menu=""><a class="dropdown-item" href="<?php echo site_url('dashboard/withdraw_fund'); ?>" data-toggle="dropdown">Withdraw Funds</a>
          </li>
          <li data-menu=""><a class="dropdown-item" href="<?php echo site_url('dashboard/send_fund'); ?>" data-toggle="dropdown">Send Funds</a>
          </li>
        </ul>
      </li>
      <!--<li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="la la-money"></i><span data-i18n="nav.loan.main">Loan</span></a>
        <ul class="dropdown-menu">
          <li data-menu=""><a class="dropdown-item" href="bank-loan.html" data-toggle="dropdown">All Loan</a>
          </li>
          <li data-menu=""><a class="dropdown-item" href="bank-add-loan.html" data-toggle="dropdown">Add New</a>
          </li>
        </ul>
      </li>-->

    </ul>
  </div>
</div>
