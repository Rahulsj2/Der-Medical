<?php 
include('header.php');
if(!isset($_SESSION['user'])){
    header("Location: http://127.0.0.1/Web-Tech-Group/view/login.php");
}
?>

<?php 
require('../settings/db_connection.php');

$username = "";
$email = "";
$errors = array();




//if the signup button is clicked
if(isset($_POST['signup'])){
    $username = mysql_real_escape_string($_POST['username']);
    $email = mysql_real_escape_string($_POST['email']);
    $password = mysql_real_escape_string($_POST['password']);
    $confirmPassword = mysql_real_escape_string($_POST['confirmPassword']);

    //ensure all form fields are filled properly
    if(empty($username)){
        array_push($errors, "Username is required");
    }
    if(empty($email)){
        array_push($errors, "Email is required");
    }
    if(empty($password)){
        array_push($errors, "Password is required");
    }
    if($password != $confirmPassword){
        array_push($errors, "The two passwords do not match");
    }

    if (count($errors) == 0) {
        $password = md5($password);//password encrption before storage
        $sql = "INSERT INTO User (username, password, email) VALUES ('$username','$password','$email') ";
        mysqli_query($db,$sql);
    }

}

?>