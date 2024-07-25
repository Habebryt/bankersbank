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
    <li class="menu-item active">
      <a href="messagesupport.php" class="menu-link">
        <div data-i18n="Message Support">Message Support</div>
      </a>
    </li>
    <li class="menu-item">
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
      <a href="pastrequest.php" class="mb-2 btn btn-outline-primary">View Previous Messages</a>
      <div class="row">
        <div class="col-xxl">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="mb-0">Help Desk Support</h5>
              <small class="text-muted float-end"><span class="text-danger">*</span>Messages are responded to within 2-3 business days.</small>
            </div>
            <div class="card-body">
              <form>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Email</label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                      <input type="text" id="basic-icon-default-email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="basic-icon-default-email2" />
                      <span id="basic-icon-default-email2" class="input-group-text">name@email.com</span>
                    </div>
                    <div class="form-text text-danger">
                      Provide an active email which we can contact you by.
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-icon-default-subject">Subject</label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-subject" class="input-group-text"><i class="bx bx-message"></i></span>
                      <input type="text" class="form-control" id="basic-icon-default-subject" placeholder="Enter Subject" aria-label="Enter Subject" aria-describedby="basic-icon-default-subject" />
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 form-label" for="basic-icon-default-message">Message</label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-message2" class="input-group-text"><i class="bx bx-comment"></i></span>
                      <textarea id="basic-icon-default-message" class="form-control textarea" placeholder="Hi, Do you have a moment to talk Joe?" aria-label="Hi, Do you have a moment to talk Joe?" rows="5" aria-describedby="basic-icon-default-message2"></textarea>
                    </div>
                  </div>
                </div>
                <div class="row justify-content-end">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">
                      Send Message <i class="bx bx-paper-plane ms-2"></i>
                    </button>
                  </div>
                </div>
              </form>
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