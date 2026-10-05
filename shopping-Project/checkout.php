<?php require_once __DIR__ . '/helpers.php'; ?>
<?php

// session_start();
// if (isset($_SESSION['custom_id'])) {
//     $id = $_SESSION['custom_id'];

//     include "conn.php";
//     // 
//     $count = 0;
// } else {
//     header("location:login.php"); exit;
// }
session_start();
include "conn.php";
if (!isset($_SESSION['aid'])) {
    header('location:loginn.php'); exit;
} else {
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
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

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
                    <button class="btn btn-warning rounded-pill me-2">Welcome</button>
                    <i class="fa fa-cart-shopping fs-5"></i>
                    <!-- <i class="fa fa-cart-shopping fs-5"></i>(<?php echo $count; ?>) -->
                </form>
            </div>
        </div>
    </nav>

    <main class="bg-light pb-5">
        <section class="pt-5">
            <div class="container">
                <h3 class="ps-5">Order details</h3>
                <div class="card">
                    <form method="POST" enctype="multipart/form-data" id="signup-form">
                        <div class="row card-body p-5">
                            <div class="col-7">
                                <h1 class="fw-bold text-center mt-5">Complete Your Order Here</h1>
                                <hr>
                                <div class="border rounded p-4">
                                    <div class="form-group">
                                        <label><b>Name <span class="text-danger">*</span></b></label>
                                        <input type="text" name="name" id="customerName" class="form-control" placeholder="Input full name" title="Please enter your name" required>
                                        <span id="errorCustomerName" class="text-danger"></span>
                                    </div>
                                    <div class="form-group mt-3 cart-container">
                                        <label><b>Phone <span class="text-danger">*</span></b></label>
                                        <input type="number" pattern="[0-9]{4}-[0-9]{7}" name="phone" id="emailAddress" class="form-control" placeholder="Input mobile number" required>
                                        <span id="errorEmailAddress" class="text-danger"></span>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label><b>Address <span class="text-danger">*</span></b></label>
                                        <input type="text" name="address" id="customerAddress" class="form-control" placeholder="House no. / building / street / area" required>
                                        <span id="errorCustomerAddress" class="text-danger"></span>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label><b>City <span class="text-danger">*</span></b></label>
                                                <input type="text" name="city" id="customerCity" class="form-control" placeholder="Input your province" required>
                                                <span id="errorCustomerCity" class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label><b>Zip <span class="text-danger">*</span></b></label>
                                                <input type="text" name="zip" id="customerZipcode" class="form-control" placeholder="Input your zip code" required>
                                                <span id="errorCustomerZipcode" class="text-danger"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label><b>Province <span class="text-danger">*</span></b></label>
                                                <input type="text" name="province" id="customerState" class="form-control" placeholder="Input your province" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label><b>Country <span class="text-danger">*</span></b></label>
                                                <input type="text" name="country" id="customerCountry" class="form-control" placeholder="Input your country" required>
                                                <span id="errorCustomerCountry" class="text-danger"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-5">
                                <h4>Product details</h4>
                                <hr>
                                <div class="card">
                                    <table class="card-body table lms_table_active table-hover">
                                        <thead>
                                            <tr class="text-center">
                                                <th scope="col">Name</th>
                                                <th scope="col">Price (Rs)</th>
                                                <th scope="col">Quantity</th>
                                            </tr>
                                        </thead>

                                        <?php
                                        $totalprice = 0;
                                        $details = "";
                                        $select_query = "SELECT * FROM `cart` WHERE cid = $id";
                                        $run_query = mysqli_query($conn, $select_query);
                                        while ($result = mysqli_fetch_array($run_query)) {
                                        ?>
                                            <tbody>
                                                <tr class="text-center">
                                                    <td>
                                                        <?php echo e($result['name']); ?>
                                                    </td>
                                                    <td>
                                                        <?php echo e($result['price']); ?>
                                                    </td>
                                                    <td>
                                                        <?php echo e($result['quantity']); ?>
                                                    </td>
                                                </tr>
                                            <?php
                                            $totalprice += $result['price'] * $result['quantity'];
                                            $details .= $result['name'] . " x" . $result['quantity'] . "\n";
                                        }
                                            ?>

                                    </table>
                                    <div class="pb-3 ps-5 pe-5 d-flex">
                                        <h4>Total</h4>
                                        <h4 class="ms-auto">Rs
                                            <?= $totalprice ?>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-0 p-5">
                            <div class="col">
                                <button type="submit" name="order" class="btn btn-success w-100">Place an order</button>
                            </div>
                        </div>
                    </form>

                    <?php
                    if (isset($_POST['order'])) {
                        $name = esc($_POST['name'] ?? '');
                        $phone = esc($_POST['phone'] ?? '');
                        $address = esc($_POST['address'] ?? '');
                        $city = esc($_POST['city'] ?? '');
                        $zip = esc($_POST['zip'] ?? '');
                        $province = esc($_POST['province'] ?? '');
                        $country = esc($_POST['country'] ?? '');
                        $total = $totalprice;

                        $insert_query = "INSERT INTO `orders`(`cid`, `name`, `phone`, `address`, `city`, `zip`, `province`, `country`, `details`, `totalprice`)
                    VALUES ('$id','$name','$phone','$address','$city','$zip','$province','$country','" . esc($details) . "','$total')";
                        $result = mysqli_query($conn, $insert_query);

                        $delete_query = " DELETE FROM `cart` WHERE cid=$id";
                        $query = mysqli_query($conn, $delete_query);

                        if ($result) {
                    ?>
                            <script>
                                window.location.href = "orders.php";
                                alert("Your order is placed successfully.");
                            </script>
                        <?php
                        } else {
                        ?>
                            <script>
                                alert("Sorry, the order could not be placed.");
                            </script>

                    <?php
                        }
                    }
                    ?>

                </div>
            </div>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>