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
                <h1 class="m-0 header-custom">RESIDENT RECORDS</h1>
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
                <!-- <nav class="nav custom-status">
                    <a class="nav-link active" style="border-top-left-radius: 0.7rem !important; border-bottom-left-radius: 0.7rem !important; margin-left: 0.5rem !important;" href="#">Pending</a>
                    <a class="nav-link" style="pointer-events: none !important;">|</a>
                    <a class="nav-link" href="#">Verified</a>
                    <a class="nav-link" style="pointer-events: none !important;">|</a>
                    <a class="nav-link" href="#">Approved</a>
                    <a class="nav-link" style="pointer-events: none !important;">|</a>
                    <a class="nav-link" style="border-top-right-radius: 0.7rem !important; border-bottom-right-radius: 0.7rem !important;" href="#">Declined</a>
                </nav> -->
            </div>
            <div class="col-md-4 text-right" style="margin-top: 0.3rem !important;">
                <div class="d-flex justify-content-end align-items-center custom-controls">
                <select class="form-control w-auto mr-2" id="purokFilter">
                    <option value="all" selected>All Purok</option>
                    <option value="Purok 1">Purok 1</option>
                    <option value="Purok 2">Purok 2</option>
                    <option value="Purok 3">Purok 3</option>
                    <option value="Purok 4">Purok 4</option>
                    <option value="Purok 5">Purok 5</option>
                    <option value="Purok 6">Purok 6</option>
                    <option value="Purok 7">Purok 7</option>
                    <option value="Purok 8">Purok 8</option>
                </select>


                <button class="btn btn-primary" data-toggle="modal" data-target="#addUserModalNew">Add Resident</button>


                <div class="modal fade myel2-modal" id="addUserModalNew" role="dialog" aria-labelledby="addUserModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                            <h4 class="text" id="addUserModalLabel"><b>Add Resident</b></h4>
                                            <label for="text" class="text2">Write/Choose None if Unsure</label>

                                        </div>
                                        <div class="modal-body">
                                            <form action="../components/add_user.php" method="POST">
                                                
                                                <h5 class="text5">Account Information</h5>
                                                <div class="form-group row">
                                                    <div class="col-md-3">
                                                        <label>Username</label>
                                                        <input type="text" class="form-control" name="username" required id="userid" style="height: 25px; width: 180px; font-size: 12px;" maxlength="8" placeholder="not greater than 8 character">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>Password</label>
                                                        <input type="password" class="form-control" name="password" required style="height: 25px; width: 180px; font-size: 12px;" minlength="8" placeholder="not less than 8 character">
                                                    </div>
                                                    <!-- NEED ATENSYON LATUR  -->
                                                    <div class="col-md-3">
                                                        <label>Verify Password</label>
                                                        <input type="password" class="form-control" name="confirm_password" value="" required style="height: 25px; width: 180px; font-size: 12px;">
                                                    </div>
                                                </div>
                                                
                                                <h5 class="text5">Personal Information</h5>
                                                <div class="form-group row">
                                                    <div class="col-md-3">
                                                        <label>First Name</label>
                                                        <input type="text" class="form-control" name="firstname" required style="height: 25px; width: 180px; font-size: 12px;">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>Middle Name (Optional)</label>
                                                        <input type="text" class="form-control" name="middlename" style="height: 25px; width: 180px; font-size: 12px;">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>Last Name</label>
                                                        <input type="text" class="form-control" name="lastname" required style="height: 25px; width: 180px; font-size: 12px;">
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label>Suffix</label>
                                                        <select class="form-control" name="suffix" required style="height: 25px; width: 150px; font-size: 10px;">
                                                            <option value="none" style="font-size: 12px;">none</option>
                                                            <option value="Jr." style="font-size: 12px;">Jr.</option>
                                                            <option value="Sr." style="font-size: 12px;">Sr.</option>
                                                            <option value="III" style="font-size: 12px;">III</option>


                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-3">
                                                        <label>Gender</label>
                                                        <select class="form-control" name="gender" required style="height: 25px; width: 180px; font-size: 10px;">
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>


                                                        </select>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>Civil Status</label>
                                                        <select class="form-control" name="civil_status" required style="height: 25px; width: 180px; font-size: 10px;">
                                                            <option value="Single">Single</option>
                                                            <option value="Married">Married</option>
                                                            <option value="Widowed">Widowed</option>
                                                            <option value="Other">Other</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>Birthdate</label>
                                                        <input type="date" class="form-control" name="birthdate" required style="height: 25px; width: 180px; font-size: 12px;">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>Birthplace (Optional)</label>
                                                        <input type="text" class="form-control" name="birthplace" style="height: 25px; width: 150px; font-size: 12px;">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>Age</label>
                                                        <input type="number" class="form-control" name="age" required style="height: 25px; width: 180px; font-size: 12px;">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>Weight (lbs)</label>
                                                        <input type="text" class="form-control" name="weight" required style="height: 25px; width: 180px; font-size: 12px;">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>Height (ft)</label>
                                                        <input type="text" class="form-control" name="height" required style="height: 25px; width: 180px; font-size: 12px;">
                                                    </div>
                                                </div>
                                                
                                                <h5 class="text5">Address</h5>
                                                <div class="form-group row">
                                                    <div class="col-md-2">
                                                        <label>Purok</label>
                                                        <select class="form-control" name="purok" required style="height: 25px; width: 120px; font-size: 10px;">
                                                        <option value="Purok 1">Purok 1</option>
                                                        <option value="Purok 2">Purok 2</option>
                                                        <option value="Purok 3">Purok 3</option>
                                                        <option value="Purok 4">Purok 4</option>
                                                        <option value="Purok 5">Purok 5</option>
                                                        <option value="Purok 6">Purok 6</option>
                                                        <option value="Purok 7">Purok 7</option>
                                                        </select>
                                                        
                                                        
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Barangay</label>
                                                        <input type="text" class="form-control" name="" placeholder="Dimagiba" readonly style="height: 25px; width: 120px; font-size: 12px;">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>City</label>
                                                        <input type="text" class="form-control" name="" placeholder="Davao City" readonly style="height: 25px; width: 120px; font-size: 12px;">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Country</label>
                                                        <input type="text" class="form-control" name="" placeholder="Philippines" readonly style="height: 25px; width: 120px; font-size: 12px;">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Postal Code</label>
                                                        <input type="text" class="form-control" name="" placeholder="8000" readonly style="height: 25px; width: 120px; font-size: 12px;">
                                                    </div>
                                                </div>
                                                
                                                <h5 class="text5">Contact Information</h5>
                                                <div class="form-group row no-gutters">
                                                    <div class="col-md-4 style">
                                                        <label>Mobile Number</label>
                                                        <input type="number" class="form-control" name="mobile_number" required style="height: 25px; width: 180px; font-size: 12px;">
                                                    </div>
                                                    <div class="col-md-4" style="margin-left:-60px">
                                                        <label>Email Address</label>
                                                        <input type="email" class="form-control" name="email" required style="height: 25px; width: 180px; font-size: 12px;">
                                                    </div>
                                                </div>
                                                <h6 class="text"> <strong>In case of Emergency:  (Optional)</strong></h6>
                                                <div class="form-group row no-gutters">
                                                    <div class="col-md-4">
                                                        <label>Mobile Number</label>
                                                        <input type="number" class="form-control" name="emer_number" style="height: 25px; width: 180px; font-size: 12px;">
                                                    </div>
                                                    <div class="col-md-4" style="margin-left:-60px">
                                                        <label>Emergency Contact Name</label>
                                                        <input type="text" class="form-control" name="emer_contname" style="height: 25px; width: 180px; font-size: 12px;">
                                                    </div>
                                                    <div class="col-md-4" style="margin-left:-60px">
                                                        <label>Relationship to contact</label>
                                                        <input type="text" class="form-control" name="emer_relation" style="height: 25px; width: 180px; font-size: 12px;">
                                                    </div>
                                                </div>

                                                <button type="submit" class="button" style="margin-top: 0.4rem !important;">Add Resident</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

    <?php 
        include('tables/residentTABLE.php');
    ?>

  <!-- Main content -->
  <section class="content">
        <div class="container-fluid">
    </section>
</div>


<script>
    // purok filtering 
    document.getElementById('purokFilter').addEventListener('change', function() {
    var selectedPurok = this.value.trim();  // Get the selected value and trim any spaces
    console.log("Selected Purok: ", selectedPurok); // Log the selected value

    var rows = document.querySelectorAll('#userTable tbody tr'); // Get all table rows

    rows.forEach(function(row) {
        var purok = row.getAttribute('data-purok') ? row.getAttribute('data-purok').trim() : ''; // Get and trim the 'data-purok' value from the row
        console.log("Row Purok: ", purok); // Log the 'purok' value for each row

        // Check if the value matches, considering the "All" option
        if (selectedPurok === 'all' || selectedPurok === purok) {
            row.style.display = '';  // Show the row
        } else {
            row.style.display = 'none';  // Hide the row
        }
    });
});


</script>