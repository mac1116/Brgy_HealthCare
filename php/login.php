<?php
session_start();
include '../db_connection/db_connect.php'; 

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $username = trim($_POST['username']);
//     $password = trim($_POST['password']);

//     if (empty($username) || empty($password)) {
//         $_SESSION['error'] = "All fields are required!";
//         header("Location: landing.php");
//         exit();
//     }

//     $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
//     $stmt->bind_param("s", $username);
//     $stmt->execute();
//     $result = $stmt->get_result();
//     $user = $result->fetch_assoc();

//     if ($user && password_verify($password, $user['password'])) { // Secure password check
//         $_SESSION['username'] = $user['username'];
//         $_SESSION['fullname'] = $user['fullname'];

//         if ($user['username'] == 'admin' && $password === 'admin123') {
//             header("Location: admin_dashboard.php");
//         } else {
//             header("Location: user_dashboard.php");
//         }
//         exit();
//     } else {
//         $_SESSION['error'] = "Invalid credentials!";
//         header("Location: landing.php");
//         exit();
//     }
// }
?>
