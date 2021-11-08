<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <title>E-Wallet || Invoice</title>
</head>
<body class="horizontal-layout horizontal-menu horizontal-menu-padding 2-columns   menu-expanded"
data-open="click" data-menu="horizontal-menu" data-col="2-columns">

  <div class="app-content container center-layout mt-2">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard'); ?>">Home</a>
                </li>
                <li class="breadcrumb-item active">Invoice
                </li>
              </ol>
            </div>
          </div>
          <h3 class="content-header-title mb-0">Invoice</h3>
        </div>

      </div>
      <div class="content-body">
        <section class="card">
          <div id="invoice-template" class="card-body">
            <!-- Invoice Company Details -->
            <div id="invoice-company-details" class="row">
              <div class="col-md-6 col-sm-12 text-center text-md-left">
                <div class="media">
                  <img src="<?php echo base_url('app-assets/images/logo/logo-80x80.png'); ?>" alt="company logo" class=""
                  />
                  <div class="media-body">
                    <ul class="ml-2 px-0 list-unstyled">
                      <li class="text-bold-800">Modern Creative Studio</li>
                      <li>4025 Oak Avenue,</li>
                      <li>Melbourne,</li>
                      <li>Florida 32940,</li>
                      <li>USA</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-12 text-center text-md-right">
                <h2>INVOICE</h2>
                <!--<p class="pb-3"># INV-001001</p>
                <ul class="px-0 list-unstyled">
                  <li>Balance Due</li>
                  <li class="lead text-bold-800">$ 12,000.00</li>
                </ul>-->
              </div>
            </div>
            <!--/ Invoice Company Details -->
            <!-- Invoice Customer Details -->
            <div id="invoice-customer-details" class="row pt-2">
              <div class="col-sm-12 text-center text-md-left">
                <p class="text-muted">Bill To</p>
              </div>
              <div class="col-md-6 col-sm-12 text-center text-md-left">
                <ul class="px-0 list-unstyled">
                  <li class="text-bold-800">Mr. Bret Lezama</li>
                  <li>4879 Westfall Avenue,</li>
                  <li>Albuquerque,</li>
                  <li>New Mexico-87102.</li>
                </ul>
              </div>
              <?php foreach($pending_invoice as $pend_inv){} ?>
              <div class="col-md-6 col-sm-12 text-center text-md-right">
                <p>
                  <span class="text-muted">Invoice Date :</span> <?php echo date('j M Y', strtotime($pend_inv->created_date)); ?></p>
                <p>
                <p>
                  <span class="text-muted">Invoice ID :</span> <?php echo $pend_inv->invoice_id; ?>
                </p>
                  <span class="text-muted">Terms :</span> Due on Receipt</p>
                <p>
              </div>
            </div>
            <!--/ Invoice Customer Details -->
            <!-- Invoice Items Details -->
            <div id="invoice-items-details" class="pt-2">
              <div class="row">
                <div class="table-responsive col-sm-12">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Receiver Email</th>
                        <th>Amount</th>
                        <th class="text-right">Transaction Charge</th>
                        <!--<th class="text-right">Transaction Status</th>-->
                        <th class="text-right">Total Amount</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if(!empty($pending_invoice)){ foreach($pending_invoice as $pend_inv){} ?>
                      <tr>
                        <td><?php echo $pend_inv->receiver_email; ?></td>
                        <td>
                          <p>&#8358; <?php echo number_format($pend_inv->amount); ?></p>
                        </td>
                        <td class="text-right">&#8358; <?php echo number_format($pend_inv->transaction_charge); ?></td>
                        <!--<td class="text-right">< ?php echo $pend_inv->transaction_status; ?></td>-->
                        <td class="text-right">&#8358; <?php echo number_format($pend_inv->amount + $pend_inv->transaction_charge); ?></td>
                      </tr>
                    <?php }else{ echo ''; } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- Invoice Footer -->
            <div id="invoice-footer">
              <div class="row">
                <div class="col-md-7 col-sm-12">
                  <h6>Terms & Condition</h6>
                  <p>You know, being a test pilot isn't always the healthiest business
                    in the world. We predict too much for the next year and yet far
                    too little for the next 10.</p>
                </div>
                <div class="col-md-5 col-sm-12 text-center">
                  <form action="<?php echo base_url('dashboard/deposit_invoice/'.$pend_inv->invoice_id); ?>" id="paystack-card-form" method="post">
                    <input type="hidden" name="invoice_id" value="<?php echo $pend_inv->invoice_id; ?>">
                    <input type="hidden" name="amount" value="<?php echo $pend_inv->amount; ?>">
                    <button type="submit" name="cancelBtn" class="btn btn-danger btn-lg my-1"><i class="la la-paper-plane-o"></i> Cancel</button>
                    <button type="submit" name="depositBtn" class="btn btn-success btn-lg my-1"><i class="la la-paper-plane-o"></i> Deposit</button>
                  </form>
                </div>
              </div>
            </div>
            <!--/ Invoice Footer -->
          </div>
        </section>
      </div>
    </div>
  </div>

</body>
</html>
