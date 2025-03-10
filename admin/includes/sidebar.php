


  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <!-- <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a> -->

    <!-- Sidebar -->
    <div class="sidebar">
      <div class="rightside">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image" style="margin-top: 0.5rem !important;">
          <img src="assets/images/icons/logo.png" class="img-circle elevation-2" alt="User Image" style="width:65px; height:65px;">
        </div>
        <div class="info">
        <a href="#" class="d-block barangay-title">BARANGAY DIMAGIBA</a>
          <a href="#" class="d-block barangay-name">HEALTHCARE</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            
              <li class="nav-header">GENERAL</li>
            <li class="nav-item">
              <a href="DASHBOARD.php" class="nav-link active">
                <i class="nav-icon fas fa-home"></i>
                <p>
                Dashboard
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="APPOINTMENTS.php" class="nav-link">
                <i class="nav-icon far fa-calendar-check"></i>
                <p>
                Appointments
                  <span class="badge badge-info right">18</span>
                </p>
              </a>
              </li>
            <li class="nav-item">
              <a href="RESIDENTS.php" class="nav-link">
                <i class="nav-icon fas fa-database"></i>
                <p>
                  Resident Records
                  <span class="badge badge-info right">9</span>
                </p>
              </a>
            </li>

            <li class="nav-header">OPTIONS</li>
            <li class="nav-item">
              <a href="pages/calendar.html" class="nav-link">
                <i class="nav-icon fas fa-cog"></i>
                <p>
                  Settings
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="ABOUTUS.php USBONPA" class="nav-link">
                <i class="nav-icon far fa-address-card"></i>
                <p>
                  About Us
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/calendar.html" class="nav-link">
                <i class="nav-icon fas fa-headset"></i>
                <p>
                  Support
                </p>
              </a>
            </li>

          </ul>

          
          
      </nav>
      <!-- /.sidebar-menu -->
      </div>
    </div>
    <!-- /.sidebar -->
  </aside>


  <script>
    document.addEventListener("DOMContentLoaded", function () {
    let currentLocation = window.location.pathname.split("/").pop(); // Get current file name
    let menuItems = document.querySelectorAll(".nav-link");

    menuItems.forEach(item => {
        let itemHref = item.getAttribute("href");
        if (currentLocation === itemHref) {
            item.classList.add("active");
        } else {
            item.classList.remove("active");
        }
    });
});

  </script>