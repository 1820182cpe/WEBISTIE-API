<?php
    // Ensure that no output is sent before session_start()
    ob_start();
    session_start();
    require('db.php');

    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);

        // Check if user exists in the database
        $query = "SELECT * FROM `users` WHERE username='$username' AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        $rows = mysqli_num_rows($result);

        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: index.php");
            exit();
        } else {
            $errorMessage = "Incorrect.";
        }
    }
    ob_end_flush(); // Flush output buffer
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Meyawo landing page.">
    <meta name="author" content="Devcrud">
    <title>Jnl Website</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + Meyawo main styles -->
	<link rel="stylesheet" href="assets/css/meyawo.css">
	<link rel="stylesheet" href="assets/main.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- Page Navbar -->
    <nav class="custom-navbar" data-spy="affix" data-offset-top="20">
        <div class="container">
            <a class="logo" href="#">Jnl Website</a>         
            <ul class="nav">
                <li class="item">
                    <a class="link" href="index.php">Home</a>
                </li>
                <li class="item">
                    <a class="link" href="#about">About</a>
                </li>
                <li class="item">
                    <a class="link" href="#portfolio">Phonebook</a>
                </li>
                <li class="item">
                    <a class="link" href="#testmonial">Contacts</a>
                </li>
                <li class="item">
                    <a class="link" href="login1.php">Login</a>
                </li>

            </ul>
            <a href="javascript:void(0)" id="nav-toggle" class="hamburger hamburger--elastic">
                <div class="hamburger-box">
                  <div class="hamburger-inner"></div>
                </div>
            </a>
        </div>          
    </nav><!-- End of Page Navbar -->

    <!-- page header -->
    <header id="home" class="header">
        <div class="overlay"></div>
        <div class="header-content container">
     <form class="forms" method="post" name="login">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="buttons1"/>
  <p class="message">Doesn't Have Account?</p>
        <a href="registration.php" class="buttons">REGISTER</a>
    </form>
    
        <?php if (isset($errorMessage)): ?>
        <div class='form1'>
            <h10><?php echo $errorMessage; ?></h10><br/>
            <p class='link'>Please double check your password / Check Case Sensitivity</p>
        </div>
    <?php endif; ?>   

        </div>              
    </header><!-- end of page header -->

    <!-- about section -->
    <section class="section pt-0" id="about">
        <!-- container -->
        <div class="container text-center">
            <!-- about wrapper -->
            <div class="about">
                <div class="about-img-holder">
                    <div class="gif-container"></div>
                </div>
                <div class="about-caption">
                    <p class="section-subtitle">Who Am I ?</p>
                    <h2 class="section-title mb-3">About Me</h2>
                    <p>
                        Get inspired by Jnl Csty's journey and join them in their mission to finish and graduate to her course, Bachelor in Science in Computer Engineering. Also, pray for her together with her classmates. God Bless you and Welcome to Jnl Pnbk!              
                    </p>
                    <button class="btn-rounded btn btn-outline-primary mt-4">Create Phonebook</button>
                </div>              
            </div><!-- end of about wrapper -->
        </div><!-- end of container -->
    </section> <!-- end of about section -->

 

    <!-- contact section -->
    <section class="section" id="contact">
        <div class="container text-center">

            <h9 class="section-title mb-5">Contact Me</h9>
            <br>
            <p class="section-subtitle">MAIL: costoyjanela@gmail.com</p>
            <p class="section-subtitle">CONTACT NO.: 09215190845</p>
            <p class="section-subtitle">TEL NO.: 776 7096</p>
            <p class="section-subtitle">LIPA BATANGAS</p>
           
        </div><!-- end of container -->
    </section><!-- end of contact section -->

    <!-- footer -->
    <div class="container">
        <footer class="footer">       
            <p class="mb-0">Copyright <script>document.write(new Date().getFullYear())</script> &copy; <a href="">Jnl Website</a></p>
            <div class="social-links text-right m-auto ml-sm-auto">
                <a href="javascript:void(0)" class="link"><i class="ti-facebook"></i></a>
                <a href="javascript:void(0)" class="link"><i class="ti-twitter-alt"></i></a>
                <a href="javascript:void(0)" class="link"><i class="ti-google"></i></a>
                <a href="javascript:void(0)" class="link"><i class="ti-pinterest-alt"></i></a>
                <a href="javascript:void(0)" class="link"><i class="ti-instagram"></i></a>
                <a href="javascript:void(0)" class="link"><i class="ti-rss"></i></a>
            </div>
        </footer>
    </div> <!-- end of page footer -->
	
	<!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
	<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Meyawo js -->
    <script src="assets/js/meyawo.js"></script>

</body>
</html>
































































