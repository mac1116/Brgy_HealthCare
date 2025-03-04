<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style3.css">
    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
<button class="button" data-toggle="modal" data-target="#action">view</button>

        <div class="modal fade" id="action" tabindex="-1" role="dialog" aria-labelledby="appointmentInfoModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title"><b>Appointment Information</b></h4>
                        <h6>Scheduled Date and Time: Pending</h6>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <!-- First Row -->
                            <div class="row mt-6">
                                <div class="col-md-4">
                                    <strong>Resident ID</strong><br>
                                    <span class="text3">0001</span>
                                </div>
                                <div class="col-md-5">
                                    <strong>Name</strong><br>
                                    <span class="text3">Ryan Compuesto</span>
                                </div>
                                <div class="col-md-3">
                                    <strong>Purok</strong><br>
                                    <span class="text3">Purok 1</span>
                                </div>
                            </div>

                            <!-- Second Row -->
                            <div class="row mt-6">
                                <div class="col-md-4">
                                    <strong>Age</strong><br>
                                    <span class="text3">30</span>
                                </div>
                                <div class="col-md-5">
                                    <strong>Email</strong><br>
                                    <span class="text3">ryan@gmail.com</span>
                                </div>
                                <div class="col-md-3">
                                    <strong>Concern</strong><br>
                                    <span class="text3">Fever</span>
                                </div>
                            </div>

                            <!-- Message Row -->
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <h6 style="color: #0d3b12;">Message</h6>
                                    <textarea class="form-control mt-2" rows="4">Gikalintura ko maam</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Footer with Buttons -->
                    <div class="modal-footer d-flex justify-content-center">
                        <button type="button" class="btn btn-success col-md-4">Verify</button>
                        <button type="button" class="btn btn-danger col-md-4">Decline</button>
                    </div>
                </div>
            </div>
        </div>



</body>
</html>