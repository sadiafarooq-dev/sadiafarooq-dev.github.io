<?php require_once __DIR__ . '/helpers.php'; ?>
<?php

include 'conn.php';


if (isset($_POST['register'])) {
  $name = esc($_POST['firstname'] ?? '');
  $email = esc($_POST['email'] ?? '');
  $password = $_POST['password'] ?? '';
  $cpassword = $_POST['cpassword'] ?? '';

  $exists = mysqli_query($conn, "SELECT id FROM `user_register` WHERE `email`='$email' LIMIT 1");
  if ($password === '' || $password !== $cpassword || ($exists && mysqli_num_rows($exists) > 0)) {
    $query = false;   // passwords don't match, or this email already has an account
  } else {
    // Store a secure hash, never the password itself
    $hash = esc(password_hash($password, PASSWORD_DEFAULT));
    $insert = "INSERT INTO `user_register`(`name`, `email`, `pswd`, `cpswd`)
                 VALUES ('$name','$email', '$hash', '')";
    $query = mysqli_query($conn, $insert);
  }

  if ($query) {
    header('location:loginn.php'); exit;
  } else {
?>
    <script>
      alert("Sorry! Data not Inserted..");
    </script>

<?php
  }
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
            <a class="navbar-brand" href="./loginn.php"><button class="btn btn-warning">Sign in</button></a>
          </li>
        </ul>
        <!-- <ul style="list-style-type: none;" class="mt-3">
          <li class="nav-item">
            <a class="navbar-brand" href="./sign up.php"><button class="btn btn-warning">Sign in</button></a>
          </li>
        </ul> -->
        <form class="d-flex">
          <button class="btn btn-warning rounded-pill me-2">Welcome</button>
          <i class="fa fa-cart-shopping fs-5"></i>
          <!-- <i class="fa fa-cart-shopping fs-5"></i>(<?php echo $count; ?>) -->
        </form>
      </div>
    </div>
  </nav>

  <!-- Crousel -->

  <!-- <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
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
  </div> -->
  <!-- ----form--- -->
  <section class="vh-100" style="background-image:url(./bags.webp)">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                  <form class="mx-1 mx-md-4" method="POST" enctype="multipart/form-data">

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="text" id="form3Example1c" class="form-control" name="firstname" />
                        <label class="form-label" for="form3Example1c">Your Name</label>
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="email" id="form3Example3c" class="form-control" name="email" />
                        <label class="form-label" for="form3Example3c">Your Email</label>
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="password" id="form3Example4c" class="form-control" name="password" />
                        <label class="form-label" for="form3Example4c">Password</label>
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="password" id="form3Example4cd" class="form-control" name="cpassword" />
                        <label class="form-label" for="form3Example4cd">Repeat your password</label>
                      </div>
                    </div>

                    <div class="d-flex justify-content-center ">
                      <button type="submit" class="btn btn-primary btn-lg" name="register">Register</button>
                    </div>

                  </form>

                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                  <img src="./bags.webp" class="img-fluid" alt="Sample image">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

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
  $psd = $_POST['password'] ?? '';
  $cpsd = $_POST['cpassword'] ?? '';

  $exists = mysqli_query($conn, "SELECT id FROM `user_register` WHERE `email`='$email' LIMIT 1");
  if ($psd === '' || $psd !== $cpsd || ($exists && mysqli_num_rows($exists) > 0)) {
    $result = false;   // passwords don't match, or this email already has an account
  } else {
    // Store a secure hash, never the password itself
    $hash = esc(password_hash($psd, PASSWORD_DEFAULT));
    $insertquery = "INSERT INTO `user_register`(`name`, `email`, `pswd`, `cpswd`) VALUES ('$name','$email','$hash','')";
    $result = mysqli_query($conn, $insertquery);
  }

  if ($result) {
?>
    <script>
      window.location.href = 'loginn.php'; //Will take you to Google.
    </script>
    <!-- header('location:loginn.php'); exit; -->
    <?php
    //   echo "data add";
    // } else {

    ?>
    <script>
      alert("Sorry! Data not Inserted..");
    </script>

<?php
  }
}

?>