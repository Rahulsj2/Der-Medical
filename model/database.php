<?php
//database

//database credentials
require('db_credentials.php');

/**
 *@author Rahul Srinivas
 *@version 1.1
 */

 class Database extends mysqli
 {
     function __construct()
     {
         Parent::__construct(SERVER,USERNAME,PASSWORD,DATABASE); 

         if ($this->connect_error) {
             $_SESSION['error'] = "DB Connection error: ". $this->connect_error;
        }
     }
 }