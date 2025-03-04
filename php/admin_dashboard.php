<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Welcome to Admin Dashboard</h1>
    <p>Full Name: <?php echo $_SESSION['full_name']; ?></p>
    <p>Username: <?php echo $_SESSION['username']; ?></p>
    <p>Email: <?php echo $_SESSION['email']; ?></p>
    <p>Account Created: <?php echo $_SESSION['created_at']; ?></p>
    <a href="logout.php">Logout</a>

    
</body>
</html>
