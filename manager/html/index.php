<?php
ini_set("display_errors", "1");
session_start();
require_once "../guard.php";
require_once "../partials/headertop.php";

$manager = $_SESSION['useronline'];
$fullname = $manager['firstName'] . ' ' . $manager['lastName'];
?>
<!-- Menu -->
<!-- Aside Top -->
<?php
require_once "../partials/asidetop.php";
?>

<!-- Dashboards -->
<?php require_once "../partials/aside/activedashboard.php"; ?>

<!-- Transactions -->
<?php require_once "../partials/aside/inactivetransactions.php"; ?>

<!-- Loans and Mortgages -->
<?php require_once "../partials/aside/inactiveloansandmortages.php"; ?>

<!-- Card -->
<?php require_once "../partials/aside/inactivecard.php"; ?>

<!-- Account Management -->
<?php require_once "../partials/aside/inactiveaccountmanagement.php";
?>

<!-- Accounts  -->

<?php require_once "../partials/aside/inactiveaccounts.php"; ?>

<!-- Settings -->

<?php require_once "../partials/aside/inactivesettings.php"; ?>

<!-- Subscription -->
<?php require_once "../partials/aside/inactivesub.php"; ?>

<!-- Support -->

<?php require_once "../partials/aside/inactivesupport.php"; ?>

<!-- Aside Bottom -->

<?php require_once "../partials/asidebottom.php"; ?>
<!-- / Menu -->

<!-- Layout container -->
<div class="layout-page">
  <!-- Navbar -->
  <?php require_once "../partials/menunav.php" ?>

  <!-- / Navbar -->

  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <div class="row alert-fly">
        <div class="col-md-12">
          <?php if (isset($_SESSION['login_success'])) : ?>
            <div class="alert alert-primary alert-dismissible text-center alert-fly"><?php echo $_SESSION['login_success'] . " " . $manager['firstName']; ?></div>
            <?php unset($_SESSION['login_success']); ?>
          <?php endif; ?>
        </div>
      </div>
      <div class="mb-2">
        <button class="btn btn-success disabled">3 Months left</button>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addClient">Add Client</button>
        <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modalTransfer">Credit Account</button>
      </div>
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
                  </div>
                  <span class="fw-medium d-block mb-1">Total Account Balance</span>
                  <h3 class="card-title mb-2">$400,000.98</h3>
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
                  </div>
                  <span>Available Funds</span>
                  <h3 class="card-title text-nowrap mb-1">$504,679</h3>
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
                        <a class="dropdown-item" href="accounts.php">View Accounts</a>
                        <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#addClient">Add Client</a>
                      </div>
                    </div>
                  </div>
                  <span class="fw-medium d-block mb-1">Total Accounts</span>
                  <h3 class="card-title mb-2">12</h3>
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
              <h5 class="card-title m-0 me-2">Recent Clients Activities</h5>
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
                      <button class="btn btn-primary">View</button>
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
                      <button class="btn btn-primary">View</button>
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
                      <button class="btn btn-primary">View</button>
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
                      <button class="btn btn-primary">View</button>
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
                      <button class="btn btn-primary">View</button>
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
                      <button class="btn btn-primary">View</button>
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
    <?php require_once "../partials/footer.php" ?>