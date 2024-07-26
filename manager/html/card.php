<?php
ini_set("display_errors", "1");
session_start();
require_once "../guard.php";
require_once "../classes/Client.php";
require_once "../classes/Account.php";
require_once "../classes/Utilities.php";

$manager = $_SESSION['useronline'];
$managerId = $manager['id'];
$myClients = new Client;
$myAccounts = new Account;

$allClients = $myClients->getClients($managerId);
$allAccounts = $myAccounts->getAccounts($managerId);

// print_r($allClients);
// print_r($allAccounts);

foreach ($allClients as $client) {
  $foundMatch = false; // Flag to check if a matching account was found

  foreach ($allAccounts as $account) {
    if ($client['id'] == $account['user_id']) {
      // Combine user and account information into a single array
      $mergedData[] = array_merge($client, $account);
      $foundMatch = true; // A match was found
    }
  }

  if (!$foundMatch) {
    // If no matching account was found, add client data alone
    $mergedData[] = $client + array_fill_keys(array_keys($allAccounts[0]), null);
  }
}

// print_r($mergedData);



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
            <a href="javascript:void(0);">Cards</a>
          </li>
        </ol>
      </nav>
      <div class="card">
        <h5 class="card-header">Clients Card</h5>
        <?php if (!empty($mergedData)) : ?>
          <div class="table-responsive text-nowrap">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Account Number</th>
                  <th>Account Holder</th>
                  <th>Balance</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody class="table-border-bottom-0">
                <?php foreach ($mergedData as $data) :
                  // print_r($data);
                  $code = $data['usercode'];
                  $accountNumber = $data['account_number'];
                  $fullname = $data['firstName'] . ' ' . $data['lastName'];
                  $balance = $data['balance'];
                  $status = $data['status'];
                ?>
                  <tr>
                    <td>

                      <?php if (!isset($accountNumber)) { ?>
                        <span class="text-center badge bg-label-warning me-1">Inactive</span>
                      <?php } elseif (isset($accountNumber)) { ?>
                        <i class="bx bx-hash bx-sm text-dark me-3"></i>
                        <span class="fw-medium">
                          <span><?php echo $accountNumber; ?></span>
                        <?php } ?>
                        </span>
                    </td>
                    <td><?php echo $fullname; ?></td>
                    <td>
                      <?php if (!isset($accountNumber)) { ?>
                        <span class="badge bg-label-warning me-1">Inactive</span>
                      <?php } elseif (isset($accountNumber)) { ?>
                        <i class="bx bx-dollar bx-sm text-dark me-1"></i>
                        <span><?php echo Utilities::convertToCurrency($balance); ?></span>
                      <?php } ?>
                    </td>
                    <td>
                      <?php if ($status === 'active') { ?>
                        <span class="badge bg-label-primary me-1">Active</span>
                      <?php } elseif ($status === 'inactive') { ?>
                        <span class="badge bg-label-warning me-1">Inactive</span>
                      <?php } elseif ($status === 'suspended') { ?>
                        <span class="badge bg-label-info me-1">Suspended</span>
                      <?php } elseif ($status === 'closed') { ?>
                        <span class="badge bg-label-danger me-1">Closed</span>
                      <?php } elseif (!isset($status)) { ?>
                        <span class="badge bg-label-warning me-1">Inactive</span>
                      <?php } ?>
                    </td>
                    <td>
                      <?php if (isset($accountNumber)) : ?>
                        <div class="dropdown">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="mycard.php?accountowner=<?php echo $code; ?>&accountnumber=<?php echo $accountNumber; ?>"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-envelope me-1"></i> Contact</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                          </div>
                        </div>
                      <?php else : ?>
                        <a class="dropdown-item" href="accountmanagement.php?accountowner=<?php echo $code; ?>&accountnumber=<?php echo $accountNumber; ?>"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                      <?php endif ?>
                    </td>
                  </tr>
                <?php endforeach ?>

              </tbody>
            </table>
          </div>
        <?php else : ?>
          <p class="text-center text-primary">Your Portfolio is currently empty. Add Client's Accounts.</p>
        <?php endif ?>
      </div>
    </div>
    <!-- / Content -->

    <!-- Footer -->
    <?php
    require_once "../partials/footer.php";
    ?>