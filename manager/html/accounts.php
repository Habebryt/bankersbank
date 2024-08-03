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

// die;

// foreach ($allClients as $client) {
//   $foundMatch = false; // Flag to check if a matching account was found

//   foreach ($allAccounts as $account) {
//     if ($client['id'] == $account['user_id']) {
//       // Combine user and account information into a single array
//       $mergedData[] = array_merge($client, $account);
//       $foundMatch = true; // A match was found
//     }
//   }

//   if (!$foundMatch) {
//     // If no matching account was found, add client data alone
//     $mergedData[] = $client + array_fill_keys(array_keys($allAccounts[0]), null);
//   }
// }

foreach ($allClients as $client) {
  $foundMatch = false; // Flag to check if a matching account was found

  if (!empty($allAccounts)) { // Check if $allAccounts is not empty
    foreach ($allAccounts as $account) {
      if ($client['id'] == $account['user_id']) {
        // Combine user and account information into a single array
        $mergedData[] = array_merge($client, $account);
        $foundMatch = true; // A match was found
        break; // Exit the inner loop once a match is found
      }
    }
  }

  if (!$foundMatch) {
    // If no matching account was found, add client data alone
    if (!empty($allAccounts)) {
      $mergedData[] = $client + array_fill_keys(array_keys($allAccounts[0]), null);
    } else {
      $mergedData[] = $client; // If $allAccounts is empty, just add the client data
    }
  }
}

// print_r($mergedData);



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


<!-- client -->
<li class="menu-item active">
  <a href="accounts.php" class="menu-link">
    <i class="menu-icon tf-icons bx bx-user"></i>
    <div data-i18n="Container">Clients</div>
  </a>
</li>
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
      <div class="mb-3">
        <div class="row alert">
          <div class="col-md-12">
            <?php if (isset($_SESSION['feedback'])) : ?>
              <div class="alert alert-primary alert-dismissible text-center">
                <?php echo $_SESSION['feedback'] ?></div>
              <?php unset($_SESSION['feedback']); ?>
            <?php endif; ?>
          </div>
        </div>

        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addClient">Add Client</button>
      </div>
      <div class="card">
        <h5 class="card-header">Portfolio Accounts</h5>
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
                  $code = $data['usercode'] ?? '';
                  $accountNumber = $data['account_number'] ?? null;
                  $fullname = ($data['firstName'] ?? '') . ' ' . ($data['lastName'] ?? '');
                  $balance = $data['balance'] ?? null;
                  $status = $data['status'] ?? null;
                ?>
                  <tr>
                    <td>
                      <?php if ($accountNumber === null) : ?>
                        <span class="text-center badge bg-label-warning me-1">Inactive</span>
                      <?php else : ?>
                        <i class="bx bx-hash bx-sm text-dark me-3"></i>
                        <span class="fw-medium">
                          <?php echo htmlspecialchars($accountNumber); ?>
                        </span>
                      <?php endif; ?>
                    </td>
                    <td><?php echo htmlspecialchars($fullname); ?></td>
                    <td>
                      <?php if ($accountNumber === null) : ?>
                        <span class="badge bg-label-warning me-1">Inactive</span>
                      <?php else : ?>
                        <i class="bx bx-dollar bx-sm text-dark me-1"></i>
                        <span><?php echo $balance !== null ? Utilities::convertToCurrency($balance) : 'N/A'; ?></span>
                      <?php endif; ?>
                    </td>
                    <td>
                      <?php
                      $statusBadge = match ($status) {
                        'active' => 'bg-label-primary',
                        'inactive' => 'bg-label-warning',
                        'suspended' => 'bg-label-info',
                        'closed' => 'bg-label-danger',
                        default => 'bg-label-warning'
                      };
                      $statusText = $status ?? 'Inactive';
                      ?>
                      <span class="badge <?php echo $statusBadge; ?> me-1"><?php echo htmlspecialchars(ucfirst($statusText)); ?></span>
                    </td>
                    <td>
                      <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="accountmanagement.php?accountowner=<?php echo urlencode($code); ?>&accountnumber=<?php echo urlencode($accountNumber ?? ''); ?>"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                          <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-envelope me-1"></i> Contact</a>
                          <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        <?php else : ?>
          <p class="text-center text-primary">Your Portfolio is currently empty.</p>
        <?php endif ?>
      </div>
    </div>







    <!-- / Content -->

    <!-- Footer -->
    <?php
    require_once "../partials/footer.php";
    ?>