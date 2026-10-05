<?php require_once __DIR__ . '/helpers.php'; ?>
<?php
session_start();
if (isset($_SESSION['custom_id'])) {
   $id = $_SESSION['custom_id'];

   include "conn.php";
   //    $cart_query = "SELECT COUNT(*) As count FROM `mycart` WHERE cid = $id";
   //    $run_cart_query = mysqli_query($connection, $cart_query);
   //    while($output=mysqli_fetch_assoc($run_cart_query)){
   //    $count = $output['count'];}
   $count = 0;
} else {
   header("location:loginn.php"); exit;
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
        * {
            font-family: 'Times New Roman', Times, serif;
        }

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
   <?php

   $pid = (int) ($_GET["id"] ?? 0);
   $select_query = "SELECT * FROM `details` WHERE id =$pid";
   $run_query = mysqli_query($conn, $select_query);
   $data = mysqli_fetch_assoc($run_query);
   ?>
   <main class="bg-light pb-5">
      <section>
         <div class="container">
            <div class="row">
               <div class="offset-1 col-10 details-card mt-3">
                  <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo e($data["name"]); ?></li>
                     </ol>
                  </nav>
                  <div class="row bg-white rounded">
                     <div class="col-5 p-3">
                        <img class="rounded img-fluid" src="../upload/<?php echo e($data['image']); ?>">
                     </div>

                     <div class="col">
                        <div class="card-body">
                           <h4 class="card-title mb-3">
                              <?php echo e($data['name'])?>
                           </h4>
                           <p class="mb-3">
                              <?php echo e($data['description'])?>
                           </p>
                           <hr>
                           <h3 class="pb-2 text-orange">Rs.
                              <?php echo e($data['price'])?>
                           </h3>
                           <hr>
                           <form method="POST" enctype="multipart/form-data">
                              <?php
                              if (isset($_POST['add'])) {
                                 $quantity = esc($_POST["quantity"] ?? '');
                                 $name = esc($data['name']);
                                 $description = esc($data['description']);
                                 $price = esc($data['price']);
                                 $filename = esc($data['image']);

                                 $check_query = "SELECT * FROM `cart` WHERE `name`='$name' AND `cid`='$id'";
                                 $check_query_result = mysqli_query($connection, $check_query);

                                 if (mysqli_num_rows($check_query_result) > 0) {
                              ?>
                                    <script>
                                       alert("Item already exists in cart.");
                                    </script>
                                    <?php
                                 } else {
                                    $insert_query = "INSERT INTO `cart`(`pid`,`cid`, `name`, `description`, 
                                            `price`, `image`, `quantity`) VALUES ('$pid','$id','$name',
                                            '$description','$price','$filename','$quantity')";

                                    $result = mysqli_query($connection, $insert_query);

                                    if ($result) {
                                    ?>
                                       <script>
                                          window.location.href = "cart.php";
                                          alert("Added to the cart successfully.");
                                       </script>
                                    <?php
                                    } else {
                                    ?>
                                       <script>
                                          alert("Sorry, item was not added to the cart.");
                                       </script>
                              <?php
                                    }
                                 }
                              }
                              ?>
                              <div class="input-group mb-3 cartcontainer" style="width: 130px;">
                                 <input type="number" id="input" min="1" max="10" class="form-control bg-light text-center" name="quantity" value="1">
                              </div>
                              <button class="btn btn-success ps-4 pe-4" name="add" type="submit">Add to cart</button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </main>

</body>

</html>