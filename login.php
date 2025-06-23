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
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="lemail">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="lpass">
  </div>
  <button type="submit" class="btn btn-primary" name="login">Log In</button>
</form>
  </div>
  <div class="col-4"></div>
  </div>

  <?php

  if(isset($_POST['login'])){
    $email = $_POST['lemail'];
    $p = $_POST['lpass'];

    $o = mysqli_connect("localhost","root","","register");
    $t = "SELECT * FROM `students` WHERE Email = '$email' && password = '$p' ";

    $r = mysqli_query($o,$t);

    $row = mysqli_num_rows($r);

    if($row>0){
        session_start();
        $_SESSION['femail'] = $email;
        $_SESSION['fpass'] = $p;
        header("Location:dashboard.php");
    }
    else{
        echo "Incorrect password or Email";
    }
  }


?>



</body>
</html>