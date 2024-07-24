<?php
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
<?php require_once "../partials/aside/activeaccountmanagement.php";
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
            <a href="accounts.php">All Clients</a>
          </li>
          <li class="breadcrumb-item">
            <a href="javascript:void(0);">Client Name</a>
          </li>
        </ol>
      </nav>
      <div class="row">
        <div class="col-md-12 col-lg-12">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="mb-0">Personal Profile</h5>
              <small class="text-muted float-end"><span class="text-danger">*</span>Contact Support for Updates
                <a href="support.php">Here</a></small>
            </div>
            <div>
              <div class="card-body">
                <div class="d-flex align-items-start align-items-sm-center gap-4">
                  <img src="../assets/img/avatars/1.png" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
                  <div class="button-wrapper">
                    <form action="">
                      <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                        <span class="d-none d-sm-block">Upload new photo</span>
                        <i class="bx bx-upload d-block d-sm-none"></i>
                        <input type="file" id="upload" class="account-file-input" hidden accept="image/png, image/jpeg" />
                      </label>
                      <button type="submit" class="btn btn-success account-image-upload mb-4">Upload</button>
                      <button type="reset" class="btn btn-outline-secondary account-image-reset mb-4">
                        <i class="bx bx-reset d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Reset</span>
                      </button>

                      <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                    </form>
                  </div>
                </div>
              </div>
              <hr class="my-0" />
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <form action="">
                    <fieldset>
                      <legend>Personal Data</legend>

                      <div class="mb-3 d-block">
                        <div class="mb-3 col-md-12">
                          <label for="firstName" class="form-label">First Name</label>
                          <input class="form-control" type="text" id="firstName" name="firstName" value="Habeeb" autofocus />
                        </div>
                        <div class="mb-3 col-md-12">
                          <label for="lastName" class="form-label">Last Name</label>
                          <input class="form-control" type="text" name="lastName" id="lastName" value="Bright" />
                        </div>
                        <div class="mb-3 col-md-12">
                          <label for="otherName" class="form-label">Other Name</label>
                          <input class="form-control" type="text" name="otherName" id="otherName" value="Bright" />
                        </div>
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-dob">Date of Birth</label>
                        <div class="input-group input-group-merge">
                          <span class="input-group-text"><i class="bx bx-calendar"></i></span>
                          <input type="date" class="form-control" id="basic-icon-default-dob" />
                        </div>
                      </div>

                      <div class="mb-3 col-md-12">
                        <label class="form-label" for="country">Country of Nationality</label>
                        <select id="country" class="select2 form-select">
                          <option value="">Select</option>
                          <option value="Australia">Australia</option>
                          <option value="Bangladesh">Bangladesh</option>
                          <option value="Belarus">Belarus</option>
                          <option value="Brazil">Brazil</option>
                          <option value="Canada">Canada</option>
                          <option value="China">China</option>
                          <option value="France">France</option>
                          <option value="Germany">Germany</option>
                          <option value="India">India</option>
                          <option value="Indonesia">Indonesia</option>
                          <option value="Israel">Israel</option>
                          <option value="Italy">Italy</option>
                          <option value="Japan">Japan</option>
                          <option value="Korea">Korea, Republic of</option>
                          <option value="Mexico">Mexico</option>
                          <option value="Philippines">Philippines</option>
                          <option value="Russia">Russian Federation</option>
                          <option value="South Africa">South Africa</option>
                          <option value="Thailand">Thailand</option>
                          <option value="Turkey">Turkey</option>
                          <option value="Ukraine">Ukraine</option>
                          <option value="United Arab Emirates">United Arab Emirates</option>
                          <option value="United Kingdom">United Kingdom</option>
                          <option value="United States">United States</option>
                        </select>
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-id">National ID / Passport Number</label>
                        <div class="input-group input-group-merge">
                          <span class="input-group-text"><i class="bx bx-id-card"></i></span>
                          <input type="text" class="form-control" id="basic-icon-default-id" placeholder="AB123456" />
                        </div>
                      </div>
                    </fieldset>
                    <div class="mt-2">
                      <button type="submit" class="btn btn-primary me-2">Save changes</button>
                      <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                    </div>
                  </form>
                </div>

                <div class="col-md-6">
                  <form action="">
                    <fieldset>
                      <legend>Bank Data</legend>

                      <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-hash">Account Number</label>
                        <div class="input-group input-group-merge">
                          <span class="input-group-text"><i class="bx bx-hash"></i></span>
                          <input type="number" id="basic-icon-default-hash" class="form-control" placeholder="0123456789" />
                        </div>
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-income">Annual Income</label>
                        <div class="input-group input-group-merge">
                          <span class="input-group-text"><i class="bx bx-dollar"></i></span>
                          <input type="number" id="basic-icon-default-income" class="form-control" placeholder="50000" />
                        </div>
                      </div>

                      <div class="mb-3 col-md-12">
                        <label class="form-label" for="country">Country of Residence</label>
                        <select id="country" class="select2 form-select">
                          <option value="">Select</option>
                          <option value="Australia">Australia</option>
                          <option value="Bangladesh">Bangladesh</option>
                          <option value="Belarus">Belarus</option>
                          <option value="Brazil">Brazil</option>
                          <option value="Canada">Canada</option>
                          <option value="China">China</option>
                          <option value="France">France</option>
                          <option value="Germany">Germany</option>
                          <option value="India">India</option>
                          <option value="Indonesia">Indonesia</option>
                          <option value="Israel">Israel</option>
                          <option value="Italy">Italy</option>
                          <option value="Japan">Japan</option>
                          <option value="Korea">Korea, Republic of</option>
                          <option value="Mexico">Mexico</option>
                          <option value="Philippines">Philippines</option>
                          <option value="Russia">Russian Federation</option>
                          <option value="South Africa">South Africa</option>
                          <option value="Thailand">Thailand</option>
                          <option value="Turkey">Turkey</option>
                          <option value="Ukraine">Ukraine</option>
                          <option value="United Arab Emirates">United Arab Emirates</option>
                          <option value="United Kingdom">United Kingdom</option>
                          <option value="United States">United States</option>
                        </select>
                      </div>

                      <div class="mb-3 col-md-12">
                        <label class="form-label" for="state">State of Residence</label>
                        <select id="state" class="select2 form-select">
                          <option value="">Select</option>
                          <option value="Australia">Australia</option>
                          <option value="Bangladesh">Bangladesh</option>
                          <option value="Belarus">Belarus</option>
                          <option value="Brazil">Brazil</option>
                          <option value="Canada">Canada</option>
                          <option value="China">China</option>
                          <option value="France">France</option>
                          <option value="Germany">Germany</option>
                          <option value="India">India</option>
                          <option value="Indonesia">Indonesia</option>
                          <option value="Israel">Israel</option>
                          <option value="Italy">Italy</option>
                          <option value="Japan">Japan</option>
                          <option value="Korea">Korea, Republic of</option>
                          <option value="Mexico">Mexico</option>
                          <option value="Philippines">Philippines</option>
                          <option value="Russia">Russian Federation</option>
                          <option value="South Africa">South Africa</option>
                          <option value="Thailand">Thailand</option>
                          <option value="Turkey">Turkey</option>
                          <option value="Ukraine">Ukraine</option>
                          <option value="United Arab Emirates">United Arab Emirates</option>
                          <option value="United Kingdom">United Kingdom</option>
                          <option value="United States">United States</option>
                        </select>
                      </div>

                      <div class="mb-3 col-md-12">
                        <label class="form-label" for="country">Tax Residence</label>
                        <select id="taxResidence" class="select2 form-select">
                          <option value="">Select</option>
                          <option value="Australia">Australia</option>
                          <option value="Bangladesh">Bangladesh</option>
                          <option value="Belarus">Belarus</option>
                          <option value="Brazil">Brazil</option>
                          <option value="Canada">Canada</option>
                          <option value="China">China</option>
                          <option value="France">France</option>
                          <option value="Germany">Germany</option>
                          <option value="India">India</option>
                          <option value="Indonesia">Indonesia</option>
                          <option value="Israel">Israel</option>
                          <option value="Italy">Italy</option>
                          <option value="Japan">Japan</option>
                          <option value="Korea">Korea, Republic of</option>
                          <option value="Mexico">Mexico</option>
                          <option value="Philippines">Philippines</option>
                          <option value="Russia">Russian Federation</option>
                          <option value="South Africa">South Africa</option>
                          <option value="Thailand">Thailand</option>
                          <option value="Turkey">Turkey</option>
                          <option value="Ukraine">Ukraine</option>
                          <option value="United Arab Emirates">United Arab Emirates</option>
                          <option value="United Kingdom">United Kingdom</option>
                          <option value="United States">United States</option>
                        </select>
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-tax-id">Tax Identification Number</label>
                        <div class="input-group input-group-merge">
                          <span class="input-group-text"><i class="bx bx-file"></i></span>
                          <input type="text" id="basic-icon-default-tax-id" class="form-control" placeholder="123456789" />
                        </div>
                      </div>
                    </fieldset>
                    <div class="mt-2">
                      <button type="submit" class="btn btn-primary me-2">Save changes</button>
                      <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                    </div>
                  </form>
                </div>
              </div>

              <div class="row mt-4">
                <div class="col-md-12">
                  <form action="">
                    <fieldset>
                      <legend>Bio Data</legend>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-address">Residential Address</label>
                            <div class="input-group input-group-merge">
                              <span class="input-group-text"><i class="bx bx-home"></i></span>
                              <input type="text" class="form-control" id="basic-icon-default-address" placeholder="123 Main St, 12345 City" />
                            </div>
                          </div>

                          <div class="mb-3 col-md-12">
                            <label for="timeZones" class="form-label">Timezone</label>
                            <select id="timeZones" class="select2 form-select">
                              <option value="">Select Timezone</option>
                              <option value="-12">(GMT-12:00) International Date Line West</option>
                              <option value="-11">(GMT-11:00) Midway Island, Samoa</option>
                              <option value="-10">(GMT-10:00) Hawaii</option>
                              <option value="-9">(GMT-09:00) Alaska</option>
                              <option value="-8">(GMT-08:00) Pacific Time (US & Canada)</option>
                              <option value="-8">(GMT-08:00) Tijuana, Baja California</option>
                              <option value="-7">(GMT-07:00) Arizona</option>
                              <option value="-7">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
                              <option value="-7">(GMT-07:00) Mountain Time (US & Canada)</option>
                              <option value="-6">(GMT-06:00) Central America</option>
                              <option value="-6">(GMT-06:00) Central Time (US & Canada)</option>
                              <option value="-6">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
                              <option value="-6">(GMT-06:00) Saskatchewan</option>
                              <option value="-5">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
                              <option value="-5">(GMT-05:00) Eastern Time (US & Canada)</option>
                              <option value="-5">(GMT-05:00) Indiana (East)</option>
                              <option value="-4">(GMT-04:00) Atlantic Time (Canada)</option>
                              <option value="-4">(GMT-04:00) Caracas, La Paz</option>
                            </select>
                          </div>

                          <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-email">Email</label>
                            <div class="input-group input-group-merge">
                              <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                              <input type="email" id="basic-icon-default-email" class="form-control" placeholder="john.doe@example.com" />
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="mb-3 col-md-12">
                            <label class="form-label" for="phoneNumber">Phone Number</label>
                            <div class="input-group input-group-merge">
                              <span class="input-group-text">US (+1)</span>
                              <input type="text" id="phoneNumber" name="phoneNumber" class="form-control" placeholder="202 555 0111" />
                            </div>
                          </div>

                          <div class="mb-3 col-md-12">
                            <label for="zipCode" class="form-label">Zip Code</label>
                            <input type="text" class="form-control" id="zipCode" name="zipCode" placeholder="231465" maxlength="6" />
                          </div>

                          <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-occupation">Occupation</label>
                            <div class="input-group input-group-merge">
                              <span class="input-group-text"><i class="bx bx-briefcase"></i></span>
                              <input type="text" id="basic-icon-default-occupation" class="form-control" placeholder="Software Engineer" />
                            </div>
                          </div>
                        </div>
                      </div>
                    </fieldset>
                    <div class="mt-2">
                      <button type="submit" class="btn btn-primary me-2">Save changes</button>
                      <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <form action="">
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
    <?php
    require_once "../partials/footer.php";
    ?>