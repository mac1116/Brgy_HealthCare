<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
<button class="button" data-toggle="modal" data-target="#addUserModal">Add Resident</button>

<div class="modal fade" id="addUserModal" role="dialog" aria-labelledby="addUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="text" id="addUserModalLabel"><b>Add Resident</b></h4>
                <label for="text" class="text2">All fields are required*</label>

            </div>
            <div class="modal-body">
                <form action="#" method="POST">
                    
                    <h5 class="text5">Account Information</h5>
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label>Username</label>
                            <input type="text" class="form-control" name="usr_name" required style="height: 25px; width: 180px; font-size: 12px;">
                        </div>
                        <div class="col-md-3">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" required style="height: 25px; width: 180px; font-size: 12px;">
                        </div>
                        <div class="col-md-3">
                            <label>Verify Password</label>
                            <input type="password" class="form-control" name="confirm_password" required style="height: 25px; width: 180px; font-size: 12px;">
                        </div>
                    </div>
                    
                    <h5 class="text5">Personal Information</h5>
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label>First Name</label>
                            <input type="text" class="form-control" name="first_name" required style="height: 25px; width: 180px; font-size: 12px;">
                        </div>
                        <div class="col-md-3">
                            <label>Middle Name (Optional)</label>
                            <input type="text" class="form-control" name="middle_name" style="height: 25px; width: 180px; font-size: 12px;">
                        </div>
                        <div class="col-md-3">
                            <label>Last Name</label>
                            <input type="text" class="form-control" name="last_name" required style="height: 25px; width: 180px; font-size: 12px;">
                        </div>
                        <div class="col-sm-3">
                            <label>Suffix</label>
                            <select class="form-control" name="suffix" style="height: 25px; width: 150px; font-size: 10px;">
                                <option value="" style="font-size: 2px;">Select</option>
                                <option value="" style="font-size: 12px;">Jr.</option>
                                <option value="" style="font-size: 12px;">Sr.</option>
                                <option value="" style="font-size: 12px;">III</option>


                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label>Gender</label>
                            <select class="form-control" name="gender" style="height: 25px; width: 180px; font-size: 10px;">
                                <option value="">Select</option>
                                <option value="">Male</option>
                                <option value="">Female</option>
                                <option value="">Other</option>


                            </select>
                        </div>
                        <div class="col-md-3">
                            <label>Civil Status</label>
                            <select class="form-control" name="civil_status" style="height: 25px; width: 180px; font-size: 10px;">
                                <option value="">Select</option>
                                <option value="">Single</option>
                                <option value="">Married</option>
                                <option value="">Widowed</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label>Birthdate</label>
                            <input type="date" class="form-control" name="birthdate" required style="height: 25px; width: 180px; font-size: 12px;">
                        </div>
                        <div class="col-md-3">
                            <label>Birthplace</label>
                            <input type="text" class="form-control" name="birthplace" required style="height: 25px; width: 150px; font-size: 12px;">
                        </div>
                    </div>
                    
                    <h5 class="text5">Address</h5>
                    <div class="form-group row">
                        <div class="col-md-2">
                            <label>Purok</label>
                            <select class="form-control" name="purok" style="height: 25px; width: 120px; font-size: 10px;">
                            <option value="">Select</option>
                            <option value="">Purok 1</option>
                            <option value="">Purok 2</option>
                            <option value="">Purok 3</option>
                            <option value="">Purok 4</option>
                            <option value="">Purok 5</option>
                            <option value="">Purok 6</option>
                            <option value="">Purok 7</option>
                            </select>
                            
                            
                        </div>
                        <div class="col-md-2">
                            <label>Barangay</label>
                            <input type="text" class="form-control" name="barangay" value="Dimagiba" readonly style="height: 25px; width: 120px; font-size: 12px;">
                        </div>
                        <div class="col-md-2">
                            <label>City</label>
                            <input type="text" class="form-control" name="city" value="Davao City" readonly style="height: 25px; width: 120px; font-size: 12px;">
                        </div>
                        <div class="col-md-2">
                            <label>Country</label>
                            <input type="text" class="form-control" name="country" value="Philippines" readonly style="height: 25px; width: 120px; font-size: 12px;">
                        </div>
                        <div class="col-md-2">
                            <label>Postal Code</label>
                            <input type="text" class="form-control" name="postal_code" value="8000" readonly style="height: 25px; width: 120px; font-size: 12px;">
                        </div>
                    </div>
                    
                    <h5 class="text5">Contact Information</h5>
                    <div class="form-group row no-gutters">
                        <div class="col-md-4 style">
                            <label>Mobile Number</label>
                            <input type="text" class="form-control" name="mobile" required style="height: 25px; width: 180px; font-size: 12px;">
                        </div>
                        <div class="col-md-4" style="margin-left:-60px">
                            <label>Email Address</label>
                            <input type="email" class="form-control" name="contact_email" style="height: 25px; width: 180px; font-size: 12px;">
                        </div>
                    </div>
                    <h6 class="text"> <strong>In case of Emergency:</strong></h6>
                    <div class="form-group row no-gutters">
                        <div class="col-md-4">
                            <label>Mobile Number</label>
                            <input type="text" class="form-control" name="emergency_mobile" required style="height: 25px; width: 180px; font-size: 12px;">
                        </div>
                        <div class="col-md-4" style="margin-left:-60px">
                            <label>Emergency Contact Name</label>
                            <input type="text" class="form-control" name="emergency_name" required style="height: 25px; width: 180px; font-size: 12px;">
                        </div>
                        <div class="col-md-4" style="margin-left:-60px">
                            <label>Relationship to contact</label>
                            <input type="text" class="form-control" name="relationship" required style="height: 25px; width: 180px; font-size: 12px;">
                        </div>
                    </div>
                    <button type="submit" class="button" style="margin-top: 10  px;">Add Resident</button>
                </form>
            </div>
        </div>
    </div>
</div>

    
</body>
</html>