<?php
include('secure.php');
require "DB/dbconn.php";


//add.php
if(isset($_POST['btn2'])){
    $name=$_POST['name'];
    $password=md5($_POST['password']);
    $email=$_POST['email'];
    $usertype = $_POST['usertype']; 
    $query="INSERT INTO student_performance(name,password,email,usertype) 
    VALUES('$name','$password','$email','$usertype')";
    $result = mysqli_query($conn, $query);

if($result){
    $_SESSION['success']="added successfully";
    header('Location:add.php');
}
else{
    $_SESSION['status']="data not added";
    header('Location:add.php');
}   
}
//login
if(isset($_POST['login']))
{
$email=$_POST['email'];
$password=md5($_POST['password']);

$query="SELECT*FROM student_performance WHERE email='$email' AND password='$password'";
$query_run=mysqli_query($conn,$query);

$usertype = mysqli_fetch_array($query_run);
   
if($usertype['usertype'] == 'Student')
{
    $_SESSION['name'] = $email;
    header('Location:details.php');
}
else if($usertype['usertype'] == 'Teacher')
{
    $_SESSION['name'] = $email;
    header('Location:index.php');
}
else
{
    $_SESSION['status'] = "Invalid User Details";
    header('Location:login_student.php');
}
}


//teacher_dashboard
if (isset($_POST['save'])){
    $uname=$_POST['uname'];
    $marks=$_POST['marks'];

    $mysqli="INSERT INTO curd1(uname,marks) 
    VALUES('$uname','$marks')";
    $result = mysqli_query($conn, $mysqli);

if($result){
    $_SESSION['success']="added successfully";
    header('Location:teacher_dashboard.php');
}
else{
    $_SESSION['status']="data not added";
    header('Location:teacher_dashboard.php');
}
}
//curd
/*
if (isset($_GET['delete'])){
    $id=$_GET['delete'];
    $mysqli->query("DELETE FROM curd1 WHERE id='$id'") or die($mysqli->error());
}
*/

//student_dashboard

//student details
if (isset($_POST['btn3'])){
    $name=$_POST['name'];
    $details=$_POST['details'];    
    $language=$_POST['language'];
    $date=$_POST['date'];

    $mysqli1="INSERT INTO curd2(name,details,language,date) 
    VALUES('$name','$details','$language','$date')";
    $result = mysqli_query($conn, $mysqli1);

if($result){
    $_SESSION['success']="added successfully";
    header('Location:details.php');
}
else{
    $_SESSION['status']="data not added";
    header('Location:details.php');
}
}



?>
