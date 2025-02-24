<<<<<<< HEAD
<?php
session_start();
include 'db_connect.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']); 

    if (empty($username) || empty($password)) {
        $_SESSION['error'] = "All fields are required!";
        header("Location: loginpage.php");
        exit();
    }

    $stmt = $conn->prepare("SELECT * FROM login_system WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();


    if ($user && $password === $user['password']) {
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];
        $_SESSION['full_name'] = $user['full_name'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['created_at'] = $user['created_at'];

        if ($user['role'] == 'admin') {
            header("Location: admin_dashboard.php");
        } else {
            header("Location: user_dashboard.php");
        }
        exit(); 
    } else {
        $_SESSION['error'] = "Invalid credentials!";
        header("Location: loginpage.php");
        exit();
    }
}
?>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <Form>
        <div class="main_div">
            <div class="first_div">
                <label class="sign_in_lbl">Sign in</label><br>
                <input type="text" name="username" id="username" placeholder="Username" required> <br>
                <input type="text" name="password" id="pasword" placeholder="Password" required> <br>
                <button type="submit" class="sign_in_bttn" >
                        Sign in
                </button>

                <span class="circle"></span>
                <p class="plbl">Don't have any account yet?</p>
                <button class="create_acc">Create Account</button>
            </div>

        </div>
    </Form>
</body>
</html>
>>>>>>> 034e5a61b7fc0bf3f0a6ae05ebedcbc57d95365a
