<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <!-- <li class="nav-item d-none d-sm-inline-block">
      <a href="index3.html" class="nav-link">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link">Contact</a>
    </li> -->
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto" style="justify-content: center !important; align-items: center !important;">
    <!-- Navbar Search -->
    <li class="nav-item" id="custom-search">
      <div class="navbar-search-block">
        <form class="form-inline">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search Dates, Names, and etc." aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
              <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </li>

    <!-- Notifications Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-bell"></i>
        <span class="badge badge-warning navbar-badge">15</span>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <span class="dropdown-item dropdown-header">15 Notifications</span>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-envelope mr-2"></i> 4 new messages
          <span class="float-right text-muted text-sm">3 mins</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-users mr-2"></i> 8 friend requests
          <span class="float-right text-muted text-sm">12 hours</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-file mr-2"></i> 3 new reports
          <span class="float-right text-muted text-sm">2 days</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
      </div>
    </li>


    <li class="nav-item dropdown mr-5">

      <a class="nav-link d-flex flex-column" data-toggle="dropdown">
        <span class="floot-right text-muted text-md"> <?= $_SESSION['lastname'] ?></span>
        <p class="useradmin">Admin</p>
      </a>

        <div class="user-image">
          <img src="assets/images/icons/angry.jpg" class="img-circle elevation-2 user-img" alt="User Image" style="width:50px; height:50px;">
        </div>
        <!-- naay equal sa tunga<??>htmlspecialchars($_SESSION['usr_profile']) -->

      <div class="dropdown-menu dropdown-menu-lg dropdown-menu=right">
        <div class="dropdown-divider"></div>
        <!-- <a href="settings.php" class="dropdown-item">
          <i class="fas fa-cog mr-2"></i> Settings
        </a> -->

        <div class="dropdown-divider"></div>
        <a href="../db_connect/logout.php" class="dropdown-item">
          <i class="fas fa-sign-out-alt mr-2"></i> Log out
        </a>
      </div>


    </li>




  </ul>
</nav>


<script>
$(document).ready(function () {
    var table = $('#userTable').DataTable({
        "paging": true,
        "searching": false, // Disable default search bar
        "ordering": true,
        "info": true
    });

    // Bind the navbar search input to DataTables filtering
    $('#custom-search input').on('keyup', function () {
        table.search(this.value).draw();
    });
});

</script>