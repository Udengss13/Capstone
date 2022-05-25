<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Petco</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>
<body>
	<div class="sidebar">
		<div class="sidebar-brand">
			<h1><span class="las la-accusoft"></span>PETCO</h1>
		</div>
		<div class="sidebar-menu">
			<ul>
				<li>
					<a href=""><span class="las la-igloo"></span>Dashboard</a>
				</li>
				<li>
					<a href=""><span class="las la-users"></span>Customers</a>
				</li>
				<li>
					<a href=""><span class="las la-clipboard-list"></span>Projects</a>
				</li>
				<li>
					<a href=""><span class="las la-shipping-bag"></span>Order</a>
				</li>
				<li>
					<a href=""><span class="las la-igloo"></span>Inventory</a>
				</li>
				<li>
					<a href=""><span class="las la-igloo"></span>Accounts</a>
				</li>
				<li>
					<a href=""><span class="las la-igloo"></span>Task</a>
				</li>
			</ul>
			
		</div>
	</div>
	<div class="main-content">
		<header>
			<h1>
				<label >
					
				</label>
				
			</h1>
		</header>
	</div>

	<?php
    session_start();
?>
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
>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
</html>