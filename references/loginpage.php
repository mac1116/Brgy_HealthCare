<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/css/style.css">

</head>
<body>  
        <div class="container">
            <div class="welcome-container">
                <label class="welcome">Welcome to Health Care</label>
            </div>
            
            <div class="login-container">
                <form action="login.php" method="post">
                  <label class="login">Login Page</label>

                    <input type="text" name="username" placeholder="Username" required> <br>

                    <input type="text" name="password" placeholder="Password" required>

                    <input type="submit" value="SUBMIT">
                
                    <a href="#"> Create Account</a>
                </form>
            </div>

            <?php
                if (isset($_SESSION['error'])) {
                 echo "<p class='error'>" . $_SESSION['error'] . "</p>";
                  unset($_SESSION['error']); 
                    }
            ?>
         
        
        </div>
             
    
    </body>
</html>