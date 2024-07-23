<?php
ini_set("display_errors", "1");
session_start();
require_once "../classes/Utilities.php";
require_once "../classes/User.php";
require_once "../classes/Account.php";
require_once "../classes/Card.php";

$activeUser = ($_SESSION['useronline']);
// All pages needed
$firstname = $activeUser['firstName'];
$lastname = $activeUser['lastName'];
$fullname = $firstname . ' ' . $lastname;

$userId = $activeUser['id'];

$getUser = new User;
$getCard = new Card;
$getAcct = new Account;
$userAccount = $getAcct->getAccount($userId);
$userInfo = $getUser->getUser($userId);
$accountnum = $userInfo['account_number'];
$cardInfo = $getCard->getCard($accountnum);


// account info
$accountBalance = $userAccount['balance'];
$accountNumber = $userAccount['account_number'];
$accountType = $userAccount['account_type'];
$accountStatus = $userAccount['status'];
$accountLevel = $userAccount['Level'];
// card info
$num = Utilities::maskCardNumber($cardInfo['card_number']);
$cvv = $cardInfo['cvv'];
$date = $cardInfo['expiration_date'];
$balance = Utilities::convertToCurrency($cardInfo['card_balance']);
$type = $cardInfo['card_type'];
$name = $cardInfo['cardholder_name'];

?>
<?php

require_once "../partials/hstart.php";

?>
<title>Banker's | My Card</title>

<?php require_once "../partials/hbottom.php"; ?>

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
  <?php require_once "../partials/menunav.php" ?>

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
              <div class="card-balance"><span class="text-dark">$<?php echo $balance ?></span></div>
              <div class="card-number"><?php echo $num ?></div>
              <div class="text-muted"><?php echo $name ?></div>
              <div class="card-expiry"><?php echo $date ?></div>
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