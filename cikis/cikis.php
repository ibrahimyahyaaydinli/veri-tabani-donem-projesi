<?php 
session_start();
 
unset($_SESSION['AD']);

 
session_destroy();
header("Location: ../index.php");
   die();
    ?>