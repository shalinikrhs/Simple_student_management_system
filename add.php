<?php
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="add.css">
    <title>Create Account</title>
</head>
<body>
   
    <form  method="post" action="code.php">
    <div class="create">
        <h1>Create Account</h1><br>
        <label>Name</label>
        <input type="text" name="name" placeholder="name"><br><br>
        <label>Password</label>
        <input type="password" name="password" placeholder="password"><br><br>
        <label>Email</label>
        <input type="text" name="email" placeholder="email"><br><br>
        <label>Usertype</label>
        <select name="usertype" placeholder="usertype" >
        <br>
        <option value="Student">STUDENT</option>
        <option value="Teacher">TEACHER</option>
        </select><br><br>
        <h4>Aready have an account<a href="login_student.php">Login</a></h4>
        <button type="submit" name="btn2" class="btn">Create</button>

   
    <?php
    if(isset($_SESSION['success'])&& $_SESSION['success'] !=""){
        echo'<h2 id="success">'.$_SESSION['success'].'</h2>';
        unset($_SESSION['success']);
    }

    if(isset($_SESSION['status']) && $_SESSION['status'] !=""){
        echo'<h2 id="status">'.$_SESSION['status'].'</h2>';
        unset($_SESSION['status']);
    }
    
    ?>
    </div>
     </form>
</body>
</html>