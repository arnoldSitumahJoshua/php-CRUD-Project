<?php
ob_start();
$id = $_GET['id'];
$r = mysqli_connect("localhost","root","","register");

$t = "DELETE FROM `students` WHERE id = '$id'";
mysqli_query($r,$t);
header("Location:tables.php");

?>