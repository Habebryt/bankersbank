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

$myTransactions = array_merge($biz, $inv, $allTransactions);
// $sortTransactions = array_
$generalTransactions = array_slice($myTransactions, 0, 5);
// print_r($transLimit);

// print_r($generalTransactions);


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
                <?php
                foreach ($generalTransactions as $transaction) :
                  $description = isset($transaction['transaction_description']) ? $transaction['transaction_description'] : (isset($transaction['description']) ? $transaction['description'] : '');
                  $transactionRef = isset($transaction['transaction_ref']) ? $transaction['transaction_ref'] : (isset($transaction['reference_id']) ? $transaction['reference_id'] : '');
                  $amount = Utilities::convertToCurrency($transaction['amount']);
                  $type = $transaction['transaction_type'];
                ?>
                  <li class="d-flex mb-4 pb-1 list-group-item">
                    <div class="avatar flex-shrink-0 me-3">
                      <?php if ($type === 'Wire Deposit' || $type === 'Transfer' || $type === 'credit') : ?>
                        <img src="../assets/img/icons/unicons/cc-success.png" alt="User" class="rounded" />
                      <?php else : ?>
                        <img src="../assets/img/icons/unicons/cc-warning.png" alt="User" class="rounded" />
                      <?php endif ?>
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <small class="text-muted d-block mb-1"><?php echo $description ?></small>
                        <h6 class="mb-0"><?php echo ucfirst($type) ?></h6>
                      </div>
                      <div class="user-progress d-flex align-items-center gap-1">
                        <h6 class="mb-0">
                          <?php if ($type === 'Wire Deposit' || $type === 'Transfer' || $type === 'credit') : ?>
                            <span class="text-success"><?php echo $amount ?></span>
                          <?php else : ?>
                            <span class="text-danger">-<?php echo $amount ?></span>
                          <?php endif ?>

                        </h6>
                        <span class="text-muted">USD</span>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#viewTransaction" data-transRef="<?php echo $transactionRef ?>">
                          View
                        </button>
                      </div>
                    </div>
                  </li>
                <?php endforeach ?>
              </ul>
              <?php if (empty($generalTransactions)) : ?>
                <p class="text-primary text-center">
                  You Presently Have no Recent Transaction.
                </p>
              <?php else : ?>
                <nav aria-label="Page navigation">
                  <ul class="pagination pagination-sm">
                    <li class="page-item prev">
                      <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-left"></i></a>
                    </li>
                    <li class="page-item active">
                      <a class="page-link" href="javascript:void(0);">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">2</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">4</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">5</a>
                    </li>
                    <li class="page-item next">
                      <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-right"></i></a>
                    </li>
                  </ul>
                </nav>
                <p class="text-muted text-center">
                  <a href="transactions.php" class="link-primary">View More</a>
                </p>
              <?php endif ?>
            </div>
          </div>
        </div>
        <!--/ Transactions -->
      </div>
    </div>
    <!-- / Content -->
    <!-- Footer -->
    <?php require_once "../partials/footer.php"; ?>