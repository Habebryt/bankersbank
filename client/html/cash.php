<?php
ini_set("display_errors", "1");
session_start();
require_once "../classes/Utilities.php";
require_once "../classes/Account.php";
require_once "../classes/Loan.php";

// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

$activeUser = ($_SESSION['useronline']);

// All pages needed
$firstname = $activeUser['firstName'];
$lastname = $activeUser['lastName'];
$fullname = $firstname . ' ' . $lastname;
$userId = $activeUser['id'];

$getAcct = new Account;
$loan = new Loan;
$userAccount = $getAcct->getAccount($userId);


// echo "<pre>";
// print_r($userAccount);
// echo "</pre>";

$accountBalance = $userAccount['balance'];
$accountNumber = $userAccount['account_number'];
$accountType = $userAccount['account_type'];
$accountStatus = $userAccount['status'];
$accountLevel = $userAccount['Level'];

// Loans

$mycashloans = $loan->cashLoans($accountNumber);

// print_r($mycashloans);

$balance = $mycashloans['available_credit'];
$apr = $mycashloans['current_apr'];
$method = $mycashloans['repayment_method'];
?>
<?php

require_once "../partials/hstart.php";

?>
<title>Banker's | Quick Loans</title>
<?php require_once "../partials/hbottom.php" ?>
<!-- Dashboards -->
<?php require_once "../partials/inactivedash.php"; ?>
<!-- Transactions -->
<?php require_once "../partials/inactivetransaction.php"; ?>
<!-- Loans and Mortgages -->
<?php require_once "../partials/activeloans3.php"; ?>
<!-- card -->
<?php require_once "../partials/inactivecard.php"; ?>
<!-- Account -->
<?php require_once "../partials/inactiveaccount.php"; ?>
<!-- Settings -->
<?php require_once "../partials/inactivesettings.php"; ?>
<!-- Support -->
<?php require_once "../partials/inactivesupport.php"; ?>
<!-- / Menu -->

<!-- Layout container -->
<div class="layout-page">
  <!-- Navbar -->
  <?php require_once "../partials/menunav.php"; ?>
  <!-- / Navbar -->


  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.html">Overview</a>
          </li>
          <li class="breadcrumb-item">
            <a href="javascript:void(0);">Payments</a>
          </li>
          <li class="breadcrumb-item active">Quick Cash</li>
        </ol>
      </nav>
      <div class="row">
        <!-- Credit Information Section -->
        <div class="col-md-5">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="card-title d-flex align-items-start justify-content-between">
                    <div class="avatar flex-shrink-0">
                      <img src="../assets/img/icons/unicons/wallet.png" alt="wallet" class="rounded" />
                    </div>
                    <div class="dropdown">
                      <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                        <a class="dropdown-item" href="javascript:void(0);">Apply for Loan</a>
                        <a class="dropdown-item" href="javascript:void(0);">View Eligibility</a>
                      </div>
                    </div>
                  </div>
                  <span class="fw-medium d-block mb-1">Available Credit</span>
                  <h3 class="card-title mb-2">$<?php echo $balance; ?></h3>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="card-title d-flex align-items-start justify-content-between">
                    <div class="avatar flex-shrink-0">
                      <img src="../assets/img/icons/unicons/cc-warning.png" alt="Credit Card" class="rounded" />
                    </div>
                    <div class="dropdown">
                      <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                        <a class="dropdown-item" href="javascript:void(0);">View Terms</a>
                        <a class="dropdown-item" href="javascript:void(0);">Calculate Repayment</a>
                      </div>
                    </div>
                  </div>
                  <span>Current APR</span>
                  <h3 class="card-title text-nowrap mb-1"><?php echo $apr; ?>%</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="card-title d-flex align-items-start justify-content-between">
                    <div class="avatar flex-shrink-0">
                      <img src="../assets/img/icons/unicons/paypal.png" alt="Paypal" class="rounded" />
                    </div>
                    <div class="dropdown">
                      <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                        <a class="dropdown-item" href="javascript:void(0);">Link Account</a>
                        <a class="dropdown-item" href="javascript:void(0);">Remove</a>
                      </div>
                    </div>
                  </div>
                  <span class="d-block mb-1">Instant Transfer</span>
                  <h3 class="card-title text-nowrap mb-2">Available</h3>
                </div>
              </div>
            </div>
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
                        <a class="dropdown-item" href="javascript:void(0);">Update Info</a>
                      </div>
                    </div>
                  </div>
                  <span class="fw-medium d-block mb-1">Repayment Method</span>
                  <h3 class="card-title mb-2"><?php echo $method; ?></h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Quick Cash Options Section -->
        <div class="col-md-7">
          <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="card-title m-0 me-2">Quick Cash Options</h5>
              <div class="dropdown">
                <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                  <a class="dropdown-item" href="javascript:void(0);">Last 7 Days</a>
                  <a class="dropdown-item" href="javascript:void(0);">Last 30 Days</a>
                  <a class="dropdown-item" href="javascript:void(0);">Last 3 Months</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered">
                  <thead class="table-light">
                    <tr>
                      <th scope="col" class="text-nowrap">Option</th>

                      <th scope="col">Amount</th>
                      <th scope="col" class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="../assets/img/icons/unicons/wallet-info.png" alt="Instant Cash" class="rounded me-2" width="32" />
                          <span class="fw-semibold">Instant Cash</span>
                        </div>
                      </td>

                      <td>Up to $1,000</td>
                      <td class="text-center"><button class="btn btn-sm btn-primary">Apply</button></td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="../assets/img/icons/unicons/chart.png" alt="Flex Loan" class="rounded me-2" width="32" />
                          <span class="fw-semibold">Flex Loan</span>
                        </div>
                      </td>

                      <td>$1,000 - $5,000</td>
                      <td class="text-center"><button class="btn btn-sm btn-primary">Apply</button></td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="../assets/img/icons/unicons/wallet-info.png" alt="Cash Advance" class="rounded me-2" width="32" />
                          <span class="fw-semibold">Cash Advance</span>
                        </div>
                      </td>

                      <td>Up to $500</td>
                      <td class="text-center"><button class="btn btn-sm btn-primary">Apply</button></td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="../assets/img/icons/unicons/cc-success.png" alt="Line of Credit" class="rounded me-2" width="32" />
                          <span class="fw-semibold">Line of Credit</span>
                        </div>
                      </td>

                      <td>Up to $10,000</td>
                      <td class="text-center"><button class="btn btn-sm btn-primary">Apply</button></td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="../assets/img/icons/unicons/chart.png" alt="Business Loan" class="rounded me-2" width="32" />
                          <span class="fw-semibold">Business Loan</span>
                        </div>
                      </td>

                      <td>$5,000 - $50,000</td>
                      <td class="text-center"><button class="btn btn-sm btn-primary">Apply</button></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <p class="text-muted text-center mt-3">
                <a href="loan_calculator.html" class="link-primary">Use Our Loan Calculator</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / Content -->

    <!-- Footer -->
    <footer class="content-footer footer bg-footer-theme">
      <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
        <div class="mb-2 mb-md-0">
          ©
          <script>
            document.write(new Date().getFullYear());
          </script>
          <a href="#" target="_blank" class="footer-link fw-medium">Banker's Bank</a>
        </div>
      </div>
    </footer>
    <!-- / Footer -->
  </div>
  <!-- Content wrapper -->
</div>
<!-- / Layout page -->
</div>
</div>
<!-- / Layout wrapper -->

<div class="cont-sup">
  <a href="#" target="_blank" class="btn btn-danger btn-cont-sup">Support?</a>
</div>

<!-- Loan Modal -->

<div class="modal fade" id="loanDetail" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalCenterTitle">Loan Information</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col mb-3">
            <label for="nameWithTitle" class="form-label">Name</label>
            <input type="text" id="nameWithTitle" class="form-control" placeholder="Enter Name" />
          </div>
        </div>
        <div class="row g-2">
          <div class="col mb-0">
            <label for="emailWithTitle" class="form-label">Email</label>
            <input type="email" id="emailWithTitle" class="form-control" placeholder="xxxx@xxx.xx" />
          </div>
          <div class="col mb-0">
            <label for="dobWithTitle" class="form-label">DOB</label>
            <input type="date" id="dobWithTitle" class="form-control" />
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- / Loan Modal -->

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->

<script src="../assets/vendor/libs/jquery/jquery.js"></script>
<script src="../assets/vendor/libs/popper/popper.js"></script>
<script src="../assets/vendor/js/bootstrap.js"></script>
<script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="../assets/vendor/js/menu.js"></script>

<!-- endbuild -->

<!-- Vendors JS -->
<script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="../assets/js/main.js"></script>

<!-- Page JS -->
<script src="../assets/js/dashboards-analytics.js"></script>
</body>

</html>