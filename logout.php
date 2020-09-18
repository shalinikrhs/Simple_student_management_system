<?php
 session_start();

 if (isset($_POST['logout'])){
     session_destroy();
     unset($_SESSION['name']);
     header("Location:login_student.php");  

 }


?>