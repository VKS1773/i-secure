<?php 
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
{
  $loggedin=true;
}
else{
  $loggedin=false;
}
  echo '<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/i-secure/login.php">iSecure</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/i-secure/login.php">Home</a>
        </li>';
    if($loggedin){
        echo '<li class="nav-item">
          <a class="nav-link" href="/i-secure/login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/i-secure/signup.php">Signup</a>
        </li>';
    }
    else{
        echo '<li class="nav-item">
          <a class="nav-link" href="/i-secure/logout.php">Logout</a>
        </li>';
      }
      echo '</ul>
    </div>
</div>
</nav>';
?>