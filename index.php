<?php
    session_start();
    if(!isset($_SESSION['username'])){
        echo "<script>location.href = 'login.html'</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yumm-Burgers</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

    <!-- StyleSheet -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg px-md-4">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="images/Logo.png" alt="" width="123" height="114">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="ms-lg-5 collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item mx-3">
                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="#orderNow">Order Now</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="addMenu.php">Add Menu</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="#socials">Socials</a>
                        </li>

                    </ul>

                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item mx-3">
                            <a class="nav-link white-nav-link" href="login.html">Login</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link white-nav-link" href="logout.php">Logout</a>
                        </li>

                    </ul>
                    
                    <!-- <div class="d-flex align-items-center me-3 cart-portion">
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="#">Login</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="#">Register</a>
                        </li>
                        <p class="me-5">+1 - 650 - 547 - 9864</p>
                        <img src="images/Cart.png" alt="" width="61" height="71">
                    </div> -->
                </div>
            </div>
        </nav>

        <!-- Banner Section -->
        <section class="px-md-5 container-fluid my-5 banner-section">
            <div class="row d-flex align-items-center">
                <div class="col-lg-4 col-12">
                    <h1>Single Patty</h1>
                    <p class="my-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut
                        labore.</p>
                    <button class="btn burger-customized-btn">
                        Order Now
                    </button>
                </div>
                <div class="col-lg-4 col-12">
                    <img class="img-fluid" src="images/Burger-1.png" alt="">
                </div>
                <div class="col-lg-4 sassy-burger">
                    <h2>Sassy Burger</h2>
                    <p class="sassy-burger-des">Our great burgers , Now with extra cheese</p>
                </div>
            </div>
            <div class="red-bg"></div>
        </section>
    </header>

    <main>
        <!-- Mneu Section -->
        <section class="menu-section container-fluid px-md-5 mb-5">
        <h1 class="text-center mb-5">Dine In + Delivery</h1>
            <div class="row d-flex align-items-center">
                <div class="col-lg-10 col-12">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                        <?php
                            include 'readMenu.php';
                        ?>
                    </div>
                </div>
                <div class="col-lg-2 d-none d-lg-block d-flex justify-content-center">
                    <img src="images/Menu.png" class="img-fluid" alt="">
                </div>
            </div>
        </section>

        <!-- Rectangle Sections -->

        <section id="orderNow" class="rectangle-section container-fluid px-md-5 mb-5">
            <div class="row row-cols-1 row-cols-md-3 g-0">
                <div class="col">
                    <div class="rectangle-bg-1 border-0 d-flex justify-content-between align-items-end pb-3 ps-2">
                        <div>
                            <h4>Chicha Burger</h4>
                            <button class="btn burger-customized-btn-white border-0">
                                Order Now
                            </button>
                        </div>
                        <img src="images/Half-Burger-1.png" width="300" height="300" alt="...">
                    </div>
                </div>
                <div class="col">
                    <div class="rectangle-bg-2 border-0 d-flex justify-content-between align-items-end pb-3 ps-2">
                        <div>
                            <h4>Fried Burger</h4>
                            <button class="btn burger-customized-btn-white border-0">
                                Order Now
                            </button>
                        </div>
                        <img src="images/Half-Burger-2.png" width="300" height="300" alt="...">
                    </div>
                </div>
                <div class="col">
                    <div class="rectangle-bg-3 border-0 d-flex justify-content-between align-items-end pb-3 ps-2">
                        <div>
                            <h4>Grill Thrill</h4>
                            <button class="btn burger-customized-btn-white border-0">
                                Order Now
                            </button>
                        </div>
                        <img src="images/Half-Burger-3.png" width="300" height="300" alt="...">
                    </div>
                </div>
            </div>
        </section>

        <!-- Social Section -->
        <section id="socials" class="social-section container-fluid px-md-5 mb-5">
            <h1 class="text-center">Follow us on Instagram</h1>
            <p class="text-center">For the latest news, updates and inspirational recipes, <br> follow us on Instagram
                to
                flavour up your food!
            </p>
            <div class="row d-flex align-items-center">
                <div class="col-lg-2 d-none d-lg-block d-flex justify-content-center">
                    <img src="images/Social.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-10 col-12">
                    <div class="row row-cols-1 row-cols-md-3 g-3">
                        <div class="col social-box">
                            <img class="img-fluid" src="images/Social-Burger1.png" alt="">
                            <img class="socialmedia-user img-fluid" src="images/Ellipse1.png" alt="" width="100">
                        </div>
                        <div class="col social-box">
                            <img class="img-fluid" src="images/Social-Burger2.png" alt="">
                            <img class="socialmedia-user img-fluid" src="images/Ellipse2.png" alt="" width="100">
                        </div>
                        <div class="col social-box">
                            <img class="img-fluid" src="images/Social-Burger3.png" alt="">
                            <img class="socialmedia-user img-fluid" src="images/Ellipse3.png" alt="" width="100">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p class="text-center">Copyright © 2022 Hridoy Chowdhury</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
</body>

</html>