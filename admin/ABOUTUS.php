<?php
    session_start();
    // Redirect to login if no session found
if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
    header("Location: ../index.php");
    exit();
  }
  
  include('includes/footer.php');
  include('includes/header.php');
  include('includes/sidebar.php');
//   include('includes/top-navbar.php');
  include('includes/notification.php');
//   include('../components/fetch_users.php');

  include('includes/aboutusSTYLE.php');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

<div class="content-header">
    <div class="container-fluid">

    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
        <div class="container-fluid">
        <body>
            <header>
                <div class="nav-container">
                    <div class="logo">
                        <img src="assets/images/icons/logo.png" alt="logo" style="width: 55px; height: auto; margin-top: 20px;">
                        <div class="logo-text">
                            <p class="brgy">BARANGAY DIMAGIBA</p> 
                            <p class="hc">HEALTHCARE</p>
                        </div>
                    </div>

                    <nav>
                    <div class="links">
                    <div class="link"> <a href="#" id="nav-home">Home</a></div>
                    <div class="link"> <a href="#" id="nav-about">About Us</a></div>
                    <div class="link"> <a href="#" id="nav-contact">Contact</a></div>
                    <div class="link signin-btn"> <a href="#" id="nav-signin">Sign in</a></div>
                    </div>
                    </nav>

                </div>
            </header>

            <section class="home" id="home">
                <div class="main-container">
                    <div class="content">
                        <img src="assets/images/icons/logo.png" alt="logo"> <br> 
                        <i>Welcome to</i><br>
                        <b class="b1">Barangay Dimagiba</b> <br>
                        <b class="b2">Healthcare Center</b>
                        <div class="btn">
                            <button id="about-btn">About Us</button>
                        </div>
                    </div>  
                        <div class="signin-container" id="signin">
                            <h1>SIGN IN</h1>
                            <h6>Enter Account Details</h6>
                                <div class="signin">
                                    <form action="operations/auth_process.php" method="POST">
                                        <input type="text" name="username" placeholder="Username">
                                        <input type="password" name="password" placeholder="Password">
                                        <button type="submit" name="signin" >Log In</button>
                                    </form>
                                </div>
                        </div>
                </div>
            </section>

            <section class="about" id="about">
                <div class="head-container">
                <h1 class="heading"> <span>About</span> Us</h1>

                <div class="row">
                    <div class="img-container">
                        <img src="assets/images/icons/pic.jpg" alt="">
                    </div>

                    <div class="content">
                        <h3>How it was started?</h3>
                        <p>Barangay Dimagiba Health Care Center, located in Barangay Dimagiba, City of Yuem, 
                            is dedicated to providing accessible and quality healthcare to the community. Our health workers offers 
                            medical consultations, immunizations, maternal care, and health education to promote overall 
                            well-being. Committed to serving with compassion, we strive to ensure a healthier and safer 
                            Barangay Dimagiba.
                        </p>

                        <p>Together, let's build a stronger, healthier Barangay Dimagiba! </p>
                    </div>

                    </div>
                </div>
                
                
            </section>

            <section class="footer" id="contact">
                <div class="box-container">

                    <div class="box">
                        <h3>Quick links</h3>
                        <a href="#" id="footer-home"> Home</a>
                        <a href="#" id="footer-about"> About Us</a>
                        <a href="#" id="footer-contact"> Contact</a>
                        <a href="#" id="footer-signin"> Sign In</a>
                    </div>

                    <div class="box">
                        <h3>Location</h3>
                        <a href="#"> Barangay Dimagiba, City of Yuem <br> <br>Philippines, 8000</a>
                    </div>

                    <div class="box">
                        <h3>Contact Us</h3>
                        <a href="#"> 09123456789</a>
                        <a href="#">barangaydimagiba@gmail.com</a>
                    </div>
                </div>

                <div class="credit"> Created by: <span> Unsagane Group</span> | All Rights Reserved</div>
            </section>

            
            <script src="js/script.js"></script>
           
            
    </body>
        </div>
    </section>
</div>