<!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
              <a href="http://www.bootstrapdash.com/" target="_blank">Y2 Payment System</a>. All rights reserved.</span>
            <!-- <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Design and Develop by <a href="http://www.kingdom-vision.com" target="_blank">Kingdom Vision</a>  -->
            </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/chart.js"></script>
  <!-- End custom js for this page-->
  <script>
    $(document).ready(function () {
      $('#ResearchPreviousTransaction').DataTable();
      $('.dataTables_length').addClass('bs-select');
    });
  </script>   
</body>

</html>