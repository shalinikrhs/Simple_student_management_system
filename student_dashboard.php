<?php
//session_start();
include('secure.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link  rel="stylesheet" href="studentD.css">
    <link rel="stylesheet" href="index.css">
    <title>Student's Details</title>
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

<h1>Student's DETAILS</h2>
    <?php
    $mysqli=new mysqli('localhost','root','','mydb') or die(mysqli_error($mysqli));
    $result=$mysqli->query("select*from curd2")or die($mysqli->error);
    ?>
    <div class="table_detail">
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Performance_Details</th>
                <th>Languages</th>
                <th>Date</th>
                
            </tr>
        </thead>    
    <?php
    while($row=$result->fetch_assoc()):
        ?>
    <tr>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['details'];?></td>
        <td><?php echo $row['language'];?></td>
        <td><?php echo $row['date'];?></td>
    </tr>
    <?php endwhile; ?>
    </table>
</div>
<?php
function pre_r($array){
    echo'<pre>';
    print_r($array);
    echo'</pre>';
}
?>


