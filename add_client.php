<?php require 'header.php'; ?>
<?php require 'sidebar_nav.php'; ?>

<div class="main-panel">
<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <h4 class="title">Add Client</h4>
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
              <input type="text" class="form-control" required="" name="dba" id="dba" placeholder="Client Name">
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
            <i class="mdi mdi-account"></i>Add Client</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- row end -->


</div>
<!-- content-wrapper ends -->
<?php require 'footer.php'; ?>
