<?php
ob_start();
$id = $_GET['id'];

$co = mysqli_connect("localhost","root","","register");
$r = "SELECT * FROM `students` WHERE id = '$id'";

$t = mysqli_query($co,$r);

$edit = mysqli_fetch_array($t);


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
  <div class="row">
  <div class="col-4"></div>
  <div class="col-4">
  <form method="post">
<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" aria-describedby="name" name="fname" value="<?=$edit[1]?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?= $edit[2] ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="pass" value="<?= $edit[3] ?>">
  </div>
  <button type="submit" class="btn btn-primary" name="change">Save Changes</button>
</form>
  </div>
  <div class="col-4"></div>
  </div>
<?php

if(isset($_POST['change'])){

  $name = $_POST['fname'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];

  $c = mysqli_connect("localhost","root","","register");
  $e = "UPDATE `students` SET `Name`='$name',`Email`='$email',`password`='$pass' WHERE `id`='$id'";

  mysqli_query($c,$e);

  header("Location:tables.php");
}

?>

</body>
</html>