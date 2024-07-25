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
    <li class="menu-item active">
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
          <li class="breadcrumb-item active">House Mortgage</li>
        </ol>
      </nav>
      <div class="mb-3">
        <button class="btn btn-primary disabled">Add Mortgage</button>
      </div>
      <div class="card">
        <h5 class="card-header">Client Mortgages</h5>
        <div class="table-responsive text-nowrap">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Account Number</th>
                <th>Account Holder</th>
                <th>Balance</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              <tr>
                <td>
                  <i class="bx bx-hash bx-sm text-dark me-3"></i>
                  <span class="fw-medium">0123456789</span>
                </td>
                <td>Albert Bright</td>
                <td>
                  <i class="bx bx-dollar bx-sm text-dark me-1"></i>
                  <span>300,000</span>
                </td>
                <td><span class="badge bg-label-primary me-1">Active</span></td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="mortgage.php"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-envelope me-1"></i> Contact</a>
                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <i class="bx bx-hash bx-sm text-dark me-3"></i> <span class="fw-medium">0123456789</span>
                </td>
                <td>Barry Bright</td>
                <td>
                  <i class="bx bx-dollar bx-sm text-dark me-1"></i>
                  <span>300,000</span>
                </td>
                <td><span class="badge bg-label-success me-1">Completed</span></td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <i class="bx bx-hash bx-sm text-dark me-3"></i>
                  <span class="fw-medium">0123456789</span>
                </td>
                <td>Trevor Habeeb</td>
                <td>
                  <i class="bx bx-dollar bx-sm text-dark me-1"></i>
                  <span>300,000</span>
                </td>
                <td><span class="badge bg-label-info me-1">Scheduled</span></td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <i class="bx bx-hash bx-sm text-dark me-3"></i>
                  <span class="fw-medium">0123456789</span>
                </td>
                <td>Jerry Bright</td>
                <td>
                  <i class="bx bx-dollar bx-sm text-dark me-1"></i>
                  <span>300,000</span>
                </td>
                <td><span class="badge bg-label-warning me-1">Pending</span></td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Contact</a>
                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- / Content -->

    <!-- Footer -->
    <?php
    require_once "../partials/footer.php";
    ?>