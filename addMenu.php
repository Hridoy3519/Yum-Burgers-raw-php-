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
    <title>Add Menu</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

    <!-- StyleSheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="AddMenuStyle.css">
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
                            <a class="nav-link" href="#">Order Now</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="addMenu.html">Add Menu</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="#">Location</a>
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
                </div>
            </div>
        </nav>

        <!-- Banner Section -->
        <section class="px-md-5 container-fluid my-5 banner-section">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 col-12 d-flex justify-content-center">
                    <!-- <div class="parallex"></div> -->
                    <div class="shadow-lg w-md-75 p-5 add-menu">
                        <h1 class="mb-4">Add Product TO MENU</h1>
                        <form action="insert.php" method="post" enctype="multipart/form-data">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="name"
                                    placeholder="name@example.com">
                                <label for="floatingInput">Product Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="price"
                                    placeholder="name@example.com">
                                <label for="floatingInput">Product Price</label>
                            </div>

                            <div class="form-group mb-3">
                                <label for="exampleInputImage1">Image</label>
                                <input type="file" id="exampleInputImage1" class="form-control" name="image"
                                    placeholder="Enter an Image">
                            </div>
                            <button type="submit" class="btn burger-customized-btn w-100">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <img class="img-fluid" src="images/Burger-1.png" alt="">
                </div>
                <div class="col-lg-3 sassy-burger">
                    <h2>Sassy Burger</h2>
                    <p class="sassy-burger-des">Our great burgers , Now with extra cheese</p>
                </div>
            </div>
            <div class="red-bg"></div>
        </section>
    </header>
</body>

</html>