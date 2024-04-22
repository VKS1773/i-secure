<?php 
$login=false;
$showerror=false;

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    include "partials/dbconnect.php";
    $username=$_POST["username"];
    $password=$_POST["password"];
  
        $sql="select * from users where username='$username' AND password='$password'";
        $result=mysqli_query($conn,$sql);
        $num=mysqli_num_rows($result);
        if($num>=1)
        {
             $login=true;
             session_start();
             $_SESSION["loggedin"]=true;
             $_SESSION["username"]=$username;
             header("location:welcome.php");
        }
        else{
          $showerror="invalid credentials";
        }
        
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <?php require "partials/nav.php" ?>
    <?php
    if($login){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>success!</strong> You logged in succesfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
    }
    if($showerror)
    {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong>'.$showerror .'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
    }
    ?>
    
</div>
    <div class="container">
        <h1 class="text-center m-4" >Login up to our website</h1>
    <form action="/i-secure/login.php" method="post">
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name="username"  aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>