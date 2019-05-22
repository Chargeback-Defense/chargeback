<!-- Header Section -->
<?php require 'header.php'; ?>

<!-- Sidebar Nav -->
<?php require 'sidebar_nav.php'; ?>
      
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
          <div class="card card-statistics">
            <div class="card-body">
              <div class="clearfix">
                <div class="float-left">
                  <i class="mdi mdi-database text-danger icon-lg"></i>
                </div>
                <div class="float-right">
                  <p class="mb-0 text-right">Total</p>
                  <div class="fluid-container">
                    <h3 class="font-weight-medium text-right mb-0">$65,650</h3>
                  </div>
                </div>
<<<<<<< HEAD
=======
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium text-dark">Application Error</h6>
                  <p class="font-weight-light small-text">
                    Just now
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="mdi mdi-comment-text-outline mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium text-dark">Settings</h6>
                  <p class="font-weight-light small-text">
                    Private message
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="mdi mdi-email-outline mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium text-dark">New user registration</h6>
                  <p class="font-weight-light small-text">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text">Hello, ChargeBack !</span>
              <img class="img-xs rounded-circle" src="images/faces/face1.jpg" alt="Profile image">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a class="dropdown-item p-0">
                <div class="d-flex border-bottom">
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                    <i class="mdi mdi-account-outline mr-0 text-gray"></i>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="mdi mdi-alarm-check mr-0 text-gray"></i>
                  </div>
                </div>
              </a>
              <a class="dropdown-item mt-2">
                Manage Accounts
              </a>
              <a class="dropdown-item">
                Change Password
              </a>
              <a class="dropdown-item">
                Check Inbox
              </a>
              <a class="dropdown-item">
                Sign Out
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="menu-icon mdi mdi-shield-half-full"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#Clients" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-account-multiple"></i>
              <span class="menu-title">Clients</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="Clients">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="pages/clients/all_customer.php">Client Names</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/clients/all_users.php">Sub Users</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#Y2payment" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-hackernews"></i>
              <span class="menu-title">Y2payment</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="Y2payment">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="pages/clients/all_customer.php">Transaction Management</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/clients/all_users.php">Batch Management</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/clients/all_users.php">Scheduled Payments</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/clients/all_users.php">Recurring Payments</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/clients/all_users.php">Failed Attempt</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/clients/all_users.php">Recurring Payments</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/clients/all_users.php">Import App Docs</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#CBDefense" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-database"></i>
              <span class="menu-title">CB Defense</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="CBDefense">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="pages/clients/all_customer.php">Alerts</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/clients/all_users.php">Chargebacks</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <!-- <a class="nav-link" href="pages/forms/basic_elements.html"> -->
            <a class="nav-link" href="pages/forms/basic_elements.html">
              <i class="menu-icon mdi mdi-newspaper"></i>
              <span class="menu-title">Add Merchants</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/charts/chartjs.html">
              <i class="menu-icon mdi mdi-plus-outline"></i>
              <span class="menu-title">All Merchants</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#email-template" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-email-variant"></i>
              <span class="menu-title">Email Template</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="email-template">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/buttons.html">All Template</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/typography.html">Create Template</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#admin-setting" aria-expanded="false" aria-controls="admin-setting">
              <i class="menu-icon mdi mdi-settings"></i>
              <span class="menu-title">Admin Setting</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="admin-setting">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/buttons.html">Admin Setting</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Logs</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">TSYS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Dashboard Setting</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">UAL Presets</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Tokens</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Processors</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Assign FTP</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="collapse" href="#group-client" aria-expanded="false" aria-controls="group-client">
                    <span class="menu-title">Group Client</span>
                    <i class="menu-arrow"></i>
                  </a>
                  <div class="collapse show" id="group-client">
                    <ul class="nav flex-column sub-menu">
                      <li class="nav-item">
                        <a class="nav-link" href="pages/ui-features/buttons.html">Create Group</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">All Grouped Clients</a>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-chart-bar"></i>
              <span class="menu-title">Reporting</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/buttons.html">Transaction Summary</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Transaction Detail</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Dispute Ratio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="collapse" data-target=".multi-collapse" href="#Reporting" aria-expanded="false" aria-controls="Reporting">
                    <i class="menu-icon mdi mdi-chart-bar"></i>
                    <span class="menu-title">Reporting</span>
                    <i class="menu-arrow"></i>
                  </a>
                  <div class="collapse show" id="Reporting">
                    <ul class="nav flex-column sub-menu">
                      <li class="nav-item">
                        <a class="nav-link" href="pages/ui-features/buttons.html">Transaction Summary</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Transaction Detail</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Dispute Ratio</a>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-table-large"></i>
              <span class="menu-title">Web Forms</span>
              <i class="menu-arrow"></i>
            </a>
            <!-- <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/typography.html">Typography</a>
                </li>
              </ul>
            </div> -->
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Tables</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/icons/font-awesome.html">
              <i class="menu-icon mdi mdi-sticker"></i>
              <span class="menu-title">Icons</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-restart"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/login.html"> Login </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/register.html"> Register </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/error-404.html"> 404 </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/error-500.html"> 500 </a>
                </li>
              </ul>
            </div>
          </li> -->
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-database text-danger icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Total</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">$65,650</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> Sales
                  </p>
                </div>
>>>>>>> parent of b060a70... Only pages created
              </div>
              <p class="text-muted mt-3 mb-0">
                <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> Sales
              </p>
            </div>
          </div>
        </div> <!-- Column 1 -->


        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
          <div class="card card-statistics">
            <div class="card-body">
              <div class="clearfix">
                <div class="float-left">
                  <i class="mdi mdi-history text-warning icon-lg"></i>
                </div>
                <div class="float-right">
                  <p class="mb-0 text-right">Total</p>
                  <div class="fluid-container">
                    <h3 class="font-weight-medium text-right mb-0">3455</h3>
                  </div>
                </div>
              </div>
              <p class="text-muted mt-3 mb-0">
                <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> Charge Back
              </p>
            </div>
          </div>
        </div> <!-- Column 2 -->


        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
          <div class="card card-statistics">
            <div class="card-body">
              <div class="clearfix">
                <div class="float-left">
                  <i class="mdi mdi-bell text-success icon-lg"></i>
                </div>
                <div class="float-right">
                  <p class="mb-0 text-right">Total</p>
                  <div class="fluid-container">
                    <h3 class="font-weight-medium text-right mb-0">5693</h3>
                  </div>
                </div>
              </div>
              <p class="text-muted mt-3 mb-0">
                <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> Alerts
              </p>
            </div>
          </div>
        </div> <!-- Column 3 -->



        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
          <div class="card card-statistics">
            <div class="card-body">
              <div class="clearfix">
                <div class="float-left">
                  <i class="mdi mdi-account-location text-info icon-lg"></i>
                </div>
                <div class="float-right">
                  <p class="mb-0 text-right">Total</p>
                  <div class="fluid-container">
                    <h3 class="font-weight-medium text-right mb-0">246</h3>
                  </div>
                </div>
              </div>
              <p class="text-muted mt-3 mb-0">
                <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> Sub Users
              </p>
            </div>
          </div>
        </div> <!-- Column 4 -->

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
          <div class="card card-statistics">
            <div class="card-body">
              <div class="clearfix">
                <div class="float-left">
                  <i class="mdi mdi-account text-dark icon-lg"></i>
                </div>
                <div class="float-right">
                  <p class="mb-0 text-right">Total</p>
                  <div class="fluid-container">
                    <h3 class="font-weight-medium text-right mb-0">246</h3>
                  </div>
                </div>
              </div>
              <p class="text-muted mt-3 mb-0">
                <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> Clients
              </p>
            </div>
          </div>
        </div> <!-- Column 5 -->

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
          <div class="card card-statistics">
            <div class="card-body">
              <div class="clearfix">
                <div class="float-left">
                  <i class="mdi mdi-cart text-green icon-lg"></i>
                </div>
                <div class="float-right">
                  <p class="mb-0 text-right">Total</p>
                  <div class="fluid-container">
                    <h3 class="font-weight-medium text-right mb-0">246</h3>
                  </div>
                </div>
              </div>
              <p class="text-muted mt-3 mb-0">
                <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> Merchants
              </p>
            </div>
          </div>
        </div> <!-- Column 6 -->


      </div> <!-- 4 Boxes end row -->

      <!-- full graph start -->
      <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <div class="row d-none d-sm-flex mb-4">
                <div class="col-4">
                  <h5 class="text-primary">Unique Visitors</h5>
                  <p>34657</p>
                </div>
                <div class="col-4">
                  <h5 class="text-primary">Bounce Rate</h5>
                  <p>45673</p>
                </div>
                <div class="col-4">
                  <h5 class="text-primary">Active session</h5>
                  <p>45673</p>
                </div>
              </div>
              <div class="chart-container">
                <canvas id="dashboard-area-chart" height="80"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- full graph end -->
    
      <!-- 2 Small graph start -->
      <div class="row">
        <div class="col-lg-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Left chart</h4>
              <canvas id="barChart" style="height:230px"></canvas>
            </div>
          </div>
        </div> <!-- left small graph -->
        
        <div class="col-lg-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Right chart</h4>
              <canvas id="barChart2" style="height:230px"></canvas>
            </div>
          </div>
        </div> <!-- right small graph -->

      </div>
      <!-- 2 Small graph end -->


      <!-- 4 Pie chart Start -->
      <div class="row">
        <div class="col-lg-3 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Chart 1</h4>
              <canvas id="doughnutChart" style="height:250px"></canvas>
            </div>
          </div>
        </div> <!-- 1 PieChart End -->

        <div class="col-lg-3 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Chart 2</h4>
              <canvas id="pieChart" style="height:250px"></canvas>
            </div>
          </div>
        </div> <!-- 2 PieChart End -->

        <div class="col-lg-3 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Chart 3</h4>
              <canvas id="doughnutChart1" style="height:250px"></canvas>
            </div>
          </div>
        </div> <!-- 3 PieChart End -->

        <div class="col-lg-3 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Chart 4</h4>
              <canvas id="pieChart1" style="height:250px"></canvas>
            </div>
          </div>
        </div> <!-- 4 PieChart End -->

      </div>
      <!-- 4 Pie chart End -->
    </div>
    <!-- content-wrapper ends -->

<!-- Footer Section -->
<?php //require 'footer.php'; ?>