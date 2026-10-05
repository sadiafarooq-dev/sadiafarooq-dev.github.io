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
    .d-block {
      height: 500px;
    }
  </style>

  <style>
      @media screen and (max-width:450px) {
      .vidd {
        margin-left:20px;
        margin-top: -50px;
      }
    }
    @media screen and (max-width:768px) {
      .vidd {
        margin-top:50px;
      }
    }
    @media screen and (max-width:820px) {
      .vidd {
        margin-top:50px;
      }
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
  <!-- ----online service--- -->
  <div class="container col-lg-12 col-md-12 ">
    <p class="health-heading h1 text-center mt-5 display-1 fw-bold">Online services</p>
  </div>
  <div class="portion container mt-5">
    <div class="row">
      <div class="col-lg-6 col-md-7 col-sm-12">
        <p class="health-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate cumque sit vel sunt
          voluptatem
          reprehenderit consequatur dignissimos amet laboriosam velit quas ex aperiam id asperiores, nesciunt soluta
          aliquam sed dolorem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi ipsam quam repellat
          explicabo unde nesciunt architecto culpa, impedit necessitatibus rerum voluptatem consequatur cumque placeat
          officia aut provident quos accusamus eaque.
          <br> <br>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor magnam, hic eos nostrum iusto in? Est corrupti
          modi blanditiis numquam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime explicabo
          perspiciatis possimus expedita eaque nulla mollitia impedit perferendis distinctio facilis ab voluptate
          maiores quas necessitatibus, corrupti itaque unde ipsam soluta!
        </p>
      </div>

      <div class="vidd col-lg-6 col-md-5 col-sm-12">
        <iframe width="" height="355" src="https://www.youtube.com/embed/2mCL4-T3X04?si=11ibTGMeiwJH2LlU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" width=""></iframe>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="text-center text-lg-start bg-light text-dark mb-3">
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