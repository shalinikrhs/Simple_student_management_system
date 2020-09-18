<?php


include("config.php");
$id = $_GET['id'];
$result = mysqli_query($mysqli, "DELETE FROM curd1 WHERE id=$id");
header("Location:teacher_dashboard.php");
?>

