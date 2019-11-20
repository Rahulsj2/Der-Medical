<?php 
    session_start();
    session_destroy();

    header("Location: http://127.0.0.1/Web-Tech-Group/view/admin_login.php");
?>