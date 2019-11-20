<?php 
session_start();
$current_url = $_SERVER['SERVER_NAME']. " ". $_SERVER['REQUEST_URI'];
include("../model/database.php");
include("../controller/admin.php");
$user = new Admin();
// echo $current_url;

//  

?>