<?php
ini_set("display_errors", "1");
session_start();
require_once "../classes/Utilities.php";
require_once "../classes/Account.php";
require_once "../classes/Loan.php";

// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

$activeUser = ($_SESSION['useronline']);

// All pages needed
$firstname = $activeUser['firstName'];
$lastname = $activeUser['lastName'];
$fullname = $firstname . ' ' . $lastname;
$userId = $activeUser['id'];

$getAcct = new Account;
$userAccount = $getAcct->getAccount($userId);

// echo "<pre>";
// print_r($userAccount);
// echo "</pre>";

$accountNumber = $userAccount['account_number'];
$accountType = $userAccount['account_type'];
$accountStatus = $userAccount['status'];
$accountLevel = $userAccount['Level'];

// loans
$loan = new Loan;
$bloans = $loan->facilityLoans($accountNumber);
$mortgage = $loan->mortgageLoans($accountNumber);
$mycashloans = $loan->cashLoans($accountNumber);

// Balances

$cbalance = $mycashloans['available_credit'];
$fbalance = $bloans['facility_limit'];
$mbalance = $mortgage['mortgage_balance'];

$balSum = $cbalance + $fbalance + $mbalance;

$balSum = '$' .  Utilities::convertToCurrency($balSum);

$payment = '$' . Utilities::convertToCurrency($mortgage['monthly_payment']);

// print_r($balSum);
// $activeloans = array_merge($bloans, $mortgage, $mycashloans);
// print_r($activeloans);

?>
<?php

require_once "../partials/hstart.php";

?>
<title>Banker's | Active Loans</title>
<?php require_once "../partials/hbottom.php" ?>
<!-- Dashboards -->
<?php require_once "../partials/inactivedash.php"; ?>
<!-- Transactions -->
<?php require_once "../partials/inactivetransaction.php"; ?>
<!-- Loans and Mortgages -->
<?php require_once "../partials/activeloans1.php"; ?>
<!-- card -->
<?php require_once "../partials/inactivecard.php"; ?>
<!-- Account -->
<?php require_once "../partials/inactiveaccount.php"; ?>
<!-- Settings -->
<?php require_once "../partials/inactivesettings.php"; ?>
<!-- Support -->
<?php require_once "../partials/inactivesupport.php"; ?>
<!-- / Menu -->

<!-- Layout container -->
<div class="layout-page">
  <!-- Navbar -->
  <?php require_once "../partials/menunav.php"; ?>
  <!-- / Navbar -->

  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.html">Overview</a>
          </li>
          <li class="breadcrumb-item">
            <a href="javascript:void(0);">Payments</a>
          </li>
          <li class="breadcrumb-item active">Active Loans</li>
        </ol>
      </nav>
      <div class="row">
        <div class="col-md-6">
          <div class="col-lg-12 col-md-12 order-1">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-6 mb-4">
                <div class="card">
                  <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                      <div class="avatar flex-shrink-0">
                        <img src="../assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded" />
                      </div>
                      <div class="dropdown">
                        <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                          <a class="dropdown-item" href="javascript:void(0);">Make Payment</a>
                          <a class="dropdown-item" href="javascript:void(0);">View Details</a>
                        </div>
                      </div>
                    </div>
                    <span class="fw-medium d-block mb-1">Total Loan Balance</span>
                    <h3 class="card-title mb-2"><?php echo $balSum; ?></h3>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-6 mb-4">
                <div class="card">
                  <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                      <div class="avatar flex-shrink-0">
                        <img src="../assets/img/icons/unicons/wallet-info.png" alt="Credit Card" class="rounded" />
                      </div>
                      <div class="dropdown">
                        <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                          <a class="dropdown-item" href="javascript:void(0);">View Statement</a>
                          <a class="dropdown-item" href="javascript:void(0);">Payment History</a>
                        </div>
                      </div>
                    </div>
                    <span>Next Payment Due</span>
                    <h3 class="card-title text-nowrap text-danger mb-1"><?php echo $payment; ?></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-12 col-lg-12 order-3 order-md-2">
            <div class="row">
              <div class="col-6 mb-4">
                <div class="card">
                  <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                      <div class="avatar flex-shrink-0">
                        <img src="../assets/img/icons/unicons/cc-primary.png" alt="Credit Card" class="rounded" />
                      </div>
                      <div class="dropdown">
                        <button class="btn p-0" type="button" id="cardOpt1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="cardOpt1">
                          <a class="dropdown-item" href="javascript:void(0);">View Details</a>
                          <a class="dropdown-item" href="javascript:void(0);">Refinance</a>
                        </div>
                      </div>
                    </div>
                    <span class="fw-medium d-block mb-1">Interest Rate</span>
                    <h3 class="card-title mb-2">4.5%</h3>
                  </div>
                </div>
              </div>
              <div class="col-6 mb-4">
                <div class="card">
                  <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                      <div class="avatar flex-shrink-0">
                        <img src="../assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded" />
                      </div>
                      <div class="dropdown">
                        <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                          <a class="dropdown-item" href="javascript:void(0);">View Schedule</a>
                          <a class="dropdown-item" href="javascript:void(0);">Modify Terms</a>
                        </div>
                      </div>
                    </div>
                    <span class="d-block mb-1">Loan Term</span>
                    <h3 class="card-title text-nowrap mb-2">15 Years</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Active Loans -->
        <div class="col-md-6">
          <div class="col-md-12 col-lg-12 order-2 mb-4">
            <div class="card h-100">
              <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 me-2">Active Loans</h5>
                <div class="dropdown">
                  <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                    <a class="dropdown-item" href="javascript:void(0);">Sort by Amount</a>
                    <a class="dropdown-item" href="javascript:void(0);">Sort by Date</a>
                    <a class="dropdown-item" href="javascript:void(0);">Sort by Type</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <ul class="p-0 m-0 list-group">
                  <li class="d-flex mb-4 pb-1 list-group-item">
                    <div class="avatar flex-shrink-0 me-3">
                      <img src="../assets/img/icons/unicons/home.png" alt="Home Loan" class="rounded" />
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <small class="text-muted d-block mb-1">Home Loan</small>
                        <h6 class="mb-0">Mortgage</h6>
                      </div>
                      <div class="user-progress d-flex align-items-center gap-1">
                        <h6 class="mb-0">$250,000</h6>
                        <span class="text-muted">USD</span>
                        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#loanDetail">
                          Details
                        </button>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex mb-4 pb-1 list-group-item">
                    <div class="avatar flex-shrink-0 me-3">
                      <img src="../assets/img/icons/unicons/home.png" alt="Home Loan" class="rounded" />
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <small class="text-muted d-block mb-1">Auto Loan</small>
                        <h6 class="mb-0">Vehicle Finance</h6>
                      </div>
                      <div class="user-progress d-flex align-items-center gap-1">
                        <h6 class="mb-0">$35,000</h6>
                        <span class="text-muted">USD</span>
                        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#loanDetail">
                          Details
                        </button>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex mb-4 pb-1 list-group-item">
                    <div class="avatar flex-shrink-0 me-3">
                      <img src="../assets/img/icons/unicons/chart.png" alt="Personal Loan" class="rounded" />
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <small class="text-muted d-block mb-1">Personal Loan</small>
                        <h6 class="mb-0">Debt Consolidate</h6>
                      </div>
                      <div class="user-progress d-flex align-items-center gap-1">
                        <h6 class="mb-0">$15,000</h6>
                        <span class="text-muted">USD</span>
                        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#loanDetail">
                          Details
                        </button>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex mb-4 pb-1 list-group-item">
                    <div class="avatar flex-shrink-0 me-3">
                      <img src="../assets/img/icons/unicons/cc-success.png" alt="Business Loan" class="rounded" />
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <small class="text-muted d-block mb-1">Business Loan</small>
                        <h6 class="mb-0">Equipment</h6>
                      </div>
                      <div class="user-progress d-flex align-items-center gap-1">
                        <h6 class="mb-0">$75,000</h6>
                        <span class="text-muted">USD</span>
                        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#loanDetail">
                          Details
                        </button>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex mb-4 pb-1 list-group-item">
                    <div class="avatar flex-shrink-0 me-3">
                      <img src="../assets/img/icons/unicons/wallet.png" alt="Education Loan" class="rounded" />
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <small class="text-muted d-block mb-1">Education Loan</small>
                        <h6 class="mb-0">Student Finance</h6>
                      </div>
                      <div class="user-progress d-flex align-items-center gap-1">
                        <h6 class="mb-0">$50,000</h6>
                        <span class="text-muted">USD</span>
                        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#loanDetail">
                          Details
                        </button>
                      </div>
                    </div>
                  </li>
                </ul>
                <p class="text-muted text-center">
                  <a href="loans.html" class="link-primary">View All Loans</a>
                </p>
              </div>
            </div>
          </div>
        </div>
        <!--/ Active Loans -->
      </div>
    </div>
    <!-- / Content -->

    <!-- Footer -->
    <!-- Footer -->
    <?php require_once "../partials/footer.php"; ?>