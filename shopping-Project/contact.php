<?php require_once __DIR__ . '/helpers.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>
        /* @media only screen and (min-width: 280px) and (max-width: 414px)  {
            .msg {
                width: 20px;
            }

            .send {
                margin-top: 15px;
            }
        } */

        @media screen and (max-width:991px) {
            .message {
                width: 100%;
            }

            .send {
                margin-top: 15px;
            }
        }


        .d-block {
            height: 500px;
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
                        <a class="navbar-brand" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="navbar-brand" href="./about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="navbar-brand" href="./contact.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="navbar-brand" href="./categories.php">Categories</a>
                    </li>
                </ul>
                <ul style="list-style-type: none;" class="mt-3">
                    <li class="nav-item">
                        <a class="navbar-brand" href="./sign up.php"><button class="btn btn-warning">Sign up</button></a>
                    </li>
                </ul>
                <ul style="list-style-type: none;" class="mt-3">
                    <li class="nav-item">
                        <a class="navbar-brand" href="./loginn.php"><button class="btn btn-warning">Sign in</button></a>
                    </li>
                </ul>
                <!-- <form class="d-flex">
          <button class="btn btn-warning rounded-pill me-2">User</button>
          <i class="fa fa-cart-shopping fs-4"></i>
          <i class="fa fa-cart-shopping fs-5"></i>
          ( -->
                <?php
                //  echo $count;
                ?>
                <!-- ) -->
                </form>
            </div>
        </div>
    </nav>
    <!-- Crousel -->

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./shop-girl.jpg" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1></h1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./bags.webp" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="every fw-bold text-dark">EVERY VARIETY</h1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./buy-money.jpg" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="buy fw-bold text-dark">BUY ONLINE</h1>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <!-- ---welcome--- -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 mt-4 mb-4">
                <h1 class="text-center fw-bold">REACH US!</h1>
            </div>
        </div>
    </div>

    <!-- ----Portions--- -->

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h1>Get in Touch</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit, itaque, labore rerum cumque facilis
                    qui suscipit in beatae, sunt soluta esse molestias fugiat magnam vitae!</p>


                <div class="icons">
                    <div class="location d-flex">
                        <p><i class=" fs-3 fa-solid fa-location-dot"></i></p>
                        <div class="tex ms-3">
                            <h5>Office</h5>
                            <p>123 Street,Sahiwal,Pakistan.</p>
                        </div>
                    </div>

                    <div class="location d-flex">
                        <p><i class=" fs-3 fa-solid fa-phone"></i></p>
                        <div class="tex ms-3">
                            <h5>Mobile</h5>
                            <p>+012345678</p>
                        </div>
                    </div>

                    <div class="location d-flex">
                        <p><i class=" fs-3 fa-solid fa-envelope"></i></p>
                        <div class="tex ms-3">
                            <h5>Email</h5>
                            <p>info@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1424.8486966725395!2d73.08458043044014!3d30.6613947860679!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3922c819b9f2b603%3A0x8c87dd1d1a59356a!2sTechStep%20(IT%20Training%20Center%20%26%20Software%20House)!5e0!3m2!1sen!2s!4v1695194264085!5m2!1sen!2s" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="col-lg-4 send">
                <form class="row g-3" method="Post" enctype="multipart/form-data">
                    <div class="nam d-flex">
                        <input type="text" class="form-control me-4 p-3" name="name" placeholder="Enter Name" style="border-color: orange; box-shadow: none;">
                        <input type="email" class="form-control p-3" name="email" placeholder="Enter Email" style="border-color: orange; box-shadow: none;">
                    </div>

                    <div class="subj mt-4">
                        <input type="text" class="form-control p-3" name="subject" placeholder="Subject" style="border-color: orange; box-shadow: none;">
                    </div>

                    <div class="subj mt-4">
                        <textarea cols="53" rows="4" class="message " name="msg" placeholder="Message" style="border-color: orange;"></textarea>
                    </div>

                    <div class="d-grid gap-2  mx-auto mt-4">
                        <button type="submit" class="btn large btn-warning" name="submit">Send Message</button>
                        <!-- <p type="submit" class="btn large btn-warning" name="submit">Sign in</p> -->
                        <!-- <button type="submit"  name="submit" class="btn btn-warning">Warning</button> -->

                    </div>
                </form>
            </div>

        </div>
    </div>


    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-dark mb-3 mt-2">
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



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>

<?php

// Connection include
include('conn.php');

//    Conditions

if (isset($_POST['submit'])) {
    $name = esc($_POST['name'] ?? '');
    $email = esc($_POST['email'] ?? '');
    $sub = esc($_POST['subject'] ?? '');
    $msg = esc($_POST['msg'] ?? '');

    //  Insert Query 

    $insertquery = "INSERT INTO `user_contact`(`name`, `email`, `sbj`, `message`) VALUES ('$name','$email','$sub','$msg')";

    $result = mysqli_query($conn, $insertquery);

    if ($result) {
?>
        <script>
            window.location.href = 'contact.php'; //Will take you to Google.
        </script>
        <!-- header('location:loginn.php'); exit; -->
        <?php
        // echo "data add";
        // } else {

        ?>
        <script>
            alert("Sorry! Data not Inserted..");
        </script>

<?php
    }
}

?>