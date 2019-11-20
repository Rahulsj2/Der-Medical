<?php 
include('header.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device=width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Rahul, Dominic, Enekuba, Rebecca">

        <title>DER Medical Center</title>

        <!-- Font Awesome Icons-->
        <link  rel="stylesheet" type="text/css" href="../vendor/fontawesome/css/all.min.css">

        <!-- Google Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

        <!-- Bootstrap CSS-->
        <link  rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
        
        <!-- Main Style Sheet-->
        <Link rel="stylesheet" type="text/css" href="../css/style.css">

        <!-- Bootstrap core JavaScript-->
        <script src="../vendor/jquery/jquery.min.js"></script>

    </head>

    <body>


      
         <!--==========================
            Navigation bar
        ============================-->
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container">
                <a class="navbar-brand" href="index.php"> DER</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="nav navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item menu-active">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.php">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.php">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        <?php 
                            if(!isset($_SESSION['user'])){
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                        <li class="nav-item signup">
                            <a class="nav-link hov" href="signup.php">Signup</a>
                        </li>
                        <?php }else {?>
                            <li class="nav-item signup">
                                <a class="nav-link hov" href="logout.php">Logout</a>
                            </li>
                        <?php }?>
                    </ul>
                </div>
            </div>
        </nav>



        <!--==========================
            Header
        ============================-->

        <header class="container my-5 py-5">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-lg-4 my-auto ">
                        <div class="mx-auto">
                            <h1 class="mb-4">Best Medical Care you can get <br> you and your family</h1>
                            <p class="mb-4 pb-0">Changing the lives of patients and <br> pushing the limits of healthcare</p>
                            <ul class="list-inline ml-auto">
                                <li class="list-inline-item circle-icon">
                                    <a class="" href="cardio.php"> <i class="fa fa-heartbeat fa-2x circle-icon"></i></a>
                                </li>
                                <li class="list-inline-item circle-icon">
                                    <a class="" href="neuro.php"> <i class="fa fa-stethoscope fa-2x"></i></a>
                                </li>
                                <li class="list-inline-item circle-icon">
                                    <a class="" href="physio.php"> <i class="fa fa-wheelchair fa-2x"></i></a>
                                </li>
                                <li class="list-inline-item circle-icon">
                                    <a class="" href="services.php"> <i class="fa fa-hospital fa-2x"></i></a>
                                </li>
                                <li class="list-inline-item circle-icon">
                                    <a class="" href="services.php"> <i class="fa fa-ambulance fa-2x"></i></a>
                                </li>
                        </div>
                    </div>
                    <div class="col-lg-8 my-auto">     
                        <img src="../img/dcotor.svg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </header>



        <section class="container-flu my-5 py-5">
            <div class="container h-100">
                <div class="row fa-color h-100 ">
                    <div class="col-lg-4 my-auto ">
                        <div class="mx-auto">
                            <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 18rem;">
                               <i class="fa fa-id-card-alt fa-5x mt-5 text-center"></i>
                                <div class="card-body">
                                    <h5 class="card-title mt-3 pt-3">Register</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="signup.php" class="card-text small">Register<i class="new fa fa-arrow-right ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 my-auto ">
                        <div class="mx-auto">
                            <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 18rem;">
                               <i class="fa fa-calendar-check fa-5x mt-5 text-center"></i>
                                <div class="card-body">
                                    <h5 class="card-title mt-3 pt-3">Book Appointment</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="appointment.php" class="card-text small">Book Now<i class="new fa fa-arrow-right ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 my-auto ">
                        <div class="mx-auto">
                            <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 18rem;">
                               <i class="fa fa-lightbulb fa-5x mt-5 text-center"></i>
                                <div class="card-body">
                                    <h5 class="card-title mt-3 pt-3">Health Tips</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="blog.php" class="card-text small">Learn More<i class="new fa fa-arrow-right ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        

        <header class="container my-5 py-5">
            <div class="container h-100">
                <div class="row butt h-100">
                    <div class="col-lg-5 back my-auto">     
                        <img src="../img/steth.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 my-auto">
                        <div class="mx-auto about">
                            <h1 class="mb-4 card-title">Watch our impact in the <br> patient's life </h1>
                            <p class="mb-4 pb-0">We are a a full-service, non-profit community hospital, offering comprehensive medical, 
                                surgical and therapeutic services. With 281 beds, more than 1900 employees and a world-class medical staff, 
                                we provide innovative, technologically advanced care on a patient-friendly, just north of Seattle.
                            </p>
                            <button type="button" class="btn btn-outline-danger">More</button>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        <section class="container banner my-5 py-5">
            <div class="container h-100">
                <div class="row h-100 ">
                    <div class="col-lg-4 my-auto ">
                        <div class="mx-auto goals">
                            <h5 class="">Mission</h5>
                            <p class="card-text">Our mission is to change the lives of patients and push the 
                                limits of healthcare in the nation by providing personalised,
                                 quality care with compassion and dignity.
                            </p> 
                        </div>
                    </div>
                    <div class="col-lg-4 my-auto ">
                        <div class="mx-auto goals">
                            <h5 class="" >Vision</h5>
                            <p class="card-text">We are a community of caring health professionals, 
                                recognised for promoting wellness through early detection and prevention.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 my-auto ">
                        <div class="mx-auto goals">
                            <h5 class="">Admission</h5>
                            <p class="card-text">When you arrive, unless you’re told otherwise, 
                                please go directly to the Admitting Department, located in the main hospital lobby.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container my-5 py-5">
            <div class="container h-100 col-lg-8">
                <div class="row icon-color h-100 ">
                    <div class="col-lg-4 my-auto text-center">
                        <i class="fa fa-capsules fa-5x my-5 py-5"></i>
                        <div class="mx-auto text-left">
                            <h5 class="">Pharmarcy</h5>
                            <p class="card-text">Our mission is to change the lives of patients and push the 
                                limits of healthcare in the nation by providing personalised,
                                    quality care with compassion and dignity.
                            </p> 
                        </div>
                    </div>
                    <div class="col-lg-4 my-auto text-center">
                        <i class="fa fa-vial fa-5x my-5 py-5"></i>
                        <div class="mx-auto text-left">
                            <h5 class="" >Laboratory</h5>
                            <p class="card-text">We are a community of caring health professionals, 
                                recognised for promoting wellness through early detection and prevention.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 my-auto text-center">
                        <i class="fa fa-brain fa-5x my-5 py-5"></i>
                        <div class="mx-auto text-left">
                            <h5 class="">Neurosurgery</h5>
                            <p class="card-text">When you arrive, unless you’re told otherwise, 
                                please go directly to the Admitting Department, located in the main hospital lobby.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container h-100 mt-5 pt-5 col-lg-8">
                    <div class="row icon-color h-100 ">
                        <div class="col-lg-4 my-auto text-center">
                            <i class="fa fa-tooth fa-5x my-5 py-5 "></i>
                            <div class="mx-auto text-left">
                                <h5 class="">Dentistry</h5>
                                <p class="card-text">Our mission is to change the lives of patients and push the 
                                    limits of healthcare in the nation by providing personalised,
                                        quality care with compassion and dignity.
                                </p> 
                            </div>
                        </div>
                        <div class="col-lg-4 my-auto text-center">
                            <i class="fa fa-heartbeat fa-5x my-5 py-5"></i>
                            <div class="mx-auto text-left">
                                <h5 class="" >Cardiology</h5>
                                <p class="card-text">We are a community of caring health professionals, 
                                    recognised for promoting wellness through early detection and prevention.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 my-auto text-center ">
                            <i class="fa fa-wheelchair fa-5x mt-5 my-5 py-5 "></i>
                            <div class="mx-auto text-left">
                                <h5 class="">Physiotherapy</h5>
                                <p class="card-text">When you arrive, unless you’re told otherwise, 
                                    please go directly to the Admitting Department, located in the main hospital lobby.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        

        <!-- <div class="shadow p-3 mb-5 bg-white rounded">Regular shadow</div> -->
    


            <!-- Footer -->
        <footer class="page-footer font-small stylish-color-dark pt-4">

            <div class="container text-center text-md-left">
        
                <div class="row">
            
                    <div class="col-md-4 mx-auto">
            
                        <h5 class="font-weight-bold text-uppercase h4 mt-3 mb-4">DER</h5>
                        <p class="dj font-weight-light">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos ea, ratione optio laborum 
                            commodi deleniti harum earum voluptate aspernatur veniam placeat qui sequi totam dolor iusto 
                            dolores distinctio suscipit et!
                        </p>
                
                    </div>
                    <hr class="clearfix w-100 d-md-none">
            
                    <div class="col-md-2 mx-auto">
            
                        <h5 class="font-weight-bold text-uppercase h6 mt-3 mb-4">Navigation</h5>
                
                        <ul class="list-unstyled ">
                            <li>
                            <a class="font-weight-light" href="blog.php">Blog</a>
                            </li>
                            <li>
                            <a class="font-weight-light" href="index2.php">Home</a>
                            </li>
                            <li>
                            <a class="font-weight-light" href="contact.php">Contact</a>
                            </li>
                            <li>
                            <a class="font-weight-light" href="services.php">Services</a>
                            </li>
                        </ul>
            
                    </div>
            
                    <hr class="clearfix w-100 d-md-none">
            
                    <div class="col-md-2 mx-auto">
                        <h5 class="font-weight-bold h6 text-uppercase mt-3 mb-4">Legal</h5>
                
                        <ul class="list-unstyled">
                            <li>
                            <a class="font-weight-light" href="#!">Terms</a>
                            </li>
                            <li>
                            <a class="font-weight-light" href="#!">Privacy</a>
                            </li>
                            <li>
                            <a class="font-weight-light" href="#!">Cookies</a>
                            </li>
                            <li>
                            <a class="font-weight-light" href="#!">Copyright</a>
                            </li>
                        </ul>
            
                    </div>
            
                    <hr class="clearfix w-100 d-md-none">
            
                    <div class="col-md-2 mx-auto">
            
                    <h5 class="font-weight-bold text-uppercase h6 mt-3 mb-4">Contact Us</h5>
            
                    <ul class="list-unstyled">
                        <li>
                        <a class="font-weight-light" href="#!">24/7 Chat Support</a>
                        </li>
                        <li>
                        <a class="font-weight-light" href="#!">info@dercenter.com</a>
                        </li>
                        <li>
                        <a class="font-weight-light" href="#!">+233 30 098 0982</a>
                        </li>
                    </ul>
            
                    </div>
            
                </div>
        
            </div>
        
            <hr>
            <div class="footer-copyright text-center py-3">© 2018 Copyright:
            <a href="index2.php"> DER Medical Center</a>
            </div>
        
        </footer>
        <!-- Footer -->


    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>



    </body>



</html>