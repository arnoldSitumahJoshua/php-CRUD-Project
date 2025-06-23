<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>

<?php
$r = mysqli_connect("localhost","root","","register");

$e = "SELECT * FROM `students`";

$t = mysqli_query($r,$e);




?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>

  <?php
    while($fetch = mysqli_fetch_array($t)){
?>
        <tr>
        <th scope="row"><?=$fetch[0]?></th>
        <td><?=$fetch[1]?></td>
        <td><?=$fetch[2]?></td>
        <td><?=$fetch[3]?></td>
        <td>
          <a href="edit.php?id=<?=$fetch[0]?>" class="btn btn-primary">Edit</a>
          <a href="delete.php?id=<?=$fetch[0]?>" class="btn btn-danger">Delete</a>
        </td>
      </tr>

      <?php
      
    }

  
  ?>
  

  
    
  </tbody>
</table>
</body>
</html>