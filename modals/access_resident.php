<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resident Details</title>
    <link rel="stylesheet" href="../css/style3.css">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>

<!-- Button to Open Modal -->
<button class="button" data-toggle="modal" data-target="#residentDetailsModal">View Details</button>

<!-- Modal -->
<div class="modal fade" id="residentDetailsModal" tabindex="-1" role="dialog" aria-labelledby="residentDetailsLabel" aria-hidden="true">
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
                <img src="../images/profile-placeholder.png" alt="Profile Picture" class="profile-img mb-3">
            </div>
        </div>
        
        <!-- Personal Information Section -->
        <div class="text" style="background-color:#0d3b12; padding: 1px;"> <h6 class="text5" >Personal Information</h6> </div>
        <div class="row mt-3">
            <div class="col-md-2"><strong>Resident ID</strong><br>
                <span class="text4">0001</span>
            </div>
            <div class="col-md-3"><strong>First Name</strong><br>
                <span class="text4">Ryan Jay</span>
            </div>
            <div class="col-md-3"><strong>Last Name</strong><br>
                <span class="text4">Compuesto</span>
            </div>
            <div class="col-md-3"><strong>Middle Name</strong><br>
                <span class="text4">Ambot</span>
            </div>
            <div class="col-"><strong>Suffix</strong><br>
                <span class="text4">N/A</span>
            </div>
        </div>
        
        <div class="row mt-3">
            <div class="col-md-2"><strong>Age</strong><br>
                <span class="text4">35</span>
            </div>
            <div class="col-md-2"><strong>Gender</strong><br>
                <span class="text4">Male</span>
            </div>
            <div class="col-md-3"><strong>Civil Status</strong><br>
                <span class="text4">Married</span>
            </div>
            <div class="col-md-3"><strong>Birthdate</strong><br>
                <span class="text4">Feb 14, 2004</span>
            </div>
            <div class="col-md-0"><strong>Birthplace</strong><br>
                <span class="text4">Davao City</span>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-2"><strong>Nationality</strong><br>
                <span class="text4">Filipino</span>
            </div>
            <div class="col-md-2"><strong>Weight</strong><br>
                <span class="text4">51lbs</span>
            </div>
            <div class="col-md-2"><strong>Height</strong><br>
                <span class="text4">200cm</span>
            </div>
        </div>

        <!-- Address Section -->
        <div class="text" style="background-color:#0d3b12; padding: 1px; margin-top: 30px;"><h6 class="text5">Address</h6></div>
        <div class="row mt-3">
            <div class="col-md-2"><strong>Purok</strong><br>
                <span class="text4">Purok 1</span>
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
                <span class="text4">Davao City</span>
            </div>
        </div>

        <!-- Contact Information Section -->
        <div class="text" style="background-color:#0d3b12; padding: 1px; margin-top: 30px;"><h6 class="text5">Contact Information</h6></div>
        <div class="row mt-3">
            <div class="col-md-4"><strong>Mobile Number</strong><br>
                <span class="text4">09123456789</span>
            </div>
            <div class="col-md-4"><strong>Email Address</strong><br>
                <span class="text4">ryanjaycom@gmail.com</span>
            </div>
        </div>

        <!-- Emergency Contact Section -->
        <div class="text" style="background-color:#0d3b12; padding: 1px; margin-top: 30px;"><h6 class="text5">Emergency Contact</h6></div>
        <div class="row mt-3">
            <div class="col-md-4"><strong>Mobile Number</strong><br>
                <span class="text4">09123456789</span>
            </div>
            <div class="col-md-4"><strong>Emergency Contact Name</strong><br>
                <span class="text4">Kevin Compuesto</span>
            </div>
            <div class="col-md-4"><strong>Relationship</strong><br>
                <span class="text4">Brother</span>
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
                    
                    <div class="table-responsive mt-2">
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
                    </div>

                    <!-- Close Button -->
                    <div class="d-flex justify-content-center mt-3">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>
