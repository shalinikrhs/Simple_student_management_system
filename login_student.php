<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link  rel="stylesheet" href="login_student.css">
    <title>Login page</title>
</head>
<body>
    
<form method="post" action="code.php">
    <div class="login">
        <h1>Login Account</h1><br>
        <label>Email</label>
        <input type="text" name="email" placeholder="enter email"><br><br>
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter password"><br>
        <h4>No Account!!<a href="add.php"> Create</a></h4>
        <button type="submit" name="login" class="btn">Login</button>
    </div>
    <?php
    if(isset($_SESSION['status']) &&$_SESSION['status'] !=""){
        echo"<h1>".$_SESSION['status']."<h1>";
    }
    
    ?>
</form>
    
</body>
</html>