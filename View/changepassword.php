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

        <!-- Bootstrap core JavaScript-->
        <script src="../vendor/jquery/jquery.min.js"></script>

        <!--Main Javascript-->
        <script src="../js/app.js"></script>

    </head>

    <body>


        <div class="container-fluid">
            <div class="row no-gutter">
                <div class=" d-none d-md-flex col-lg-6 bg-image1"></div>
                <div class="col-md-8 col-lg-6">
                    <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                        <div class="col-md-9 col-lg-8 mx-auto">
                                <h3 class="login-heading mb-4">Change Password</h3>
                            <form  action="post">
                                <div class="form-label-group">
                                    <input type="password" name="current_password" id="current_password" class="form-control" placeholder="Current Password" required autofocus>
                                    <span id="current_password_error" class ="ml-3 mt-2" style="color: red;"></span>
                                    <label for="current_password">Current Password</label>
                                </div>

                                <div class="form-label-group">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="New Password" required>
                                    <span id="password_error" class ="ml-3 mt-2" style="color: red;"></span>
                                    <label for="password">New Password</label>
                                </div>
                
                                <div class="form-label-group">
                                    <input type="password" name="confirm_password" id="confirmPassword" class="form-control" placeholder="Retype New Password" required>
                                    <span id="confirm_password_error" class ="ml-3 mt-2" style="color: red;"></span>
                                    <label for="confirmPassword">Retype New Password</label>
                                </div>
                                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Save</button>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>


    </body>
</html>