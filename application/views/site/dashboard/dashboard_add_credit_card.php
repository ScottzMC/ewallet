<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <title>E-Wallet || Add New Credit/Debit Cards</title>
  </head>
  <body class="horizontal-layout horizontal-menu 2-columns   menu-expanded" data-open="hover" data-menu="horizontal-menu" data-col="2-columns">

    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title">New Card</h3>
            <div class="row breadcrumbs-top">
              <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard'); ?>">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Cards</a>
                  </li>
                  <li class="breadcrumb-item active">Add New Credit/Debit Card
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body"><!-- Form wizard with number tabs section start -->

<section id="add-card">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        Add New Card
                    </h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form action="#" id="commentForm">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="holdername">
                                            Card Holder Name
                                            <span class="danger">
                                                *
                                            </span>
                                        </label>
                                        <input class="form-control" id="holdername" name="hname" placeholder="Account Holder Name"
                                            type="text" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="cardnumber">
                                            Card Number
                                            <span class="danger">
                                                *
                                            </span>
                                        </label>
                                        <input class="form-control" id="cardnumber" name="cardno" placeholder="xxxx-xxxx-xxxx-1234"
                                            type="text" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!--<div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="limit">
                                            Credit Limit
                                            <span class="danger">
                                                *
                                            </span>
                                        </label>
                                        <input class="form-control" id="limit" name="creditlimit" placeholder="Credit Limit"
                                            required>
                                    </div>
                                </div>-->
                                <!--<div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="status">
                                            Card Status<span class="danger">
                                                *
                                            </span>
                                        </label>
                                        <select class="c-select form-control" id="status" name="card-status">
                                            <option value="Active">
                                                Active
                                            </option>
                                            <option value="Deactived">
                                                Deactived
                                            </option>
                                            <option value="Delayed">
                                                Delayed
                                            </option>
                                            <option value="Surrendered">
                                                Surrendered
                                            </option>
                                        </select>
                                    </div>
                                </div>-->
                            </div>
                            <div class="row">
                                <!--<div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="type">
                                            Card Type
                                        </label>
                                        <select class="c-select form-control" id="type" name="card-type">
                                            <option value="Debit">Debit</option>
                                            <option value="Credit">Credit</option>
                                            <option value="Gold">Gold</option>
                                            <option value="Platinum">Platinum</option>
                                        </select>
                                    </div>
                                </div>-->
                                <!--<div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="ac-no">
                                            A/c No.
                                        </label>
                                        <input class="form-control" id="ac-no" name="ac-no" placeholder="Account No.">
                                    </div>
                                </div>-->
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <div>
                        <input type="submit" value="Submit" class="btn btn-success mr-1">
                        <input type="reset" value="Cancel" class="btn btn-danger">
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
