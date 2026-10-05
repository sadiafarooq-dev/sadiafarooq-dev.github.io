<?php require_once __DIR__ . '/helpers.php'; ?>
<?php

session_start();

if (!isset($_SESSION['aid'])) {
    header('location:loginn.php'); exit;
} 

else {
    $id = $_SESSION['aid'];
    $name = $_SESSION['name'];
    $dp = $_SESSION['name'];
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>
        /* ---ratings---- */

        .rating {
            display: inline-block;
        }

        .rating input {
            display: none;
        }

        .rating label {
            float: right;
            cursor: pointer;
            color: #ccc;
            transition: color 0.3s;
        }

        .rating label:before {
            content: '\2605';
            font-size: 30px;
        }

        .rating input:checked~label,
        .rating label:hover,
        .rating label:hover~label {
            color: gold;
            transition: color 0.3s;
        }


        @media screen and (max-width:768px) {

            .images img {
                width: 100%;
            }

        }

        @media screen and (max-width:820px) {

            .images img {
                width: 100%;
            }

        }

        @media screen and (max-width:1500px) {}


        @media screen and (max-width:480px) {

            .quality {
                display: none;
            }

            .images img {
                width: 100%;
            }
        }
    </style>
    <style>
        /* Styles for the image slider container */
        .slider-container {
            width: 850px;
            /* Fixed width for each image */
            overflow: hidden;
        }

        /* Styles for the slider content */
        .slider-content {
            display: flex;
            transition: transform 0.3s ease;
        }

        /* Styles for the individual images */
        .slider-content img {
            width: 80px;
            height: 80px;
        }

        /* Additional styles for navigation buttons (optional) */
        .slider-nav {
            margin-top: 10px;
            text-align: center;
        }

        .slider-nav button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }
    </style>
    <!-- ----add-to-cart--- -->
    <style>
        .CartBtn {
            width: 140px;
            height: 50px;
            border-radius: 12px;
            border: none;
            background-color: rgb(255, 208, 0);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition-duration: .5s;
            overflow: hidden;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.103);
            position: relative;
            /* margin-left: 200px; */
            margin-top: 25px;
        }

        .IconContainer {
            position: absolute;
            left: -50px;
            width: 30px;
            height: 30px;
            background-color: transparent;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            z-index: 2;
            transition-duration: .5s;
        }

        .icon {
            border-radius: 1px;
        }

        .text {
            height: 100%;
            width: fit-content;
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgb(17, 17, 17);
            z-index: 1;
            transition-duration: .5s;
            font-size: 1.04em;
            font-weight: 600;
        }

        .CartBtn:hover .IconContainer {
            transform: translateX(58px);
            border-radius: 40px;
            transition-duration: .5s;
        }

        .CartBtn:hover .text {
            transform: translate(10px, 0px);
            transition-duration: .5s;
        }

        .CartBtn:active {
            transform: scale(0.95);
            transition-duration: .5s;
        }
    </style>
    <style>
        a {
            text-decoration: none;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid fw-bold">
            <a class="navbar-brand ms-4 rounded-circle" href="#"> <img src="./shopping-cart.png" alt="" height="40px" width="55px"></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="navbar-brand" href="./index1.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="navbar-brand" href="./about1.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="navbar-brand" href="./contect1.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="navbar-brand" href="./categories1.php">Categories</a>
                    </li>
                </ul>

                <ul style="list-style-type: none;" class="mt-3">
                    <li class="nav-item">
                        <a class="navbar-brand" href="./logout.php"><button class="btn btn-warning">Log out</button></a>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn btn-warning rounded-pill me-2">Welcome</button>
                    <i class="fa fa-cart-shopping fs-5"></i>
                    <!-- <i class="fa fa-cart-shopping fs-5"></i>(<?php echo $count; ?>) -->
                </form>
            </div>
        </div>
    </nav>

    <main class="bg-light pb-5">
        <section>
            <div class="container">
                <?php
                include "conn.php";
                $check_query = "SELECT * FROM `cart` WHERE cid = $id";
                $check_query_result = mysqli_query($conn, $check_query);

                if (mysqli_num_rows($check_query_result) > 0) {
                ?>
                    <div class="row pt-4">
                        <div class="d-flex justify-content-between pe-0">
                            <div>
                                <h3>My cart</h3>
                            </div>
                            <div>
                                <a class="btn btn-outline-warning" href="index.php">Continue Shopping</a>
                            </div>
                        </div>
                        <?php
                        $select_query = "SELECT * FROM `cart` WHERE cid = $id";

                        $check_query_result = mysqli_query($conn,  $select_query);
                        while ($result = mysqli_fetch_array($check_query_result)) {
                        ?>
                            <div class="col-12 mt-2 card p-3">
                                <div class="d-flex">
                                    <div class="col-2">
                                        <img class="img-fluid" src="./admin/upload/<?php echo e($result['image']); ?>">
                                    </div>
                                    <div class="offset-2 col-4 mt-3">
                                        <h5 class="card-text">
                                            <?php echo e($result['name']); ?>
                                        </h5>
                                        <p class="small text-muted">
                                            <?php echo e($result['description']); ?>
                                        </p>
                                        <a href="remove.php?id=<?php echo e($result['id']); ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Remove Product" class="text-reset text-decoration-none">
                                            <span class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></span></a>
                                        <a class="ms-3" href="change.php?id=<?php echo e($result['id']); ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Remove Product" class="text-reset text-decoration-none">
                                            <span class="btn btn-outline-warning"><i class="fa-solid fa-pencil"></i></span></a>
                                    </div>
                                    <div class="col-4 mt-5">
                                        <h5 class="card-text text-orange">
                                            Rs. <?php echo e($result['price']); ?>
                                        </h5>
                                        <p class="card-text">
                                            Quantity: <?php echo e($result['quantity']); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                        <div class="mt-4 text-end pe-0">
                            <a class="btn btn-success ps-4 pe-4" href="checkout.php">Proceed to checkout</a>
                        </div>
                    </div>
                <?php

                } else {
                ?>
                    <div class="row pt-5 pb-5" style="height: 480px;">
                        <div class="card pt-5 pb-5 text-center">
                            <div class="col-6 offset-3">
                                <h4>No items added in your cart.</h4>
                                <a class="btn btn-outline-success ps-5 pe-5 mt-5" href="index.php">Continue Shopping</a>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </section>
    </main>

</body>

</html>