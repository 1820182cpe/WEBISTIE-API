<?php
session_start();

if(isset($_SESSION['username'])){
    header("Location: index.php");
    exit();
}

    // Ensure that no output is sent before session_start()
    ob_start();
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
            $errorMessage = "Incorrect Username/Password.";
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
    <link rel="icon"  href="lugu.png" type="image/png>

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
                    <a class="link" href="phonebook.php">Phonebook</a>
                </li>
                <li class="item">
                    <a class="link" href="#contacts">Contacts</a>
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
            <h1 class="header-title">
                <span class="up">Hi!</span>
                <span class="down">I am Janela Costoy</span>
                
            </h1>
            <p class="header-subtitle"> Effortlessly manage your contacts with Jnl Website. Store, search, and access all your important contacts in one place. Stay organized and save time with our user-friendly interface. </p>            

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
                    <h2 class="section-title mb-3">About Jnl Website</h2>
                    <p>
                       Hi! I am Janela Costoy and I am a third-year college Bachelor of Science in Computer Engineer student. I’ve always been fascinated by how machines can learn and make decisions on their own. In my free time, I enjoy watching Korean dramas, anime, listening to music and reading books. I’m also a big fan of thriller movies, "mukbangs" on YouTube, and TV shows like Face to Face. I love exploring new places and trying new foods. I’m also passionate and eager to learn about new things I'm interested in.             
                    </p>
                    <a href="phonebook.php" class="btn-rounded btn btn-outline-primary mt-4">Create Phonebook</a>
                </div>              
            </div><!-- end of about wrapper -->
        </div><!-- end of container -->
    </section> <!-- end of about section -->


    <!-- portfolio section -->
    <section class="section" id="portfolio">
        <h2 class="section-title mb-5">My Skills</h2>
        <style> 
        font-weight: 500;
        font-family: 'Baloo Paaji', cursive;
        color: #695aa6;
        </style>
            <!-- row -->
            <div class="row">
                <div class="col-md-4">
                    <a href="#" class="portfolio-card">
                        <img src="https://i.imgur.com/fqjZNgD.png" class="portfolio-card-img" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">    
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>Communicator & Collaborator</h5>
                                <p class="font-weight-normal"> As a communicator and collaborator, my skills revolve around effectively conveying information, facilitating teamwork, and fostering positive relationships.</p>
                            </span>                         
                        </span>                     
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="portfolio-card">
                        <img class="portfolio-card-img" src="https://i.imgur.com/GTGn5bR.jpg" class="img-responsive rounded" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>Documentation & Technical Writing</h5>
                                <p class="font-weight-normal">I have the ability to convey technical concepts and information clearly and accurately to a diverse audience.</p>
                            </span>                         
                        </span>                         
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="portfolio-card">
                        <img class="portfolio-card-img" src="https://i.imgur.com/Xb25ltc.png" class="img-responsive rounded" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">    
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>Literate in MS Office</h5>
                                <p class="font-weight-normal">Having a basic understanding and proficiency in using the various applications within the Microsoft Office suite.</p>
                            </span>                         
                        </span>                     
                    </a>
                </div>
            </div><!-- end of row -->
    </section> <!-- end of portfolio section -->


    <!-- contact section -->
    <br>
    <br>
    <br>
    <br>
         <h2 id="contacts" class="section-title mb-5">FOR INQUIRIES</h2>
<div class="bostoy">
        <img class="bostoy-image" src="https://media2.giphy.com/media/v1.Y2lkPTc5MGI3NjExYmEyMWQ0anloczg0ZmZnNm1rZm96ajRnY2t0Z3YyYjkzbTI4MHlvZiZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/z5w9hbAIaEc25BsjPu/giphy.gif" alt="Contact Image">
        <div class="bostoy-info">
            
            <p>MAIL: costoyjanela@gmail.com</p>
            <p>CONTACT NUMBER: 09215190844</p>
            <p>TELEPHONE NUMBER: 776 296</p>
             <p>LIPA BATANGAS</p>
            <!-- Add more contact information if needed -->
        </div>
    </div>

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



<div class="lamp-animation left-lamp">
<div id="lampadario">
            <input type="radio" name="switch-4" value="on">
            <input type="radio" name="switch-4" value="on" checked="checked">
            <label for="switch-4"></label>
            <div id="filo"></div>
        </div>
        <div id="lampadario">
            <input type="radio" name="switch-5" value="on">
            <input type="radio" name="switch-5" value="on" checked="checked">
            <label for="switch-5"></label>
            <div id="filo"></div>
        </div>
        <div id="lampadario">
            <input type="radio" name="switch-6" value="on">
            <input type="radio" name="switch-6" value="on" checked="checked">
            <label for="switch-6"></label>
            <div id="filo"></div>
        </div>
        </div>


<div class="lamp-animation right-lamp">
<div id="lampadario">
            <input type="radio" name="switch-1" value="on">
            <input type="radio" name="switch-1" value="on" checked="checked">
            <label for="switch-1"></label>
            <div id="filo"></div>
        </div>
        <div id="lampadario">
            <input type="radio" name="switch-2" value="on">
            <input type="radio" name="switch-2" value="on" checked="checked">
            <label for="switch-2"></label>
            <div id="filo"></div>
        </div>
        <div id="lampadario">
            <input type="radio" name="switch-3" value="on">
            <input type="radio" name="switch-3" value="on" checked="checked">
            <label for="switch-3"></label>
            <div id="filo"></div>
        </div>
        </div>

