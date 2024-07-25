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
    <li class="menu-item active">
      <a href="clientrequest.php" class="menu-link">
        <div data-i18n="Client Request">Client Requests</div>
      </a>
    </li>
    <li class="menu-item">
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
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Overview</a>
          </li>
          <li class="breadcrumb-item">
            <a href="javascript:void(0);">Support</a>
          </li>
          <li class="breadcrumb-item">
            <a href="clientrequest.php">Support Messages</a>
          </li>
          <li class="breadcrumb-item active">Client Name</li>
        </ol>
      </nav>
      <div class="row">
        <div class="col-xxl">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="mb-0">Client Name</h5>
            </div>
            <div class="card-body">
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Email</label>
                <div class="col-sm-10">
                  <div class="input-group input-group-merge">
                    <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                    <input type="text" id="basic-icon-default-email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="basic-icon-default-email2" disabled />

                  </div>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-icon-default-subject disabled">Subject</label>
                <div class="col-sm-10">
                  <div class="input-group input-group-merge">
                    <span id="basic-icon-default-subject" class="input-group-text"><i class="bx bx-message"></i></span>
                    <input type="text" class="form-control" id="basic-icon-default-subject" placeholder="Enter Subject" aria-label="Enter Subject" aria-describedby="basic-icon-default-subject" disabled />
                  </div>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 form-label" for="basic-icon-default-message">Message</label>
                <div class="col-sm-10">
                  <div class="input-group input-group-merge">
                    <span id="basic-icon-default-message2" class="input-group-text"><i class="bx bx-comment"></i></span>
                    <textarea id="basic-icon-default-message" class="form-control textarea" placeholder="Hi, Do you have a moment to talk Joe?" aria-label="Hi, Do you have a moment to talk Joe?" rows="5" aria-describedby="basic-icon-default-message2" disabled></textarea>
                  </div>
                </div>
              </div>
              <div class="row justify-content-end">
                <div class="col-sm-10 d-flex">
                  <button type="submit" class="btn btn-primary">
                    Send Mail <i class="bx bx-envelope ms-2"></i>
                  </button>
                  <div class="col-md-6 ms-2">
                    <form action="">
                      <div class="input-group">
                        <select class="form-select" id="inputGroupSelect04" aria-label="Select with button addon">
                          <option hidden>Choose...</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                        <button type="button" class="btn btn-outline-primary">Update</button>
                    </form>
                  </div>
                </div>
              </div>
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