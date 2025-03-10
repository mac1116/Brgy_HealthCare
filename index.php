<?php
include 'db_connect/db_connection.php';
include 'operations/auth_process.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fc;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            width: 100%;
            max-width: 500px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 20px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            font-size: 14px;
            margin-bottom: 5px;
            color: #555;
        }
        input[type="text"], input[type="password"], input[type="tel"] {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        button {
            padding: 10px;
            font-size: 16px;
            color: white;
            background-color: #5cb85c;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #4cae4c;
        }
        .form-toggle {
            text-align: center;
            margin-top: 10px;
        }
        .form-toggle a {
            color: #007bff;
            text-decoration: none;
            font-size: 14px;
        }
        .form-toggle a:hover {
            text-decoration: underline;
        }
        .form-container {
            display: none;
        }
        .form-container.active {
            display: block;
        }
        .gif-container {
            text-align: center;
            margin-bottom: 20px;
        }
        .gif-container img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>

<div class="container">
    <!-- GIF at the top of the page -->
    <div class="gif-container">
        <img src="admin/assets/images/cat.gif" alt="Loading GIF">
    </div>

    <h2>Login & Registration</h2>

    <!-- Login Form -->
    <div id="login-form" class="form-container active">
        <form method="POST" action="">
            <label>Username:</label>
            <input type="text" name="username" required><br>
            <label>Password:</label>
            <input type="password" name="password" required><br>
            <button type="submit" name="login">Login</button>
        </form>
        <div class="form-toggle">
            <p>Don't have an account? <a href="#" onclick="toggleForm()">Register here</a></p>
        </div>
    </div>

    <div id="register-form" class="form-container">
        <form method="POST" action="">
            <label>First Name:</label>
            <input type="text" name="first_name" required><br>
            
            <label>Middle Name:</label>
            <input type="text" name="middle_name"><br>
            
            <label>Last Name:</label>
            <input type="text" name="last_name" required><br>
            
            <label>Contact Number:</label>
            <input type="tel" name="contact_number" required><br>
            
            <label>Username:</label>
            <input type="text" name="reg_username" required><br>
            
            <label>Password:</label>
            <input type="password" name="reg_password" required><br>
            
            <label>Confirm Password:</label>
            <input type="password" name="reg_confirm_password" required><br>
            
            <button type="submit" name="register">Register</button>
        </form>
        <div class="form-toggle">
            <p>Already have an account? <a href="#" onclick="toggleForm()">Login here</a></p>
        </div>
    </div>
</div>

<script>
    function toggleForm() {
        const loginForm = document.getElementById('login-form');
        const registerForm = document.getElementById('register-form');
        
        loginForm.classList.toggle('active');
        registerForm.classList.toggle('active');
    }
</script>

</body>
</html>
