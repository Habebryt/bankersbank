<?php
ini_set("display_errors", "1");
session_start();
require_once "../guard.php";
require_once "../classes/Utilities.php";
require_once "../classes/Account.php";
require_once "../classes/Business.php";

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
$getBiz = new Business;
$userAccount = $getAcct->getAccount($userId);

// echo "<pre>";
// print_r($userAccount);
// echo "</pre>";

$accountNumber = $userAccount['account_number'];
$accountType = $userAccount['account_type'];
$accountStatus = $userAccount['status'];
$accountLevel = $userAccount['Level'];

$biz = $getBiz->getBiz($accountNumber);

if (empty($biz['business_balance'])) {
  $portBalance = 0;
} else {
  $portBalance = Utilities::convertToCurrency($biz['business_balance']);
}

if (empty($biz['business_credit'])) {
  $portSavings = 0;
} else {
  $portSavings = Utilities::convertToCurrency($biz['business_credit']);
}

if (empty($biz['business_debit'])) {
  $portLoss = 0;
} else {
  $portLoss = Utilities::convertToCurrency($biz['business_debit']);
}

if (empty($biz['pending'])) {
  $portPending = 0;
} else {
  $portPending = Utilities::convertToCurrency($biz['pending']);
}

if (empty($biz['expense'])) {
  $portExpense = 0;
} else {
  $portExpense = Utilities::convertToCurrency($biz['expense']);
}

$balance = $portBalance;
$credit = $portSavings;
$debit = $portLoss;
$pending = $portPending;
$expense = $portExpense;

// Business Transactions
$bizTransactions = $getBiz->getBizTransactions($accountNumber);

// var_dump($bizTransactions);

?>
<?php

require_once "../partials/hstart.php";

?>
<title>Banker's | My Businesses</title>
<?php require_once "../partials/hbottom.php" ?>
<!-- Dashboards -->
<?php require_once "../partials/inactivedash.php"; ?>
<!-- Transactions -->
<?php require_once "../partials/inactivetransaction.php"; ?>
<!-- Loans and Mortgages -->
<?php require_once "../partials/inactiveloans.php"; ?>
<!-- card -->
<?php require_once "../partials/inactivecard.php"; ?>
<!-- Account -->
<?php require_once "../partials/activeaccount2.php"; ?>
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
            <a href="javascript:void(0);">Accounts</a>
          </li>
          <li class="breadcrumb-item active">Business</li>
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
                          <a class="dropdown-item" href="javascript:void(0);">Transfer</a>
                          <a class="dropdown-item" href="javascript:void(0);">View More</a>
                        </div>
                      </div>
                    </div>
                    <span class="fw-medium d-block mb-1">Business Account</span>
                    <h3 class="card-title mb-2">$<?php echo $balance ?></h3>
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
                          <a class="dropdown-item" href="javascript:void(0);">Quick Credit</a>
                          <a class="dropdown-item" href="javascript:void(0);">View More</a>
                        </div>
                      </div>
                    </div>
                    <span>Business Credit</span>
                    <h3 class="card-title text-nowrap mb-1">$<?php echo $credit ?></h3>
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
                          <a class="dropdown-item" href="javascript:void(0);">View More</a>
                          <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                        </div>
                      </div>
                    </div>
                    <span class="fw-medium d-block mb-1">Business Debit</span>
                    <h3 class="card-title text-danger mb-2">-$<?php echo $debit ?></h3>
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
                          <a class="dropdown-item" href="javascript:void(0);">View More</a>
                          <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                        </div>
                      </div>
                    </div>
                    <span class="d-block mb-1">Pending</span>
                    <h3 class="card-title text-nowrap text-warning mb-2">-$<?php echo $pending ?></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Investment -->
        <div class="col-md-6">
          <div class="col-md-12 col-lg-12 order-2 mb-4">
            <?php if (!empty($bizTransactions)) : ?>
              <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between">
                  <h5 class="card-title m-0 me-2">Business Transactions</h5>
                  <div class="dropdown">
                    <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                      <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                      <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                      <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <ul class="p-0 m-0 list-group">
                    <?php foreach ($bizTransactions as $biztrans) :

                      $refNum = $biztrans['transaction_ref'];
                      $type = $biztrans['transaction_type'];
                      $desc = $biztrans['transaction_description'];
                      $amount = Utilities::convertToCurrency($biztrans['amount']);
                      // $type = $biztrans['transaction_ref'];
                      $currency = $biztrans['currency']; ?>

                      <li class="d-flex mb-4 pb-1 list-group-item">
                        <div class="avatar flex-shrink-0 me-3">
                          <?php if ($type === 'Wire Deposit') : ?>
                            <img src="../assets/img/icons/unicons/cc-success.png" alt="User" class="rounded" />
                          <?php else : ?>
                            <img src="../assets/img/icons/unicons/cc-warning.png" alt="User" class="rounded" />
                          <?php endif ?>
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                          <div class="me-2">
                            <small class="text-muted d-block mb-1"><?php echo $desc ?></small>
                            <h6 class="mb-0"><?php echo $type ?></h6>
                          </div>
                          <div class="user-progress d-flex align-items-center gap-1">
                            <?php if ($type === 'Wire Deposit') : ?>
                              <h6 class="mb-0"><span class="text-success"><?php echo $amount ?></span></h6>
                            <?php else : ?>
                              <h6 class="mb-0"><span class="text-danger">-<?php echo $amount ?></span></h6>
                            <?php endif ?>
                            <span class="text-muted"><?php echo $currency ?></span></span>
                            <button class="btn btn-primary">View</button>
                          </div>
                        </div>
                      </li>


                    <?php endforeach ?>
                  </ul>
                  <p class="text-muted text-center">
                    <a href="transactions.html" class="link-primary">View More</a>
                  </p>
                </div>
              </div>
            <?php else : ?>
              <p class="text-center text-primary my-3">No Recent Business Transactions!</p>
            <?php endif ?>
          </div>
        </div>
        <!--/ Investment -->
      </div>
    </div>
    <!-- / Content -->
    <!-- Footer -->
    <footer class="content-footer footer bg-footer-theme">
      <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
        <div class="mb-2 mb-md-0">
          ©
          <script>
            document.write(new Date().getFullYear());
          </script>
          <a href="#" target="_blank" class="footer-link fw-medium">Banker's Bank</a>
        </div>
      </div>
    </footer>
    <!-- / Footer -->
  </div>
  <!-- Content wrapper -->
</div>
<!-- / Layout page -->
</div>
</div>
<!-- / Layout wrapper -->

<div class="cont-sup">
  <a href="#" target="_blank" class="btn btn-danger btn-cont-sup">Support?</a>
</div>

<!-- Loan Modal -->

<!-- / Loan Modal -->

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->

<script src="../assets/vendor/libs/jquery/jquery.js"></script>
<script src="../assets/vendor/libs/popper/popper.js"></script>
<script src="../assets/vendor/js/bootstrap.js"></script>
<script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="../assets/vendor/js/menu.js"></script>

<!-- endbuild -->

<!-- Vendors JS -->
<script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="../assets/js/main.js"></script>

<!-- Page JS -->
<script src="../assets/js/dashboards-analytics.js"></script>
</body>

</html>