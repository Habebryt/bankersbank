<?php
ini_set("display_errors", "1");
session_start();
require_once "../guard.php";
require_once "../classes/Client.php";
require_once "../classes/Account.php";
require_once "../classes/Utilities.php";
require_once "../classes/Card.php";

$card = new Card();



$manager = $_SESSION['useronline'];
$clientCode = $_GET['accountowner'];
$accountNumber = $_GET['accountnumber'];
$managerId = $manager['id'];
$fromClients = new Client;
$clientAccount = new Account;


$data = $card->getCard($accountNumber);
$cdata = $card->getCardTransactions($accountNumber);

print_r($cdata);

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
<?php require_once "../partials/aside/inactiveloansandmortages.php"; ?>

<!-- Card -->
<?php require_once "../partials/aside/activecard.php"; ?>

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
            <a href="card.php">Cards</a>
          </li>
          <li class="breadcrumb-item">
            <a href="javascript:void(0);"><?php if (isset($data['cardholder_name'])) : ?>
                <?php echo $data['cardholder_name'] ?>
              <?php else : ?>
                <a href="#" class="text-primary">Add Card</a>
              <?php endif ?>
            </a>
          </li>
        </ol>
      </nav>
      <div class="row mb-5">
        <div class="col-md-12 col-lg-6 mb-3">
          <?php if (!empty($data)) : ?>
            <div class="card">
              <div class="card-body">
                <div class="row justify-content-between">
                  <div class="col-md-7">
                    <div class="card-type">Card Balance / <?php echo $data['cardholder_name'] ?></div>
                  </div>
                  <div class="col-md-3">
                    <div class="card-action">
                      <button class="btn btn-sm btn-primary"><i class="bx bx-edit"></i></button>
                    </div>
                  </div>
                </div>
                <div class="card-balance"><span class="text-dark">$<?php echo Utilities::convertToCurrency($data['card_balance']) ?></span></div>
                <div class="card-number"><?php echo Utilities::maskCardNumber($data['card_number']) ?></div>
                <div class="card-expiry"><?php echo $data['issued_date'] ?></div>
                <div class="card-logo">
                  <div class="card-logo-circle"></div>
                  <div class="card-logo-circle"></div>
                </div>
              </div>
            </div>
          <?php else : ?>
            <p class="text-primary text-center">Kindly add a card! </p>
          <?php endif ?>
        </div>

        <div class="col-md-12 col-lg-6 mb-3">
          <?php if (!empty($cdata)) : ?>
            <div class="card shadow">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
                  <h5 class="card-title mb-0">Last Transactions</h5>
                  <button class="btn btn-link p-0"><i class="bx bx-filter display-3"></i></button>
                </div>
                <?php foreach ($cdata as $cd) : ?>
                  <ul class="list-unstyled">
                    <li class="mb-3">
                      <div class="d-flex align-items-center">
                        <div class="transaction-icon bg-danger bg-opacity-10 me-3">
                          <i class="bx bx-minus text-danger"></i>
                        </div>
                        <div class="flex-grow-1">
                          <div class="fw-bold"><?php echo $cd['merchant_name']; ?></div>
                          <small class="text-muted"><?php echo $cd['transaction_date']; ?></small>
                        </div>
                        <?php if ($cd['transaction_type'] === "Deposit") : ?>
                          <div class="transaction-amount negative fw-bold">-<?php echo Utilities::convertToCurrency($cd['amount']) ?>$</div>
                        <?php elseif ($cd['transaction_type'] === "Withdrawal") : ?>
                          <div class="transaction-amount positive fw-bold"><?php echo Utilities::convertToCurrency($cd['amount']) ?>$</div>
                        <?php elseif ($cd['transaction_type'] === "Purchase") : ?>
                          <div class="transaction-amount negative fw-bold">-<?php echo Utilities::convertToCurrency($cd['amount']) ?>$</div>
                        <?php elseif ($cd['transaction_type'] === "Transfer") : ?>
                          <div class="transaction-amount negative fw-bold">-<?php echo Utilities::convertToCurrency($cd['amount']) ?>$</div>
                        <?php endif ?>
                      </div>
                    </li>
                  </ul>
                <?php endforeach ?>
              </div>
            </div>
          <?php else : ?>
            <p class="text-primary text-center">No Transactions!</p>
          <?php endif ?>
        </div>
      </div>
    </div>
    <!-- / Content -->

    <!-- Footer -->
    <?php
    require_once "../partials/footer.php";
    ?>