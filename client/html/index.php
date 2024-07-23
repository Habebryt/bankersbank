<?php
ini_set("display_errors", "1");
session_start();
require_once "../guard.php";
require_once "../classes/Utilities.php";
require_once "../classes/Account.php";
require_once "../classes/Business.php";
require_once "../classes/Investment.php";
require_once "../classes/Transaction.php";

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
$getInv = new Investment;
$transactions = new Transaction;

$userAccount = $getAcct->getAccount($userId);

// echo "<pre>";
// print_r($userAccount);
// echo "</pre>";

$accountBalance = Utilities::convertToCurrency($userAccount['balance']);
$accountNumber = $userAccount['account_number'];
$accountType = $userAccount['account_type'];
$accountStatus = $userAccount['status'];
$accountLevel = $userAccount['Level'];

// All transactions
$biz = $getBiz->getBizTransactions($accountNumber);
$inv = $getInv->getInvTransactions($accountNumber);
$allTransactions = $transactions->getTransactions($accountNumber);

$generalTransactions = array_merge($biz, $inv, $allTransactions);

foreach ($generalTransactions as $transaction) {
  // Check for transaction description and transaction reference
  $description = isset($transaction['transaction_description']) ? $transaction['transaction_description'] : (isset($transaction['description']) ? $transaction['description'] : '');
  $transactionRef = isset($transaction['transaction_ref']) ? $transaction['transaction_ref'] : (isset($transaction['reference_id']) ? $transaction['reference_id'] : '');

  echo "Description: " . $description . "\n";
  echo "Transaction Ref: " . $transactionRef . "\n";
  echo "Amount: " . $transaction['amount'] . "\n";
  echo "Transaction Type: " . $transaction['transaction_type'] . "\n\n";
}
?>
<?php
require_once "../partials/hstart.php";
?>
<title>Banker's Bank</title>
<?php require_once "../partials/hbottom.php";
?>
<!-- Dashboards -->
<?php require_once "../partials/activedash.php"; ?>
<!-- Transactions -->
<?php require_once "../partials/inactivetransaction.php"; ?>
<!-- Loans and Mortgages -->
<?php require_once "../partials/inactiveloans.php"; ?>
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
  <!-- Navbar MENU -->
  <?php require_once "../partials/menunav.php"; ?>
  <!-- / Navbar MENU ENDS -->
  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">

      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#modalTransfer">
        Transfer
      </button>

      <div class="row">
        <div class="col-lg-12 col-md-12 order-1">
          <div class="row">
            <div class="col-lg-6 col-md-12 col-6 mb-4">
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
                        <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#modalTransfer">Transfer</a>
                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                      </div>
                    </div>
                  </div>
                  <span class="fw-medium d-block mb-1">Balance</span>
                  <h3 class="card-title mb-2">$<?php echo $accountBalance; ?></h3>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 col-6 mb-4">
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
                  <span>Business Account</span>
                  <h3 class="card-title text-nowrap mb-1">$4,679</h3>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-8 col-lg-6 order-3 order-md-2">
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
                  <span class="fw-medium d-block mb-1">Business Savings</span>
                  <h3 class="card-title mb-2">$14,857</h3>
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
                  <span class="d-block mb-1">Expense</span>
                  <h3 class="card-title text-nowrap mb-2">$2,456</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Transactions -->
        <div class="col-md-6 col-lg-6 order-2 mb-4">
          <div class="card h-100">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="card-title m-0 me-2">Recent Transactions</h5>
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
                <li class="d-flex mb-4 pb-1 list-group-item">
                  <div class="avatar flex-shrink-0 me-3">
                    <img src="../assets/img/icons/unicons/paypal.png" alt="User" class="rounded" />
                  </div>
                  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                      <small class="text-muted d-block mb-1">Paypal</small>
                      <h6 class="mb-0">Sent money</h6>
                    </div>
                    <div class="user-progress d-flex align-items-center gap-1">
                      <h6 class="mb-0"><span class="text-danger">-2,456</span></h6>
                      <span class="text-muted">USD</span>
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#viewTransaction">
                        View
                      </button>
                    </div>
                  </div>
                </li>
                <li class="d-flex mb-4 pb-1 list-group-item">
                  <div class="avatar flex-shrink-0 me-3">
                    <img src="../assets/img/icons/unicons/wallet.png" alt="User" class="rounded" />
                  </div>
                  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                      <small class="text-muted d-block mb-1">Wire Deposit</small>
                      <h6 class="mb-0">Habeeb Bright</h6>
                    </div>
                    <div class="user-progress d-flex align-items-center gap-1">
                      <h6 class="mb-0"><span class="text-success">+14,857</span></h6>
                      <span class="text-muted">USD</span>
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#viewTransaction">
                        View
                      </button>
                    </div>
                  </div>
                </li>
                <li class="d-flex mb-4 pb-1 list-group-item">
                  <div class="avatar flex-shrink-0 me-3">
                    <img src="../assets/img/icons/unicons/chart.png" alt="User" class="rounded" />
                  </div>
                  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                      <small class="text-muted d-block mb-1">Transfer</small>
                      <h6 class="mb-0">Refund</h6>
                    </div>
                    <div class="user-progress d-flex align-items-center gap-1">
                      <h6 class="mb-0"><span class="text-success">+637.91</span></h6>
                      <span class="text-muted">USD</span>
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#viewTransaction">
                        View
                      </button>
                    </div>
                  </div>
                </li>
                <li class="d-flex mb-4 pb-1 list-group-item">
                  <div class="avatar flex-shrink-0 me-3">
                    <img src="../assets/img/icons/unicons/cc-success.png" alt="User" class="rounded" />
                  </div>
                  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                      <small class="text-muted d-block mb-1">Credit Card</small>
                      <h6 class="mb-0">Ordered Food</h6>
                    </div>
                    <div class="user-progress d-flex align-items-center gap-1">
                      <h6 class="mb-0"><span class="text-danger">-838.71</span></h6>
                      <span class="text-muted">USD</span>
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#viewTransaction">
                        View
                      </button>
                    </div>
                  </div>
                </li>
                <li class="d-flex mb-4 pb-1 list-group-item">
                  <div class="avatar flex-shrink-0 me-3">
                    <img src="../assets/img/icons/unicons/wallet.png" alt="User" class="rounded" />
                  </div>
                  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                      <small class="text-muted d-block mb-1">Wallet</small>
                      <h6 class="mb-0">Starbucks</h6>
                    </div>
                    <div class="user-progress d-flex align-items-center gap-1">
                      <h6 class="mb-0"><span class="text-danger">-203.33</span></h6>
                      <span class="text-muted">USD</span>
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#viewTransaction">
                        View
                      </button>
                    </div>
                  </div>
                </li>
                <li class="d-flex list-group-item">
                  <div class="avatar flex-shrink-0 me-3">
                    <img src="../assets/img/icons/unicons/cc-warning.png" alt="User" class="rounded" />
                  </div>
                  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                      <small class="text-muted d-block mb-1">Mastercard</small>
                      <h6 class="mb-0">Ordered Food</h6>
                    </div>
                    <div class="user-progress d-flex align-items-center gap-1">
                      <h6 class="mb-0"><span class="text-danger">-92.45</span></h6>
                      <span class="text-muted">USD</span>
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#viewTransaction">
                        View
                      </button>
                    </div>
                  </div>
                </li>
              </ul>
              <p class="text-muted text-center">
                <a href="transactions.php" class="link-primary">View More</a>
              </p>
            </div>
          </div>
        </div>
        <!--/ Transactions -->
      </div>
    </div>
    <!-- / Content -->
    <!-- Footer -->
    <?php require_once "../partials/footer.php"; ?>