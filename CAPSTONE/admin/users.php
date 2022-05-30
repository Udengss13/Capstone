<?php
include 'connection.php'


// $toSearch=" ";
// if(isset($_SESSION["search"])){
// 	$toSearch=$_SESSION["search"];
// }
// if(isset($_GET["search"])){
// 	$_SESSION["search"]=$_GET["search"];
// 	$toSearch=$_GET["search"];
// }
?>
<!DOCTYPE html>
<html></html>
<head>
	<title>Activity 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
	<link rel="stylesheet" href="style.css">
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
  <a href="">Administrator</a>
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
<form action="" method="GET">
				<input type="search" name="search" style="width:80%" placeholder="Search" value="<?php echo $toSearch; ?>">
				<input type="submit" style="width:10%" value="Go" id="go" class="btn btn-primary" style="padding: 10px;">
			</form>
   
<table class="container table table-bordered tbl " style="border-colapse:colapse;">
	
	<tr>
		<th>User ID</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>User Name</th>
		<th>Email</th>
		<th id="modButtons">Actions</th>
	</tr>
	<?php
		//Load up variables
		// $xml = new domdocument();
		// $xml->load('xml.xml');
		// $songs = $xml->getElementsByTagName("song");
        $sql = "SELECT * FROM user_form";
        $result = mysqli_query($conn, $sql);
  

		//Check for search
		//Cache all values inside cache string
		//Perform a match between the cached string to toSearch
		//If matched, then display
		while ($row=mysqli_fetch_assoc($result)) {
			$cacheString = "";
			$id = $row['id'];
            $fname = $row['fname'];
            $lname = $row['lname'];
            $username = $row['username'];
            $email = $row['email'];
            
        // }
		// 	//Now check if cachedstring contains the search string
		// 	if(str_contains(strtolower($toSearch) )){
				echo "<tr>";
				echo "<td>$id</td>";
				echo "<td>$fname</td>";
				echo "<td>$lname</td>";
				echo "<td>$username</td>";
                echo "<td>$email</td>";
                
				echo "<td>
						<form action='modify.php' method='GET'>						
							<input type='submit' value='Delete' name='action' id='delete'>
						</form>
					</td>";
	 }
        // if (strpos($haystack, $needle) !== false) {
  // haystack contains needle

	?>
</table>
</body>
</html>
?>