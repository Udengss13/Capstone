<?php
    session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Login</title>
	<style>
body {
  font-family: "Lato", sans-serif;
}
.bb {
  margin-left: 40px;
}


</style>
</head>


</head>
<body>
<nav class="navbar navbar-expand-lg sticky-top bg-blue">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
			<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
            </a>			
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        </div>
        <div class="floa-end me-5">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
				<img src="adminasset/logopet.png" alt="Logo"  style="width:100%; height:8vh; "/>
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" href="#">Pricing</a>
                    </li>
					<li class="nav-item">
					<button class="btn btn-outline-danger mx-auto d-block bb"><a href="logout_process.php"
            	class="text-decoration-none text-light ">Logout</a></button>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="" class="admin">Administrator</a>
  <a href="users.php">User</a>
  <a href="#">Menu</a>
  <a href="#">Add Menu</a>
  <a href="site_setting.php">Site Setting</a>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
   
</body>
</html> 

	

	

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
</body>

</html>