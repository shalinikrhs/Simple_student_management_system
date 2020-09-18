<?php
include('secure.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="index.css">
    <title>Welcome</title>
</head>
<body>
<header>
<form action="logout.php" method= "POST">     
    <nav>
    <ul class="nav_links">
        <li><a href="index.php">Home</a></li>
        <li><a href="student_dashboard.php">Student Details</a></li>
        <li><a href="teacher_dashboard.php">Student Marks</a></li>
        <button name="logout">Logout</button>
    </ul>    
    </nav>
</form>  
</header>

<img src="cute1.jpg">
<h3>Welcome</h3>
</body>
</html>