<?php
ini_set("display_errors", "1");
session_start();
require_once "../guard.php";

require_once "../classes/Transaction.php";
require_once "../classes/Utilities.php";

$user = $_SESSION['useronline'];
$managerId = $user['id'];

$transactions = new Transaction;
$tStatus = 'Completed';
$allTransactions = $transactions->cTransactions($managerId, $tStatus);

// print_r($allTransactions);

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

<li class="menu-item active">
  <a href="javascript:void(0);" class="menu-link menu-toggle">
    <i class="menu-icon tf-icons bx bx-wallet"></i>
    <div data-i18n="transaction">Transactions</div>
  </a>
  <ul class="menu-sub">
    <li class="menu-item">
      <a href="transactions.php" class="menu-link">
        <div data-i18n="transaction">My Transactions</div>
      </a>
    </li>
    <li class="menu-item active">
      <a href="confirmedtransactions.php" class="menu-link">
        <div data-i18n="transaction">Confirmed</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="pendingtransactions.php" class="menu-link">
        <div data-i18n="transaction">Pending</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="declinedtransactions.php" class="menu-link">
        <div data-i18n="transaction">Declined</div>
      </a>
    </li>
  </ul>
</li>

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
      <div>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.php">Overview</a>
            </li>
            <li class="breadcrumb-item">
              <a href="javascript:void(0);">Transaction</a>
            </li>
            <li class="breadcrumb-item active">Confirmed Transactions</li>
          </ol>
        </nav>
      </div>
      <div class="row">
        <?php if (!empty($allTransactions)) : ?>
          <div class="card">
            <div class="d-flex justify-content-between align-items-center mb-2">
              <h5 class="card-title card-header mb-0">Transaction Details</h5>
              <div class="dropdown">
                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="sortDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                  Sort by
                </button>
                <ul class="dropdown-menu" aria-labelledby="sortDropdown">
                  <li><a class="dropdown-item" href="#">Date</a></li>
                  <li><a class="dropdown-item" href="#">Amount</a></li>
                  <li><a class="dropdown-item" href="#">Balance</a></li>
                </ul>
              </div>
            </div>
            <div class="table-responsive text-nowrap">
              <table class="table table-hover">
                <caption class="ms-4">
                  Transaction Summary: Debit:
                  <span class="text-danger">$5,750.00</span>
                  | Credit:
                  <span class="text-success">$3,200.00</span>
                  | Total: $2,550.00
                </caption>
                <thead>
                  <tr>
                    <th>Transaction ID</th>
                    <th>Date <i class="bx bx-sort"></i></th>
                    <th>Sender</th>
                    <th>Description <i class="bx bx-sort"></i></th>
                    <th>Amount</th>
                    <th>Balance <i class="bx bx-sort"></i></th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($allTransactions as $data) :

                    $ref = $data['reference_id'];
                    $date = $data['created_at'];
                    $fullname = $data['first_name'] . ' ' . $data['last_name'];
                    $amount = Utilities::convertToCurrency($data['amount']);
                    $desc = $data['description'];
                    $balance = Utilities::convertToCurrency($data['balance']);
                    $status = $data['transaction_status'];


                  ?>
                    <tr>
                      <td>
                        <?php if ($status === 'Pending') : ?>
                          <i class="bx bx-transfer text-warning me-3"></i>
                        <?php elseif ($status === 'Completed') : ?>
                          <i class="bx bx-transfer text-success me-3"></i>
                        <?php elseif ($status === 'Failed') : ?>
                          <i class="bx bx-transfer text-danger me-3"></i>
                        <?php endif ?>
                        <span class="fw-medium">TRX-<?php echo $ref; ?></span>
                      </td>
                      <td><?php echo $date; ?></td>
                      <td><?php echo $fullname; ?></td>
                      <td><?php echo $desc; ?></td>
                      <td>$<?php echo $amount; ?></td>
                      <td>$<?php echo $balance; ?></td>
                      <td>
                        <div class="dropdown">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="confirmed.php?transactionRef=<?php echo $ref ?>"><i class="bx bx-low-vision bx-flip-horizontal"></i> View</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                </tbody>
              <?php endforeach ?>
              </table>
              <nav aria-label="Page navigation">
                <ul class="pagination pagination-sm">
                  <li class="page-item prev">
                    <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-left"></i></a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="javascript:void(0);">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="javascript:void(0);">2</a>
                  </li>
                  <li class="page-item active">
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
        <?php else : ?>
          <p class="text-info text-center">Your Accounts Have no Transactions Presently! </p>
        <?php endif ?>


        <!--/ Transactions -->
      </div>
    </div>
    <!-- / Content -->

    <!-- Footer -->
    <?php
    require_once "../partials/footer.php";
    ?>