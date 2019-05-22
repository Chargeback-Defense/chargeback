<!-- partial:../../partials/_sidebar.html -->

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
            <a class="nav-link" href="all_customer.php">Client Names</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="all_users.php">Sub Users</a>
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
            <a class="nav-link" data-toggle="multi-collapse" data-target="multi-collapse" href="#group-client" aria-expanded="true" aria-controls="group-client">
              <span class="menu-title">Transaction Management</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="multi-collapse" id="group-client">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="transaction_maintenance.php">View Transaction</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="create_maintenance.php">Create Transaction</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="archive_transaction.php">Archive Transaction</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="batch_maintenance.php">Batch Management</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="scheduled_payments.php">Scheduled Payments</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="recurring_list.php">Recurring Payments</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="orders_activity.php">Failed Attempt</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="multi-collapse" data-target="multi-collapse" href="#group-client" aria-expanded="true" aria-controls="group-client">
              <span class="menu-title">New Apps</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="multi-collapse" id="group-client">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="connect_sage_ftp.php">Import App Docs</a>
                </li>
              </ul>
            </div>
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
            <a class="nav-link" href="alerts_list.php">Alerts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="chargebacks_list.php">Chargebacks</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="add_merchant.php">
        <i class="menu-icon mdi mdi-newspaper"></i>
        <span class="menu-title">Add Merchants</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="all_merchant.php">
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
            <a class="nav-link" href="all_template.php">All Template</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="add_template.php">Create Template</a>
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
            <a class="nav-link" href="general_settings.php">Admin Setting</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logs.php">Logs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tsys.php">TSYS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dashboard_settings.php">Dashboard Setting</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="access_preset.php">UAL Presets</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tokenization.php">Tokens</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="processor.php">Processors</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="assign_ftp.php">Assign FTP</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="multi-collapse" data-target="multi-collapse" href="#group-client" aria-expanded="true" aria-controls="group-client">
              <span class="menu-title">Group Client</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="multi-collapse" id="group-client">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="group.php">Create Group</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="group_clients.php">All Grouped Clients</a>
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
            <a class="nav-link" href="reports.php">Transaction Summary</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="reports_detail.php">Transaction Detail</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dispute_ratio.php">Dispute Ratio</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#web-forms" aria-expanded="false" aria-controls="web-forms">
        <i class="menu-icon mdi mdi-table-large"></i>
        <span class="menu-title">Web Forms</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="web-forms">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="create_web_form.php">Create Web Form</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="web_form_styling.php">Web Form Styling</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="web_form_list.php">Web Form Token</a>
          </li>
        </ul>
      </div>
    </li>
  </ul>
</nav>

<!-- partial -->
