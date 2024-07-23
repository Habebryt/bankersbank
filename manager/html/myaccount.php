<?php
require_once "../partials/headertop.php";
?>
<!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <a href="index.php" class="app-brand-link">
      <span class="app-brand-logo demo">
        <svg width="25" viewBox="0 0 25 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <defs>
            <path d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z" id="path-1"></path>
            <path d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z" id="path-3"></path>
            <path d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z" id="path-4"></path>
            <path d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z" id="path-5"></path>
          </defs>
          <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
              <g id="Icon" transform="translate(27.000000, 15.000000)">
                <g id="Mask" transform="translate(0.000000, 8.000000)">
                  <mask id="mask-2" fill="white">
                    <use xlink:href="#path-1"></use>
                  </mask>
                  <use fill="#696cff" xlink:href="#path-1"></use>
                  <g id="Path-3" mask="url(#mask-2)">
                    <use fill="#696cff" xlink:href="#path-3"></use>
                    <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                  </g>
                  <g id="Path-4" mask="url(#mask-2)">
                    <use fill="#696cff" xlink:href="#path-4"></use>
                    <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                  </g>
                </g>
                <g id="Triangle" transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) ">
                  <use fill="#696cff" xlink:href="#path-5"></use>
                  <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                </g>
              </g>
            </g>
          </g>
        </svg>
      </span>
      <span class="app-brand-text demo menu-text fw-bold ms-2">Banker's Bank</span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    <!-- Dashboards -->
    <li class="menu-item open">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Dashboards">Dashboards</div>
        <div class="badge bg-danger rounded-pill ms-auto">5</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="index.php" class="menu-link">
            <div data-i18n="Analytics">Account Overview</div>
          </a>
        </li>
      </ul>
    </li>

    <!-- Layouts -->
    <!-- Transactions -->

    <li class="menu-item">
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
        <li class="menu-item">
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
    <li class="menu-item">
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
        <li class="menu-item">
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
        <li class="menu-item">
          <a href="layouts-blank.php" class="menu-link">
            <div data-i18n="Blank">Blank</div>
          </a>
        </li>
      </ul>
    </li>
    <!-- card -->
    <li class="menu-item">
      <a href="card.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-credit-card"></i>
        <div data-i18n="Container">Cards</div>
      </a>
    </li>

    <!-- client -->
    <li class="menu-item">
      <a href="accounts.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-user"></i>
        <div data-i18n="Container">Clients</div>
      </a>
    </li>
    <!-- Account -->
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bxs-bank"></i>
        <div data-i18n="Layouts">Accounts</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
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
    <li class="menu-item active">
      <a href="myaccount.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-layout"></i>
        <div data-i18n="Container">My Profile</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="mysubscription.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-layout"></i>
        <div data-i18n="Container">My Subscription</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-help-circle"></i>
        <div data-i18n="Misc">Support</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="messagesupport.php" class="menu-link">
            <div data-i18n="Error">Message Support</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="clientrequest.php" class="menu-link">
            <div data-i18n="Under Maintenance">Client Requests</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="pastrequest.php" class="menu-link">
            <div data-i18n="Under Maintenance">Previous Requests</div>
          </a>
        </li>
      </ul>
    </li>
  </ul>
</aside>
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
      <div class="row">
        <div class="col-md-12 col-lg-12">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="mb-0">Personal Profile</h5>
              <small class="text-muted float-end"><span class="text-danger">*</span>Contact Support for Updates
                <a href="messagesupport.php">Here</a></small>
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