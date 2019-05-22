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