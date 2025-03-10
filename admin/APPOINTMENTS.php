<?php
    session_start();
    // Redirect to login if no session found
if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
    header("Location: ../index.php");
    exit();
  }
  
  include('includes/footer.php');
  include('includes/header.php');
  include('includes/sidebar.php');
  include('includes/top-navbar.php');
  include('includes/notification.php');
  include('../components/fetch_users.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 header-custom">APPOINTMENTS</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item refresh-custom">
                    <a href="#" onclick="location.reload(); return false;">Refresh</a>
                </li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->

        <!-- Navbar Section -->
        <div class="row mb-3 custom-div">
            <div class="col-md-8 right-div">
                <nav class="nav custom-status">
                    <a class="nav-link active" style="border-top-left-radius: 0.7rem !important; border-bottom-left-radius: 0.7rem !important; margin-left: 0.5rem !important;" href="#">Pending</a>
                    <a class="nav-link" style="pointer-events: none !important;">|</a>
                    <a class="nav-link" href="#">Verified</a>
                    <a class="nav-link" style="pointer-events: none !important;">|</a>
                    <a class="nav-link" href="#">Approved</a>
                    <a class="nav-link" style="pointer-events: none !important;">|</a>
                    <a class="nav-link" style="border-top-right-radius: 0.7rem !important; border-bottom-right-radius: 0.7rem !important;" href="#">Declined</a>
                </nav>
            </div>
            <div class="col-md-4 text-right" style="margin-top: 0.3rem !important;">
                <div class="d-flex justify-content-end align-items-center custom-controls">
                    <select class="form-control w-auto mr-2">
                        <option selected>January</option>
                        <option>February</option>
                        <option>March</option>
                        <option>April</option>
                        <option>May</option>
                        <option>June</option>
                        <option>July</option>
                        <option>August</option>
                        <option>September</option>
                        <option>October</option>
                        <option>November</option>
                        <option>December</option>
                    </select>
                    <button class="btn btn-primary">+ New Appointment</button>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

    <?php 
        include('tables/appointmentTABLE.php');
    ?>

  <!-- Main content -->
  <section class="content">
        <div class="container-fluid">
    </section>
</div>