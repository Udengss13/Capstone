<!DOCTYPE html>
<html lang="en">

<head>
    <title>PetCo Homepage</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style.css">


</head>

<body>
    <nav class="navbar navbar-expand-lg bg-deepink sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="asset/logopet.png" alt="Logo"  style="width:100%; height:8vh" />
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        </div>
        <div class="floa-end me-5">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Login
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="admin\login_admin.php">Administrator</a></li>
                                <li><a class="dropdown-item" href="login.php">user</a></li>

                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="home" id="home">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="content mt-4">
                        <h3>Petco Shop</h3>
                        <p class="text-wrap text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Voluptas
                            accusamus tempore
                            temporibus rem amet laudantium animi optio voluptatum. Natus obcaecati unde porro nostrum
                            ipsam itaque impedit, Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo
                            totam eius eum consequatur fuga omnis porro molestiae sed repellendus, autem quo distinctio
                            ut error architecto corporis? Repudiandae ad sint voluptas suscipit quod provident explicabo
                            debitis laborum nemo alias nulla culpa!</p>
                        <center>
                            <div class="mb-3">
                                <a href="#" class="btn btn-primary ">Login</a>
                                <a href="#" class="btn btn-success">Sign Up</a>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 ">
                    <div class="image mt-4 mb-4 ">
                        <img src="asset/pets.png" class="img-responsive" alt="Image Body">
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section class="flex-sect" id="imagesec">
        <div class="container-width">
            <div class="flex-title">This is the image of many cute pets!
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
                        <div class="card-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore
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
                        <div class="card-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore
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
                        <div class="card-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore
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
                        <div class="card-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore
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
                        <div class="card-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore
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
                        <div class="card-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer-banner" id="about">

        <div class="container text">
            <h1>PETCO SHOP</h1>
            <p>Thank you for Visiting Petco Shop Enjoy An GodBless!</p>
            <br>

            <div class="row">
                <div class="col-sm-3">
                    <ul class="follow">
                        <h3>FOLLOW US!</h3>
                        <p></p><a href="https://www.facebook.com/Udeng13">Facebook <i
                                class="fa-brands fa-facebook-square"></i></a><br>
                        <a href="https://www.facebook.com/messages/t/100008437094309">Messenger <i
                                class="fa-brands fa-facebook-messenger"></i></a><br>
                        <a href="https://www.facebook.com/Udeng13">Instagram <i class="fa-brands fa-instagram"></i></a>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <ul class="company">
                        <h3>Company</h3>
                        <a href="https://www.facebook.com/Udeng13"> About Us<i
                                class="fa-solid fa-table-layout"></i></a><br>
                        <a href="https://www.facebook.com/messages/t/100008437094309">Our Service <i
                                class="fa-brands fa-facebook-messenger"></i></a><br>
                        <a href="https://www.facebook.com/Udeng13">Privacy Policy <i
                                class="fa-brands fa-instagram"></i></a>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <ul class="company">
                        <h3>Company</h3>
                        <a href="https://www.facebook.com/Udeng13">Facebook <i
                                class="fa-brands fa-facebook-square"></i></a><br>
                        <a href="https://www.facebook.com/messages/t/100008437094309">Messenger <i
                                class="fa-brands fa-facebook-messenger"></i></a><br>
                        <a href="https://www.facebook.com/Udeng13">Instagram <i class="fa-brands fa-instagram"></i></a>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <ul class="company">
                        <h3>Company</h3>
                        <a href="https://www.facebook.com/Udeng13">Facebook <i
                                class="fa-brands fa-facebook-square"></i></a><br>
                        <a href="https://www.facebook.com/messages/t/100008437094309">Messenger <i
                                class="fa-brands fa-facebook-messenger"></i></a><br>
                        <a href="https://www.facebook.com/Udeng13">Instagram <i class="fa-brands fa-instagram"></i></a>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>



</body>

</html>