<?php
ini_set("display_errors", "1");
session_start();
require_once "../guard.php";
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
$loan = new Loan;
$userAccount = $getAcct->getAccount($userId);

// echo "<pre>";
// print_r($userAccount);
// echo "</pre>";

$accountNumber = $userAccount['account_number'];
$accountType = $userAccount['account_type'];
$accountStatus = $userAccount['status'];
$accountLevel = $userAccount['Level'];

// loans
$bloans = $loan->facilityLoans($accountNumber);
?>
<?php

require_once "../partials/hstart.php";

?>
<title>Banker's | Credit Facility</title>
<?php require_once "../partials/hbottom.php" ?>
<!-- Dashboards -->
<?php require_once "../partials/inactivedash.php"; ?>
<!-- Transactions -->
<?php require_once "../partials/inactivetransaction.php"; ?>
<!-- Loans and Mortgages -->
<?php require_once "../partials/activeloans4.php"; ?>
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
          <li class="breadcrumb-item active">Credit Facility</li>
        </ol>
      </nav>
      <button type="button" class="btn btn-primary my-2" data-bs-toggle="modal" data-bs-target="#applyForFacility">
        Request Facility
      </button>
      <?php if (!empty($bloans)) :

        $balance = Utilities::convertToCurrency($bloans['facility_limit']);
        $current = Utilities::convertToCurrency($bloans['current_utilization']);
        $rate = $bloans['interest_rate'];
        $date = Utilities::convertToDate($bloans['maturity_date']); ?>
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
                      </div>
                      <span class="fw-medium d-block mb-1">Credit Facility Limit</span>
                      <h3 class="card-title mb-2">$<?php echo $balance; ?></h3>
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
                      </div>
                      <span>Current Utilization</span>
                      <h3 class="card-title text-nowrap text-primary mb-1">$<?php echo $current; ?></h3>
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
                      </div>
                      <span class="fw-medium d-block mb-1">Interest Rate</span>
                      <h3 class="card-title mb-2">LIBOR + <?php echo $rate; ?>%</h3>
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
                      </div>
                      <span class="d-block mb-1">Maturity Date</span>
                      <h3 class="card-title text-nowrap mb-2"><?php echo $date; ?></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="col-md-12 col-lg-12 order-2 mb-4">
              <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between">
                  <h5 class="card-title m-0 me-2">Recent Applications</h5>
                </div>
                <div class="card-body">
                  <ul class="p-0 m-0 list-group">
                    <li class="d-flex mb-4 pb-1 list-group-item">
                      <div class="avatar flex-shrink-0 me-3">
                        <img src="../assets/img/icons/unicons/paypal.png" alt="User" class="rounded" />
                      </div>
                      <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                        <div class="me-2">
                          <small class="text-muted d-block mb-1">Drawdown</small>
                          <h6 class="mb-0">Working Capital</h6>
                        </div>
                        <div class="user-progress d-flex align-items-center gap-1">
                          <h6 class="mb-0"><span class="text-success">+1,000,000</span></h6>
                          <span class="text-muted">USD</span>
                        </div>
                      </div>
                    </li>
                    <li class="d-flex mb-4 pb-1 list-group-item">
                      <div class="avatar flex-shrink-0 me-3">
                        <img src="../assets/img/icons/unicons/wallet.png" alt="User" class="rounded" />
                      </div>
                      <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                        <div class="me-2">
                          <small class="text-muted d-block mb-1">Repayment</small>
                          <h6 class="mb-0">Principal</h6>
                        </div>
                        <div class="user-progress d-flex align-items-center gap-1">
                          <h6 class="mb-0"><span class="text-danger">-500,000</span></h6>
                          <span class="text-muted">USD</span>
                        </div>
                      </div>
                    </li>
                    <li class="d-flex mb-4 pb-1 list-group-item">
                      <div class="avatar flex-shrink-0 me-3">
                        <img src="../assets/img/icons/unicons/chart.png" alt="User" class="rounded" />
                      </div>
                      <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                        <div class="me-2">
                          <small class="text-muted d-block mb-1">Interest Payment</small>
                          <h6 class="mb-0">Quarterly Interest</h6>
                        </div>
                        <div class="user-progress d-flex align-items-center gap-1">
                          <h6 class="mb-0"><span class="text-danger">-87,500</span></h6>
                          <span class="text-muted">USD</span>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <p class="text-muted text-center">
                    <a href="transactions.html" class="link-primary">View More</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

      <?php else : ?>
        <p class="text-primary text-center">
          You Presently Have no Credit Facility Available;
        </p>

      <?php endif ?>
    </div>
    <!-- / Content -->

    <!-- Footer -->
    <?php require_once "../partials/footer.php"; ?>