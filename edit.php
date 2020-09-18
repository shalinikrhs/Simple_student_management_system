<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
	$uname = mysqli_real_escape_string($mysqli, $_POST['uname']);
	$marks = mysqli_real_escape_string($mysqli, $_POST['marks']);
		
	
	// checking empty fields
	if(empty($uname) || empty($marks) ) {	
			
		if(empty($uname)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($marks)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
				
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE curd1 SET uname='$uname',marks='$marks' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: teacher_dashboard.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM curd1 WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$uname = $res['uname'];
	$marks = $res['marks'];
	
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="uname" value="<?php echo $uname;?>"></td>
			</tr>
			<tr> 
				<td>Age</td>
				<td><input type="text" name="marks" value="<?php echo $marks;?>"></td>
			</tr>
			
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
