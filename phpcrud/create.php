<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
          <a class="nav-link" href="#">LOGOUT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">PROFILE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><i class="fa fa icon"></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
 <!-- Registeration Form -->
 <div class="col-md-7 col-lg-6 ml-auto">
            <form action="#">
            <div class="row">
    <div class="col-md-6 mx-auto p-0">
        <div class="card">
            <div class="login-box">
                <div class="login-snip"> <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign Up</label> 
                <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
                    <div class="login-space">
                        <div class="login">
                        <div class="group"> <label for="fname" class="label">Firstname</label> <input id="user" type="text" class="input" placeholder="Enter your firstname"> </div>  
                        <div class="group"> <label for="lname" class="label">Lastname</label> <input id="user" type="text" class="input" placeholder="Enter your Lastname"> </div> 
                        <div class="group"> <label for="gender" class="label">Gender</label> <input id="user" type="text" class="input" placeholder="Enter your Gender"> </div>
                        <div class="group"> <label for="course" class="label">Course of Study</label> <input id="user" type="text" class="input" placeholder="Enter First Choice"> </div>
                        <div class="group"> <label for="course1" class="label">Course of study</label> <input id="user" type="text" class="input" placeholder="Enter Second choice"> </div>    
                        <div class="group"> <label for="course2"class="label">Course of Study</label> <input id="user" type="text" class="input" placeholder="Enter third choice"> </div>
                            
                            <div class="group"> <label for="user" class="label">Username</label> <input id="user" type="text" class="input" placeholder="Enter your username"> </div>
                            <div class="group"> <label for="pass" class="label">Password</label> <input id="pass" type="password" class="input" data-type="password" placeholder="Enter your password"> </div>
                            <div class="group"> <input id="check" type="checkbox" class="check" checked> <label for="check"><span class="icon"></span> Keep me Signed in</label> </div>
                            <div class="group"> <input type="submit" class="button" value="Sign In"> </div>
                          
                            <div class="foot"> <a href="create.php">Forgot Password?</a> </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
         </form>
        </div>
    </div>
</div>

</div>
</body>
</html>