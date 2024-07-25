<?php
ini_set("display_errors", "1");
session_start();
require_once "../guard.php";
require_once "../partials/headertop.php";
?>
<!-- Menu -->

<?php
require_once "../partials/asidetop.php";
?>
<!-- Dashboards -->
<?php require_once "../partials/aside/inactivedashboard.php"; ?>

<!-- Transactions -->
<?php require_once "../partials/aside/inactivetransactions.php"; ?>

<!-- Loans and Mortgages -->
<li class="menu-item active">
  <a href="javascript:void(0);" class="menu-link menu-toggle">
    <i class="menu-icon tf-icons bx bx-credit-card-alt"></i>
    <div data-i18n="Layouts">Payments</div>
  </a>

  <ul class="menu-sub">
    <li class="menu-item active">
      <a href="activeloans.php" class="menu-link">
        <div data-i18n="Container">Active Loans</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="loans.php" class="menu-link">
        <div data-i18n="Container">House Mortgage</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="cash.php" class="menu-link">
        <div data-i18n="Container">Quick Cash</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="businessloan.php" class="menu-link">
        <div data-i18n="Container">Credit Facility</div>
      </a>
    </li>

  </ul>
</li>
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
  <?php
  require_once "../partials/menunav.php";
  ?>

  <!-- / Navbar -->

  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Overview</a>
          </li>
          <li class="breadcrumb-item">
            <a href="javascript:void(0);">Payments</a>
          </li>
          <li class="breadcrumb-item">
            <a href="activeloans.php">Active Loans</a>
          </li>
          <li class="breadcrumb-item active">Client Name</li>
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
                    <h3 class="card-title mb-2">$120,628.89</h3>
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
                    <h3 class="card-title text-nowrap text-danger mb-1">$2,345.67</h3>
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
                        <button class="btn btn-sm btn-primary">Edit <i class="bx bx-edit"></i></button>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex mb-4 pb-1 list-group-item">
                    <div class="avatar flex-shrink-0 me-3">
                      <img src="../assets/img/icons/unicons/car.png" alt="Auto Loan" class="rounded" />
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <small class="text-muted d-block mb-1">Auto Loan</small>
                        <h6 class="mb-0">Vehicle</h6>
                      </div>
                      <div class="user-progress d-flex align-items-center gap-1">
                        <h6 class="mb-0">$35,000</h6>
                        <span class="text-muted">USD</span>
                        <button class="btn btn-sm btn-primary">Edit <i class="bx bx-edit"></i></button>
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
                        <button class="btn btn-sm btn-primary">Edit <i class="bx bx-edit"></i></button>
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
                        <button class="btn btn-sm btn-primary">Edit <i class="bx bx-edit"></i></button>
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
                        <button class="btn btn-sm btn-primary">Edit <i class="bx bx-edit"></i></button>
                      </div>
                    </div>
                  </li>
                </ul>
                <p class="text-muted text-center">
                  <a href="javascript:void(0);" class="link-primary">View All Loans</a>
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
    <?php
    require_once "../partials/footer.php";
    ?>