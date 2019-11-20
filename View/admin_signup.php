<?php 
// include('server-validation.php');
include('admin_header.php');

if(isset($_SESSION['admin'])){
    header("Location: http://127.0.0.1/Web-Tech-Group/view/admin_dashboard.php");
}

if (isset($_POST['submit'])){
    $user->register($_POST);
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
                                <h3 class="login-heading mb-4">Sign Up</h3>
                            <form method="post">
                                <div class="form-label-group">
                                    <?php 
                                    if(isset($_SESSION['error'])){ 
                                        echo '<div class="alert alert-danger" role="alert">';
                                        echo $_SESSION['error'];
                                        echo '</div>';
                                        unset($_SESSION['error']);
                                    }
                                    ?>
                                </div>
                                <div class="form-label-group">
                                    <input type="text" name="username" id="username" class="form-control" placeholder="Username" value="<?php echo @$_POST['username']?>" required autofocus>
                                    <span id="username_error" class ="ml-3" style="color: red;"></span>
                                    <label for="username">Username</label>
                                </div>

                                <div class="form-label-group">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email address" value="<?php echo @$_POST['email']?>"  required>
                                    <span id="email_error" class ="ml-3 mt-2" style="color: red;"></span>
                                    <label for="email">Email address</label>
                                </div>
                
                                <div class="form-label-group">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                                    <span id="password_error" class ="ml-3 mt-2" style="color: red;"></span>
                                    <label for="password">Password</label>
                                </div>

                                <div class="form-label-group">
                                    <input type="password" name="confirmPassword" id="confirmPassword" class="form-control" placeholder="Confirm Password" required>
                                    <span id="confirm_password_error" class ="ml-3 mt-2" style="color: red;"></span>
                                    <label for="confirmPassword">Confirm Password</label>
                                </div>
                
                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Remember password</label>
                                </div>
                                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" name="submit" type="submit">Sign up</button>
                                <div class="text-center">
                                    <a class="small" href="login.html">Already have an account? Login</a>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        

        <footer class="page-footer font-small blue">
            <div class="footer-copyright text-center py-3">© 2019 Copyright:
            <a href="#"> DER Medical Center</a>
            </div>
        </footer>
    </body>
</html>