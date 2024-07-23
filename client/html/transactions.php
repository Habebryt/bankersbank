<?php
ini_set("display_errors", "1");
session_start();
require_once "../classes/Utilities.php";
require_once "../classes/Account.php";
require_once "../classes/Transaction.php";

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
$transactions = new Transaction;
$userAccount = $getAcct->getAccount($userId);



$accountBalance = $userAccount['balance'];
$accountNumber = $userAccount['account_number'];
$accountType = $userAccount['account_type'];
$accountStatus = $userAccount['status'];
$accountLevel = $userAccount['Level'];

$allTransactions = $transactions->getTransactions($accountNumber);

$creditSum = 0;
$debitSum = 0;
$totalSum = 0;

foreach ($allTransactions as $transaction) {
  if ($transaction['transaction_type'] === 'credit') {
    $creditSum += $transaction['amount'];
  }
  if ($transaction['transaction_type'] === 'debit') {
    $debitSum += $transaction['amount'];
  }
  $totalSum += $transaction['amount'];
}


?>
<?php

require_once "../partials/hstart.php";

?>
<title>Transactions</title>

<?php require_once "../partials/hbottom.php";
?>

<!-- Dashboards -->
<?php require_once "../partials/inactivedash.php"; ?>

<!-- Layouts -->
<!-- Transactions -->
<li class="menu-item active">
  <a href="transactions.html" class="menu-link">
    <i class="menu-icon tf-icons bx bx-wallet"></i>
    <div data-i18n="Container">Transactions</div>
  </a>
</li>
<li class="menu-item d-none">
  <a href="layouts-blank.html" class="menu-link">
    <div data-i18n="Blank">Blank</div>
  </a>
</li>
<!-- Loans and Mortgages -->
<?php require_once "../partials/inactiveloans.php"; ?>
<!-- card -->
<?php require_once "../partials/inactivecard.php"; ?>
<!-- Account -->
<?php require_once "../partials/inactiveaccount.php"; ?>
<!-- Settings -->
<?php require_once "../partials/inactivesettings.php"; ?>
<!-- Support -->
<?php require_once "../partials/inactivesupport.php"; ?>
<!-- / Menu -->
</aside>
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
      <div class="row">
        <div class="card">
          <h5 class="card-header">Transaction History</h5>
          <div class="table-responsive text-nowrap">
            <table class="table table-hover">
              <caption class="ms-4">
                Transaction Summary: Debit:
                <span class="text-danger">$<?php echo $debitSum; ?></span>
                | Credit:
                <span class="text-success">$<?php echo $creditSum; ?></span>
                | Total: $<?php echo $totalSum; ?>
              </caption>
              <thead>
                <tr>
                  <th>Transaction ID</th>
                  <th>Date <i class="bx bx-sort"></i></th>
                  <th>Description</th>
                  <th>Debit <i class="bx bx-sort"></i></th>
                  <th>Credit <i class="bx bx-sort"></i></th>
                  <th>Balance <i class="bx bx-sort"></i></th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($allTransactions as $transaction) :

                  $transRef = 'TRX' . '-' . $transaction['reference_id'];
                  $transDate = Utilities::convertToDate($transaction['transaction_date']);
                  $transDesc = $transaction['description'];
                  $transType = $transaction['transaction_type'];
                  $transAmount = '$' . '' . $transaction['amount'];

                ?>
                  <tr>
                    <td>
                      <?php if ($transType === 'credit') {
                        echo "<i class='bx bx-transfer text-success me-3'></i>";
                      } elseif ($transType === 'debit') {
                        echo "<i class='bx bx-transfer text-danger me-3'></i>";
                      } ?>
                      <span class="fw-medium"><?php echo $transRef; ?></span>
                    </td>
                    <td><?php echo $transDate; ?></td>
                    <td><?php echo $transDesc; ?></td>
                    <td class="text-danger"><?php if ($transType === 'debit') {
                                              echo $transAmount;
                                            } ?></td>
                    <td class="text-success"><?php if ($transType === 'credit') {
                                                echo $transAmount;
                                              } ?></td>
                    <td>$3,000.00</td>
                    <td>
                      <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu justify-content-between">
                          <!-- Button trigger modal -->
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#viewTransaction">
                            View
                          </button>
                          <!-- Button trigger modal -->
                          <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#disputeTransaction">
                            Dispute
                          </button>
                        </div>
                      </div>
                    </td>
                  </tr>
                <?php endforeach ?>
              </tbody>
            </table>
            <nav aria-label="Page navigation">
              <ul class="pagination pagination-sm">
                <li class="page-item prev">
                  <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-left"></i></a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="javascript:void(0);">1</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="javascript:void(0);">2</a>
                </li>
                <li class="page-item">
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
      </div>
    </div>
    <!-- / Content -->

    <!-- Footer -->
    <?php require_once "../partials/footer.php"; ?>