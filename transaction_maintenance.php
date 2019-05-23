<?php require 'header.php'; ?>
<?php require 'sidebar_nav.php'; ?>

<div class="main-panel">
<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <h2 class="title">Research Previous transaction(s)</h2>
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
                  <div class="col-lg-2 col-md-4 col-sm-12">
                    <div class="form-group">
                      <label id="cardoracc">Client</label>
                      <select class="form-control" name="legalDBA" id="search_legaldba">
                        <option value="">Select Client Name</option>
                        <option value="Client 1">Client 1</option>
                        <option value="Client 2">Client 2</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-2 col-md-4 col-sm-12">
                    <div class="form-group">
                      <label id="cardoracc">Sub Users</label>
                      <select class="form-control" name="legalDBA" id="search_legaldba">
                        <option value="">Select Subuser</option>
                        <option value="Subuser 1">Subuser 1</option>
                        <option value="Subuser 2">Subuser 2</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-2 col-md-4 col-sm-12">
                    <div class="form-group">
                      <label>Merchants</label>
                      <select class="form-control" name="Results" id="search_Results">
                        <option value="">Select Merchant Name</option>
                        <option value="Admin">Admin</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-2 col-md-4 col-sm-12">
                    <div class="form-group">
                      <label>Payment Type</label>
                      <select class="form-control" name="PmtTypeID" id="search_PmtTypeID">
                          <option value="">All</option>
                          <option value="CCD">Credit Card</option>
                          <option value="ACH">ACH</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-2 col-md-4 col-sm-12">
                    <div class="form-group">
                      <label>Tran Type</label>
                      <select class="form-control" name="ItemTranType" id="search_ItemTranType">
                          <option value="">All</option>
                          <option value="sale">Sale</option>
                          <option value="auth">Auth</option>
                          <option value="credit">Credit</option>
                          <option value="chargeback">Chargeback</option>
                          <option value="alert">Alert</option>
                          <option value="refund">Refund</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-2 col-md-4 col-sm-12">
                    <div class="form-group">
                      <label>Status</label>
                      <select class="form-control" name="Results" id="search_Results">
                          <option value="">All</option>
                          <option value="voided">VOID</option>
                          <option value="declined">DECLINE</option>
                          <option value="pending">PENDING</option>
                          <option value="settled">SETTLED</option>
                      </select>
                    </div>
                  </div>
                </div>
                <!-- row end  -->

                <div class="row">
                  <div class="col-lg-2 col-md-4 col-sm-12">
                    <div class="form-group">
                      <label id="cardoracc">Response</label>
                      <select class="form-control" name="Responses" id="search_Responses">
                          <option value="">All</option>
                          <option value="approval">APPROVED</option>
                          <option value="declined">DECLINE</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-2 col-md-4 col-sm-12">
                    <div class="form-group">
                      <label id="cardoracc">3Dsecure</label>
                      <select class="form-control" name="threeds" id="threeds_drpd">
                          <option value="">All</option>
                          <option value="05">VERIFIED</option>
                          <option value="06">ATTEMPTED</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-2 col-md-4 col-sm-12">
                    <div class="form-group">
                      <label>Card Number <small>(Last 4 No.)</small></label>
                      <input class="form-control" type="text" maxlength="4" name="CCD" id="search_AcctLast4" max="4" size="4">
                    </div>
                  </div>
                  <div class="col-lg-2 col-md-4 col-sm-12">
                    <div class="form-group">
                      <label>Amount</label>
                      <input class="form-control" name="amount" type="text" id="search_Amount">
                    </div>
                  </div>
                  <div class="col-lg-2 col-md-4 col-sm-12">
                    <div class="form-group">
                      <label>Date</label>
                      <input class="form-control" name="date" type="text" id="date">
                    </div>
                  </div>
                  <div class="col-lg-2 col-md-4 col-sm-12">
                    <div class="form-group">
                      <label>First Name</label>
                      <input class="form-control" name="first_name" type="text" id="search_FirstName">
                    </div>
                  </div>
                </div>
                <!-- row end  -->

                <div class="row">
                  <div class="col-lg-2 col-md-4 col-sm-12">
                    <div class="form-group">
                      <label id="cardoracc">Last Name</label>
                      <input class="form-control" name="last_name" type="text" id="search_LastName">
                    </div>
                  </div>
                  <div class="col-lg-2 col-md-4 col-sm-12">
                    <div class="form-group">
                      <label id="cardoracc">TranID</label>
                      <input class="form-control" name="tranID" type="text" id="tranID">
                    </div>
                  </div>
                  <div class="col-lg-2 col-md-4 col-sm-12">
                    <div class="form-group">
                      <label>Source</label>
                      <select class="form-control" name="source" id="search_source">
                          <option value="">All</option>
                          <option value="Terminal">TERMINAL</option>
                          <option value="api">API</option>
                          <option value="UPLOAD">UPLOAD</option>
                      </select>
                    </div>
                  </div>
                </div>
                <!-- row end  -->

                <div class="row mt-3">
                  <div class="col-lg-12">
                    <button id="search_user_filter" type="button" class="btn btn-primary btn-fw"> <i class="mdi mdi-check"></i>Filter</button>
                    <button id="reset_user_Forms" type="button" class="btn btn-secondary btn-fw"> <i class="mdi mdi-refresh"></i>Reset</button>
                  </div>
                </div>
                <!-- row end  -->

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
      <a href="create_transaction.php" class="btn btn-primary btn-fw mr-3">
      <i class="mdi mdi-plus-outline"></i>Create New Transaction</a>
      <a href="#" class="btn btn-dark btn-fw mr-3">
      <i class="mdi mdi-file-export"></i>Export</a>
    </div>
  </div>
  <!-- row end -->

  <div class="row">
    <div class="col-md-12 align-items-stretch grid-margin">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table id="ResearchPreviousTransaction" class="table table-striped" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th class="th-sm">ID </th>
                  <th class="th-sm">TranID </th>
                  <th class="th-sm">Date </th>
                  <th class="th-sm">Merchant Name </th>
                  <th class="th-sm">TranType </th>
                  <th class="th-sm">Response Text </th>
                  <th class="th-sm">Status </th>
                  <th class="th-sm">Amount </th>
                  <th class="th-sm">Customer Name </th>
                  <th class="th-sm">Card/Account </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>23040</td>
                  <td>123456</td>
                  <td>2018-09-17</td>
                  <td>K&M F Group</td>
                  <td><i class="mdi mdi-seal"></i> sale - (CCD)</td>
                  <td>ACCEPTED</td>
                  <td>complete</td>
                  <td>$30.00</td>
                  <td>PENNY OVERSTREET</td>
                  <td>4xxxxxxxxxxx5656</td>
                </tr>
                <tr>
                  <td>23040</td>
                  <td>12356</td>
                  <td>2018-09-17</td>
                  <td>K&M F Group</td>
                  <td><i class="mdi mdi-seal"></i> sale - (CCD)</td>
                  <td>ACCEPTED</td>
                  <td>complete</td>
                  <td>$30.00</td>
                  <td>PENNY OVERSTREET</td>
                  <td>4xxxxxxxxxxx5656</td>
                </tr>
                <tr>
                  <td>23040</td>
                  <td>4279882099</td>
                  <td>2018-09-17</td>
                  <td>K&M F Group</td>
                  <td><i class="mdi mdi-seal"></i> sale - (CCD)</td>
                  <td>ACCEPTED</td>
                  <td>complete</td>
                  <td>$30.00</td>
                  <td>PENNY OVERSTREET</td>
                  <td>4xxxxxxxxxxx5656</td>
                </tr>
                <tr>
                  <td>23040</td>
                  <td>4279882099</td>
                  <td>2018-09-17</td>
                  <td>K&M F Group</td>
                  <td><i class="mdi mdi-seal"></i> sale - (CCD)</td>
                  <td>ACCEPTED</td>
                  <td>complete</td>
                  <td>$30.00</td>
                  <td>PENNY OVERSTREET</td>
                  <td>4xxxxxxxxxxx5656</td>
                </tr>
                <tr>
                  <td>23040</td>
                  <td>4279882099</td>
                  <td>2018-09-17</td>
                  <td>K&M F Group</td>
                  <td><i class="mdi mdi-seal"></i> sale - (CCD)</td>
                  <td>ACCEPTED</td>
                  <td>complete</td>
                  <td>$30.00</td>
                  <td>PENNY OVERSTREET</td>
                  <td>4xxxxxxxxxxx5656</td>
                </tr>
                <tr>
                  <td>23040</td>
                  <td>4279882099</td>
                  <td>2018-09-17</td>
                  <td>K&M F Group</td>
                  <td><i class="mdi mdi-seal"></i> sale - (CCD)</td>
                  <td>ACCEPTED</td>
                  <td>complete</td>
                  <td>$30.00</td>
                  <td>PENNY OVERSTREET</td>
                  <td>4xxxxxxxxxxx5656</td>
                </tr>
                <tr>
                  <td>23040</td>
                  <td>4279882099</td>
                  <td>2018-09-17</td>
                  <td>K&M F Group</td>
                  <td><i class="mdi mdi-seal"></i> sale - (CCD)</td>
                  <td>ACCEPTED</td>
                  <td>complete</td>
                  <td>$30.00</td>
                  <td>PENNY OVERSTREET</td>
                  <td>4xxxxxxxxxxx5656</td>
                </tr>
                <tr>
                  <td>23040</td>
                  <td>4279882099</td>
                  <td>2018-09-17</td>
                  <td>K&M F Group</td>
                  <td><i class="mdi mdi-seal"></i> sale - (CCD)</td>
                  <td>ACCEPTED</td>
                  <td>complete</td>
                  <td>$30.00</td>
                  <td>PENNY OVERSTREET</td>
                  <td>4xxxxxxxxxxx5656</td>
                </tr>
                <tr>
                  <td>23040</td>
                  <td>4279882099</td>
                  <td>2018-09-17</td>
                  <td>K&M F Group</td>
                  <td><i class="mdi mdi-seal"></i> sale - (CCD)</td>
                  <td>ACCEPTED</td>
                  <td>complete</td>
                  <td>$30.00</td>
                  <td>PENNY OVERSTREET</td>
                  <td>4xxxxxxxxxxx5656</td>
                </tr>
                <tr>
                  <td>23040</td>
                  <td>4279882099</td>
                  <td>2018-09-17</td>
                  <td>K&M F Group</td>
                  <td><i class="mdi mdi-seal"></i> sale - (CCD)</td>
                  <td>ACCEPTED</td>
                  <td>complete</td>
                  <td>$30.00</td>
                  <td>PENNY OVERSTREET</td>
                  <td>4xxxxxxxxxxx5656</td>
                </tr>
                <tr>
                  <td>23040</td>
                  <td>4279882099</td>
                  <td>2018-09-17</td>
                  <td>K&M F Group</td>
                  <td><i class="mdi mdi-seal"></i> sale - (CCD)</td>
                  <td>ACCEPTED</td>
                  <td>complete</td>
                  <td>$30.00</td>
                  <td>PENNY OVERSTREET</td>
                  <td>4xxxxxxxxxxx5656</td>
                </tr>
                <tr>
                  <td>23040</td>
                  <td>4279882099</td>
                  <td>2018-09-17</td>
                  <td>K&M F Group</td>
                  <td><i class="mdi mdi-seal"></i> sale - (CCD)</td>
                  <td>ACCEPTED</td>
                  <td>complete</td>
                  <td>$30.00</td>
                  <td>PENNY OVERSTREET</td>
                  <td>4xxxxxxxxxxx5656</td>
                </tr>
                <tr>
                  <td>23040</td>
                  <td>4279882099</td>
                  <td>2018-09-17</td>
                  <td>K&M F Group</td>
                  <td><i class="mdi mdi-seal"></i> sale - (CCD)</td>
                  <td>ACCEPTED</td>
                  <td>complete</td>
                  <td>$30.00</td>
                  <td>PENNY OVERSTREET</td>
                  <td>4xxxxxxxxxxx5656</td>
                </tr>
                <tr>
                  <td>23040</td>
                  <td>4279882099</td>
                  <td>2018-09-17</td>
                  <td>K&M F Group</td>
                  <td><i class="mdi mdi-seal"></i> sale - (CCD)</td>
                  <td>ACCEPTED</td>
                  <td>complete</td>
                  <td>$30.00</td>
                  <td>PENNY OVERSTREET</td>
                  <td>4xxxxxxxxxxx5656</td>
                </tr>
                <tr>
                  <td>23040</td>
                  <td>4279882099</td>
                  <td>2018-09-17</td>
                  <td>K&M F Group</td>
                  <td><i class="mdi mdi-seal"></i> sale - (CCD)</td>
                  <td>ACCEPTED</td>
                  <td>complete</td>
                  <td>$30.00</td>
                  <td>PENNY OVERSTREET</td>
                  <td>4xxxxxxxxxxx5656</td>
                </tr>
                <tr>
                  <td>23040</td>
                  <td>4279882099</td>
                  <td>2018-09-17</td>
                  <td>K&M F Group</td>
                  <td><i class="mdi mdi-seal"></i> sale - (CCD)</td>
                  <td>ACCEPTED</td>
                  <td>complete</td>
                  <td>$30.00</td>
                  <td>PENNY OVERSTREET</td>
                  <td>4xxxxxxxxxxx5656</td>
                </tr>
                <tr>
                  <td>23040</td>
                  <td>4279882099</td>
                  <td>2018-09-17</td>
                  <td>K&M F Group</td>
                  <td><i class="mdi mdi-seal"></i> sale - (CCD)</td>
                  <td>ACCEPTED</td>
                  <td>complete</td>
                  <td>$30.00</td>
                  <td>PENNY OVERSTREET</td>
                  <td>4xxxxxxxxxxx5656</td>
                </tr>
                <tr>
                  <td>23040</td>
                  <td>4279882099</td>
                  <td>2018-09-17</td>
                  <td>K&M F Group</td>
                  <td><i class="mdi mdi-seal"></i> sale - (CCD)</td>
                  <td>ACCEPTED</td>
                  <td>complete</td>
                  <td>$30.00</td>
                  <td>PENNY OVERSTREET</td>
                  <td>4xxxxxxxxxxx5656</td>
                </tr>
                <tr>
                  <td>23040</td>
                  <td>4279882099</td>
                  <td>2018-09-17</td>
                  <td>K&M F Group</td>
                  <td><i class="mdi mdi-seal"></i> sale - (CCD)</td>
                  <td>ACCEPTED</td>
                  <td>complete</td>
                  <td>$30.00</td>
                  <td>PENNY OVERSTREET</td>
                  <td>4xxxxxxxxxxx5656</td>
                </tr>
                <tr>
                  <td>23040</td>
                  <td>4279882099</td>
                  <td>2018-09-17</td>
                  <td>K&M F Group</td>
                  <td><i class="mdi mdi-seal"></i> sale - (CCD)</td>
                  <td>ACCEPTED</td>
                  <td>complete</td>
                  <td>$30.00</td>
                  <td>PENNY OVERSTREET</td>
                  <td>4xxxxxxxxxxx5656</td>
                </tr>
                <tr>
                  <td>23040</td>
                  <td>4279882099</td>
                  <td>2018-09-17</td>
                  <td>K&M F Group</td>
                  <td><i class="mdi mdi-seal"></i> sale - (CCD)</td>
                  <td>ACCEPTED</td>
                  <td>complete</td>
                  <td>$30.00</td>
                  <td>PENNY OVERSTREET</td>
                  <td>4xxxxxxxxxxx5656</td>
                </tr>
                <tr>
                  <td>23040</td>
                  <td>4279882099</td>
                  <td>2018-09-17</td>
                  <td>K&M F Group</td>
                  <td><i class="mdi mdi-seal"></i> sale - (CCD)</td>
                  <td>ACCEPTED</td>
                  <td>complete</td>
                  <td>$30.00</td>
                  <td>PENNY OVERSTREET</td>
                  <td>4xxxxxxxxxxx5656</td>
                </tr>
                <tr>
                  <td>23040</td>
                  <td>4279882099</td>
                  <td>2018-09-17</td>
                  <td>K&M F Group</td>
                  <td><i class="mdi mdi-seal"></i> sale - (CCD)</td>
                  <td>ACCEPTED</td>
                  <td>complete</td>
                  <td>$30.00</td>
                  <td>PENNY OVERSTREET</td>
                  <td>4xxxxxxxxxxx5656</td>
                </tr>
                <tr>
                  <td>23040</td>
                  <td>4279882099</td>
                  <td>2018-09-17</td>
                  <td>K&M F Group</td>
                  <td><i class="mdi mdi-seal"></i> sale - (CCD)</td>
                  <td>ACCEPTED</td>
                  <td>complete</td>
                  <td>$30.00</td>
                  <td>PENNY OVERSTREET</td>
                  <td>4xxxxxxxxxxx5656</td>
                </tr>
                <tr>
                  <td>23040</td>
                  <td>4279882099</td>
                  <td>2018-09-17</td>
                  <td>K&M F Group</td>
                  <td><i class="mdi mdi-seal"></i> sale - (CCD)</td>
                  <td>ACCEPTED</td>
                  <td>complete</td>
                  <td>$30.00</td>
                  <td>PENNY OVERSTREET</td>
                  <td>4xxxxxxxxxxx5656</td>
                </tr>
                <tr>
                  <td>23040</td>
                  <td>4279882099</td>
                  <td>2018-09-17</td>
                  <td>K&M F Group</td>
                  <td><i class="mdi mdi-seal"></i> sale - (CCD)</td>
                  <td>ACCEPTED</td>
                  <td>complete</td>
                  <td>$30.00</td>
                  <td>PENNY OVERSTREET</td>
                  <td>4xxxxxxxxxxx5656</td>
                </tr>
                <tr>
                  <td>23040</td>
                  <td>4279882099</td>
                  <td>2018-09-17</td>
                  <td>K&M F Group</td>
                  <td><i class="mdi mdi-seal"></i> sale - (CCD)</td>
                  <td>ACCEPTED</td>
                  <td>complete</td>
                  <td>$30.00</td>
                  <td>PENNY OVERSTREET</td>
                  <td>4xxxxxxxxxxx5656</td>
                </tr>
                <tr>
                  <td>23040</td>
                  <td>4279882099</td>
                  <td>2018-09-17</td>
                  <td>K&M F Group</td>
                  <td><i class="mdi mdi-seal"></i> sale - (CCD)</td>
                  <td>ACCEPTED</td>
                  <td>complete</td>
                  <td>$30.00</td>
                  <td>PENNY OVERSTREET</td>
                  <td>4xxxxxxxxxxx5656</td>
                </tr>
                <tr>
                  <td>23040</td>
                  <td>4279882099</td>
                  <td>2018-09-17</td>
                  <td>K&M F Group</td>
                  <td><i class="mdi mdi-seal"></i> sale - (CCD)</td>
                  <td>ACCEPTED</td>
                  <td>complete</td>
                  <td>$30.00</td>
                  <td>PENNY OVERSTREET</td>
                  <td>4xxxxxxxxxxx5656</td>
                </tr>
                <tr>
                  <td>23040</td>
                  <td>4279882099</td>
                  <td>2018-09-17</td>
                  <td>K&M F Group</td>
                  <td><i class="mdi mdi-seal"></i> sale - (CCD)</td>
                  <td>ACCEPTED</td>
                  <td>complete</td>
                  <td>$30.00</td>
                  <td>PENNY OVERSTREET</td>
                  <td>4xxxxxxxxxxx5656</td>
                </tr>
                <tr>
                  <td>23040</td>
                  <td>4279882099</td>
                  <td>2018-09-17</td>
                  <td>K&M F Group</td>
                  <td><i class="mdi mdi-seal"></i> sale - (CCD)</td>
                  <td>ACCEPTED</td>
                  <td>complete</td>
                  <td>$30.00</td>
                  <td>PENNY OVERSTREET</td>
                  <td>4xxxxxxxxxxx5656</td>
                </tr>
                <tr>
                  <td>23040</td>
                  <td>4279882099</td>
                  <td>2018-09-17</td>
                  <td>K&M F Group</td>
                  <td><i class="mdi mdi-seal"></i> sale - (CCD)</td>
                  <td>ACCEPTED</td>
                  <td>complete</td>
                  <td>$30.00</td>
                  <td>PENNY OVERSTREET</td>
                  <td>4xxxxxxxxxxx5656</td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <th class="th-sm">ID </th>
                  <th class="th-sm">TranID </th>
                  <th class="th-sm">Date </th>
                  <th class="th-sm">Merchant Name </th>
                  <th class="th-sm">TranType </th>
                  <th class="th-sm">Response Text </th>
                  <th class="th-sm">Status </th>
                  <th class="th-sm">Amount </th>
                  <th class="th-sm">Customer Name </th>
                  <th class="th-sm">Card/Account </th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- row end -->

</div>
<!-- content-wrapper ends -->
<?php require 'footer.php'; ?>
