<?php require_once __DIR__ . '/helpers.php'; ?>
<?php


// session_start();

// if (!isset($_SESSION['aid'])) {
//     header('location:loginn.php'); exit;
// } else {
//     $aid = $_SESSION['aid'];
//     $name = $_SESSION['name'];
//     //  $dp = $_SESSION['name'];

// }


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

</head>

<body>

    <!-- NAVBAR -->

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
    <div class="container" style="margin-top: 150px;">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class=" images carousel-inner  rounded">
                        <div class="carousel-item active">
                            <img src="./black sunglasses.avif" class="" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./blue-squqre-glasses.avif" class="" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./brown-square-glasses.avif" class="" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./red-square-glasses.avif" class="" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 details">
                <h1 class="fw-bold">Classic Square Glasses</h1>
                <h5 class="text-info" style="border-bottom: 1px solid rgb(203, 191, 191); padding-bottom: 25px;">Best
                    quality material for
                    you! </h5>
                <div class="price mt-3" style="border-bottom: 1px solid rgb(203, 191, 191); padding-bottom: 25px;">
                    <div class="total-price d-flex text-danger">
                        <h5 class="fw-bold">Price:</h5>
                        <h5 class="ms-2">1500/Rs</h5>
                    </div>

                    <h5> <strike>Rs.3000</strike> -50%</h5>

                    <div class="total-price d-flex">
                        <h5 class="fw-bold text-dange">Colors:</h5>
                        <h5 class="ms-2 text-info">Red, Brown, Blue, Black</h5>
                    </div>
                </div>
                <div class="rate d-flex mt-3">
                    <div class="rating pe-2" style="border-right: 2px solid orange;">
                        <input value="5" name="rating" id="star5" type="radio">
                        <label for="star5"></label>
                        <input value="4" name="rating" id="star4" type="radio">
                        <label for="star4"></label>
                        <input value="3" name="rating" id="star3" type="radio">
                        <label for="star3"></label>
                        <input value="2" name="rating" id="star2" type="radio">
                        <label for="star2"></label>
                        <input value="1" name="rating" id="star1" type="radio">
                        <label for="star1"></label>
                    </div>

                    <div class="star-txt mt-2 ms-2 text-info">
                        <h5>1045 ratings </h5>
                    </div>

                    <div class="ans mt-2 ms-2 text-info">
                        <h5>58 Answers </h5>
                    </div>
                </div>

                <div class="brand d-flex mt-2">
                    <h5 class="me-2 fw-bold brand">Brand:</h5>
                    <h5 class="text-info">SF-Products</h4>
                        <h5 class=" quality ms-2 text-info ps-2" style="border-left: 2px solid orange;">The name of
                            quality!</h5>
                </div>
                <button class="CartBtn">
                    <span class="IconContainer">
                        <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart">
                            <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z">
                            </path>
                        </svg>
                    </span>
                    <p class="text mt-2">Add to Cart</p>
                </button>


            </div>
        </div>



    </div>



    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-dark mb-3 mt-5">
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
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>Shopify
                        </h6>
                        <p>
                            Here you can use rows and columns to organize your footer content. Lorem ipsum
                            dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Products
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Angular</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">React</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Vue</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Laravel</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Useful links
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Pricing</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Settings</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Orders</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Help</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            info@example.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                        <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2021 Copyright:
            <a class="text-reset fw-bold" href="">design.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->


    <!-- 
    <script>
        // JavaScript for image slider
        const slider = document.querySelector(".slider-content");
        const images = document.querySelectorAll(".slider-content img");
        let currentIndex = 0;

        function nextSlide() {
            currentIndex = (currentIndex + 1) % images.length;
            updateSlider();
        }

        function prevSlide() {
            currentIndex = (currentIndex - 1 + images.length) % images.length;
            updateSlider();
        }

        function updateSlider() {
            const translateX = -currentIndex * 80; // 80px width per image
            slider.style.transform = `translateX(${translateX}px)`;
        }
    </script> -->




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>