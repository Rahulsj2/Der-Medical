<?php 
session_start();
$current_url = $_SERVER['SERVER_NAME']. " ". $_SERVER['REQUEST_URI'];
include("../model/database.php");
include("../controller/user.php");
$user = new User();
// echo $current_url;

//  

?>