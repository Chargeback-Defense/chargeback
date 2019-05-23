<?php require 'header.php'; ?>
<?php require 'sidebar_nav.php'; ?>

<div class="main-panel">
<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <h4 class="title">Add Sub User</h4>
    </div>
  </div>
  <!-- row end -->

  <div class="row">
    <div class="col-lg-6 col-md-12 col-sm-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <form method="POST" id="add_clientss" enctype="multipart/form-data">
            <div class="form-group">
              <label for="ClientName">Client Name</label>
              <select class="form-control" id="access_level" name="access_level" required="">
                <option value="">Select Client</option>
                <option value="1" data-id="1">Chargeback Administrator</option>
                <option value="50" data-id="50">Black Creek Asset Group</option>
                <option value="132" data-id="132">Y2Payments</option>
                <option value="134" data-id="134">Premier Mediations LLC</option>
                <option value="138" data-id="138">Apple Recovery, LLC</option>
                <option value="139" data-id="139">MulchMate USA</option>
                <option value="149" data-id="149">Foundation Finance</option>
                <option value="154" data-id="154">Greengate Networks</option>
                <option value="160" data-id="160">Traci Robinson</option>
                <option value="184" data-id="184">Bushwood Capital Group Inc</option>
                <option value="188" data-id="188">TestGroup</option>
                <option value="191" data-id="191">Anvaar Baig</option>
                <option value="192" data-id="192">Chargeback Defense</option>
                <option value="193" data-id="193">Zenith Financial Inc</option>
                <option value="194" data-id="194">Prime LLC</option>
                <option value="197" data-id="197">Chargeback Defense</option>
                <option value="198" data-id="198">Anvaar Group</option>
                <option value="199" data-id="199">Payment Management Services</option>
                <option value="201" data-id="201">Legal Debt Processing Services</option>
                <option value="207" data-id="207">Y2Payments</option>
                <option value="210" data-id="210">Goliath Financial</option>
                <option value="211" data-id="211">Coastline Financial</option>
                <option value="213" data-id="213">Two Tone Media LLC</option>
                <option value="214" data-id="214">Small Business Visibilty MGT</option>
                <option value="218" data-id="218">Great Lakes Processing</option>
                <option value="219" data-id="219">Franklin Capital</option>
              </select>
            </div>
            <div class="form-group">
              <label for="Username">Username</label>
              <input type="text" class="form-control" required="" name="username" placeholder="Enter Username">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" required="" name="email" id="email" placeholder="Enter Email Address">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" required="" name="password" id="password" placeholder="Enter Password">
            </div>
            <div class="form-group">
              <label for="confirm_password">Confrim Password</label>
              <input type="password" class="form-control" required="" name="confirm_password" id="confirm_password" placeholder="Enter Confrim Password">
            </div>
            <div class="form-group">
              <label for="access_level">Access Level</label>
              <select class="form-control" id="access_level" name="access_level" required="">
                <option value="">None</option>
                <option value="1">Admin</option>
                <option value="3">Api user</option>
                <option value="4">C/S admin</option>
                <option value="5">C/S agent</option>
                <option value="6">Lead agent</option>
                <option value="7">Sale Agent</option>
              </select>
            </div>
            <div class="form-group">
              <label>Upload Logo</label>
              <input type="file" name="img[]" class="file-upload-default">
              <div class="input-group col-xs-12">
                <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Logo">
                <span class="input-group-append">
                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                </span> </div>
            </div>
            <button type="submit" class="btn btn-dark btn-fw">
            <i class="mdi mdi-account"></i>Add User</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- row end -->


</div>
<!-- content-wrapper ends -->
<?php require 'footer.php'; ?>
