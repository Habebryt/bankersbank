<?php
ini_set("display_errors", "1");
session_start();
require_once "../guard.php";
require_once "../classes/Client.php";
require_once "../classes/Account.php";
require_once "../classes/Utilities.php";
require_once "../classes/Mortgage.php";

$mortgage = new Mortgage();



$manager = $_SESSION['useronline'];
$clientCode = $_GET['accountowner'];
$accountNumber = $_GET['accountnumber'];
$managerId = $manager['id'];
$fromClients = new Client;
$clientAccount = new Account;


$data = $mortgage->getMortgage($accountNumber);
//$cdata = $card->getCardTransactions($accountNumber);

print_r($data);

$myClientX = $fromClients->getUser($clientCode);
$userId = $myClientX['id'];

// Attempt to get client details
$myClient = $fromClients->getUser($clientCode);
if (is_array($myClient)) {
  // If the client is found, assign it to a variable
  $fClient = $myClient;
} else {
  // If no client profile is found, get User by UserCode
  $fClient = null;
}

// Attempt to get account details
$myAccount = $clientAccount->getAccount($userId, $accountNumber);

if (is_array($myAccount)) {
  // If the account is found, assign it to a variable
  $fAccount = $myAccount;
} else {
  // If no account is found, display a message
  $fAccount = null; // Assign null if no account is found
}
// var_dump($myClientY);

// Merge data if both account and client are found and user IDs match
if (!empty($fAccount) && !empty($fClient)) {
  if (($fAccount['user_id'] === $fClient['user_id']) && isset($myClientX) && ($fAccount['user_id'] === $myClientX['id'])) {
    // Merge the arrays if the user IDs match
    $clientData = $mergedData = array_merge($fAccount, $fClient, $myClientX);
    //print_r($clientData);
  } else {
    // If user IDs do not match, just print the client data
    // print_r($myClientX);
  }
} else {
  // Print separate information if either account or client data is missing
  if (empty($fAccount) && empty($fClient)) {
    return $myClientX;
  }
}






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
          <li class="breadcrumb-item">
            <a href="loans.php">House Mortgage</a>
          </li>
          <li class="breadcrumb-item active"><?php echo $myClientX['firstName'] . ' ' . $myClientX['lastName'] ?></li>
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
                        <button class="btn btn-sm btn-primary"><i class="bx bx-edit"></i></button>
                      </div>
                      <div class="dropdown">
                        <button class="btn p-0 disabled" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                          <a class="dropdown-item" href="javascript:void(0);">Make Payment</a>
                          <a class="dropdown-item" href="javascript:void(0);">Refinance Options</a>
                        </div>
                      </div>
                    </div>
                    <span class="fw-medium d-block mb-1">Mortgage Balance</span>
                    <h3 class="card-title mb-2">$<?php if (isset($data['mortgage_balance'])) : ?>
                      <?php echo Utilities::convertToCurrency($data['mortgage_balance']) ?>
                    <?php else : ?>
                      <button class="btn btn-primary">Add Amount</button>
                    <?php endif ?>
                    </h3>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-6 mb-4">
                <div class="card">
                  <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                      <div class="avatar flex-shrink-0">
                        <button class="btn btn-sm btn-primary"><i class="bx bx-edit"></i></button>
                      </div>
                      <div class="dropdown">
                        <button class="btn p-0 disabled" type="button" id="cardOpt6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                          <a class="dropdown-item" href="javascript:void(0);">Payment Schedule</a>
                          <a class="dropdown-item" href="javascript:void(0);">Extra Payment</a>
                        </div>
                      </div>
                    </div>
                    <span>Monthly Payment</span>
                    <h3 class="card-title text-nowrap mb-1">$<?php if (isset($data['monthly_payment'])) : ?>
                      <?php echo Utilities::convertToCurrency($data['monthly_payment']) ?>
                    <?php else : ?>
                      <button class="btn btn-primary">Add Amount</button>
                    <?php endif ?>
                    </h3>
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
                        <button class="btn btn-sm btn-primary"><i class="bx bx-edit"></i></button>
                      </div>
                      <div class="dropdown">
                        <button class="btn p-0 disabled" type="button" id="cardOpt1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="cardOpt1">
                          <a class="dropdown-item" href="javascript:void(0);">Interest Details</a>
                          <a class="dropdown-item" href="javascript:void(0);">Amortization Schedule</a>
                        </div>
                      </div>
                    </div>
                    <span class="fw-medium d-block mb-1">Interest Rate</span>
                    <h3 class="card-title mb-2"><?php if (isset($data['interest_rate'])) : ?>
                        <?php echo $data['interest_rate'] ?>
                      <?php else : ?>
                        <button class="btn btn-primary">Add Rate</button>
                        <?php endif ?>%
                    </h3>
                  </div>
                </div>
              </div>
              <div class="col-6 mb-4">
                <div class="card">
                  <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                      <div class="avatar flex-shrink-0">
                        <button class="btn btn-sm btn-primary"><i class="bx bx-edit"></i></button>
                      </div>
                      <div class="dropdown">
                        <button class="btn p-0 disabled" type="button" id="cardOpt4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                          <a class="dropdown-item" href="javascript:void(0);">Loan Details</a>
                          <a class="dropdown-item" href="javascript:void(0);">Modify Terms</a>
                        </div>
                      </div>
                    </div>
                    <span class="d-block mb-1">Remaining Term</span>
                    <h3 class="card-title text-nowrap mb-2"><?php if (!isset($data['monthly_payment'])) : ?> <button class="btn btn-primary">Add Repayment</button>
                      <?php else : ?>
                        <?php echo $data['remaining_terms'] ?> Years

                      <?php endif ?>
                    </h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Mortgage Details -->
        <div class="col-md-6">
          <div class="col-md-12 col-lg-12 order-2 mb-4">
            <div class="card h-100">
              <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 me-2">Mortgage Details</h5>
                <div class="dropdown">
                  <button class="btn p-0" type="button" id="mortgageDetails" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="mortgageDetails">
                    <a class="dropdown-item" href="javascript:void(0);">Full Statement</a>
                    <a class="dropdown-item" href="javascript:void(0);">Property Valuation</a>
                    <a class="dropdown-item" href="javascript:void(0);">Tax Information</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <ul class="p-0 m-0 list-group">
                  <li class="d-flex mb-4 pb-1 list-group-item">
                    <div class="avatar flex-shrink-0 me-3">
                      <img src="../assets/img/icons/unicons/home-value.png" alt="Property Value" class="rounded" />
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <small class="text-muted d-block mb-1">Property Value</small>
                        <h6 class="mb-0">P Value</h6>
                      </div>
                      <div class="user-progress d-flex align-items-center gap-1">
                        <h6 class="mb-0">$450,000</h6>
                        <span class="text-muted">USD</span>
                        <button class="btn btn-sm btn-primary">Edit <i class="bx bx-edit"></i></button>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex mb-4 pb-1 list-group-item">
                    <div class="avatar flex-shrink-0 me-3">
                      <img src="../assets/img/icons/unicons/equity.png" alt="Home Equity" class="rounded" />
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <small class="text-muted d-block mb-1">Home Equity</small>
                        <h6 class="mb-0">Available</h6>
                      </div>
                      <div class="user-progress d-flex align-items-center gap-1">
                        <h6 class="mb-0">$129,371.11</h6>
                        <span class="text-muted">USD</span>
                        <button class="btn btn-sm btn-primary">Edit <i class="bx bx-edit"></i></button>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex mb-4 pb-1 list-group-item">
                    <div class="avatar flex-shrink-0 me-3">
                      <img src="../assets/img/icons/unicons/calendar-check.png" alt="Next Payment" class="rounded" />
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <small class="text-muted d-block mb-1">Next Payment</small>
                        <h6 class="mb-0">Due Date</h6>
                      </div>
                      <div class="user-progress d-flex align-items-center gap-1">
                        <h6 class="mb-0">August 1, 2024</h6>
                        <button class="btn btn-sm btn-primary">Edit <i class="bx bx-edit"></i></button>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex mb-4 pb-1 list-group-item">
                    <div class="avatar flex-shrink-0 me-3">
                      <img src="../assets/img/icons/unicons/escrow.png" alt="Escrow" class="rounded" />
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <small class="text-muted d-block mb-1">Escrow</small>
                        <h6 class="mb-0">Balance</h6>
                      </div>
                      <div class="user-progress d-flex align-items-center gap-1">
                        <h6 class="mb-0">$5,234.78</h6>
                        <span class="text-muted">USD</span>
                        <button class="btn btn-sm btn-primary">Edit <i class="bx bx-edit"></i></button>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex mb-4 pb-1 list-group-item">
                    <div class="avatar flex-shrink-0 me-3">
                      <img src="../assets/img/icons/unicons/insurance.png" alt="Insurance" class="rounded" />
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <small class="text-muted d-block mb-1">Home Insurance</small>
                        <h6 class="mb-0">Annual</h6>
                      </div>
                      <div class="user-progress d-flex align-items-center gap-1">
                        <h6 class="mb-0">$1,200.00</h6>
                        <span class="text-muted">USD</span>
                        <button class="btn btn-sm btn-primary">Edit <i class="bx bx-edit"></i></button>
                      </div>
                    </div>
                  </li>
                </ul>
                <p class="text-muted text-center">
                  <a href="mortgage_details.php" class="link-primary">View Full Mortgage Details</a>
                </p>
              </div>
            </div>
          </div>
        </div>
        <!--/ Mortgage Details -->
      </div>
    </div>
    <!-- / Content -->

    <!-- Footer -->
    <?php
    require_once "../partials/footer.php";
    ?>