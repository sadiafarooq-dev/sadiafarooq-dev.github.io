<?php require_once __DIR__ . "/auth.php"; // admins only ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="/admin/style.css">

    <style>
        ul li a {
            text-decoration: none;
            color: black;
        }
    </style>
</head>

<body>


    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-3">
                <div class="imag d-flex ms-5 mt-5">
                    <p class="mt-2"><img src="./shopping-cart.png" alt="" height="50px" width="60px"></p>
                    <h5 class="fw-bold ms-2 mt-3">Let's Shop!</h5>
                </div>

                <h6 class="mt-5 mb-5">Main Pages</h6>
                <ul>
                    <li class="d-flex"><i class="fa-solid fa-table-columns fs-5"></i>
                        <a href="./dash.php">
                            <h6 class="ms-4">Dashboard</h6>
                        </a>
                    </li>
                    <li class="d-flex mt-3"><i class="fa-solid fa-users fs-5"></i>
                        <a href="./record.php">
                            <h6 class="ms-4">User Record</h6>
                        </a>
                    </li>
                    <li class="d-flex mt-3"><i class="fa-regular fa-address-card fs-5"></i>
                        <a href="./usercontact.php">
                            <h6 class="ms-4">User Contact</h6>
                        </a>
                    </li>
                    <li class="d-flex mt-3"> <i class="fa-solid fa-crown"></i>
                        <a href="./admin.php">
                            <h6 class="ms-4">View Admin</h6>
                        </a>
                    </li>
                    <li class="d-flex mt-3"> <i class="fa-solid fa-clipboard"></i>
                        <a href="">
                            <h6 class="ms-4">Collections</h6>
                        </a>
                    </li>

                    <!-- ====men -->
                    <div class="dropdown mt-4">
                        <button class="btn btn-white dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-person fs-4 me-2"></i>Men Collection
                        </button>
                        <ul class="dropdown-menu px-3" aria-labelledby="dropdownMenuButton1">
                            <li class="d-flex mt-3">
                                <a href="./add_men.php">
                                    <h6 class="">Add Men Category</h6>
                                </a>
                            </li>
                            <li class="d-flex mt-3">
                                <a href="./display_men.php">
                                    <h6 class="">View Men Category</h6>
                                </a>
                            </li>

                        </ul>
                    </div>

                    <!-- ====women -->
                    <div class="dropdown">
                        <button class="btn btn-white dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-person-dress me-2 fs-4"></i>Women Collection
                        </button>
                        <ul class="dropdown-menu p-2" aria-labelledby="dropdownMenuButton1">
                            <li class="d-flex mt-3">
                                <a href="./add_women.php">
                                    <h6 class="">Add Women Category</h6>
                                </a>
                            </li>
                            <li class="d-flex mt-3">
                                <a href="./display_woman.php">
                                    <h6 class="./">View Women Category</h6>
                                </a>
                            </li>

                        </ul>
                    </div>

                    <!-- ====kids -->
                    <div class="dropdown">
                        <button class="btn btn-white dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-person-dress me-2 fs-4"></i>Kid's Collection
                        </button>
                        <ul class="dropdown-menu p-2" aria-labelledby="dropdownMenuButton1">
                            <li class="d-flex mt-3">
                                <a href="./add_women.php">
                                    <h6 class="">Add kids Category</h6>
                                </a>
                            </li>
                            <li class="d-flex mt-3">
                                <a href="./admin.php">
                                    <h6 class="">View kids Category</h6>
                                </a>
                            </li>

                        </ul>
                    </div>


                </ul>

                <h6 class="mt-5 mb-5">Navigation Pages</h6>
                <ul>
                    <li class="d-flex mt-3"> <i class="fa-solid fa-box-open fs-5"></i>
                        <a href="./dsplyorders.php">
                            <h6 class="ms-4">Orders</h6>
                        </a>
                    </li>

                    <li class="d-flex  mt-3"><i class="fa-regular fa-pen-to-square fs-5"></i>
                        <a href="">
                            <h6 class="ms-4">Add new categories</h6>
                        </a>
                    </li>

                    <li class="d-flex  mt-3"><i class="fa-solid fa-eye fs-5"></i>
                        <a href="">
                            <h6 class="ms-4">View all categories</h6>
                        </a>
                    </li>

                    <li class="d-flex  mt-3"><i class="fa-solid fa-right-from-bracket fs-5"></i>
                        <a href="">
                            <h6 class="ms-4">Log out</h6>
                        </a>
                    </li>
                </ul>

            </div>


            <div class="dashboard col-lg-10 col-md-9 bg-light mt-2">
                <div class="admin bg-dark text-white p-2 d-flex text-center fixed-top mt-2" style="margin-left: 270px; margin-right: 12px;">
                    <h1 class="ms-5">DASHBOARD</h1>
                    <div class="dropdown mt-2" style="margin-left: 800px;">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Admin
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="./addadmin.php">Add Admin</a></li>
                            <li><a class="dropdown-item" href="">Sign out</a></li>
                        </ul>
                    </div>

                </div>
                <h4 class="ms-5 text-center" style="margin-top: 100px;">Analytics Dashboard</h4>
                <div class="crd d-flex mt-4 p-4">
                    <div class=" me-5 card w-75">
                        <div class="card-body">
                            <div class="text d-flex">
                                <h5 class="card-title text-success">Total Users
                                </h5>
                                <div class="icon">
                                    <i class="fa-solid fa-users fs-3 text-success" style="margin-left: 350px;"></i>
                                </div>
                            </div>

                            <h2 class="mt-5">13</h2>
                        </div>
                    </div>
                    <div class="card w-75">
                        <div class="card-body">
                            <h5 class="card-title text-success">Total Oders <i class="fa-solid fa-users fs-3" style="margin-left: 350px;"></i></h5>
                            <h2 class="mt-5">13</h2>
                        </div>
                    </div>
                </div>

                <div class="crd d-flex p-4">
                    <div class=" me-5 mt-5 card w-75">
                        <div class="card-body">
                            <h5 class="card-title text-success">Total Admins <i class="fa-solid fa-users fs-3" style="margin-left: 350px;"></i></h5>
                            <h2 class="mt-5">13</h2>
                        </div>
                    </div>
                    <div class=" mt-5 card w-75">
                        <div class="card-body">
                            <h5 class="card-title text-success">User Contacts <i class="fa-solid fa-users fs-3" style="margin-left: 350px;"></i></h5>
                            <h2 class="mt-5">13</h2>
                        </div>
                    </div>
                </div>


                <!-- Footer -->
                <footer class="text-center text-lg-start bg-dark text-light mb-3 mt-5 fixed-bottom" style="margin-left: 270px; margin-right: 12px;">
                    <!-- Section: Social media -->
                    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                        <!-- Left -->
                        <div class="me-5 d-none d-lg-block">
                            <span>Get connected with us on social networks:</span>
                        </div>
                        <!-- Left -->

                        <!-- Right -->
                        <div>
                            <a href="" class="me-4 text-reset">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="" class="me-4 text-reset">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="" class="me-4 text-reset">
                                <i class="fab fa-google"></i>
                            </a>
                            <a href="" class="me-4 text-reset">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="" class="me-4 text-reset">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="" class="me-4 text-reset">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                        <!-- Right -->
                    </section>

                </footer>
                <!-- Footer -->


            </div>



        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>