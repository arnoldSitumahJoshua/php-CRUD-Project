<?php

ob_start();
session_start();
$email = $_SESSION['femail'];
$pass = $_SESSION['fpass'];

if($email == '' || $pass == ''){

    header("Location:login.php");
    
}

$s = mysqli_connect("localhost","root","","register");

$r = "SELECT * FROM `students` WHERE Email = '$email' && password='$pass'";

$e = mysqli_query($s,$r);

$data = mysqli_fetch_array($e);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome <?=$data[1]?></h1>
</body>
</html>