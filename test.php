<?php
 $err=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){

include './partial/db_connect.php';
$username=$_POST["username"];
$password=$_POST["password"];
$cpassword=$_POST["cpassword"];  
$exists=false;
if(($password==$cpassword) && ($exists==false)){
  $sql="INSERT INTO `users`(`username`,`password`,`dt`) VALUES('$username','$password',current_timestamp)";
  
  $result=mysqli_query($conn,$sql);
  if($result){
    $err=true;
  }
}
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <?php require './partial/_nav.php' ?>
    <?php
    if($err){
    echo'
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong><p>Account Created!</p></strong>Your account has been created successfully.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
?>
    <div class="container"><h1 class="text-center">Signup to our website</h1></div>
    <form action="/New folder/loginsys/signup.php" method="post">
  <div class="form-group col-md-6">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
    
  </div>
    
    
  <div class="form-group col-md-6">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="form-group col-md-6">
    <label for="cpassword" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="cpassword" name="cpassword">
  </div>
  <div id="emailHelp" class="form-text">Make sure to enter the same password</div>
  
  <button type="submit" class="btn btn-primary col-md-6">Signup</button>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>