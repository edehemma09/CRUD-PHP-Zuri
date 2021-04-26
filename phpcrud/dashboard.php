<?php 
include('dbcon.php');
include('session.php'); 

$result=mysqli_query($con, "select * from users where user_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);

 ?>

<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
    <title>Zuri php crud </title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">STUDENT PORTAL</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">HOME</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="<?php
session_start();
session_destroy();
header('location:index.php');
?>">LOGOUT</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="dashboard.php">PROFILE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><i class="fa fa icon"></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-sm">
<div class="info"><h3>Welcome!  <?php echo $row['name']; ?> </h3>
  <br>
  <br>
  <hr>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Gender</th>
                <th scope="col">Email</th>
                <th scope="col">Course</th>
                <th scope="col">Course1</th>
                <th scope="col">Course2</th>
                <th scope="col">Course3</th>
                <th scope="col">Action</th>

                </tr>  
            </thead>
            <tbody>
            <tr>
                <th scope ="row">1 </th>
                <td>Emma edeh</td>
                <td>Male</td>
                <td>jamder#hamil.com</td>
                <td>BED</td>
                <td>ECO</td>
                <td>CSE</td>  
                <td>AAGR</td>
                <td>
                    <a href="./create.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">EDIT</a>
                      <a href="./delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onClick="javascript:return confirm('Do you really want to delete?');" >DELETE</a>
                  </td>
                </tbody>
              <?php
                if (!empty($records)) {
                while ($row = mysqli_fetch_assoc($results)) {
                      ?>
                                <tr>
                                    <th scope="row"><?php echo $row['id']; ?></th>
                                    <td><?php echo $row['first_name'] . ' ' . $row['last_name']; ?></td>
                                    <td><?php echo $row['gender']; ?></td>
                                    <td><?php echo $row['email']; ?></td>/
                                    <td><?php echo $row['course']; ?></td>
                                    <td><?php echo $row['course1']; ?></td>
                                    <td><?php echo $row['course2']; ?></td>
                                    <td>
                                        <a href="./add.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">EDIT</a>
                                        <a href="./delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onClick="javascript:return confirm('Do you really want to delete?');" >DELETE</a>
                                    </td>
                                </tr>
              
 </div>               
</div>


</body>
</html>