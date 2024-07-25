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
    <li class="menu-item">
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
    <li class="menu-item active">
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
            <a href="businessloan.php">Credit Facility</a>
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
                        <button class="ms-1 btn btn-sm btn-primary"><i class="bx bx-edit"></i></button>
                      </div>
                    </div>
                    <span class="fw-medium d-block mb-1">Credit Facility Limit</span>
                    <h3 class="card-title mb-2">$10,000,000</h3>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-6 mb-4">
                <div class="card">
                  <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                      <div class="avatar flex-shrink-0">
                        <button class="ms-1 btn btn-sm btn-primary"><i class="bx bx-edit"></i></button>
                      </div>
                    </div>
                    <span>Current Utilization</span>
                    <h3 class="card-title text-nowrap text-primary mb-1">$3,500,000</h3>
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
                        <button class="ms-1 btn btn-sm btn-primary"><i class="bx bx-edit"></i></button>
                      </div>
                    </div>
                    <span class="fw-medium d-block mb-1">Interest Rate</span>
                    <h3 class="card-title mb-2">LIBOR + 2.5%</h3>
                  </div>
                </div>
              </div>
              <div class="col-6 mb-4">
                <div class="card">
                  <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                      <div class="avatar flex-shrink-0">
                        <button class="ms-1 btn btn-sm btn-primary"><i class="bx bx-edit"></i></button>
                      </div>
                    </div>
                    <span class="d-block mb-1">Maturity Date</span>
                    <h3 class="card-title text-nowrap mb-2">12/31/2026</h3>
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
                <h5 class="card-title m-0 me-2">Recent Transactions</h5>
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
                        <button class="ms-1 btn btn-sm btn-primary"><i class="bx bx-edit"></i></button>
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
                        <button class="ms-1 btn btn-sm btn-primary"><i class="bx bx-edit"></i></button>
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
                        <button class="ms-1 btn btn-sm btn-primary"><i class="bx bx-edit"></i></button>
                      </div>
                    </div>
                  </li>
                </ul>
                <p class="text-muted text-center">
                  <a href="javascript:void(0);" class="link-primary">View More</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / Content -->

    <!-- Footer -->
    <?php
    require_once "../partials/footer.php";
    ?>