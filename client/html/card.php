<?php
$name = "John Paul";
?>
<?php
require_once "../partials/hstart.php";
?>
<title>My Cards</title>

<?php require_once "../partials/hbottom.php";
?>

<!-- Dashboards -->
<?php require_once "../partials/inactivedash.php"; ?>
<!-- Transactions -->
<?php require_once "../partials/inactivetransaction.php"; ?>
<!-- Loans and Mortgages -->
<?php require_once "../partials/inactiveloans.php"; ?>

<!-- Cards -->
<?php require_once "../partials/activecard.php"; ?>

<!-- Account -->
<?php require_once "../partials/inactiveaccount.php"; ?>
<!-- Settings -->
<?php require_once "../partials/inactivesettings.php"; ?>
<!-- Support -->
<?php require_once "../partials/inactivesupport.php"; ?>

</aside>
<!-- / Menu -->

<!-- Layout container -->
<div class="layout-page">
  <!-- Navbar -->
  <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
      <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
        <i class="bx bx-menu bx-sm"></i>
      </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
      <!-- Search -->
      <div class="navbar-nav align-items-center">
        <div class="nav-item d-flex align-items-center">
          <i class='bx bxl-mastercard bx-rotate-180 fs-4 lh-0' style='color:rgba(0,0,0,0.9)'></i>
          <h2 class="title my-2 text-dark ms-2">My Cards</h2>
        </div>
      </div>
      <!-- /Search -->
      <ul class="navbar-nav flex-row align-items-center ms-auto">
        <!-- User -->
        <li class="nav-item navbar-dropdown dropdown-user dropdown">
          <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
            <div class="avatar avatar-online">
              <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
            </div>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li>
              <a class="dropdown-item" href="#">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar avatar-online">
                      <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <span class="fw-medium d-block">Habeeb Bright</span>
                    <small class="text-muted">Acct No: 1234567890</small>
                    <small class="text-muted">Level: Gold</small>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <div class="dropdown-divider"></div>
            </li>
            <li>
              <a class="dropdown-item" href="#">
                <i class="bx bx-user me-2"></i>
                <span class="align-middle">My Profile</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="#">
                <i class="bx bx-cog me-2"></i>
                <span class="align-middle">Settings</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="#">
                <span class="d-flex align-items-center align-middle">
                  <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                  <span class="flex-grow-1 align-middle ms-1">Subscription</span>
                  <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                </span>
              </a>
            </li>
            <li>
              <div class="dropdown-divider"></div>
            </li>
            <li>
              <a class="dropdown-item" href="javascript:void(0);">
                <i class="bx bx-power-off me-2"></i>
                <span class="align-middle">Log Out</span>
              </a>
            </li>
          </ul>
        </li>
        <!--/ User -->
      </ul>
    </div>
  </nav>

  <!-- / Navbar -->

  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <div class="row mb-5">
        <div class="col-md-12 col-lg-6 mb-3">
          <div class="card">
            <div class="card-body">
              <div class="card-type">Card Balance</div>
              <div class="card-balance"><span class="text-dark">$4,675.80</span></div>
              <div class="card-number">•••• •••• •••• 8600</div>
              <div class="card-expiry">12/26</div>
              <div class="card-logo">
                <div class="card-logo-circle"></div>
                <div class="card-logo-circle"></div>
              </div>
            </div>
          </div>

        </div>
        <div class="col-md-12 col-lg-6 mb-3">
          <div class="card shadow">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="card-title mb-0">Last Transactions</h5>
                <button class="btn btn-link p-0"><i class='bx bx-filter display-3'></i></button>
              </div>
              <ul class="list-unstyled">
                <li class="mb-3">
                  <div class="d-flex align-items-center">
                    <div class="transaction-icon bg-danger bg-opacity-10 me-3"><i class='bx bx-minus text-danger'></i></div>
                    <div class="flex-grow-1">
                      <div class="fw-bold">METRO Store</div>
                      <small class="text-muted">Sep 16, 2021 at 22:10</small>
                    </div>
                    <div class="transaction-amount negative fw-bold">- 240 $</div>
                  </div>
                </li>
                <li class="mb-3">
                  <div class="d-flex align-items-center">
                    <div class="transaction-icon bg-success bg-opacity-10 me-3"><i class='bx bx-plus text-success'></i></div>
                    <div class="flex-grow-1">
                      <div class="fw-bold">From Habeeb</div>
                      <small class="text-muted">Sep 14, 2021 at 13:45</small>
                    </div>
                    <div class="transaction-amount positive fw-bold">+ 1000 $</div>
                  </div>
                </li>
                <li class="mb-3">
                  <div class="d-flex align-items-center">
                    <div class="transaction-icon bg-danger bg-opacity-10 me-3"><i class='bx bx-minus text-danger'></i></div>
                    <div class="flex-grow-1">
                      <div class="fw-bold">IKEA</div>
                      <small class="text-muted">Sep 10, 2021 at 10:13</small>
                    </div>
                    <div class="transaction-amount negative fw-bold">- 120 $</div>
                  </div>
                </li>
                <li>
                  <div class="d-flex align-items-center">
                    <div class="transaction-icon bg-danger bg-opacity-10 me-3"><i class='bx bx-minus text-danger'></i></div>
                    <div class="flex-grow-1">
                      <div class="fw-bold">Gym</div>
                      <small class="text-muted">Sep 9, 2021 at 11:53</small>
                    </div>
                    <div class="transaction-amount negative fw-bold">- 32 $</div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / Content -->
    <!-- Footer -->
    <?php require_once "../partials/footer.php"; ?>