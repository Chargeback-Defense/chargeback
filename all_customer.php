<?php require 'header.php'; ?>
<?php require 'sidebar_nav.php'; ?>

<div class="main-panel">
<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <h4 class="title">Client Names</h4>
    </div>
  </div>
  <!-- row end -->

  <div class="row">
    <div class="col-md-12 d-flex align-items-stretch grid-margin">
      <div class="row flex-grow">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <form class="forms-sample">
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="form-group">
                      <label id="cardoracc">Client Name</label>
                      <select class="form-control" name="legalDBA" id="search_legaldba">
                        <option value="">Select Client Name</option>
                        <option value="Anvaar Baig">Anvaar Baig</option>
                        <option value="Apple Recovery, LLC">Apple Recovery, LLC</option>
                        <option value="Black Creek Asset Group">Black Creek Asset Group</option>
                        <option value="Bushwood Capital Group Inc">Bushwood Capital Group Inc</option>
                        <option value="Chargeback Administrator">Chargeback Administrator</option>
                        <option value="Chargeback Defense">Chargeback Defense</option>
                        <option value="Coastline Financial">Coastline Financial</option>
                        <option value="Foundation Finance">Foundation Finance</option>
                        <option value="Franklin Capital">Franklin Capital</option>
                        <option value="Goliath Financial">Goliath Financial</option>
                        <option value="Great Lakes Processing">Great Lakes Processing</option>
                        <option value="Greengate Networks">Greengate Networks</option>
                        <option value="Legal Debt Processing Services">Legal Debt Processing Services</option>
                        <option value="MulchMate USA">MulchMate USA</option>
                        <option value="Payment Management Services">Payment Management Services</option>
                        <option value="Premier Mediations LLC">Premier Mediations LLC</option>
                        <option value="Prime LLC">Prime LLC</option>
                        <option value="Small Business Visibilty MGT">Small Business Visibilty MGT</option>
                        <option value="Traci Robinson">Traci Robinson</option>
                        <option value="Two Tone Media LLC">Two Tone Media LLC</option>
                        <option value="Y2Payments">Y2Payments</option>
                        <option value="Zenith Financial Inc">Zenith Financial Inc</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="form-group">
                      <label id="cardoracc">Email</label>
                      <input type="email" class="form-control" id="email" data-kwimpalastatus="alive" data-kwimpalaid="1558510147095-2" placeholder="Enter email">
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="form-group">
                      <label>Classification</label>
                      <select class="form-control" name="Results" id="search_Results">
                        <option value="">None</option>
                        <option value="Admin">Admin</option>
                        <option value="Sub Admin">Sub Admin</option>
                        <option value="Api user">Api user</option>
                        <option value="C/S admin">C/S admin</option>
                        <option value="C/S agent">C/S agent</option>
                        <option value="Lead agent">Lead agent</option>
                        <option value="Sale Agent">Sale Agent</option>
                        <option value="Super Admin">Super Admin</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-lg-12">
                    <button id="search_user_filter" type="button" class="btn btn-primary btn-fw"> <i class="mdi mdi-check"></i>Filter</button>
                    <button id="reset_user_Forms" type="button" class="btn btn-secondary btn-fw"> <i class="mdi mdi-refresh"></i>Reset</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- row end -->

  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 grid-margin">
      <a href="add_client.php" class="btn btn-dark btn-fw">
      <i class="mdi mdi-plus-outline"></i>Add Clients</a>
    </div>
  </div>
  <!-- row end -->

  <div class="row">
    <div class="col-md-12 align-items-stretch grid-margin">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th> </th>
                  <th> Client Name </th>
                  <th> User Name </th>
                  <th> Email </th>
                  <th> Classification </th>
                  <th> Action </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><button type="button" class="btn btn-icons btn-outline-primary"><i class="mdi mdi-plus-outline"></i></button></td>
                  <td>Chargeback Administrator</td>
                  <td>admin</td>
                  <td>jb@chargebackdefense.com</td>
                  <td>Super Admin</td>
                  <td>Super Admin</td>
                </tr>
                <tr>
                  <td><button type="button" class="btn btn-icons btn-outline-primary"><i class="mdi mdi-plus-outline"></i></button></td>
                  <td>Chargeback Administrator</td>
                  <td>admin</td>
                  <td>jb@chargebackdefense.com</td>
                  <td>
                    <select class="form-control" name="legalDBA" id="search_legaldba">
                        <option value="">None</option>
                        <option value="1" data-user_id="50">Admin</option>
                        <option value="3" data-user_id="50">Api user</option>
                        <option value="4" data-user_id="50">C/S admin</option>
                        <option value="5" data-user_id="50">C/S agent</option>
                        <option value="6" data-user_id="50">Lead agent</option>
                        <option value="7" data-user_id="50">Sale Agent</option>
                      </select>
                  </td>
                  <td><a href="#"><i class="mdi mdi-login"></i>Login</a> | <a href="#"><i class="mdi mdi-pencil-box-outline"></i>Edit</a> | <a href="#"><i class="mdi mdi-delete"></i>Delete</a> | <a href="#"><i class="mdi mdi-block-helper"></i> Disable</a></td>
                </tr>
                <tr>
                  <td><button type="button" class="btn btn-icons btn-outline-primary"><i class="mdi mdi-plus-outline"></i></button></td>
                  <td>Chargeback Administrator</td>
                  <td>admin</td>
                  <td>jb@chargebackdefense.com</td>
                  <td>
                    <select class="form-control" name="legalDBA" id="search_legaldba">
                        <option value="">None</option>
                        <option value="1" data-user_id="50">Admin</option>
                        <option value="3" data-user_id="50">Api user</option>
                        <option value="4" data-user_id="50">C/S admin</option>
                        <option value="5" data-user_id="50">C/S agent</option>
                        <option value="6" data-user_id="50">Lead agent</option>
                        <option value="7" data-user_id="50">Sale Agent</option>
                      </select>
                  </td>
                  <td><a href="#"><i class="mdi mdi-login"></i>Login</a> | <a href="#"><i class="mdi mdi-pencil-box-outline"></i>Edit</a> | <a href="#"><i class="mdi mdi-delete"></i>Delete</a> | <a href="#"><i class="mdi mdi-block-helper"></i> Disable</a></td>
                </tr>
                <tr>
                  <td><button type="button" class="btn btn-icons btn-outline-primary"><i class="mdi mdi-plus-outline"></i></button></td>
                  <td>Chargeback Administrator</td>
                  <td>admin</td>
                  <td>jb@chargebackdefense.com</td>
                  <td>
                    <select class="form-control" name="legalDBA" id="search_legaldba">
                        <option value="">None</option>
                        <option value="1" data-user_id="50">Admin</option>
                        <option value="3" data-user_id="50">Api user</option>
                        <option value="4" data-user_id="50">C/S admin</option>
                        <option value="5" data-user_id="50">C/S agent</option>
                        <option value="6" data-user_id="50">Lead agent</option>
                        <option value="7" data-user_id="50">Sale Agent</option>
                      </select>
                  </td>
                  <td><a href="#"><i class="mdi mdi-login"></i>Login</a> | <a href="#"><i class="mdi mdi-pencil-box-outline"></i>Edit</a> | <a href="#"><i class="mdi mdi-delete"></i>Delete</a> | <a href="#"><i class="mdi mdi-block-helper"></i> Disable</a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- row end -->
  <div class="row">
    <div class="col-md-12">
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">Prev</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item active"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">4</a></li>               
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
      </ul>
    </div>
  </div>
  <!-- row end -->

</div>
<!-- content-wrapper ends -->
<?php require 'footer.php'; ?>
