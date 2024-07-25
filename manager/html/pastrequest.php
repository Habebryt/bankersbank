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
<li class="menu-item active">
  <a href="javascript:void(0);" class="menu-link menu-toggle">
    <i class="menu-icon tf-icons bx bx-help-circle"></i>
    <div data-i18n="Misc">Support</div>
  </a>
  <ul class="menu-sub">
    <li class="menu-item">
      <a href="messagesupport.php" class="menu-link">
        <div data-i18n="Message Support">Message Support</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="clientrequest.php" class="menu-link">
        <div data-i18n="Client Request">Client Requests</div>
      </a>
    </li>
    <li class="menu-item active">
      <a href="pastrequest.php" class="menu-link">
        <div data-i18n="Previous Request">Previous Requests</div>
      </a>
    </li>
  </ul>
</li>
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
      <div class="container-xxl flex-grow-1 container-p-y">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.php">Overview</a>
            </li>
            <li class="breadcrumb-item">
              <a href="javascript:void(0);">Support</a>
            </li>
            <li class="breadcrumb-item">
              <a href="javascript:void(0);">Past Request</a>
            </li>

          </ol>
        </nav>
        <div class="row">
          <div class="card">
            <h5 class="card-header">Support Messages</h5>
            <div class="table-responsive text-nowrap">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Date and Time</th>
                    <th>Ticket No</th>
                    <th>Subject</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                  <tr>
                    <td>
                      <span class="fw-medium">12/07/2024 07:20am</span>
                    </td>
                    <td>BB-XYLZ</td>
                    <td>This is a support Message</td>
                    <td><span class="badge bg-label-primary me-1">In Review</span></td>
                    <td>
                      <a href="supportmessage.php" class="btn btn-sm btn-primary">View</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- / Content -->

      <!-- Footer -->
      <?php
      require_once "../partials/footer.php";
      ?>