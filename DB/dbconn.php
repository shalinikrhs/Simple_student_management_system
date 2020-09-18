<?php

$servername="localhost";
$username="root";
$password="";
$dbname="mydb";

$conn=mysqli_connect($servername,$username,$password);
$dbconn=mysqli_select_db($conn,$dbname);

if($dbconn){
    //echo"connection seccuss";
}
else{
    echo"connection failed";
}




?>