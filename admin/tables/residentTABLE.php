      <!-- /.row -->
      <!-- Main row -->
      <div class="row" style="margin: 0rem 1.5rem !important;">
            <!-- Left col -->
            <section class="col-lg-12">
                <!-- Custom tabs (Charts with tabs)-->
                <!-- <div class="card">
                    <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-chart-pie mr-1"></i>
                        Users Data
                    </h3> -->
                    </div><!-- /.card-header -->

                    <div class="card-body">

                    <table id="userTable" class="display">

                        <thead>
                        <tr class="user-row" data-purok="<?= $row['purok']; ?>">
                            <th>ID</th>
                            <th>Username</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Age</th>
                            <th>Purok</th>
                            <!-- <th>Status</th> -->
                            <th class="text-center">Action</th>

                        </tr>

                        </thead>
                        <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result)) { ?>

                            <tr data-purok="<?= $row['purok']; ?>">
                            <td>
                                <?= $row['userid']; ?>
                            </td>
                            <td>
                                <?= $row['username']; ?>
                            </td>
                            <td>
                                <?= $row['firstname']; ?>
                            </td>
                            <td>
                                <?= $row['lastname']; ?>
                            </td>
                            <td>
                                <?= $row['age']; ?>
                            </td>
                            <td>
                                <?= $row['purok']; ?>
                            </td>
                            <td class="text-center">
                                <button class="btn btn-sm" style="background-color: #00441B; color: white;" data-toggle="modal"
                                data-target="#residentDetailsModal<?= $row['userid'] ?>"> View</button>


                                <button class="btn btn-sm" style="background-color: #007B3D; color: white;" data-toggle="modal"
                                data-target="#addUserModal<?= $row['userid'] ?>">Edit</button>
                            </td>
                            </tr>

                            <!-- VIEW MODAL  -->
                            <div class="modal fade myel-modal" id="residentDetailsModal<?= $row['userid'] ?>" tabindex="-1" role="dialog" aria-labelledby="residentDetailsLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="modal-title"><b>Resident’s Personal Details</b></h4>
                                            </div>

                                            <!-- Modal Body -->
                                            <div class="modal-body">
                                    <div class="container">

                                        <!-- Profile Picture (Centered) -->
                                        <div class="row">
                                            <div class="col-12 text-center">
                                                <img src="../assets/images/profiles/<?=htmlspecialchars($row['profile'])?>" alt="Profile Picture" class="profile-img mb-3">
                                            </div>
                                        </div>
                                        
                                        <!-- Personal Information Section -->
                                        <div class="text" style="background-color:#0d3b12; padding: 1px;"> <h6 class="text5" >Personal Information</h6> </div>
                                        <div class="row mt-3">
                                            <div class="col-md-2"><strong>Resident ID</strong><br>
                                                <span class="text4"><?= $row['userid'] ?></span>
                                            </div>
                                            <div class="col-md-3"><strong>First Name</strong><br>
                                                <span class="text4"><?= $row['firstname'] ?></span>
                                            </div>
                                            <div class="col-md-3"><strong>Last Name</strong><br>
                                                <span class="text4"><?= $row['lastname'] ?></span>
                                            </div>
                                            <div class="col-md-3"><strong>Middle Name</strong><br>
                                                <span class="text4"><?= $row['middlename'] ?></span>
                                            </div>
                                            <div class="col-"><strong>Suffix</strong><br>
                                                <span class="text4"><?= $row['suffix'] ?></span>
                                            </div>
                                        </div>
                                        
                                        <div class="row mt-3">
                                            <div class="col-md-2"><strong>Age</strong><br>
                                                <span class="text4"><?= $row['age'] ?></span>
                                            </div>
                                            <div class="col-md-2"><strong>Gender</strong><br>
                                                <span class="text4"><?= $row['gender'] ?></span>
                                            </div>
                                            <div class="col-md-3"><strong>Civil Status</strong><br>
                                                <span class="text4"><?= $row['civil_status'] ?></span>
                                            </div>
                                            <div class="col-md-3"><strong>Birthdate</strong><br>
                                                <span class="text4"><?= $row['birthdate'] ?></span>
                                            </div>
                                            <div class="col-md-0"><strong>Birthplace</strong><br>
                                                <span class="text4"><?= $row['birthplace'] ?></span>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-md-2"><strong>Nationality</strong><br>
                                                <span class="text4"><?= $row['nationality'] ?></span>
                                            </div>
                                            <div class="col-md-2"><strong>Weight</strong><br>
                                                <span class="text4"><?= $row['weight'] ?> lbs</span>
                                            </div>
                                            <div class="col-md-2"><strong>Height</strong><br>
                                                <span class="text4"><?= $row['height'] ?> ft</span>
                                            </div>
                                        </div>

                                        <!-- Address Section -->
                                        <div class="text" style="background-color:#0d3b12; padding: 1px; margin-top: 30px;"><h6 class="text5">Address</h6></div>
                                        <div class="row mt-3">
                                            <div class="col-md-2"><strong>Purok</strong><br>
                                                <span class="text4"><?= $row['purok'] ?></span>
                                            </div>
                                            <div class="col-md-2"><strong>Barangay</strong><br>
                                                <span class="text4">Dimagiba</span>
                                            </div>
                                            <div class="col-md-2"><strong>City</strong><br>
                                                <span class="text4">Davao City</span>
                                            </div>
                                            <div class="col-md-2"><strong>Country</strong><br>
                                                <span class="text4">Philippines</span>
                                            </div>
                                            <div class="col-md-2"><strong>Postal Code</strong><br>
                                                <span class="text4">8000</span>
                                            </div>
                                        </div>

                                        <!-- Contact Information Section -->
                                        <div class="text" style="background-color:#0d3b12; padding: 1px; margin-top: 30px;"><h6 class="text5">Contact Information</h6></div>
                                        <div class="row mt-3">
                                            <div class="col-md-4"><strong>Mobile Number</strong><br>
                                                <span class="text4"><?= $row['mobile_number'] ?></span>
                                            </div>
                                            <div class="col-md-4"><strong>Email Address</strong><br>
                                                <span class="text4"><?= $row['email'] ?></span>
                                            </div>
                                            <div class="col-md-4"><strong>Account Created</strong><br>
                                                <span class="text4"><?= $row['usercreation'] ?></span>
                                            </div>
                                        </div>

                                        <!-- Emergency Contact Section -->
                                        <div class="text" style="background-color:#0d3b12; padding: 1px; margin-top: 30px;"><h6 class="text5">Emergency Contact</h6></div>
                                        <div class="row mt-3">
                                            <div class="col-md-4"><strong>Mobile Number</strong><br>
                                                <span class="text4"><?= $row['emer_number'] ?></span>
                                            </div>
                                            <div class="col-md-4"><strong>Emergency Contact Name</strong><br>
                                                <span class="text4"><?= $row['emer_contname'] ?></span>
                                            </div>
                                            <div class="col-md-4"><strong>Relationship</strong><br>
                                                <span class="text4"><?= $row['emer_relation'] ?></span>
                                            </div>
                                        </div>

                                    </div>
                                            </div>


                                            <!-- Modal Footer (Appointment History) -->
                                            <div class="modal-footer" style="margin-top: 20px;">
                                                <div class="container">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h4 class="text"><b>Appointment History</b></h4>
                                                        <button type="button" class="button">+ Create Appointment</button>
                                                    </div>
                                                    
                                                    <!-- <div class="table-responsive mt-2">
                                                        <table class="table table-bordered">
                                                            <thead class="thead" style="background-color: #F4F4F4; color: #929292;">
                                                                <tr>
                                                                    <th>Appointment ID</th>
                                                                    <th>Date Consulted</th>
                                                                    <th>Concern</th>
                                                                    <th>Status</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>00001</td>
                                                                    <td>01/01/25</td>
                                                                    <td>Fever</td>
                                                                    <td><span class="badge badge-success">Done</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>00002</td>
                                                                    <td>02/15/25</td>
                                                                    <td>Cough</td>
                                                                    <td><span class="badge badge-warning">Pending</span></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div> -->

                                                    <!-- Close Button -->
                                                    <div class="d-flex justify-content-center mt-3">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                            </div>

                            <!-- EDIT MODAL -->
                            <div class="modal fade myel1-modal" id="addUserModal<?= $row['userid'] ?>" role="dialog" aria-labelledby="addUserModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                            <h4 class="text" id="addUserModalLabel"><b>Edit Resident's Details</b></h4>
                                            <label for="text" class="text2">Write/Choose None if Unsure</label>

                                        </div>
                                        <div class="modal-body">
                                            <form action="../components/update_user.php" method="POST">
                                                
                                                <h5 class="text5">Account Information</h5>
                                                <div class="form-group row">
                                                    <div class="col-md-3">
                                                        <label>Username</label>
                                                        <input type="text" class="form-control" name="username" id="userid" value="<?= $row['username'] ?>" style="height: 25px; width: 180px; font-size: 12px;" readonly>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>Password</label>
                                                        <input type="password" class="form-control" name="password" value="<?= $row['password'] ?>" style="height: 25px; width: 180px; font-size: 12px;" readonly>
                                                    </div>
                                                    <!-- NEED ATENSYON LATUR  -->
                                                    <!-- <div class="col-md-3">
                                                        <label>Verify Password</label>
                                                        <input type="password" class="form-control" name="confirm_password" value="" style="height: 25px; width: 180px; font-size: 12px;">
                                                    </div> -->
                                                </div>
                                                
                                                <h5 class="text5">Personal Information</h5>
                                                <div class="form-group row">
                                                    <div class="col-md-3">
                                                        <label>First Name</label>
                                                        <input type="text" class="form-control" name="firstname" value="<?= $row['firstname'] ?>" style="height: 25px; width: 180px; font-size: 12px;">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>Middle Name (Optional)</label>
                                                        <input type="text" class="form-control" name="middlename" value="<?= $row['middlename'] ?>" style="height: 25px; width: 180px; font-size: 12px;">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>Last Name</label>
                                                        <input type="text" class="form-control" name="lastname" value="<?= $row['lastname'] ?>" style="height: 25px; width: 180px; font-size: 12px;">
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label>Suffix</label>
                                                        <select class="form-control" name="suffix" style="height: 25px; width: 150px; font-size: 10px;">
                                                            <option value="<?= $row['suffix'] ?>" style="font-size: 2px;"><?= $row['suffix'] ?></option>
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
                                                        <select class="form-control" name="gender" style="height: 25px; width: 180px; font-size: 10px;">
                                                            <option value="<?= $row['gender'] ?>"><?= $row['gender'] ?></option>
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>


                                                        </select>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>Civil Status</label>
                                                        <select class="form-control" name="civil_status" style="height: 25px; width: 180px; font-size: 10px;">
                                                            <option value="<?= $row['civil_status'] ?>"><?= $row['civil_status'] ?></option>
                                                            <option value="Single">Single</option>
                                                            <option value="Married">Married</option>
                                                            <option value="Widowed">Widowed</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>Birthdate</label>
                                                        <input type="date" class="form-control" name="birthdate" value="<?= $row['birthdate'] ?>" style="height: 25px; width: 180px; font-size: 12px;">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>Birthplace</label>
                                                        <input type="text" class="form-control" name="birthplace" value="<?= $row['birthplace'] ?>" style="height: 25px; width: 150px; font-size: 12px;">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>Age</label>
                                                        <input type="number" class="form-control" name="age" value="<?= $row['age'] ?>" style="height: 25px; width: 180px; font-size: 12px;">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>Weight (lbs)</label>
                                                        <input type="text" class="form-control" name="weight" value="<?= $row['weight'] ?>" style="height: 25px; width: 180px; font-size: 12px;">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>Height (ft)</label>
                                                        <input type="text" class="form-control" name="height" value="<?= $row['height'] ?>" style="height: 25px; width: 180px; font-size: 12px;">
                                                    </div>
                                                </div>
                                                
                                                <h5 class="text5">Address</h5>
                                                <div class="form-group row">
                                                    <div class="col-md-2">
                                                        <label>Purok</label>
                                                        <select class="form-control" name="purok" style="height: 25px; width: 120px; font-size: 10px;">
                                                        <option value="<?= $row['purok'] ?>"><?= $row['purok'] ?></option>
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
                                                        <input type="number" class="form-control" name="mobile_number" value="<?= $row['mobile_number'] ?>" style="height: 25px; width: 180px; font-size: 12px;">
                                                    </div>
                                                    <div class="col-md-4" style="margin-left:-60px">
                                                        <label>Email Address</label>
                                                        <input type="email" class="form-control" name="email" value="<?= $row['email'] ?>" style="height: 25px; width: 180px; font-size: 12px;">
                                                    </div>
                                                </div>
                                                <h6 class="text"> <strong>In case of Emergency:</strong></h6>
                                                <div class="form-group row no-gutters">
                                                    <div class="col-md-4">
                                                        <label>Mobile Number</label>
                                                        <input type="number" class="form-control" name="emer_number" value="<?= $row['emer_number'] ?>" style="height: 25px; width: 180px; font-size: 12px;">
                                                    </div>
                                                    <div class="col-md-4" style="margin-left:-60px">
                                                        <label>Emergency Contact Name</label>
                                                        <input type="text" class="form-control" name="emer_contname" value="<?= $row['emer_contname'] ?>" style="height: 25px; width: 180px; font-size: 12px;">
                                                    </div>
                                                    <div class="col-md-4" style="margin-left:-60px">
                                                        <label>Relationship to contact</label>
                                                        <input type="text" class="form-control" name="emer_relation" value="<?= $row['emer_relation'] ?>" style="height: 25px; width: 180px; font-size: 12px;">
                                                    </div>
                                                </div>

                                                <input type="hidden" name="userid" value="<?= $row['userid'] ?>">
                                                <button type="submit" class="button" style="margin-top: 0.4rem !important;">Save Changes</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php } ?>

                        </tbody>

                    </table>

                    </div><!-- /.card-body -->
                </div>
                <!-- /.card -->
            </section>
            <!-- /.Left col -->
        </div>


        </div>


        <script>


            // para dli na mo gawas ang error message nga duha ka search bar iya makita sa isa ka page 
            $.fn.dataTable.ext.errMode = function(settings, helpPage, message) { 
                console.log(" "); 
            };



            // $(document).ready(function () {
            //     // Destroy DataTable if it already exists to avoid reinitialization error
            //     if ($.fn.DataTable.isDataTable('#userTable')) {
            //         $('#userTable').DataTable().destroy();
            //     }

            //     // Reinitialize DataTable
            //     var table = $('#userTable').DataTable({
            //         "paging": true,
            //         "searching": false,  // Disable default DataTables search bar
            //         "ordering": true,
            //         "info": true
            //     });

            //     // Hide default DataTable search bar
            //     $('.dataTables_filter').hide();
            // });


            $(document).ready(function () {
    // Destroy DataTable if it already exists to avoid reinitialization error
    if ($.fn.DataTable.isDataTable('#userTable')) {
        $('#userTable').DataTable().destroy();
    }

    // Reinitialize DataTable with language customization
    var table = $('#userTable').DataTable({
        "paging": true,  // Enable pagination
        "ordering": true, // Enable sorting
        "info": true, // Enable "Showing X to Y of Z entries"
        "searching": false, // Disable the default search bar
        "language": {
            "lengthMenu": "Display _MENU_ ", // Change "Show X entries"
            "info": "Showing _END_ / _TOTAL_ total users", // Change "Showing X to Y of Z entries"
            "infoEmpty": "No users available", // Message when no records
            "infoFiltered": "(filtered from _MAX_ total users)", // Change "filtered from Z total entries"
            "paginate": {
                "next": "Next >", // Change "Next"
                "previous": "< Prev" // Change "Previous"
            }
        }
    });

    // Hide default DataTable search bar
    $('.dataTables_filter').hide();
});

// Suppress duplicate search bar error messages
$.fn.dataTable.ext.errMode = function (settings, helpPage, message) {
    console.log(" ");
};






        </script>
  