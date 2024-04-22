
<?php
 session_start();
 if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"]!=true)
 {
   header("location:login.php");
   exit;
 }
 ?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <?php require "partials/nav.php" ?>
    
    <div class="container my-3">
    <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Welcome -<?php echo $_SESSION["username"]?></h4>
  <p>hey! what's up bro ? what are you doing . welcome to isecure .</p>
  <hr>
  <p class="mb-0">you can visit this site anywhere and anytime by using these credentials and you can also logged out by <a href="/i-secure/logout.php" >using this link<a></p>
</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>