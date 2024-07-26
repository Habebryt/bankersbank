<?php
ini_set("display_errors", "1");
session_start();
require_once "../guard.php";
require_once "../classes/Client.php";
require_once "../classes/Account.php";
require_once "../classes/Utilities.php";
require_once "../classes/Investment.php";

$inv = new Investment();



$manager = $_SESSION['useronline'];
$clientCode = $_GET['accountowner'];
$accountNumber = $_GET['accountnumber'];
$managerId = $manager['id'];
$fromClients = new Client;
$clientAccount = new Account;


$data = $inv->getInvestment($accountNumber);

$idata = $inv->getInvestmentTransactions($accountNumber);



$myClientX = $fromClients->getUser($clientCode);
$userId = $myClientX['id'];

// print_r($idata);
// print_r($myClientX);

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
<?php require_once "../partials/aside/inactiveloansandmortages.php"; ?>

<!-- Card -->
<?php require_once "../partials/aside/inactivecard.php"; ?>

<!-- Account Management -->
<?php require_once "../partials/aside/inactiveaccountmanagement.php";
?>
<!-- Account -->
<li class="menu-item active">
  <a href="javascript:void(0);" class="menu-link menu-toggle">
    <i class="menu-icon tf-icons bx bxs-bank"></i>
    <div data-i18n="Layouts">Accounts</div>
  </a>
  <ul class="menu-sub">
    <li class="menu-item active">
      <a href="investment.php" class="menu-link">
        <div data-i18n="Container">Investment</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="business.php" class="menu-link">
        <div data-i18n="Container">Business</div>
      </a>
    </li>
  </ul>
</li>
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
            <a href="javascript:void(0);">Accounts</a>
          </li>
          <li class="breadcrumb-item">
            <a href="investment.php">Investment</a>
          </li>
          <li class="breadcrumb-item active">
            <a href="javascript:void(0);"><?php echo $myClientX['firstName'] . ' ' . $myClientX['lastName'] ?></a>
          </li>
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
                        <img src="../assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded" />
                      </div>
                      <div class="dropdown">
                        <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                          <a class="dropdown-item" href="javascript:void(0);">Transfer</a>
                          <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                          <a class="dropdown-item" href="javascript:void(0);">View More</a>
                        </div>
                      </div>
                    </div>
                    <span class="fw-medium d-block mb-1">Portfolio Balance</span>
                    <h3 class="card-title mb-2">$<?php if (isset($data['portfolio_balance'])) : ?>
                      <?php echo Utilities::convertToCurrency($data['portfolio_balance']) ?>
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
                        <img src="../assets/img/icons/unicons/wallet-info.png" alt="Credit Card" class="rounded" />
                      </div>
                      <div class="dropdown">
                        <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                          <a class="dropdown-item" href="javascript:void(0);">Quick Credit</a>
                          <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                          <a class="dropdown-item" href="javascript:void(0);">View More</a>
                        </div>
                      </div>
                    </div>
                    <span>Investment Loss</span>
                    <h3 class="card-title text-nowrap text-danger mb-1">-$<?php if (isset($data['investment_loss'])) : ?>
                      <?php echo Utilities::convertToCurrency($data['investment_loss']) ?>
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
                        <img src="../assets/img/icons/unicons/cc-primary.png" alt="Credit Card" class="rounded" />
                      </div>
                      <div class="dropdown">
                        <button class="btn p-0" type="button" id="cardOpt1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="cardOpt1">
                          <a class="dropdown-item" href="javascript:void(0);">View More</a>
                          <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                          <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                        </div>
                      </div>
                    </div>
                    <span class="fw-medium d-block mb-1">Business Savings</span>
                    <h3 class="card-title mb-2">$<?php if (isset($data['business_savings'])) : ?>
                      <?php echo Utilities::convertToCurrency($data['business_savings']) ?>
                    <?php else : ?>
                      <button class="btn btn-primary">Add Amount</button>
                    <?php endif ?>
                    </h3>
                  </div>
                </div>
              </div>
              <div class="col-6 mb-4">
                <div class="card">
                  <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                      <div class="avatar flex-shrink-0">
                        <img src="../assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded" />
                      </div>
                      <div class="dropdown">
                        <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                          <a class="dropdown-item" href="javascript:void(0);">View More</a>
                          <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                          <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                        </div>
                      </div>
                    </div>
                    <span class="d-block mb-1">Expense</span>
                    <h3 class="card-title text-nowrap mb-2">$<?php if (isset($data['expense'])) : ?>
                      <?php echo Utilities::convertToCurrency($data['expense']) ?>
                    <?php else : ?>
                      <button class="btn btn-primary">Add Amount</button>
                    <?php endif ?>
                    </h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Investment -->
        <div class="col-md-6">
          <div class="col-md-12 col-lg-12 order-2 mb-4">
            <div class="card h-100">
              <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 me-2">Recent Investment</h5>
                <div class="dropdown">
                  <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                    <a class="dropdown-item" href="javascript:void(0);">Add</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <?php if (!empty($idata)) : ?>
                  <ul class="p-0 m-0 list-group">
                    <?php foreach ($idata as $i) : ?>
                      <li class="d-flex mb-4 pb-1 list-group-item">
                        <div class="avatar flex-shrink-0 me-3">
                          <img src="../assets/img/icons/unicons/wallet.png" alt="User" class="rounded" />
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                          <div class="me-2">
                            <small class="text-muted d-block mb-1"><?php echo $i['transaction_description'] ?></small>
                            <h6 class="mb-0"><?php echo $i['transaction_type'] ?></h6>
                          </div>
                          <div class="user-progress d-flex align-items-center gap-1">
                            <h6 class="mb-0"><span class="text-primary"><?php echo Utilities::convertToCurrency($i['amount']) ?></span></h6>
                            <span class="text-muted"><?php echo $i['currency'] ?></span>
                            <button class="btn btn-primary">View</button>
                          </div>
                        </div>
                      </li>
                    <?php endforeach ?>
                  </ul>
                  <p class="text-muted text-center">
                    <a href="transactions.php" class="link-primary">View More</a>
                  </p>
                <?php else : ?>
                  <p class="text-center text-primary">You currently Have no Recent Investment Transaction.</p>
                <?php endif ?>
              </div>
            </div>
          </div>
        </div>
        <!--/ Investment -->
      </div>
    </div>
    <!-- / Content -->

    <!-- Footer -->
    <?php
    require_once "../partials/footer.php";
    ?>