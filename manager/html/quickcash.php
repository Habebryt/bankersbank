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
      <a href="transactions.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-wallet"></i>
        <div data-i18n="Container">Transactions</div>
      </a>
    </li>
    <li class="menu-item d-none">
      <a href="layouts-blank.php" class="menu-link">
        <div data-i18n="Blank">Blank</div>
      </a>
    </li>

    <!-- Loans and Mortgages -->
    <li class="menu-item active">
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
        <li class="menu-item active">
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
    <li class="menu-item">
      <a href="layouts-container.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-layout"></i>
        <div data-i18n="Container">Account Management</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-help-circle"></i>
        <div data-i18n="Misc">Support</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="pages-misc-error.php" class="menu-link">
            <div data-i18n="Error">Message Support</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="pages-misc-under-maintenance.php" class="menu-link">
            <div data-i18n="Under Maintenance">View Past Requests</div>
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
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Overview</a>
          </li>
          <li class="breadcrumb-item">
            <a href="javascript:void(0);">Payments</a>
          </li>
          <li class="breadcrumb-item">
            <a href="cash.php">Quick Cash</a>
          </li>
          <li class="breadcrumb-item active">Client Name</li>
        </ol>
      </nav>
      <div class="row">
        <!-- Credit Information Section -->
        <div class="col-md-5">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="card-title d-flex align-items-start justify-content-between">
                    <div class="avatar flex-shrink-0">
                      <button class="btn btn-sm btn-primary"><i class="bx bx-edit"></i></button>
                    </div>
                    <div class="dropdown">
                      <button class="btn p-0 disabled" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                        <a class="dropdown-item" href="javascript:void(0);">Apply for Loan</a>
                        <a class="dropdown-item" href="javascript:void(0);">View Eligibility</a>
                      </div>
                    </div>
                  </div>
                  <span class="fw-medium d-block mb-1">Available Credit</span>
                  <h3 class="card-title mb-2">$5,000</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="card-title d-flex align-items-start justify-content-between">
                    <div class="avatar flex-shrink-0">
                      <button class="btn btn-sm btn-primary"><i class="bx bx-edit"></i></button>
                    </div>
                    <div class="dropdown">
                      <button class="btn p-0 disabled" type="button" id="cardOpt6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                        <a class="dropdown-item" href="javascript:void(0);">View Terms</a>
                        <a class="dropdown-item" href="javascript:void(0);">Calculate Repayment</a>
                      </div>
                    </div>
                  </div>
                  <span>Current APR</span>
                  <h3 class="card-title text-nowrap mb-1">29.99%</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="card-title d-flex align-items-start justify-content-between">
                    <div class="avatar flex-shrink-0">
                      <button class="btn btn-sm btn-primary"><i class="bx bx-edit"></i></button>
                    </div>
                    <div class="dropdown">
                      <button class="btn p-0 disabled" type="button" id="cardOpt4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                        <a class="dropdown-item" href="javascript:void(0);">Link Account</a>
                        <a class="dropdown-item" href="javascript:void(0);">Remove</a>
                      </div>
                    </div>
                  </div>
                  <span class="d-block mb-1">Instant Transfer</span>
                  <h3 class="card-title text-nowrap mb-2">Available</h3>
                </div>
              </div>
            </div>
            <div class="col-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="card-title d-flex align-items-start justify-content-between">
                    <div class="avatar flex-shrink-0">
                      <button class="btn btn-sm btn-primary"><i class="bx bx-edit"></i></button>
                    </div>
                    <div class="dropdown">
                      <button class="btn p-0 disabled" type="button" id="cardOpt1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu" aria-labelledby="cardOpt1">
                        <a class="dropdown-item" href="javascript:void(0);">View Details</a>
                        <a class="dropdown-item" href="javascript:void(0);">Update Info</a>
                      </div>
                    </div>
                  </div>
                  <span class="fw-medium d-block mb-1">Repayment Method</span>
                  <h3 class="card-title mb-2">Direct Debit</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Quick Cash Options Section -->
        <div class="col-md-7">
          <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="card-title m-0 me-2">Quick Cash Options</h5>
              <div class="dropdown">
                <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                  <a class="dropdown-item" href="javascript:void(0);">Last 7 Days</a>
                  <a class="dropdown-item" href="javascript:void(0);">Last 30 Days</a>
                  <a class="dropdown-item" href="javascript:void(0);">Last 3 Months</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered">
                  <thead class="table-light">
                    <tr>
                      <th scope="col" class="text-nowrap">Option</th>
                      <th scope="col">Amount</th>
                      <th scope="col" class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="../assets/img/icons/unicons/lightning.png" alt="Instant Cash" class="rounded me-2" width="32" />
                          <span class="fw-semibold">Instant Cash</span>
                        </div>
                      </td>

                      <td>Up to $1,000</td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-primary">Edit <i class="bx bx-edit"></i></button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="../assets/img/icons/unicons/chart.png" alt="Flex Loan" class="rounded me-2" width="32" />
                          <span class="fw-semibold">Flex Loan</span>
                        </div>
                      </td>

                      <td>$1,000 - $5,000</td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-primary">Edit <i class="bx bx-edit"></i></button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="../assets/img/icons/unicons/wallet-info.png" alt="Cash Advance" class="rounded me-2" width="32" />
                          <span class="fw-semibold">Cash Advance</span>
                        </div>
                      </td>

                      <td>Up to $500</td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-primary">Edit <i class="bx bx-edit"></i></button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="../assets/img/icons/unicons/cc-success.png" alt="Line of Credit" class="rounded me-2" width="32" />
                          <span class="fw-semibold">Line of Credit</span>
                        </div>
                      </td>

                      <td>Up to $10,000</td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-primary">Edit <i class="bx bx-edit"></i></button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="../assets/img/icons/unicons/briefcase.png" alt="Business Loan" class="rounded me-2" width="32" />
                          <span class="fw-semibold">Business Loan</span>
                        </div>
                      </td>

                      <td>$5,000 - $50,000</td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-primary">Edit <i class="bx bx-edit"></i></button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <p class="text-muted text-center mt-3">
                <a href="javascript:void(0);" class="link-primary">Use Our Loan Calculator</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / Content -->

    <!-- Footer -->
    <?php
    require_once "../partials/footer.php";
    ?>