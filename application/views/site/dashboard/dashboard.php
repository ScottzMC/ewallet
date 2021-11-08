<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <title>E-Wallet || Welcome to Dashboard</title>
  </head>

  <body class="horizontal-layout horizontal-menu 2-columns   menu-expanded" data-open="hover" data-menu="horizontal-menu" data-col="2-columns">

    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- Bank Stats -->
          <?php foreach($account_balance as $acct_bal){} ?>
<section id="bank-cards">
    <div class="row match-height">
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
            <div class="card bank-card pull-up">
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5 text-left">
                                <h3 class="mb-0">&#8358; <?php echo number_format($acct_bal->acct_balance); ?></h3>
                                <h4 class="warning mt-1 text-bold-500">NAIRA</h4>
                            </div>
                            <div class="col-7">
                                <div class="float-right">
                                    <canvas id="gold-chart" class="height-75"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
            <div class="card bank-card pull-up">
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5 text-left">
                                <h3 class="mb-0">&pound; <?php echo number_format($acct_bal->acct_balance/440); ?></h3>
                                <h4 class="info mt-1 text-bold-500">GBP</h4>
                            </div>
                            <div class="col-7">
                                <div class="float-right">
                                    <canvas id="silver-chart" class="height-75"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
            <div class="card bank-card pull-up">
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5 text-left">
                                <h3 class="mb-0">&dollar; <?php echo number_format($acct_bal->acct_balance/361); ?></h3>
                                <h4 class="danger mt-1 text-bold-500">USD</h4>
                            </div>
                            <div class="col-7">
                                <div class="float-right">
                                    <canvas id="euro-chart" class="height-75"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
            <div class="card bank-card pull-up">
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5 text-left">
                                <h3 class="mb-0"><?php echo number_format($acct_bal->acct_balance/1242081); ?></h3>
                                <h4 class="success mt-1 text-bold-500">Bitcoin</h4>
                            </div>
                            <div class="col-7">
                                <div class="float-right">
                                    <canvas id="bitcoin-chart" class="height-75"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row match-height">
        <div class="col-xl-9 col-lg-12">
            <div class="card">
                <div class="card-content">
                    <div class="row">
                        <div class="col-lg-9 col-md-12">
                            <div class="card card-shadow">
                                <div class="card-header card-header-transparent">
                                    <h4 class="card-title">Transaction Reports</h4>
                                    <ul class="nav nav-pills nav-pills-rounded chart-action float-right btn-group" role="group">
                                        <li class="nav-item"><a class="active nav-link" data-toggle="tab" href="#scoreLineToDay">Day</a></li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#scoreLineToWeek">Week</a></li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#scoreLineToMonth">Month</a></li>
                                    </ul>
                                </div>
                                <div class="widget-content tab-content bg-white p-20">
                                    <div class="ct-chart tab-pane active scoreLineShadow" id="scoreLineToDay"></div>
                                    <div class="ct-chart tab-pane scoreLineShadow" id="scoreLineToWeek"></div>
                                    <div class="ct-chart tab-pane scoreLineShadow" id="scoreLineToMonth"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12 px-3 pl-xl-0">
                            <div class="chart-stats text-center my-3">
                                <div class="card bg-gradient-directional-primary">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="media d-flex">
                                                <div class="media-body text-white text-left">
                                                    <h3 class="text-white">$15,320</h3>
                                                    <span>Transaction</span>
                                                </div>
                                                <div class="percentage">
                                                    <span>63%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card bg-gradient-directional-warning">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="media d-flex">
                                                <div class="media-body text-white text-left">
                                                    <h3 class="text-white">156</h3>
                                                    <span>New Clients</span>
                                                </div>
                                                <div class="percentage">
                                                    <span>54%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card bg-gradient-directional-cyan">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="media d-flex">
                                                <div class="media-body text-white text-left">
                                                    <h3 class="text-white">278</h3>
                                                    <span>New Projects</span>
                                                </div>
                                                <div class="percentage">
                                                    <span>71%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-4">
            <div class="card bg-gradient-directional-danger">
                <div class="card-content bg-hexagons-danger">
                    <div class="card-body bg-hexagons-danger">
                        <h4 class="card-title white">Target Ratio</h4>
                        <div class="chartjs">
                            <canvas id="target-doughnut" height="275"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-5 col-lg-8 col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Calendar</h4>
                </div>
                <div class="card-content">
                    <div id="bank-calendar" class="overflow-hidden bg-grey bg-lighten-3"></div>
                </div>
            </div>
            <div id="clndr" class="clearfix">
                <script type="text/template" id="bank-calendar-template">
                    <div class="clndr-controls">
                        <div class="clndr-previous-button">&lt;</div>
                        <div class="clndr-next-button">&gt;</div>
                        <div class="current-month">
                            <%= month %>
                            <%= year %>
                        </div>

                    </div>
                    <div class="clndr-grid">
                        <div class="days-of-the-week clearfix">
                            <% _.each(daysOfTheWeek, function(day) { %>
                                <div class="header-day">
                                    <%= day %>
                                </div>
                            <% }); %>
                        </div>
                        <div class="days">
                            <% _.each(days, function(day) { %>
                                <div class="<%= day.classes %>" id="<%= day.id %>"><span class="day-number"><%= day.day %></span></div>
                            <% }); %>
                        </div>
                    </div>
                    <div class="event-listing">
                        <div class="event-listing-title">Event this month</div>
                        <% _.each(eventsThisMonth, function(event) { %>
                            <div class="event-item font-small-3">
                                <div class="event-item-day font-small-2">
                                    <%= event.date %>
                                </div>
                                <div class="event-item-name text-bold-600">
                                    <%= event.title %>
                                </div>
                                <div class="event-item-location">
                                    <%= event.location %>
                                </div>
                            </div>
                        <% }); %>
                    </div>
                </script>
            </div>
        </div>
        <div class="col-xl-7 col-lg-12 col-md-12">
            <div class="card recent-loan">
                <div class="card-header">
                    <h4 class="text-center">Payments</h4>
                </div>
                <div class="card-content">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="border-top-0"></th>
                                    <th class="border-top-0">Amount</th>
                                    <th class="border-top-0">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="avatar avatar-sm">
                                          <img class="rounded-circle" src="<?php echo base_url('app-assets/images/portrait/small/avatar-s-1.png'); ?>" alt="Avatar">
                                        </div>
                                    </td>
                                    <td class="text-truncate">
                                        <i class="ft-arrow-down-left success"></i> $20000
                                        <div class="font-small-2 text-light">
                                            <i class="font-small-2 ft-map-pin"></i> S.G.road,UK
                                        </div>
                                    </td>
                                    <td class="text-truncate">4:59p.m</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="avatar avatar-sm">
                                            <img class="rounded-circle" src="<?php echo base_url('app-assets/images/portrait/small/avatar-s-1.png'); ?>" alt="Avatar">
                                        </div>
                                    </td>
                                    <td class="text-truncate">
                                        <i class="ft-arrow-up-right danger"></i> $500
                                        <div class="font-small-2 text-light">
                                            <i class="font-small-2 ft-map-pin"></i> P.stone,UK
                                        </div>
                                    </td>
                                    <td class="text-truncate">2:01p.m</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add Card</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-12 mb-3">
                                <div class='card-wrapper'></div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12">
                                <form action="<?php echo base_url('dashboard'); ?>" method="post" id="paymentForm" class="card-form">
                                    <fieldset class="mb-1">
                                        <div class="form-group">
                                            <input type="text" class="form-control card-number" name="number" id="card-number"
                                                maxlength="19" placeholder="Card Number">
                                            <h6 style="color: red;">We Accept only Amex, Dankort, Discover, MasterCard, Visa, Visa Electron and Maestro</h6>
                                        </div>
                                        <span class="text-danger" style="color: red;"><?php echo form_error('number'); ?></span>
                                    </fieldset>

                                    <fieldset class="mb-1">
                                        <div class="form-group">
                                            <input type="text" class="form-control card-name" name="name" id="card-name"
                                                placeholder="Card Holder Name">
                                        </div>
                                        <span class="text-danger" style="color: red;"><?php echo form_error('name'); ?></span>
                                    </fieldset>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <fieldset class="mb-1">
                                                <div class="form-group">
                                                    <input type="text" class="form-control card-expiry" name="expiry"
                                                        id="card-expiry_month" placeholder="Card Expiry" maxlength="8">
                                                </div>
                                                <span class="text-danger" style="color: red;"><?php echo form_error('expiry'); ?></span>
                                            </fieldset>
                                        </div>
                                        <!--<div class="col-md-6">
                                            <fieldset class="mb-1">
                                                <div class="form-group">
                                                    <input type="text" class="form-control card-expiry" name="card_expiry_year"
                                                        id="card-expiry_year" placeholder="2019" maxlength="4">
                                                </div>
                                                <span class="text-danger" style="color: red;">< ?php echo form_error('card_expiry_year'); ?></span>
                                            </fieldset>
                                        </div>-->
                                        <div class="col-md-6">
                                            <fieldset class="mb-1">
                                                <div class="form-group">
                                                    <input type="text" class="form-control card-cvc" name="cvc" id="card-cvc"
                                                        maxlength="3" placeholder="Card CVC Number">
                                                </div>
                                                <span class="text-danger" style="color: red;"><?php echo form_error('cvc'); ?></span>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <button type="submit" name="addCardBtn" class="btn round btn-primary box-shadow-1 px-3 mr-1">Add Card</button>
                                        </div>
                                    </div>
                                </form>
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
            </div>
        </div>
    </div>
</section>
        </div>
      </div>
    </div>

  </body>
</html>
