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
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Last Name</th>
                            <th class="text-center">Action</th>

                        </tr>

                        </thead>
                        <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result)) { ?>

                            <tr>
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
                                <?= $row['middlename']; ?>
                            </td>
                            <td>
                                <?= $row['lastname']; ?>
                            </td>
                            <td class="text-center">
                                <button class="btn btn-warning btn-sm" data-toggle="modal"
                                data-target="#updatemodal<?= $row['userid'] ?>"> Update</button>


                                <button class="btn btn-danger btn-sm" data-toggle="modal"
                                data-target="#deletemodal<?= $row['userid'] ?>">Delete </button>
                            </td>
                            </tr>

                            <div class="modal fade" id="updatemodal<?= $row['userid'] ?>" tabindex="-1"
                            role="dialog" aria-labelledby="updatemodal" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title"> Update User</h5>
                                    <button type="button" class="close" data-dismiss="modal" araia-label="close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                    
                                    </div>
                                    <div class="modal-body">
                                    <form action="../components/update_user.php" method="POST">

                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" name="username" id="userid" value="<?= $row['username']?>" />
                                    </div>

                                    <div class="form-group">
                                        <label for="fname">First Name</label>
                                        <input type="text" class="form-control" name="firstname" value="<?= $row['firstname']?>" />
                                    </div>

                                    <div class="form-group">
                                        <label for="fname">Middle Name</label>
                                        <input type="text" class="form-control" name="middlename" value="<?= $row['middlename']?>" />
                                    </div>
                                    <div class="form-group">
                                        <label for="fname">Last Name</label>
                                        <input type="text" class="form-control" name="lastname" value="<?= $row['lastname']?>" />
                                    </div>

                                    <input type="hidden" name="userid" value="<?= $row['userid'] ?>">
                                    <button type="submit" class="btn btn-primary"> SAVE UPDATES</button>

                                    </form>

                                </div>

                                </div>

                            </div>


                            </div>

                            <div class="modal fade" id="deletemodal<?= $row['userid'] ?>" tabindex="-1"
                            role="dialog" aria-labelledby="updatemodal" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header bg-danger">
                                    <h5 class="modal-title"> Delete User</h5>
                                    <button type="button" class="close" data-dismiss="modal" araia-label="close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                    
                                    </div>
                                    <div class="modal-body">
                                    <form action="../components/delete_user.php" method="POST">
                                        <p> Are you sure you want to DELETE this record  of <?= $row['lastname'] ?></p>
                                    
                                        <input type="hidden" name="userid" value="<?= $row['userid'] ?>">
                                    <button type="submit" class="btn btn-danger">Yes</button>

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
  