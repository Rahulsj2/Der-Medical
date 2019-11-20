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
        <script src="vendor/jquery/jquery.min.js"></script>

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
                        </div>
                    </div>
                    <div class="col-lg-8 my-auto">     
                        <img src="../img/patient.svg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </header>



        <!-- <section class="container my-5 py-5">
            <div class="container h-100">
                <div class="row h-100 tex ">
                    <div class="col-lg-12 my-auto te ">
                        <div class="mx-auto">
                            <div class="shadow p-3 mb-5 bg-white rounded ">
                                <div class="card-body  goals ">
                                    <h2 class="card-title my-3 py-3 text-center">Book an Appointment</h2>
                                    <form class="col-lg-10 ml-lg-5 pl-lg-5">
                                        <div class="row my-3 py-3">
                                            <div class="col">
                                            <input type="text" class="form-control" placeholder="Name">
                                            </div>
                                            <div class="col">
                                            <input type="text" class="form-control" placeholder="Phone Number">
                                            </div>
                                        </div>
                                        <div class="row my-3 py-3">
                                            <div class="col">
                                            <input type="text" class="form-control" placeholder="Email Address">
                                            </div>
                                            <div class="col">
                                            <input type="text" class="form-control" placeholder="Department">
                                            </div>
                                        </div>
                                        <div class="row my-3 py-3">
                                            <div class="col">
                                            <input type="text" class="form-control" placeholder="Appointment Date">
                                            </div>
                                            <div class="col">
                                            <input type="text" class="form-control" placeholder="Time">
                                            </div>
                                        </div>
                                        <div class="row my-3 py-3">
                                            <div class="col">
                                            <textarea class="form-control" placeholder="Message" name="" id="" rows="10"></textarea>
                                            </div>
                                        </div>

                                        <div class="row my-3 py-3">
                                            <div class="col">
                                                <button type="button" class="btn btn-outline-danger">Submit</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <section class="container my-5 py-5">
            <div class="container h-100">
                <h1 class="m mb-4 pb-4 text-center" style="font-size: 40px; color: #CC253D;">Our Services</h1>
                <div class="row h-100 ">
                    <div class="services-grid mb-5">
                        <div class="service service1">
                            <i class="fa fa-capsules fa-5x mt-5" style="font-size: 80px;"></i>
                            <h5 class="card-title mt-3 pt-3">Pharmarcy</h5>
                            <p class="card-text mb-3 pb-2">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <!-- <a href="#" class="cta">Read More <span class="ti-angle-right"></a> -->
                            <a href="pharmarcy.php" class="card-text small mb-3" style="color: #CC253D; text-decoration: none;">Read More<span class="new fa fa-arrow-right ml-2"></span></a>
                        </div>
                    
                        <div class="service service1">
                            <i class="fa fa-vial fa-5x mt-5" style="font-size: 80px;"></i>
                            <h5 class="card-title mt-3 pt-3">Laboratory</h5>
                            <p class="card-text mb-3 pb-2">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <!-- <a href="#" class="cta">Read More <span class="ti-angle-right"></a> -->
                            <a href="lab.php" class="card-text small mb-3" style="color: #CC253D; text-decoration: none;">Read More<span class="new fa fa-arrow-right ml-2"></span></a>
                        </div>
                    
                        <div class="service service1">
                            <i class="fa fa-brain fa-5x mt-5" style="font-size: 80px;"></i>
                            <h5 class="card-title mt-3 pt-3">Neurosurgery</h5>
                            <p class="card-text mb-3 pb-2">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <!-- <a href="#" class="cta">Read More <span class="ti-angle-right"></a> -->
                            <a href="neuro.php" class="card-text small mb-3" style="color: #CC253D; text-decoration: none;">Read More<span class="new fa fa-arrow-right ml-2"></span></a>
                        </div>
                    </div>
                </div>
                <div class="row h-100 ">
                    <div class="services-grid">
                        <div class="service service1">
                            <i class="fa fa-tooth fa-5x mt-5" style="font-size: 80px;"></i>
                            <h5 class="card-title mt-3 pt-3">Dentistry</h5>
                            <p class="card-text mb-3 pb-2">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <!-- <a href="#" class="cta">Read More <span class="ti-angle-right"></a> -->
                            <a href="dental.php" class="card-text small mb-3" style="color: #CC253D; text-decoration: none;">Read More<span class="new fa fa-arrow-right ml-2"></span></a>
                        </div>
                    
                        <div class="service service1">
                            <i class="fa fa-heartbeat fa-5x mt-5" style="font-size: 80px;"></i>
                            <h5 class="card-title mt-3 pt-3">Cardiology</h5>
                            <p class="card-text mb-3 pb-2">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <!-- <a href="#" class="cta">Read More <span class="ti-angle-right"></a> -->
                            <a href="cardio.php" class="card-text small mb-3" style="color: #CC253D; text-decoration: none;">Read More<span class="new fa fa-arrow-right ml-2"></span></a>
                        </div>
                    
                        <div class="service service1">
                            <i class="fa fa-wheelchair fa-5x mt-5" style="font-size: 80px;"></i>
                            <h5 class="card-title mt-3 pt-3">Physiotherapy</h5>
                            <p class="card-text mb-3 pb-2 ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <!-- <a href="#" class="cta">Read More <span class="ti-angle-right"></a> -->
                            <a href="physio.php" class="card-text small mb-3" style="color: #CC253D; text-decoration: none;">Read More<span class="new fa fa-arrow-right ml-2"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


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