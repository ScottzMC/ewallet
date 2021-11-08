<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <title>E-Wallet || Deposit Funds Payments</title>
  </head>
  <body class="horizontal-layout horizontal-menu 2-columns   menu-expanded" data-open="hover" data-menu="horizontal-menu" data-col="2-columns">

    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title">Add Payment</h3>
            <div class="row breadcrumbs-top">
              <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard'); ?>">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard/payment'); ?>">Payments</a>
                  </li>
                  <li class="breadcrumb-item active">Deposit Funds
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body"><!-- Form wizard with number tabs section start -->

<section>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        Deposit Funds
                    </h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form action="<?php echo base_url('dashboard/deposit_fund'); ?>" method="post" id="paystack-card-form" class="card-form">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label for="amount">
                                            Amount
                                            <span class="danger">
                                                *
                                            </span>
                                        </label>
                                        <input class="form-control" id="amount" name="amount" placeholder="Enter Amount" type="text">
                                        <small style="font-size: 12px; color: red;">&#8358; Default Currency is Naira</small>
                                    </div>
                                    <span class="text-danger" style="color: red;"><?php echo form_error('amount'); ?></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="trans-type">
                                            Select Card
                                            <span class="danger">
                                                *
                                            </span>
                                        </label>
                                        <?php
                                        function mask_cc($cc, $mask_char='*'){
                                          $cc = preg_replace('([^0-9])', '', $cc);
                                          $last = substr($cc,-4);
                                          return str_pad($last, 16, $mask_char, STR_PAD_LEFT);
                                        }

                                        ?>
                                        <div class="form-group">
                                            <select class="form-control" id="card_number" name="card_number" data-paystack="number" onchange="change_card(card_number, cvc, card_month, card_year)">
                                                <option>-- Select Card --</option>
                                                <?php if(!empty($all_user_card)){ foreach($all_user_card as $all_card){ ?>
                                                  <option value="<?php echo $all_card->card_number; ?>">
                                                    <?php echo mask_cc($all_card->card_number); ?>
                                                  </option>
                                                <?php } }else{ echo ''; } ?>
                                            </select>
                                        </div>
                                        <span class="text-danger" style="color: red;"><?php echo form_error('card_number'); ?></span>
                                    </div>
                                </div>
                            </div>

                            <!--<div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label for="amount">
                                            CVC
                                            <span class="danger">
                                                *
                                            </span>
                                        </label>
                                        <select id="cvc" name="cvc" data-paystack="cvv" class="form-control" data-placeholder="Choose a Card CVC" tabindex="1">
                                          <option>Select</option>
                                          <option value="< ?php echo $all_card->card_cvc; ?>">< ?php echo $all_card->card_cvc; ?></option>
                                        </select>
                                      </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label for="amount">
                                            Card Month
                                            <span class="danger">
                                                *
                                            </span>
                                        </label>
                                        <select id="card_month" name="card_month" data-paystack="expiryMonth" class="form-control" data-placeholder="Choose a Card Month" tabindex="1">
                                          <option>Select</option>
                                          <option value="< ?php echo $all_card->card_month; ?>">< ?php echo $all_card->card_month; ?></option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label for="amount">
                                            Card Year
                                            <span class="danger">
                                                *
                                            </span>
                                        </label>
                                        <select id="card_year" name="card_year" data-paystack="expiryYear" class="form-control" data-placeholder="Choose a Card Year" tabindex="1">
                                          <option>Select</option>
                                          <option value="< ?php echo $all_card->card_year; ?>">< ?php echo $all_card->card_year; ?></option>
                                        </select>
                                    </div>
                                </div>
                            </div>-->

                            <div class="card-footer text-right">
                                <button type="submit" name="depositBtn" class="btn btn-success mr-1">Process</button>
                            </div>
                        </form>
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
