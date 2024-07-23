<?php
ini_set("display_errors", "1");
session_start();
require_once "../classes/Utilities.php";
require_once "../classes/User.php";
require_once "../classes/Account.php";

$activeUser = ($_SESSION['useronline']);
$firstname = $activeUser['firstName'];
$lastname = $activeUser['lastName'];
$fullname = $firstname . ' ' . $lastname;
$activeUser = ($_SESSION['useronline']);


$userId = $activeUser['id'];

$getUser = new User;
$getAcct = new Account;
$userAccount = $getAcct->getAccount($userId);
$userInfo = $getUser->getUser($userId);

// Menu Info
$accountNumber = $userAccount['account_number'];
$accountType = $userAccount['account_type'];
$accountStatus = $userAccount['status'];
$accountLevel = $userAccount['Level'];

// Profile info

$fullname = $userInfo['first_name'] . ' ' . $userInfo['last_name'];
$dob = $userInfo['date_of_birth'];
$address = $userInfo['address_line1'] . ' ' . $userInfo['address_line2'];
$city = $userInfo['city'];
$state = $userInfo['state_name'];
$country = $userInfo['country_name'];
$email = $userInfo['email'];
$income = $userInfo['annual_income'];
$nationality = $userInfo['nationality'];
$idnumber = $userInfo['id_number'];
$accountnum = $userInfo['account_number'];
$taxid = $userInfo['taxid'];
$phone = $userInfo['phone'];
$occupation = $userInfo['occupation'];
$currency = $userInfo['currency'];

?>

<?php

require_once "../partials/hstart.php";

?>
<title>Banker's | My Account</title>

<?php require_once "../partials/hbottom.php"; ?>
<!-- Dashboards -->
<?php require_once "../partials/inactivedash.php"; ?>
<!-- Transactions -->
<?php require_once "../partials/inactivetransaction.php"; ?>

<!-- Loans and Mortgages -->
<?php require_once "../partials/inactiveloans.php"; ?>
<!-- card -->
<?php require_once "../partials/inactivecard.php"; ?>
<!-- Account -->
<?php require_once "../partials/inactiveaccount.php"; ?>
<!-- Settings -->
<?php require_once "../partials/activesettings.php"; ?>
<!-- Support -->
<?php require_once "../partials/inactivesupport.php"; ?>
</ul>
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
        <div class="col-md-12 col-lg-12">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="mb-0">Personal Profile</h5>
              <small class="text-muted float-end"><span class="text-danger">*</span>Contact Support for Updates <a href="support.html">Here</a></small>
            </div>
            <div class="card-body">
              <form>
                <div class="row">
                  <div class="col-md-6">
                    <fieldset>
                      <legend>Personal Data</legend>

                      <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
                        <div class="input-group input-group-merge">
                          <span class="input-group-text"><i class="bx bx-user"></i></span>
                          <input type="text" class="form-control" id="basic-icon-default-fullname" value="<?php echo $fullname ?>" disabled />
                        </div>
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-dob">Date of Birth</label>
                        <div class="input-group input-group-merge">
                          <span class="input-group-text"><i class="bx bx-calendar"></i></span>
                          <input type="date" class="form-control" id="basic-icon-default-dob" value="<?php echo $dob ?>" disabled />
                        </div>
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-nationality">Nationality</label>
                        <div class="input-group input-group-merge">
                          <span class="input-group-text"><i class="bx bx-flag"></i></span>
                          <input type="text" class="form-control" id="basic-icon-default-nationality" placeholder="Italian" value="<?php echo $nationality ?>" disabled />
                        </div>
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-id">National ID / Passport Number</label>
                        <div class="input-group input-group-merge">
                          <span class="input-group-text"><i class="bx bx-id-card"></i></span>
                          <input type="text" class="form-control" id="basic-icon-default-id" value="<?php echo $idnumber ?>" disabled />
                        </div>
                      </div>
                    </fieldset>
                  </div>

                  <div class="col-md-6">
                    <fieldset>
                      <legend>Bank Data</legend>

                      <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-hash">Account Number</label>
                        <div class="input-group input-group-merge">
                          <span class="input-group-text"><i class="bx bx-hash"></i></span>
                          <input type="number" id="basic-icon-default-hash" class="form-control" value="<?php echo $accountnum ?>" disabled />
                        </div>
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-income">Annual Income</label>
                        <div class="input-group input-group-merge">
                          <span class="input-group-text"><?php if ($currency === 'USD') { ?>
                              <i class="bx bx-dollar"></i>
                            <?php } else if ($currency === 'EURO') { ?>
                              <i class="bx bx-euro"></i>
                            <?php } ?> </span>
                          <input type="number" id="basic-icon-default-income" class="form-control" value="<?php echo $income ?>" disabled />
                        </div>
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="countryDataList">Country of Residence</label>
                        <input class="form-control" list="countries" id="countryDataList" value="<?php echo $country ?>" disabled />
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="taxResidenceDataList">Tax Residence</label>
                        <input class="form-control" list="taxResidences" id="taxResidenceDataList" value="<?php echo $country ?>" disabled />
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-tax-id">Tax Identification Number</label>
                        <div class="input-group input-group-merge">
                          <span class="input-group-text"><i class="bx bx-file"></i></span>
                          <input type="text" id="basic-icon-default-tax-id" class="form-control" value="<?php echo $taxid ?>" disabled />
                        </div>
                      </div>
                    </fieldset>
                  </div>
                </div>

                <div class="row mt-4">
                  <div class="col-md-12">
                    <fieldset>
                      <legend>Bio Data</legend>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-address">Residential Address</label>
                            <div class="input-group input-group-merge">
                              <span class="input-group-text"><i class="bx bx-home"></i></span>
                              <input type="text" class="form-control" id="basic-icon-default-address" value="<?php echo $address . ', ' . $city ?>" disabled />
                            </div>
                          </div>

                          <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-email">Email</label>
                            <div class="input-group input-group-merge">
                              <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                              <input type="email" id="basic-icon-default-email" class="form-control" value="<?php echo $email ?>" disabled />
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-phone">Phone Number</label>
                            <div class="input-group input-group-merge">
                              <span class="input-group-text"><i class="bx bx-phone"></i></span>
                              <input type="tel" id="basic-icon-default-phone" class="form-control phone-mask" value="<?php echo $phone ?>" disabled />
                            </div>
                          </div>

                          <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-occupation">Occupation</label>
                            <div class="input-group input-group-merge">
                              <span class="input-group-text"><i class="bx bx-briefcase"></i></span>
                              <input type="text" id="basic-icon-default-occupation" class="form-control" value="<?php echo $occupation ?>" disabled />
                            </div>
                          </div>
                        </div>
                      </div>
                    </fieldset>
                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>
        <div class="col-md-4">

          <form>
            <div class="form-password-toggle">
              <h5 class="mb-4">Change Password</h5>
              <label class="form-label" for="basic-default-password12">Old Password</label>
              <div class="input-group">
                <input type="password" class="form-control" id="basic-default-password12" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="basic-default-password2" />
                <span id="basic-default-password2" class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
              <label class="form-label" for="basic-default-password12">New Password</label>
              <div class="input-group">
                <input type="password" class="form-control" id="basic-default-password12" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="basic-default-password2" />
                <span id="basic-default-password2" class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
              <label class="form-label" for="basic-default-password12">Confirm Password</label>
              <div class="input-group">
                <input type="password" class="form-control" id="basic-default-password12" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="basic-default-password2" />
                <span id="basic-default-password2" class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
            </div>
            <div class="row justify-content-start my-4">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
            </div>
          </form>
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