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
    <li class="menu-item">
      <a href="pendingtransactions.php" class="menu-link">
        <div data-i18n="transaction">Pending</div>
      </a>
    </li>
    <li class="menu-item active">
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
              <a href="javascript:void(0);">Transaction</a>
            </li>
            <li class="breadcrumb-item active">Declined Transactions</li>
          </ol>
        </nav>
      </div>
      <div class="row">
        <div class="card">
          <h5 class="card-header">Declined Transactions</h5>
          <div class="table-responsive text-nowrap">
            <table class="table table-hover">
              <caption class="ms-4">
                Transaction Summary: Debit:
                <span class="text-danger">$5,750.00</span>
                | Credit:
                <span class="text-success">$3,200.00</span>
                | Total: $2,550.00
              </caption>
              <thead>
                <tr>
                  <th>Transaction ID</th>
                  <th>Date <i class="bx bx-sort"></i></th>
                  <th>Sender</th>
                  <th>Receiver <i class="bx bx-sort"></i></th>
                  <th>Amount</th>
                  <th>Balance <i class="bx bx-sort"></i></th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <i class="bx bx-transfer text-danger me-3"></i>
                    <span class="fw-medium">TRX-001</span>
                  </td>
                  <td>2023-07-01</td>
                  <td>Habeeb Bright</td>
                  <td>John Paul</td>
                  <td>$5,000</td>
                  <td>$39,000.00</td>
                  <td>
                    <div class="dropdown">
                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="declined.php"><i class="bx bx-low-vision bx-flip-horizontal"></i> View</a>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
            <nav aria-label="Page navigation">
              <ul class="pagination pagination-sm">
                <li class="page-item prev">
                  <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-left"></i></a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="javascript:void(0);">1</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="javascript:void(0);">2</a>
                </li>
                <li class="page-item active">
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