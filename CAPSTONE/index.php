<!DOCTYPE html>
<html lang="en">
<head>
  <title>PetCo Homepage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/mdb.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/925a8d777d.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
<style>
.dropbtn {
  
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  min-width: 160px;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown:hover .dropdown-content {
  display: block;
}


</style>

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
  
<section class="home" id="home">
  <div class="row">
    <div class="col-md-6">
    <div class="content">
        <h3>Petco Shop</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas accusamus tempore temporibus rem amet laudantium animi optio voluptatum. Natus obcaecati unde porro nostrum ipsam itaque impedit incidunt rem quisquam eos!</p>
        <a href="#" class="btn btn-primary">Login</a>
        <a href="#" class="btn">sign up</a>
    </div>
    </div>
    <div class="col-md-6">
    <div class="image">
        <img src="pets.png" alt="">
    </div>
  </div>
  </div>
</section>
 </header>

 
 <hr>
    <section class="flex-sect" id="imagesec">
    <div class="container-width">
      <div class="flex-title" >This is the image of many cute pets!
      </div>
      <div class="flex-desc" id="io66v">A very memorable moment!
      </div>
      <div class="cards">
        <div class="card">
          <div class="card-header" id="ivzmn">
          </div>
          <div class="card-body">
            <div class="card-title">PetCo Pet
            </div>
            <div class="card-sub-title">Subtitle one
            </div>
            <div class="card-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header ch2">
          </div>
          <div class="card-body">
            <div class="card-title">PetCo Pet
            </div>
            <div class="card-sub-title">Subtitle two
            </div>
            <div class="card-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header ch3">
          </div>
          <div class="card-body">
            <div class="card-title">PetCo Pet
            </div>
            <div class="card-sub-title">Subtitle three
            </div>
            <div class="card-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header ch4">
          </div>
          <div class="card-body">
            <div class="card-title">PetCo Pet
            </div>
            <div class="card-sub-title">Subtitle four
            </div>
            <div class="card-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header ch5">
          </div>
          <div class="card-body">
            <div class="card-title">PetCo Pet
            </div>
            <div class="card-sub-title">Subtitle five
            </div>
            <div class="card-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header ch6">
          </div>
          <div class="card-body">
            <div class="card-title">PetCo Pet
            </div>
            <div class="card-sub-title">Subtitle six
            </div>
            <div class="card-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer-banner" id="about">
      <div class="container">
        <div class="container text">
            <h1>PETCO SHOP</h1>
            <p>Thank you for Visiting Petco Shop Enjoy An GodBless!</p>
            <br>

            <div class="row">
          <div class="col-sm-3">
            <ul class="follow">
              <h3>FOLLOW US!</h3>
              <p></p><a href="https://www.facebook.com/Udeng13">Facebook  <i class="fa-brands fa-facebook-square"></i></a><br>
              <a href="https://www.facebook.com/messages/t/100008437094309">Messenger <i class="fa-brands fa-facebook-messenger"></i></a><br>
              <a href="https://www.facebook.com/Udeng13">Instagram <i class="fa-brands fa-instagram"></i></a>
            </ul>
          </div>
          <div class="col-sm-3">
            <ul class="company">
              <h3>Company</h3>
              <a href="https://www.facebook.com/Udeng13"> About Us<i class="fa-solid fa-table-layout"></i></a><br>
              <a href="https://www.facebook.com/messages/t/100008437094309">Our Service <i class="fa-brands fa-facebook-messenger"></i></a><br>
              <a href="https://www.facebook.com/Udeng13">Privacy Policy <i class="fa-brands fa-instagram"></i></a>
            </ul>
          </div>
          <div class="col-sm-3">
            <ul class="company">
              <h3>Company</h3>
              <a href="https://www.facebook.com/Udeng13">Facebook  <i class="fa-brands fa-facebook-square"></i></a><br>
              <a href="https://www.facebook.com/messages/t/100008437094309">Messenger <i class="fa-brands fa-facebook-messenger"></i></a><br>
              <a href="https://www.facebook.com/Udeng13">Instagram <i class="fa-brands fa-instagram"></i></a>
            </ul>
          </div>
          <div class="col-sm-3">
            <ul class="company">
              <h3>Company</h3>
              <a href="https://www.facebook.com/Udeng13">Facebook  <i class="fa-brands fa-facebook-square"></i></a><br>
              <a href="https://www.facebook.com/messages/t/100008437094309">Messenger <i class="fa-brands fa-facebook-messenger"></i></a><br>
              <a href="https://www.facebook.com/Udeng13">Instagram <i class="fa-brands fa-instagram"></i></a>
            </ul>
          </div>
        </div>
        </div>
        
      </div>
  </footer>
 
    


      

      <script type="text/javascript" src="js/mdb.min.js"></script>
        <script type="text/javascript"></script>
 

</body>
</html>
