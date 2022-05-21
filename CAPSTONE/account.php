<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
   <header class="bg">
    <nav class="navbar navbar-style">
      <div class="container" >
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#micon">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>

          </button>
          <a href=""><img class="logo" src="logo.png"></a>
        </div>
        <div class="collapse navbar-collapse" id="micon" >
        <ul class="nav navbar-nav navbar-right">
          <li><a href="">home</a></li>
          <li><a href="">Contact</a></li>
          <li><a href="#imagesec">Gallery</a></li>
          <li><a href="#about">Contact Us</a></li>
          <div class="dropdown">


<div class="dropdown">
  <button class="dropbtn">Login</button>
  <div class="dropdown-content">
  <a href="login.php">User</a>
  <a href="admin\admin_login.php">Administrator</a>
  
  </div>
</div>

        </ul>
        </div>
      </div>
    </nav>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>