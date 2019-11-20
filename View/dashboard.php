
<?php 
include('header.php');
if(!isset($_SESSION['user'])){
    header("Location: http://127.0.0.1/Web-Tech-Group/view/signup.php");
}
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
            <Link rel="stylesheet" type="text/css" href="../css/styles.css">
            <Link rel="stylesheet" type="text/css" href="../css/input.css">
    
            <!-- Bootstrap core JavaScript-->
            <script src="../vendor/jquery/jquery.min.js"></script>
            <script src="../js/app.js"></script>
    </head>
    <body>

           <!DOCTYPE html>
<html>

<body>
    <div class="wrapper">
        <!------------------------
                    Sidebar  
        ------------------------->

        <nav id="sidebar">
            <div class="sidebar-header">
                <h3 class="">DER</h3>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="dashboard.html"><i class="fa fa-user-cog"></i>Dashboard</a>
                </li>
                
                <li>
                    <a href="diagnosis.html"><i class="fa fa-file-medical-alt"></i>Medical Records</a>
                </li>
                <li>
                    <a href="results.html"><i class="fa fa-file-medical-alt"></i>Lab Results</a>
                </li>
                <li>
                    <a href="prescription.html"><i class="fa fa-prescription-bottle"></i>Prescription</a>
                </li>
                <li>
                    <a href="appointments.html"><i class="fa fa-calendar-day"></i>Appointments</a>
                </li>
                <li>
                    <a href="addressbook.html"><i class="fa fa-address-book"></i>Address Book</a>
                </li>
                <li>
                    <a href="account_details.html"><i class="fa fa-user-alt"></i>Account Details</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div class="container" id="content" >
            <!----------------------------
                NAVBAAARRRRRRRRRRRRRRRRR
            ----------------------------->
            <nav class="navbar navbar-expand-md navbar-light">
                <button type="button" id="sidebarCollapse" class="btn text-sidebar bg-turbo-yellow">
                        <i class="fas fa-align-left"></i>
                        <span></span>
                </button>  
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand ml-2 mr-auto">Dashboard</a>
                <form class="form-inline ml-auto mr-auto">
                    <div class="container">
                        <input type="text" placeholder="Search...">
                        <div class="search"></div>
                    </div>
                </form>
                <span class="navbar-text ml-auto">Friday 20th Sept, 2019</span>
                <span class=" mr-auto ml-auto">Logout</span>
                <button type="button" onclick="location.href='logout.php'" id="" class="btn text-sidebar ml-lg-3 ">
                        <i class="fas fa-sign-out-alt"></i>
                        <span></span>
                </button> 
             </nav>


            <div class="services-gridd">
                <div class="servicee">
                    <div class="row">
                        <div class="col-lg-8">
                            <h1 class="card-title ml-5 my-4" style="color:rgb(253, 125, 138) ;">Weclome <?php echo $_SESSION['user']->username; ?></h1>
                            <p class="m pb-0 ml-5">We are a a full-service, non-profit community hospital, offering comprehensive medical, 
                                surgical and therapeutic services.
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <img src="../img/welcome.svg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="services-gridd">
                        <div class="dash">
                            <!-- <ul class="list-group list-group-flush"> -->
                                <div class="card-header" style="background-color: #fff; color: #465377; font-weight: 600;">
                                   <span class="mr-5"> Recent Lab Results </span> <a href="results.html" class="card-text small ml-5" style="color: #344676; text-decoration: none;">View all<span class="new fa fa-arrow-right ml-2"></span></a>
                                </div>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                        <td>12/08/19</td>
                                        <td>Wet Mount</td>
                                        <td>Normal</td>
                                        </tr>
                                        <tr>
                                        <td>12/08/19</td>
                                        <td>Full Blood Count</td>
                                        <td>Normal</td>
                                        </tr>
                                        <tr>
                                        <td>12/08/19</td>
                                        <td>Gonorrhea</td>
                                        <td>Negative</td>
                                        </tr>
                                    </tbody>
                                </table>
                            <!-- </ul> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="services-gridd">
                        <div class="dash">
                            <!-- <ul class="list-group list-group-flush"> -->
                                <div class="card-header" style="background-color: #fff; color: #344676; font-weight: 600;">
                                    Upcoming Appointments <a href="appointments.html" class="card-text small ml-5" style="color: #344676; text-decoration: none;">View all<span class="new fa fa-arrow-right ml-2"></span></a>
                                </div>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                        <td>12/10/19</td>
                                        <td>Physiotherapy</td>
                                        <td><i class="ml-5 fa fa-eye" data-toggle="modal" data-target="#appointmentModal" style="color:#8e94a3e5 ;"></i></td>
                                        </tr>
                                        <tr>
                                        <td>12/08/19</td>
                                        <td>Dental</td>
                                        <td><i class="ml-5 fa fa-eye" data-toggle="modal" data-target="#appointmentModal" style="color:#8e94a3e5 ;"></i></td>
                                        </tr>
                                        <tr>
                                        <td>12/08/19</td>
                                        <td>Regular Checkup</td>
                                        <td><i class="ml-5 fa fa-eye" data-toggle="modal" data-target="#appointmentModal" style="color:#8e94a3e5 ;"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            <!-- </ul> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="services-gridd">
                        <div class="dash-h" style="background-color:#344676 ;">
                            
                            <ul class="list-group list-group-flush" >
                                <li class="list-group-item" style="background-color:#344676 ; color: #fff;">Drink Water</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="services-gridd">
                        <div class="dash-h" style="background-color:#00798C ;">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item" style="background-color:#00798C ; color: #fff;">Exercise regularly</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="services-gridd">
                        <div class="dash-h"  style="background-color:#598392 ;">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item" style="background-color:#598392 ; color: #fff;">Eat Everyday</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Modal -->
            <!-------
                physician
                date/time
                Arrive
                Address/Dept
            --------->
            <div class="modal fade" id="appointmentModal" tabindex="-1" role="dialog" aria-labelledby="appointmentModal" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    ...
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
                </div>
            </div>


        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>

</html>



        

        <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>

</html>