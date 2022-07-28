<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- plugins:css -->
  <link rel="stylesheet" href="/asset/template/vendors/feather/feather.css">
  <link rel="stylesheet" href="/asset/template/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="/asset/template/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="/asset/template/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="/asset/template/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="/asset/template/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="/asset/template/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="/asset/template/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="/asset/template/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="/asset/template/images/favicon.png" />

  <title>Kaseer {{ $title }}</title>
</head>
<body>
  <div class="container-scroller">
    
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="index.html">
            Kaseer
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.html">
            K
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top"> 
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text">Halo, <span class="text-black fw-bold">(User)</span></h1>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          

          <li class="nav-item">
            <form class="search-form" action="#">
              <i class="icon-search"></i>
              <input type="search" class="form-control" placeholder="Search Here" title="Search here">
            </form>
          </li>

          

          <li class="nav-item dropdown"> 
            <a class="nav-link count-indicator" id="countDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="icon-bell"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="countDropdown">
              <a class="dropdown-item py-3">
                <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                <span class="badge badge-pill badge-primary float-right">View all</span>
              </a>
              <div class="dropdown-divider"></div>

              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="images/faces/face10.jpg" alt="image" class="img-sm profile-pic">
                </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                  <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                </div>
              </a>
            </div>
          </li>

          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="menu-icon mdi mdi-account-circle-outline"></i></a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <p class="mb-1 mt-3 font-weight-semibold">Allen Moreno</p>
                <p class="fw-light text-muted mb-0">allenmoreno@gmail.com</p>
              </div>
              
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
            </div>
          </li>
          
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border me-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border me-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>

      
      <!-- partial -->

      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">

          <li class="nav-item">
            <a class="nav-link" href="/menu">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Menu</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/transaksi">
              <i class="menu-icon mdi mdi-card-text-outline"></i>
              <span class="menu-title">Transaksi</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="/user">
              <i class="menu-icon mdi mdi-account-circle-outline"></i>
              <span class="menu-title">User Pages</span>
            </a>
            
          </li>

        </ul>
      </nav>

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                @yield('container')
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2022. All rights reserved.</span>
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
  <script src="/asset/template/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="/asset/template/vendors/chart.js/Chart.min.js"></script>
  <script src="/asset/template/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="/asset/template/vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="/asset/template/js/off-canvas.js"></script>
  <script src="/asset/template/js/hoverable-collapse.js"></script>
  <script src="/asset/template/js/template.js"></script>
  <script src="/asset/template/js/settings.js"></script>
  <script src="/asset/template/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="/asset/template/js/jquery.cookie.js" type="text/javascript"></script>
  <script src="/asset/template/js/dashboard.js"></script>
  <script src="/asset/template/js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

