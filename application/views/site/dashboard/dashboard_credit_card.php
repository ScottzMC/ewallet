<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <title>E-Wallet || View all Credit/Debit Cards</title>
  </head>
  <body class="horizontal-layout horizontal-menu 2-columns   menu-expanded" data-open="hover" data-menu="horizontal-menu" data-col="2-columns">

    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title">Cards List</h3>
            <div class="row breadcrumbs-top">
              <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard'); ?>">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item active">View my Credit/Debit Cards
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body"><!-- Base style table -->

<section id="base-style">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body mt-1">
					<div class="table-responsive">
						<table id="active-accounts" class="table alt-pagination card-wrapper">
							<thead>
								<tr>
									<th class="border-top-0"></th>
									<th class="border-top-0">Card No.</th>
									<th class="border-top-0">Holder Name</th>
									<th class="border-top-0">Expiry Date</th>
									<!--<th class="border-top-0">Credit Limit</th>-->
									<th class="border-top-0">Status</th>
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
                <?php if(!empty($all_user_card)){ foreach($all_user_card as $all_card){ ?>
								<tr>
									<td>
										<div class="card-icon"><i class="la la-credit-card text-light"></i></div>
									</td>
									<td>
										<div class="card-no"><?php echo mask_cc($all_card->card_number); ?></div>
									</td>
									<td>
										<div class="holder-name"><?php echo $all_card->card_name; ?></div>
									</td>
									<td>
										<div class="exp-date"><?php echo $all_card->card_expiry; ?></div>
									</td>
									<!--<td class="limit">9,000</td>-->
									<td>
										<div class="status badge badge-success badge-pill badge-sm">Active</div>
									</td>
									<td>
										<div class="action">
											<a href="#"><i class="la la-pencil-square success"></i></a>
											<a href="#"><i class="la la-trash danger"></i></a>
										</div>
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
