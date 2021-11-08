<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <title>E-Wallet || View All Payments</title>
  </head>
  <body class="horizontal-layout horizontal-menu 2-columns   menu-expanded" data-open="hover" data-menu="horizontal-menu" data-col="2-columns">

    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title">Payments</h3>
            <div class="row breadcrumbs-top">
              <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard'); ?>">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Payments</a>
                  </li>
                  <li class="breadcrumb-item active">Payments Status
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body"><section id="payments-details">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title float-left">
                        Payment Status
                    </h4>
                    <div class="float-right">
                        <a class="btn btn-sm btn-success box-shadow-2 round btn-min-width pull-right white" href="<?php echo site_url('dashboard/deposit_fund'); ?>">
                            <i class="ft-plus white"></i>Deposit
                        </a>
                        <a class="btn btn-sm btn-danger box-shadow-2 round btn-min-width pull-right white" href="<?php echo site_url('dashboard/withdraw_fund'); ?>">
                            <i class="ft-minus white"></i>Withdraw
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Deposit Transactions -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title float-left">
                        Pending Deposit Transactions
                    </h4>

                </div>
                <div class="card-body mt-1 table-wrapper">
                    <div class="table-responsive">
                        <table class="table alt-pagination pending-payment">
                            <thead>
                                <tr>
                                    <!--<th class="border-top-0">Account No.</th>-->
                                    <th class="border-top-0">Invoice ID</th>
                                    <th class="border-top-0">Receiver Email</th>
                                    <th class="border-top-0">Card Number</th>
                                    <th class="border-top-0">Amount (&#8358;)</th>
                                    <th class="border-top-0">Date</th>
                                    <th class="border-top-0">Type</th>
                                    <th class="border-top-0">Action</th>
                                </tr>
                            </thead>
                            <?php
                            function mask_cc($cc, $mask_char='*'){
                              $cc = preg_replace('([^0-9])', '', $cc);
                              $last = substr($cc,-4);
                              return str_pad($last, 16, $mask_char, STR_PAD_LEFT);
                            }

                            ?>
                            <tbody>
                              <?php if(!empty($pending_deposit_payment)){ foreach($pending_deposit_payment as $pend_dep){ ?>
                                <tr>
                                    <td><?php echo $pend_dep->invoice_id; ?></td>
                                    <td><?php echo $pend_dep->receiver_email; ?></td>
                                    <td class="ac-no"><?php echo mask_cc($pend_dep->card_number); ?></td>
                                    <td class="amount"><?php echo number_format($pend_dep->amount); ?></td>
                                    <td class="trans-date"><?php echo date('j M Y', strtotime($pend_dep->created_date)); ?></td>
                                    <td>
                                        <span class="tran-type badge badge-danger badge-pill badge-sm"><?php echo $pend_dep->transaction_status; ?></span>
                                    </td>
                                    <td class="action">
                                        <a href="<?php echo site_url('dashboard/deposit_invoice/'.$pend_dep->invoice_id); ?>"><i class="la la-pencil-square success"></i></a>
                                    </td>
                                </tr>
                              <?php } }else{ echo ''; } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Deposit Transactions -->

    <!-- Withdraw Transactions -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title float-left">
                        Pending Withdraw Transactions
                    </h4>

                </div>
                <div class="card-body mt-1 table-wrapper">
                    <div class="table-responsive">
                        <table class="table alt-pagination pending-payment">
                            <thead>
                                <tr>
                                    <!--<th class="border-top-0">Account No.</th>-->
                                    <th class="border-top-0">Invoice ID</th>
                                    <th class="border-top-0">Receiver Email</th>
                                    <th class="border-top-0">Card Number</th>
                                    <th class="border-top-0">Amount (&#8358;)</th>
                                    <th class="border-top-0">Date</th>
                                    <th class="border-top-0">Type</th>
                                    <th class="border-top-0">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                              <?php if(!empty($pending_withdraw_payment)){ foreach($pending_payment as $pend_wit){ ?>
                                <tr>
                                    <td><?php echo $pend_wit->invoice_id; ?></td>
                                    <td><?php echo $pend_wit->receiver_email; ?></td>
                                    <td class="ac-no"><?php echo mask_cc($pend_wit->card_number); ?></td>
                                    <td class="amount"><?php echo number_format($pend_wit->amount); ?></td>
                                    <td class="trans-date"><?php echo date('j M Y', strtotime($pend_wit->created_date)); ?></td>
                                    <td>
                                        <span class="tran-type badge badge-danger badge-pill badge-sm"><?php echo $pend_wit->transaction_status; ?></span>
                                    </td>
                                    <td class="action">
                                        <a href="<?php echo site_url('dashboard/withdraw_invoice/'.$pend_wit->invoice_id); ?>"><i class="la la-pencil-square success"></i></a>
                                    </td>
                                </tr>
                              <?php } }else{ echo ''; } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Withdraw Transactions -->

    <!-- Send Transactions -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title float-left">
                        Pending Send Transactions
                    </h4>

                </div>
                <div class="card-body mt-1 table-wrapper">
                    <div class="table-responsive">
                        <table class="table alt-pagination pending-payment">
                            <thead>
                                <tr>
                                    <!--<th class="border-top-0">Account No.</th>-->
                                    <th class="border-top-0">Invoice ID</th>
                                    <th class="border-top-0">Receiver Email</th>
                                    <th class="border-top-0">Card Number</th>
                                    <th class="border-top-0">Amount (&#8358;)</th>
                                    <th class="border-top-0">Date</th>
                                    <th class="border-top-0">Type</th>
                                    <th class="border-top-0">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                              <?php if(!empty($pending_send_payment)){ foreach($pending_send_payment as $pend_send){ ?>
                                <tr>
                                    <td><?php echo $pend_send->invoice_id; ?></td>
                                    <td><?php echo $pend_send->receiver_email; ?></td>
                                    <td class="ac-no"><?php echo mask_cc($pend_send->card_number); ?></td>
                                    <td class="amount"><?php echo number_format($pend_send->amount); ?></td>
                                    <td class="trans-date"><?php echo date('j M Y', strtotime($pend_send->created_date)); ?></td>
                                    <td>
                                        <span class="tran-type badge badge-danger badge-pill badge-sm"><?php echo $pend_send->transaction_status; ?></span>
                                    </td>
                                    <td class="action">
                                        <a href="<?php echo site_url('dashboard/send_invoice/'.$pend_send->invoice_id); ?>"><i class="la la-pencil-square success"></i></a>
                                    </td>
                                </tr>
                              <?php } }else{ echo ''; } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Send Transactions -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title float-left">
                        Completed Transactions
                    </h4>
                </div>
                <div class="card-body mt-1 table-wrapper">
                    <div class="table-responsive">
                        <table class="table alt-pagination completed-payment">
                            <thead>
                                <tr>
                                    <!--<th class="border-top-0">Account No.</th>-->
                                    <th class="border-top-0">Invoice ID</th>
                                    <th class="border-top-0">Receiver Email</th>
                                    <th class="border-top-0">Card Number</th>
                                    <th class="border-top-0">Amount (&#8358;)</th>
                                    <th class="border-top-0">Date</th>
                                    <th class="border-top-0">Type</th>
                                    <th class="border-top-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php if(!empty($completed_payment)){ foreach($completed_payment as $compl_pay){ ?>
                                <tr>
                                    <td><?php echo $compl_pay->invoice_id; ?></td>
                                    <td><?php echo $compl_pay->receiver_email; ?></td>
                                    <td class="ac-no"><?php echo mask_cc($compl_pay->card_number); ?></td>
                                    <td class="amount"><?php echo number_format($compl_pay->amount); ?></td>
                                    <td class="trans-date"><?php echo date('j M Y', strtotime($compl_pay->created_date)); ?></td>
                                    <td>
                                        <span class="tran-type badge badge-success badge-pill badge-sm"><?php echo $compl_pay->transaction_status; ?></span>
                                    </td>
                                    <td class="action">
                                        <a href="<?php echo site_url('dashboard/deposit_invoice/'.$compl_pay->invoice_id); ?>"><i class="la la-pencil-square success"></i></a>
                                    </td>
                                </tr>
                              <?php } }else{ echo ''; } ?>
                            </tbody>
                        </table>
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
