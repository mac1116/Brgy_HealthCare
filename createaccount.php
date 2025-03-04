<?php
include "../db_connection/db_connect.php";
include "../db_connection/add_data.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Resident</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Add Resident</h2>
    <p><i>All fields are required*</i></p>

    <form action="createaccount.php" method="POST">
        <!-- Account Information -->
        <div class="section">
            <h3>Account Information</h3>
            <div class="grid">
                <input type="text" name="username" placeholder="Username" required>
                <input type="email" name="email" placeholder="Email Address (Optional)">
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="ver_password" placeholder="Verify Password" required>
            </div>
        </div>

        <!-- Personal Information -->
        <div class="section">
            <h3>Personal Information</h3>
            <div class="grid">
                <input type="text" name="firstname" placeholder="First Name" required>
                <input type="text" name="middlename" placeholder="Middle Name (Optional)">
                <input type="text" name="lastname" placeholder="Last Name" required>
                <select name="suffix">
                    <option value="">Suffix</option>
                    <option value="Jr">Jr</option>
                    <option value="Sr">Sr</option>
                    <option value="III">III</option>
                </select>
            </div>
            <div class="grid">
                <select name="gender" required>
                    <option value="">Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                <select name="civil_status" required>
                    <option value="">Civil Status</option>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Widowed">Widowed</option>
                </select>
                <input type="date" name="birthdate" required>
                <input type="text" name="birthplace" placeholder="Birthplace" required>
            </div>
            <div class="grid">
                <input type="text" name="nationality" placeholder="Nationality" required>
                <input type="number" name="weight" placeholder="Weight (lbs)" required>
                <input type="number" name="height" placeholder="Height (cm)" required>
            </div>
        </div>

        <!-- Address -->
        <div class="section">
            <h3>Address</h3>
            <div class="grid">
                <select name="purok" required>
                    <option value="">Select Purok</option>
                    <option value="Purok 1">Purok 1</option>
                    <option value="Purok 2">Purok 2</option>
                </select>
                <input type="text" name="barangay" value="Dimagiba" readonly>
                <input type="text" name="city" value="Davao City" readonly>
                <input type="text" name="country" value="Philippines" readonly>
                <input type="text" name="postal" value="8000" readonly>
            </div>
        </div>

        <!-- Contact Information -->
        <div class="section">
            <h3>Contact Information</h3>
            <div class="grid">
                <input type="text" name="mobile_number" placeholder="Mobile Number" required>
                <input type="email" name="email_contact" placeholder="Email Address">
            </div>
            <p><i>In case of Emergency:</i></p>
            <div class="grid-3">
                <input type="text" name="emer_number" placeholder="Emergency Mobile Number" required>
                <input type="text" name="emer_contname" placeholder="Emergency Contact Name" required>
                <input type="text" name="emer_relation" placeholder="Relationship to Contact" required>
            </div>
        </div>

        <button type="submit" class="button">Add Resident</button>
    </form>
</div>

</body>
</html>
