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
                <a class="navbar-brand" href="index2.html"> DER</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="nav navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item menu-active">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.html">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.html">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                        <?php 
                            if(!isset($_SESSION['user'])){
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="login.html">Login</a>
                        </li>
                        <li class="nav-item signup">
                            <a class="nav-link hov" href="signup.html">Signup</a>
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

        <!-- <header class="container my-5 py-5" >
            <div class="container" style="background-image: url('img/blog.svg'); height: 700px; background-repeat: no-repeat;">
                <div class="row h-100">
                    <div class="col-lg-4 my-5 py-5">
                        <div class="mx-auto" >
                            <h1 class="mb-4" >We are here for your care </h1>
                            <-- <p class="mb-4 pb-0">Changing the lives of patients and <br> pushing the limits of healthcare</p> -
                        </div>
                    </div>   
                </div>
            </div>
        </header> -->



        <section class="container my-5 py-5">
            <div class="container h-100">
                <div class="row h-100 ">
                    <div class="col-lg-12 my-auto blog">
                        <div class="mx-auto">
                            <h6 class="font-weight-bold"> Medical</h6>
                            <h1 class="font-weight-bolder">Blogs</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container my-5 py-5">
            <div class="container h-100">
                <div class="row h-100 ">
                    <div class="container">
                            <section class="blog_cards">
                                    <article class="blog_card blog_card--1">
                                        <div class="blog_card__info-hover">
                                            <svg class="blog_card__like"  viewBox="0 0 24 24">
                                                <path fill="#000000" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 
                                                4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 
                                                14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,
                                                3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,
                                                12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,
                                                8.5C22,5.41 19.58,3 16.5,3Z" />
                                            </svg>
                                            <div class="blog_card__clock-info">
                                                <svg class="blog_card__clock"  viewBox="0 0 24 24">
                                                    <path d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 
                                                    12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 
                                                    14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 
                                                    20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
                                                </svg>
                                                <span class="blog_card__time">5 min</span>
                                            </div>
                                        </div>
                                        <div class="blog_card__img"></div>
                                        <a href="#" class="blog_card_link">
                                            <div class="blog_card__img--hover"></div>
                                        </a>
                                        <div class="blog_card__info">
                                            <span class="blog_card__category">16th November, 2019</span>
                                            <h3 class="blog_card__title">Heart Health</h3>
                                            <span class="blog_card__by"><a href="heart-blog.html" style="color:#f82249; text-decoration: none;" class="blog_card__author" title="author">Read Now</a></span>
                                        </div>
                                    </article>
                                      
                                      
                                    <article class="blog_card blog_card--2">
                                        <div class="blog_card__info-hover">
                                            <svg class="blog_card__like"  viewBox="0 0 24 24">
                                                <path fill="#000000" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,
                                                8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,
                                                5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,
                                                3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,
                                                15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
                                            </svg>
                                            <div class="blog_card__clock-info">
                                                <svg class="blog_card__clock"  viewBox="0 0 24 24">
                                                    <path d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,
                                                    5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,
                                                    13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
                                                </svg>
                                                <span class="blog_card__time">11d</span>
                                            </div>
                                        </div>
                                        <div class="blog_card__img"></div>
                                        <a href="#" class="blog_card_link">
                                            <div class="blog_card__img--hover"></div>
                                        </a>
                                        <div class="blog_card__info">
                                            <span class="blog_card__category"> 5th November, 2019</span>
                                            <h3 class="blog_card__title">Drug Abuse</h3>
                                            <span class="blog_card__by"><a href="drug-blog.html" style="color:#f82249; text-decoration: none;" class="blog_card__author" title="author">Read Now</a></span>
                                        </div>
                                    </article> 
                                         
                                    <article class="blog_card blog_card--3">
                                        <div class="blog_card__info-hover">
                                            <svg class="blog_card__like"  viewBox="0 0 24 24">
                                                <path fill="#000000" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,
                                                8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,
                                                5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,
                                                3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,
                                                15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
                                            </svg>
                                            <div class="blog_card__clock-info">
                                                <svg class="blog_card__clock"  viewBox="0 0 24 24">
                                                    <path d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,
                                                    5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,
                                                    13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
                                                </svg>
                                                <span class="blog_card__time">30d</span>
                                            </div>
                                        </div>
                                        <div class="blog_card__img"></div>
                                        <a href="#" class="blog_card_link">
                                            <div class="blog_card__img--hover"></div>
                                        </a>
                                        <div class="blog_card__info">
                                            <span class="blog_card__category">10th October, 2019</span>
                                            <h3 class="blog_card__title">Blood Pressure</h3>
                                            <span class="blog_card__by"><a href="med-blog.html" style="color:#f82249; text-decoration: none;" class="blog_card__author" title="author">Read Now</a></span>
                                        </div>
                                    </article>       
                            </section>
                    </div>
                </div>
                <div class="row h-100 my-5 container">
                    <article class="alt_blog_card blog_card--4">
                        <div class="blog_card__info-hover">
                            <svg class="blog_card__like"  viewBox="0 0 24 24">
                                <path fill="#000000" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,
                                8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,
                                5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,
                                3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,
                                15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
                            </svg>
                            <div class="blog_card__clock-info">
                                <svg class="blog_card__clock"  viewBox="0 0 24 24">
                                    <path d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,
                                    5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,
                                    13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
                                </svg>
                                <span class="blog_card__time">16hr</span>
                            </div>
                        </div>
                        <div class="blog_card__img"></div>
                        <a href="#" class="blog_card_link">
                            <div class="blog_card__img--hover"></div>
                        </a>
                        <div class="blog_card__info">
                            <span class="blog_card__category">26th October, 2019</span>
                            <h3 class="blog_card__title">Cook Books</h3>
                            <span class="blog_card__by"><a href="food-blog.html" style="color:#f82249; text-decoration: none;" class="blog_card__author" title="author">Read Now</a></span>
                        </div>
                    </article>       
                    <article class="blog_card blog_card--5">
                        <div class="blog_card__info-hover">
                            <svg class="blog_card__like"  viewBox="0 0 24 24">
                                <path fill="#000000" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,
                                8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,
                                5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,
                                3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,
                                15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
                            </svg>
                            <div class="blog_card__clock-info">
                                <svg class="blog_card__clock"  viewBox="0 0 24 24">
                                    <path d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,
                                    5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,
                                    13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
                                </svg>
                                <span class="blog_card__time">5mon</span>
                            </div>
                        </div>
                        <div class="blog_card__img"></div>
                        <a href="#" class="blog_card_link">
                            <div class="blog_card__img--hover"></div>
                        </a>
                        <div class="blog_card__info">
                            <span class="blog_card__category">6th April, 2019</span>
                            <h3 class="blog_card__title">Travel</h3>
                            <span class="blog_card__by"><a href="travel-blog.html" style="color:#f82249; text-decoration: none;" class="blog_card__author" title="author">Read Now</a></span>
                        </div>
                    </article>       
                    
                </div>

                <div class="container text-center">
                    <ul class="list-inline ml-auto">
                        <li class="list-inline-item pag-circle">
                            <a class="" href="#"> <span class="fa fa-angle-double-left"></span></a>
                        </li>
                        <li class="list-inline-item pag-circle">
                            <a class="" href="#"> <span class="fa">01</span></a>
                        </li>
                        <li class="list-inline-item pag-circle">
                            <a class="" href="#"> <span class="fa">02</span></a>
                        </li>
                        <li class="list-inline-item pag-circle">
                            <a class="" href="#"> <span class="fa">03</span></a>
                        </li>
                        <li class="list-inline-item pag-circle">
                            <a class="" href="#"> <span class="fa text-center">...</span></a>
                        </li>
                        <li class="list-inline-item pag-circle">
                            <a class="" href="#"> <span class="fa">06</span></a>
                        </li>
                        <li class="list-inline-item pag-circle">
                            <a class="" href="#"> <span class="fa fa-angle-double-right"></span></a>
                        </li>
                    </ul>
                </div>

            </div>
        </section>

       
        <section class="container my-5 py-5">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-lg-12 my-auto">
                        <div class="mx-auto text-area">
                            <div class="card p-3 mb-5 bg-white rounded ">
                                <div class=" container">
                                    <i class="fa fa-quote-left fa-3x mr-4 fa-pull-left"></i>
                                </div>
                                <div class="card-body goals ">
                                    <h5 class="card-body my-1 py-1 text-center" style="color:#eee ;">This health blog from NPR takes a fairly broad look at the medical world,.</h5>
                                </div>
                                <div class=" container">
                                    <i class="fa fa-quote-right fa-3x mr-4 fa-pull-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container my-5 py-5">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-lg-12 my-auto">
                            <div class="mx-auto text-area">
                                <div class="p-3 mb-5 bg-white rounded ">
                                    <iframe width="1065" height="515" src="https://www.youtube.com/embed/BafdhZhSsHM" 
                                        frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
                                        allowfullscreen>
                                    </iframe>
                                </div>
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
                            <a class="font-weight-light" href="blog.html">Blog</a>
                            </li>
                            <li>
                            <a class="font-weight-light" href="index2.html">Home</a>
                            </li>
                            <li>
                            <a class="font-weight-light" href="contact.html">Contact</a>
                            </li>
                            <li>
                            <a class="font-weight-light" href="services.html">Services</a>
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
            <a href="index2.html"> DER Medical Center</a>
            </div>
        
        </footer>
        <!-- Footer -->


    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>



    </body>



</html>