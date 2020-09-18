<?php
session_start();
//include('secure.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="details.css">
    <title>Performance details</title>
</head>
<body>
<form  method="post" action="code.php">
    <div class="detail">
        <h1>Performance details</h1>
        <label>Name</label>
        <input type="text" name="name" placeholder="Name"><br>
        <label>Performance <br>Detail</label>
        <textarea name="details"></textarea><br>
        <label>Language</label>
        <input type="text" name="language" placeholder="language"><br>
        <label>Date</label>
        <input type="date" name="date" placeholder="Date"><br><br>
        <button name="btn3" class="btn">Submit</button>
</form>
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
</body>
</html>