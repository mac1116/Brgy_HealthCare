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
<button class="button" data-toggle="modal" data-target="#appointmentModal">Create Appointment</button>

<div class="modal fade" id="appointmentModal" tabindex="-1" role="dialog" aria-labelledby="appointmentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="text" id="appointmentModalLabel"><b>Appointment Form</b></h4>
                <label for="text" class="text2">Let us know how we can help you!</label>
            </div>
            <div class="modal-body">
                <form action="#" method="POST">
                    <div></div>
                    <div class="form-group row">
                    <div class="col-md-7">
                            <label>Select Name:</label>
                            <select class="form-control" name="select_name" style="height: 25px; width: 290px; font-size: 10px;">
                                <option value="" style="font-size: 2px;">Select</option>
                                <option value="" style="font-size: 12px;">Jr.</option>
                                <option value="" style="font-size: 12px;">Sr.</option>
                                <option value="" style="font-size: 12px;">III</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label>Concern</label>
                            <select class="form-control" name="concern" style="height: 25px; width: 285px; font-size: 10px;">
                                <option value="" style="font-size: 2px;">Select</option>
                                <option value="" style="font-size: 12px;">Jr.</option>
                                <option value="" style="font-size: 12px;">Sr.</option>
                                <option value="" style="font-size: 12px;">III</option>
                            </select>
                        </div>
                    </div>
            
                    
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea class="form-control" id="message" name="message" rows="4" required style="font-size: 12px;"></textarea>
                    </div>
                    <button type="submit" class="button btn-block" style="margin-top: 30px;">Create Appointment</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>