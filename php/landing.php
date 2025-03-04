<?php
include "../db_connection/db_connect.php";
include "login.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">

        <title>Brgy. Dimagiba Offical Page</title>
        <link rel="stylesheet" href="../css/style2.css">
    </head>
    <body>
        
        <nav>
            <div class="nav-container">
                <div class="logo">
                    <img src="../assets/logo.png" alt="logo" style="width: 70px; height: auto; margin-top: 20px;">
                    <div class="logo-text">
                        <p class="brgy">BARANGAY DIMAGIBA</p> 
                        <p class="hc">HEALTHCARE</p>
                    </div>
                </div>
                <div class="links">
                <div class="link"> <a href="#">Home</a></div>
                <div class="link"> <a href="#">About Us</a></div>
                <div class="link contact-btn"> <a href="#">Sign in</a></div>
            </div>

            </div>

            <section>
                <div class="main-container">
                    <div class="content">
                        <img src="../assets/logo.png" alt="logo"> <br> 
                        <i>Welcome to</i><br>
                        <b class="b1">Barangay Dimagiba</b> <br>
                        <b class="b2">Healthcare Center</b>
                        <div class="btn">
                            <button>Sign In</button>
                        </div>
                    </div>  
                        <div class="signin-container">
                            <h1>SIGN IN</h1>
                            <h6>Enter Account Details</h6>
                                <div class="signin">
                                    <form action="landing.php" method="POST">
                                        <input type="text" name="username" placeholder="Username">
                                        <input type="password" name="password" placeholder="Password">
                                        <button type="submit" name="submit" >Log In</button>
                                    </form>
                                </div>
                        </div>
                </div>
            </section>
        </nav>
    </body>
</html>