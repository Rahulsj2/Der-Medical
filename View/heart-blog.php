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

        <header class="container mt-5 mb-5 pt-5 pb-3">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-lg-12 my-auto ">
                        <div class="mx-auto">
                            <h1 class="mb-4">Best Medical Care you can get you and your family</h1>
                            <img style="height: 500px;" src="../img/hsteth.jpg" class="card-img" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="container my-2 py-2">
                <div class="container  col-lg-8">
                    <h1 class="text-center">Some Nice Very Very Very Very Nice  Very Very Very Very Nice Text</h1>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <i class="fa fa-camera-retro"></i>
                        </li>
                        <li class="list-inline-item">
                            <span class="mx-1" href="#">In</span>
                            <!-- <hr class="dotted"> -->
                        </li>
                        <li class="list-inline-item">
                            <a class="mx-1" href="#">Images Post,</a>
                            <hr class="dotted">
                        </li>
                        <li class="list-inline-item mx-2">
                            <a class="" href="#">Life Style</a>
                            <hr class="dotted">
                        </li>
                        <li class="list-inline-item mx-2">
                            <span class="" href="#">Tags</span>
                        </li>
                        <li class="list-inline-item">
                            <a class="" href="#">people</a>
                            <hr class="dotted">
                        </li>
                        <li class="list-inline-item  mx-2">
                            <span class="mx-1" href="#">May 25, 2019</span>
                        </li>
                        <li class="list-inline-item circle-iconn  mx-2">
                            <a class="" href="#"> <i class="fa fa-user fa-2x mx-2"></i></a>
                        </li>
                        <li class="list-inline-item circle-icon">
                            <a class="" href="#">John Doe</a>
                            <hr class="dotted">
                        </li>
                    </ul>
                    <div class="n my-5">
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Volutpat blandit aliquam etiam erat velit scelerisque. Pulvinar etiam non quam lacus suspendisse faucibus interdum posuere. 
                            Tempus egestas sed sed risus pretium quam. Scelerisque felis imperdiet proin fermentum leo vel orci porta.
                        </p>
                        <p class="text-justify">
                            Producing creative, fresh projects is the key to standing out. Unique side projects are the best place to innovate, 
                            but balancing commercially and creatively lucrative work is tricky. So, this article looks at how to make side projects 
                            work and why they’re worthwhile, drawing on lessons learned from our development of the ux ompanion app.
                        </p>
                    </div>

                    <div class="mt-1">
                        <h1 class="text-left mb-3">Some Nice Text</h1>
                        <p class="text-justify mt-3">
                            Producing creative, fresh projects is the key to standing out. Unique side projects are the best place to innovate, 
                            but balancing commercially and creatively lucrative work is tricky. So, this article looks at how to make side projects 
                            work and why they’re worthwhile, drawing on lessons learned from our development of the ux ompanion app.
                        </p>
                    </div>
                    <div class="my-5">
                        <hr class="dotted">
                        <i class="fa fa-quote-left"></i>
                        <p class="text-center">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br> sed do eiusmod tempor incididunt 
                        </p>
                        <i class="fa fa-quote-right fa-pull-right"></i>
                        <hr class="dotted my-5">
                        <p class="text-justify mt-3">
                            Producing creative, fresh projects is the key to standing out. Unique side projects are the best place to innovate, 
                            but balancing commercially and creatively lucrative work is tricky. So, this article looks at how to make side projects 
                            work and why they’re worthwhile, drawing on lessons learned from our development of the ux ompanion app.
                        </p>
                    </div>

                    
                  
                    <div class="row butt h-100 my-3 py-3">
                        <div class="col-lg-6 my-auto">
                            <div class="mx-auto about">
                                <h1 class="mb-4 card-title">Some nice text </h1>
                                <p class="mb-4 pb-0 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                                    ut labore et dolore magna aliqua. Volutpat blandit aliquam etiam erat velit scelerisque. Pulvinar etiam
                                        non quam lacus suspendisse faucibus interdum posuere. Tempus egestas sed sed risus pretium quam. 
                                        Scelerisque felis imperdiet proin fermentum leo vel orci porta. Lorem ipsum dolor sit amet, consectetur 
                                        adipiscing elit.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-5 back my-auto">     
                            <img src="../img/patient.svg" class="img-fluid" alt="">
                        </div>
                    </div>
                    

                    <div class="my-1">
                        <p class="text-justify mt-3">
                            Producing creative, fresh projects is the key to standing out. Unique side projects are the best place to innovate, 
                            but balancing commercially and creatively lucrative work is tricky. So, this article looks at how to make side projects 
                            work and why they’re worthwhile, drawing on lessons learned from our development of the ux ompanion app.
                        </p>
                        <p class="text-justify my-5">
                            Producing creative, fresh projects is the key to standing out. Unique side projects are the best place to innovate, 
                            but balancing commercially and creatively lucrative work is tricky. So, this article looks at how to make side projects 
                            work and why they’re worthwhile, drawing on lessons learned from our development of the ux ompanion app.
                        </p>
                    </div>

                    <div class="col-lg-6 my-auto ">
                        <!-- <div class="mx-auto"> -->
                            <ul class="list-inline ml-auto">
                                <li class="list-inline-item">
                                    <a class="" href="#"> <i class="fa fa-share fa-1x circle-icon"></i></a>
                                </li>
                                <li class="list-inline-item circle-face">
                                    <a class="" href="#"> <i class="fab fa-facebook-f fa-2x circle-icon"></i></a>
                                </li>
                                <li class="list-inline-item circle-tweet">
                                    <a class="" href="#"> <i class="fab fa-twitter fa-2x"></i></a>
                                </li>
                                <li class="list-inline-item circle-inst">
                                    <a class="" href="#"> <i class="fab fa-instagram fa-2x"></i></a>
                                </li>
                                <li class="list-inline-item circle-pin">
                                    <a class="" href="#"> <i class="fab fa-pinterest-p fa-2x"></i></a>
                                </li>
                            </ul>
                        <!-- </div> -->
                    </div>

                    <div class="my-5">
                        <hr class="dotted my-4">
                        <div class="row butt h-100">
                            <div class="col-lg-2  my-auto">  
                                <ul class="list-inline ml-auto">
                                    <li class="list-inline-item circle-blog">
                                        <a class="" href="#"> <i class="fa fa- fa-2x"></i></a>
                                    </li>
                                </ul>   
                                <!-- <img src="img/patient.svg" class="img-fluid" alt=""> -->
                            </div>
                            <div class="col-lg-10 my-auto">
                                <div class="mx-auto about">
                                    <h1 class="mb-3">Some nice text </h1>
                                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                                        ut labore et dolore magna aliqua. Volutpat blandit aliquam etiam erat velit scelerisque.       
                                    </p>
                                </div>
                            </div>
                        </div>
                        <hr class="dotted my-4">
                        <div class="row butt h-100 my-3 py-3">
                            <div class="col-lg-1  my-auto text-center">     
                                <a style="color: #000000;" class="angle" href="#"> <i class="fa fa-angle-double-left fa-2x"></i></a>
                            </div>

                            <div class="col-lg-2 back my-auto">     
                                <!-- <img src="img/patient.svg" class="img-fluid" alt=""> -->
                                <ul class="list-inline ml-auto">
                                    <li class="list-inline-item circle-blogg">
                                        <a class="" href="#"> <i class="fa fa- fa-2x circle-icon"></i></a>
                                    </li>
                                </ul> 
                            </div>

                            <div class="col-lg-9 my-auto">
                                <div class="mx-auto about">
                                    <h1 class=" card-title">Previous post </h1>
                                    <p class="mb-1 text-justify">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do.
                                    </p>
                                </div>
                            </div>    
                        </div>
                        <hr class="dotted my-4">
                    </div>

                    <div class="container">
                            <h4 class="text-muted mb-4">Related Post</h4>
                        <div class="row">
                            <div class="col-lg-4">  
                                <div class="mx-auto">
                                    <img src="../img/pills2.png" class="img-fluid rounded" alt="">  
                                    <div class="card-body ">
                                        <!-- <h5 class="card-title mt-1 pt-1">Card title</h5> -->
                                        <!-- <p class="card-text font-weight-bolder">Patient Doctor<br> <small class="text-muted">July 4, 2019</small></p> -->
                                        <p class="card-text font-weight-normal">Some quick example text to build on the card.</p>
                                        <!-- <a href="#" class="card-text small">Book Now</a> -->
                                    </div>
                                </div> 
                            </div>
                            <div class="col-lg-4">
                                <div class="mx-auto">
                                    <img src="../img/heart3.png" class="img-fluid rounded" alt="">  
                                    <div class="card-body ">
                                        <!-- <h5 class="card-title mt-1 pt-1">Card title</h5> -->
                                        <!-- <p class="card-text font-weight-bolder">Patient Doctor<br> <small class="text-muted">July 4, 2019</small></p> -->
                                        <p class="card-text font-weight-normal">Some quick example text to build on the card.</p>
                                        <!-- <a href="#" class="card-text small">Book Now</a> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mx-auto">
                                    <img src="../img/tree.png" class="img-fluid rounded" alt="">  
                                    <div class="card-body ">
                                        <!-- <h5 class="card-title mt-1 pt-1">Card title</h5> -->
                                        <!-- <p class="card-text font-weight-bolder">Patient Doctor<br> <small class="text-muted">July 4, 2019</small></p> -->
                                        <p class="card-text font-weight-normal">Some quick example text to build on the card.</p>
                                        <!-- <a href="#" class="card-text small">Book Now</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="dotted my-4">

                    <h5 class="text-muted mb-5">5 Comments</h5>

                    <div class="row butt h-100 mb-3 pb-3">
                        <div class="col-lg-2 back my-auto mb-5">     
                            <!-- <img src="img/patient.svg" class="img-fluid" alt=""> -->
                            <ul class="list-inline ml-auto">
                                <li class="list-inline-item circle-icon">
                                    <a class="" href="#"> <i class="fa fa- fa-2x circle-icon"></i></a>
                                </li>
                            </ul> 
                        </div>

                        <div class="col-lg-10 mb-5">
                            <div class="mx-auto about">
                                <h6 class="card-title">John Doe</h6>
                                <p class="card-text font-weight-bolder"><small class="text-muted">May 22, 2015 at 7:49 am -</small><a style="color: #f82249; text-decoration: none;" href="#">Reply</a></p>
                                <p class="mb-1 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                                    ut labore et dolore magna aliqua. Volutpat blandit aliquam etiam erat velit scelerisque.
                                </p>
                            </div>
                        </div>    
                        <div class="col-lg-2 back my-auto my-5 ml-5 pl-5">     
                            <!-- <img src="img/patient.svg" class="img-fluid" alt=""> -->
                            <ul class="list-inline ml-auto pl-5">
                                <li class="list-inline-item circle-icon">
                                    <a class="" href="#"> <i class="fa fa- fa-2x circle-icon"></i></a>
                                </li>
                            </ul> 
                        </div>
    
                        <div class="col-lg-8 my-auto my-5 ml-3 pl-5">
                            <div class="mx-auto about">
                                <h6 class=" card-title">John Doe</h6>
                                <p class="card-text font-weight-bolder"><small class="text-muted">May 22, 2015 at 7:49 am -</small><a style="color: #f82249; text-decoration: none;" href="#">Reply</a></p>
                                <p class="mb-1 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                                    ut labore et dolore magna aliqua. Volutpat.
                                </p>
                            </div>
                        </div> 
                        
                        <div class="col-lg-2 back my-5 ml-5 pl-5">     
                            <!-- <img src="img/patient.svg" class="img-fluid" alt=""> -->
                            <ul class="list-inline ml-auto pl-5">
                                <li class="list-inline-item circle-icon">
                                    <a class="" href="#"> <i class="fa fa- fa-2x circle-icon"></i></a>
                                </li>
                            </ul> 
                        </div>
    
                        <div class="col-lg-8 my-auto my-5 ml-3 pl-5">
                            <div class="mx-auto about">
                                <a>Hello</a>
                                <p class="card-text font-weight-bolder"><small class="text-muted">May 22, 2015 at 7:49 am -</small><a style="color: #f82249; text-decoration: none;" href="#">Reply</a></p>
                                <p class="mb-1 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                                    ut labore et dolore magna aliqua. Volutpat.
                                </p>
                            </div>
                        </div> 
                        
                    </div>

                    <hr class="dotted my-4">

                    <div class="row butt h-100">
                        <div class="col-lg-2 back my-auto">     
                            <!-- <img src="img/patient.svg" class="img-fluid" alt=""> -->
                            <ul class="list-inline ml-auto">
                                <li class="list-inline-item circle-icon">
                                    <a class="" href="#"> <i class="fa fa- fa-2x circle-icon"></i></a>
                                </li>
                            </ul> 
                        </div>

                        <div class="col-lg-10">
                            <div class="mx-auto about">
                                <h6 class="card-title">John Doe</h6>
                                <p class="card-text font-weight-bolder"><small class="text-muted">May 22, 2015 at 7:49 am -</small><a style="color: #f82249; text-decoration: none;" href="#">Reply</a></p>
                                <p class="mb-1 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                                    ut labore et dolore magna aliqua. Volutpat blandit aliquam etiam erat velit scelerisque.
                                </p>
                            </div>
                        </div>  
                    </div>

                    <hr class="dotted my-4">

                    <div class="row butt h-100">
                        <div class="col-lg-2 back my-auto">     
                            <!-- <img src="img/patient.svg" class="img-fluid" alt=""> -->
                            <ul class="list-inline ml-auto">
                                <li class="list-inline-item circle-icon">
                                    <a class="" href="#"> <i class="fa fa- fa-2x circle-icon"></i></a>
                                </li>
                            </ul> 
                        </div>

                        <div class="col-lg-10">
                            <div class="mx-auto about">
                                <h6 class="card-title">John Doe</h6>
                                <p class="card-text font-weight-bolder"><small class="text-muted">May 22, 2015 at 7:49 am -</small><a style="color: #f82249; text-decoration: none;" href="#">Reply</a></p>
                                <p class="mb-1 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                                    ut labore et dolore magna aliqua. Volutpat blandit aliquam etiam erat velit scelerisque.
                                </p>
                            </div>
                        </div>  
                    </div>

                    <hr class="dotted my-4">

                    <form class="post-comm mb-5 pb-5">
                        <h6 class="card-title">Leave a reply</h6>
                        <p class="text-muted">Your email address would not be published</p>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Message" name="" id="" rows="7"></textarea>
                        </div>
                        <div class="row my-3 py-3">
                            <div class="col">
                           <input type="text" class= "form-control" placeholder="First name">
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Email">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Phone number">
                            </div>
                        </div>
                        <div class="form-group">
                            <button style="color:#fff; background-color:#f82249;" type="button" class="btn btn-outline-danger btn shadow">Post Comment</button>
                            <!-- <button type="button" class="btn btn-outline-danger">Post Comment</button> -->
                        </div>
                    </form>       
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