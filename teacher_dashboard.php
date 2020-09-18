<?php
//session_start();
include('secure.php');
?>
<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM curd1 ORDER BY id DESC"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link  rel="stylesheet" href="teacherD.css">
    <link rel="stylesheet" href="index.css">
    <title>Student's Marks</title>
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

<h1>Student's Marks</h2>
   
    <div class="table_detail">
    <table class="table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Marks</th>
          <th>Action</th>        
        </tr>
        <?php 
	
        while($res = mysqli_fetch_array($result)) { 		
            echo "<tr>";
            echo "<td>".$res['uname']."</td>";
            echo "<td>".$res['marks']."</td>";
            
            echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
        }
        ?>
      
      </thead>
    </table>
    
    </div>
   
          
    
<?php
function pre_r($array){
    echo'<pre>';
    print_r($array);
    echo'</pre>';
}
?>

    
    <form action="code.php" method="post">
    <div class="tDetails">
    <label>Name</label>
    <input type="text" name="uname"><br>
    <label>marks</label>
    <input type="number" name="marks"><br><br>
    <button name="save" >Save</button>

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
      <div>
      </divz
    </form>
  
</body>
</html>