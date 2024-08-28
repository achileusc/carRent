
<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Dashboard </title>
    @include('component.head')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      @include('component.topnavbar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        @include('component.leftSidebar')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            
            <div class="tab-content tab-content-basic">
              <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="statistics-details d-flex align-items-center justify-content-between">
                      <div>
                        <p class="statistics-title">Mobil yang tersedia</p>
                        <h3 class="rate-percentage">0</h3>
                      </div>
                      <div>
                        <p class="statistics-title">Mobil yang sedang disewa</p>
                        <h3 class="rate-percentage">0</h3>
                      </div>
                      <div>
                        <p class="statistics-title">Total Mobil</p>
                        <h3 class="rate-percentage">0</h3>
                      </div>
                      
                    </div>
                  </div>
                  <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Transaksi Tahun 2024</h4>
                        <canvas id="lineChart"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            @include('component.footer')
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('template/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('template/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('template/vendors/chart.js/chart.umd.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('template/js/off-canvas.js') }}"></script>
    <script src="{{ asset('template/js/template.js') }}"></script>
    <script src="{{ asset('template/js/settings.js') }}"></script>
    <script src="{{ asset('template/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('template/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('template/js/chart.js') }}"></script>
    <!-- End custom js for this page-->
  </body>
</html>