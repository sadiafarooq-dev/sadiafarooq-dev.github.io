<?php require_once __DIR__ . '/helpers.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link rel="stylesheet" href="./bootstrap-5.0.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./bootstrap-5.2.3/dist/css/bootstrap.min.css">
  <script src="./bootstrap-5.0.2/dist/js/bootstrap.min.js"></script>
  <script src="./bootstrap-5.2.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- online links -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


  <link rel="stylesheet" href="./style.css">

  <style>
    form {
      border: 1px solid rgb(191, 205, 210);
      box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.3);
      width: 500px;
    }

    form a {
      text-decoration: none;
      list-style-type: none;
    }

    .form-group {
      position: relative;
      margin-bottom: 20px;
      font-family: 'Times New Roman', Times, serif;
    }

    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 0;
    }

    .form-group label {
      position: absolute;
      left: 10px;
      top: 10px;
      transition: transform 0.2s ease, font-size 0.2s ease, color 0.2s ease;
      pointer-events: none;
    }

    .form-group input:focus+label,
    .form-group input:not(:placeholder-shown)+label {
      transform: translateY(-20px);
      font-size: 12px;
      color: black;
    }
  </style>

</head>

<body>

  <!-- NAVBAR -->

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid fw-bold">
      <a class="navbar-brand ms-4 rounded-circle" href="#"> <img src="./shopping-cart.png" alt="" height="40px"
          width="55px"></a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
            <a class="navbar-brand" href="./categories.html">Categories</a>
          </li>

          <li class="nav-item">
            <a class="navbar-brand" href="./loginn.php"><button class="btn btn-warning">Login</button></a>
          </li>
          <li class="nav-item">
            <a class="navbar-brand" href="./sign up.php"><button class="btn btn-warning">Sign Up</button></a>
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

  <form class="position-absolute top-50 start-50 translate-middle p-5">
    <h2 class="mb-4 text-primary text-center fw-bold">Login Form</h2>
    <!-- Email input -->
    <div class="form-group">
      <input type="text" id="email" placeholder=" ">
      <label for="email">Email Address</label>
    </div>

    <!-- Password input -->
    <div class="form-group">
      <input type="password" id="password" placeholder=" ">
      <label for="password">Password</label>
    </div>

    <!-- 2 column grid layout for inline styling -->
    <div class="row mb-4">
      <div class="col d-flex justify-content-center">
        <!-- Checkbox -->
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="remember" checked />
          <label class="form-check-label" for="form2Example34"> Remember me </label>
        </div>
      </div>

      <div class="col">
        <!-- Simple link -->
        <a href="./sign-in.php">Forgot password?</a>
      </div>
    </div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">Login</button>

    <!-- Register buttons -->
    <div class="text-center">
      <p>Not a member? <a href="./sign-up.php">Register</a></p>
      <p>or sign up with:</p>
      <button type="button" class="btn btn-light btn-floating mx-1 rounded-circle" style="background-color:rgb(236, 242, 244) ; color: mediumblue;">
        <i class="fab fa-facebook-f"></i>
      </button>

      <button type="button" class="btn btn-light btn-floating mx-1 rounded-circle" style="background-color:rgb(236, 242, 244) ; color: mediumblue;">
        <i class="fab fa-google"></i>
      </button>

      <button type="button" class="btn btn-light btn-floating mx-1 rounded-circle" style="background-color:rgb(236, 242, 244) ; color: mediumblue;">
        <i class="fab fa-twitter"></i>
      </button>

      <button type="button" class="btn btn-light btn-floating mx-1 rounded-circle" style="background-color:rgb(236, 242, 244) ; color: mediumblue;">
        <i class="fab fa-github"></i>
      </button>
    </div>
  </form>





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





  <script>
    // Add/remove the 'filled' class when the input field has a value
    document.querySelectorAll('.form-group input').forEach(input => {
      input.addEventListener('input', () => {
        input.classList.toggle('filled', input.value.trim() !== '');
      });
    });
  </script>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>