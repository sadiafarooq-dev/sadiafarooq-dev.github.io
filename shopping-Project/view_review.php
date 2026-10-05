<?php require_once __DIR__ . '/helpers.php'; ?>
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
    <!-- ----table--- -->
    <div class="container">
        <table class="table caption-top" style="margin-top: 10px;">
            <caption>Previous Reviews</caption>
            <thead>
                <tr>
                    <th scope="col">Sr No.</th>
                    <th scope="col">Review</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>

            <tbody>
                <?php
                include('./conn.php');


                $display = "SELECT * FROM `prod_reviews`";

                $query = mysqli_query($conn, $display);

                while ($result = mysqli_fetch_array($query)) {

                ?>
                    <tr>
                        <th scope="row"><?php echo e($result['id'])?> </th>
                        <td><?php echo e($result['review'])?> </td>
                        <td>
                            <a href="./del_men.php?id=<?php echo e($result['id']); ?>"><i class="fa-solid fa-trash text-danger fs-4"></i></a>
                    </tr>

                <?php
                }
                ?>
            </tbody>
        </table>

    </div>

</body>

</html>