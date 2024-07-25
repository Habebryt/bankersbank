<?php
require_once "../partials/headertop.php";
?>
<!-- Menu -->
<!-- Aside Top -->
<?php
require_once "../partials/asidetop.php";
?>

<!-- Dashboards -->
<?php require_once "../partials/aside/inactivedashboard.php"; ?>

<!-- Transactions -->

<li class="menu-item active">
  <a href="javascript:void(0);" class="menu-link menu-toggle">
    <i class="menu-icon tf-icons bx bx-wallet"></i>
    <div data-i18n="transaction">Transactions</div>
  </a>
  <ul class="menu-sub">
    <li class="menu-item">
      <a href="transactions.php" class="menu-link">
        <div data-i18n="transaction">My Transactions</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="confirmedtransactions.php" class="menu-link">
        <div data-i18n="transaction">Confirmed</div>
      </a>
    </li>
    <li class="menu-item active">
      <a href="pendingtransactions.php" class="menu-link">
        <div data-i18n="transaction">Pending</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="declinedtransactions.php" class="menu-link">
        <div data-i18n="transaction">Declined</div>
      </a>
    </li>
  </ul>
</li>

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
  <?php
  require_once "../partials/menunav.php";
  ?>

  <!-- / Navbar -->

  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <div>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.php">Overview</a>
            </li>
            <li class="breadcrumb-item">
              <a href="javascript:void(0);">Transactions</a>
            </li>
            <li class="breadcrumb-item">
              <a href="pendingtransactions.php">Pending Transactions</a>
            </li>
            <li class="breadcrumb-item active">TRX-100</li>
          </ol>
        </nav>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card mb-3">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center mb-2">
                <h5 class="card-title mb-0">Transaction Details</h5>
              </div>
              <div class="row">
                <div class="col-md-6 col-lg-3 mb-3">
                  <strong>Transaction ID:</strong>
                  <div><i class="bx bx-transfer text-danger me-2"></i>TRX-001</div>
                </div>
                <div class="col-md-6 col-lg-3 mb-3">
                  <strong>Date:</strong>
                  <div>2023-07-01</div>
                </div>
                <div class="col-md-6 col-lg-3 mb-3">
                  <strong>Account:</strong>
                  <div>Habeeb Bright</div>
                </div>
                <div class="col-md-6 col-lg-3 mb-3">
                  <strong>Amount:</strong>
                  <div>$3,000.00</div>
                </div>
                <div class="col-md-6 col-lg-3 mb-3">
                  <strong>Description:</strong>
                  <div>House Rental</div>
                </div>
                <div class="col-md-6 col-lg-3 mb-3">
                  <strong>Balance:</strong>
                  <div>$39,000.00</div>
                </div>
              </div>
              <div class="text-end">
                <button class="btn btn-secondary btn-sm me-2" type="button">
                  <i class="bx bx-printer me-1"></i>Print Receipt
                </button>
                <button class="btn btn-primary btn-sm" type="button">
                  <i class="bx bx-envelope me-1"></i>Send Receipt
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--/ Transactions -->
    </div>
  </div>
  <!-- / Content -->

  <!-- Footer -->
  <?php
  require_once "../partials/footer.php";
  ?>