<?php
session_start();
include 'db_connect.php'; // Database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $ver_password = $_POST['ver_password'];
    $firstname = trim($_POST['firstname']);
    $middlename = trim($_POST['middlename']);
    $lastname = trim($_POST['lastname']);
    $suffix = trim($_POST['suffix']);
    $age = trim($_POST['age']);
    $gender = trim($_POST['gender']);
    $civil_status = trim($_POST['civil_status']);
    $birthdate = $_POST['birthdate'];
    $birthplace = trim($_POST['birthplace']);
    $nationality = trim($_POST['nationality']);
    $weight = trim($_POST['weight']);
    $height = trim($_POST['height']);
    $purok = trim($_POST['purok']);
    $mobile_number = trim($_POST['mobile_number']);
    $emer_number = trim($_POST['emer_number']);
    $emer_contname = trim($_POST['emer_contname']);
    $emer_relation = trim($_POST['emer_relation']);
    // $creation = trim($_POST['creation']);


    // Validate required fields
    if (empty($username) || empty($email) || empty($password) || empty($firstname) || empty($lastname) || empty($gender)) {
        $_SESSION['error'] = "All required fields must be filled!";
        header("Location: createaccount.php");
        exit();
    }

    // Check if passwords match
    if ($password !== $ver_password) {
        $_SESSION['error'] = "Passwords do not match!";
        header("Location: createaccount.php");
        exit();
    }

    // Check if the username already exists
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $_SESSION['error'] = "Username already taken!";
        header("Location: createaccount.php");
        exit();
    }

    // Secure password hashing
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert into database
    $stmt = $conn->prepare("INSERT INTO users
        (username, email, password, firstname, middlename, lastname, suffix, age, gender, civil_status, birthdate, birthplace, nationality, weight, height, purok, mobile_number, emer_number, emer_contname, emer_relation) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("sssssssisssssiisiiss", 
        $username, $email, $hashed_password, $firstname, $middlename, $lastname, $suffix, $gender, $civil_status, $birthdate, $birthplace, $nationality, 
        $weight, $height, $purok, $mobile_number, $emer_number, $emer_contname, $emer_relation
    );

    if ($stmt->execute()) {
        $_SESSION['success'] = "Account created successfully!";
        header("Location: landing.php");
        exit();
    } else {
        $_SESSION['error'] = "Something went wrong! Try again.";
        header("Location: createaccount.php");
        exit();
    }
}
?>
