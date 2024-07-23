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
$getMortgage = new Loan;
$userAccount = $getAcct->getAccount($userId);

// echo "<pre>";
// print_r($userAccount);
// echo "</pre>";

$accountNumber = $userAccount['account_number'];
$accountType = $userAccount['account_type'];
$accountStatus = $userAccount['status'];
$accountLevel = $userAccount['Level'];

// Loans for Mortgage
$mortgage = $getMortgage->mortgageLoans($accountNumber);

$balance = '$' . Utilities::convertToCurrency($mortgage['mortgage_balance']);
$payment = '$' . Utilities::convertToCurrency($mortgage['monthly_payment']);
$rate = $mortgage['interest_rate'] . '%';
$term = $mortgage['remaining_terms'];
?>
<?php

require_once "../partials/hstart.php";

?>
<title>Banker's | Mortgage Loans</title>
<?php require_once "../partials/hbottom.php" ?>
<!-- Dashboards -->
<?php require_once "../partials/inactivedash.php"; ?>
<!-- Transactions -->
<?php require_once "../partials/inactivetransaction.php"; ?>
<!-- Loans and Mortgages -->
<?php require_once "../partials/activeloans2.php"; ?>
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
          <li class="breadcrumb-item active">House Mortgage</li>
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
                        <img src="../assets/img/icons/unicons/home.png" alt="home" class="rounded" />
                      </div>
                      <div class="dropdown">
                        <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                          <a class="dropdown-item" href="javascript:void(0);">Make Payment</a>
                          <a class="dropdown-item" href="javascript:void(0);">Refinance Options</a>
                        </div>
                      </div>
                    </div>
                    <span class="fw-medium d-block mb-1">Mortgage Balance</span>
                    <h3 class="card-title mb-2"><?php echo $balance; ?></h3>
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
                          <a class="dropdown-item" href="javascript:void(0);">Payment Schedule</a>
                          <a class="dropdown-item" href="javascript:void(0);">Extra Payment</a>
                        </div>
                      </div>
                    </div>
                    <span>Monthly Payment</span>
                    <h3 class="card-title text-nowrap mb-1"><?php echo $payment; ?></h3>
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
                          <a class="dropdown-item" href="javascript:void(0);">Interest Details</a>
                          <a class="dropdown-item" href="javascript:void(0);">Amortization Schedule</a>
                        </div>
                      </div>
                    </div>
                    <span class="fw-medium d-block mb-1">Interest Rate</span>
                    <h3 class="card-title mb-2"><?php echo $rate; ?></h3>
                  </div>
                </div>
              </div>
              <div class="col-6 mb-4">
                <div class="card">
                  <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                      <div class="avatar flex-shrink-0">
                        <img src="../assets/img/icons/unicons/calendar.png" alt="Calendar" class="rounded" />
                      </div>
                      <div class="dropdown">
                        <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                          <a class="dropdown-item" href="javascript:void(0);">Loan Details</a>
                          <a class="dropdown-item" href="javascript:void(0);">Modify Terms</a>
                        </div>
                      </div>
                    </div>
                    <span class="d-block mb-1">Remaining Term</span>
                    <h3 class="card-title text-nowrap mb-2"><?php echo $term; ?> Years</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Mortgage Details -->
        <div class="col-md-6">
          <div class="col-md-12 col-lg-12 order-2 mb-4">
            <div class="card h-100">
              <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 me-2">Mortgage Details</h5>
                <div class="dropdown">
                  <button class="btn p-0" type="button" id="mortgageDetails" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="mortgageDetails">
                    <a class="dropdown-item" href="javascript:void(0);">Full Statement</a>
                    <a class="dropdown-item" href="javascript:void(0);">Property Valuation</a>
                    <a class="dropdown-item" href="javascript:void(0);">Tax Information</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <ul class="p-0 m-0 list-group">
                  <li class="d-flex mb-4 pb-1 list-group-item">
                    <div class="avatar flex-shrink-0 me-3">
                      <img src="../assets/img/icons/unicons/home-value.png" alt="Property Value" class="rounded" />
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <small class="text-muted d-block mb-1">Property Value</small>
                        <h6 class="mb-0">P. Value</h6>
                      </div>
                      <div class="user-progress d-flex align-items-center gap-1">
                        <h6 class="mb-0">$450,000</h6>
                        <span class="text-muted">USD</span>
                        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#loanDetail">
                          Details
                        </button>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex mb-4 pb-1 list-group-item">
                    <div class="avatar flex-shrink-0 me-3">
                      <img src="../assets/img/icons/unicons/equity.png" alt="Home Equity" class="rounded" />
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <small class="text-muted d-block mb-1">Home Equity</small>
                        <h6 class="mb-0">Available</h6>
                      </div>
                      <div class="user-progress d-flex align-items-center gap-1">
                        <h6 class="mb-0">$129,371.11</h6>
                        <span class="text-muted">USD</span>
                        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#loanDetail">
                          Details
                        </button>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex mb-4 pb-1 list-group-item">
                    <div class="avatar flex-shrink-0 me-3">
                      <img src="../assets/img/icons/unicons/calendar-check.png" alt="Next Payment" class="rounded" />
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <small class="text-muted d-block mb-1">Next Payment</small>
                        <h6 class="mb-0">Due Date</h6>
                      </div>
                      <div class="user-progress d-flex align-items-center gap-1">
                        <h6 class="mb-0">August 1, 2024</h6>
                        <button class="btn btn-sm btn-primary disabled">Pay</button>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex mb-4 pb-1 list-group-item">
                    <div class="avatar flex-shrink-0 me-3">
                      <img src="../assets/img/icons/unicons/escrow.png" alt="Escrow" class="rounded" />
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <small class="text-muted d-block mb-1">Escrow</small>
                        <h6 class="mb-0">Balance</h6>
                      </div>
                      <div class="user-progress d-flex align-items-center gap-1">
                        <h6 class="mb-0">$5,234.78</h6>
                        <span class="text-muted">USD</span>
                        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#loanDetail">
                          Details
                        </button>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex mb-4 pb-1 list-group-item">
                    <div class="avatar flex-shrink-0 me-3">
                      <img src="../assets/img/icons/unicons/insurance.png" alt="Insurance" class="rounded" />
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <small class="text-muted d-block mb-1">Home Insurance</small>
                        <h6 class="mb-0">Annual</h6>
                      </div>
                      <div class="user-progress d-flex align-items-center gap-1">
                        <h6 class="mb-0">$1,200.00</h6>
                        <span class="text-muted">USD</span>
                        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#loanDetail">
                          Details
                        </button>
                      </div>
                    </div>
                  </li>
                </ul>

              </div>
            </div>
          </div>
        </div>
        <!--/ Mortgage Details -->
      </div>
    </div>
    <!-- / Content -->

    <!-- Footer -->
    <!-- Footer -->
    <?php require_once "../partials/footer.php"; ?>