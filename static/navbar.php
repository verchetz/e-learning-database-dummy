<?php  
session_start();
if (empty($_SESSION['username'])) {
  $_SESSION['username'] = 'user';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">IT DIV</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
        <?php if (!isset($_SESSION['isLogin'])) {
                echo '<a class="nav-link active" href="./login.php">Login</a>';
              }else{
                echo '<a class="nav-link active" href="logout.php" name="logout" type="submit">Logout</a>';
              } ?>
        <a class="nav-link active" aria-current="page" href="./register.php">Register</a>
      </div>
    </div>
  </div>
</nav>