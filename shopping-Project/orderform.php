<?php require_once __DIR__ . '/helpers.php'; ?>
<?php


session_start();

if (!isset($_SESSION['aid'])) {
    header('location:loginn.php'); exit;
} else {
    $aid = $_SESSION['aid'];
    $name = $_SESSION['name'];
    //  $dp = $_SESSION['name'];

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
    ul li a {
      text-decoration: none;
      color: black;
    }
  </style>
</head>

<body>
  <!-- ---navbar--- -->

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
          <button class="btn btn-warning rounded-pill me-2"><?php echo e($name); ?></button>
          <i class="fa fa-cart-shopping fs-5"></i>
          <!-- <i class="fa fa-cart-shopping fs-5"></i>(<?php echo $count; ?>) -->
        </form>
      </div>
    </div>
  </nav>

  <h1 class="fw-bold text-center mt-5">Complete Your Order Here</h1>
  <div class="container mt-5" style="width: 800px; border: 2px solid rgb(192, 185, 185); padding: 10px; border-radius: 5px;">
    <form>
      <div class="mb-4">
        <input type="email" class="form-control fs-5 mt-2" id="exampleInputEmail1" placeholder="Enter Your Name">
      </div>
      <div class="mb-3">
        <input type="password" class="form-control  fs-5" id="exampleInputPassword1" placeholder="Enter Your Email">
      </div>
      <div class="mb-3">
        <input type="password" class="form-control  fs-5" id="exampleInputPassword1" placeholder="Enter Your Password">
      </div>
      <div class="mb-3">
        <input type="password" class="form-control  fs-5" id="exampleInputPassword1" placeholder="Enter Your City">
      </div>
      <div class="mb-3">
        <input type="password" class="form-control  fs-5" id="exampleInputPassword1" placeholder="Enter Your Country">
      </div>
      <div class="mb-3">
        <input type="password" class="form-control  fs-5" id="exampleInputPassword1" placeholder="Enter Your Adress">
      </div>
      <div class="mb-3">
        <input type="password" class="form-control  fs-5" id="exampleInputPassword1" placeholder="Enter Your Pin Code">
      </div>

      <!-- <a href="./thanks.php"> <button type="submit" class="btn btn-warning">Order Now</button></a> -->
      <a href="./thanks.php">
        <p type="submit" class="btn btn-warning">Order Now</p>
      </a>
    </form>
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


</body>

</html>