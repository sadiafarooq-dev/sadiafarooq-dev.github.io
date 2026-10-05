<?php require_once __DIR__ . "/auth.php"; // admins only ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <title>Data Display</title>
</head>

<body>

    <main class="bg-light pt-5 pb-5">
        <section>
            <div class="container">
                <?php
                include('../conn.php');
                $check_query = "SELECT * FROM `orders`";
                $check_result = mysqli_query($connection, $check_query);

                if (mysqli_num_rows($check_result) > 0) {
                ?>
                    <div class="row p-3 bg-white rounded">
                        <div class="col mt-3 mb-3">
                            <table class="table lms_table_active table-hover" id="myTable">
                                <h4 class="mb-3 text-center">All Products</h4>
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">City</th>
                                        <th scope="col">Zip</th>
                                        <th scope="col">Province</th>
                                        <th scope="col">Country</th>
                                        <th scope="col">Details</th>
                                        <th scope="col">Total Price</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Change Status</th>
                                    </tr>
                                </thead>

                                <?php
                                $select_query = "SELECT * FROM `orders`";
                                $run_query = mysqli_query($connection, $select_query);
                                while ($result = mysqli_fetch_array($run_query)) {
                                ?>
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                <?php echo e($result['name']); ?>
                                            </th>
                                            <td>
                                                <?php echo e($result['phone']); ?>
                                            </td>
                                            <td>
                                                <?php echo e($result['address']); ?>
                                            </td>
                                            <td>
                                                <?php echo e($result['city']); ?>
                                            </td>
                                            <td>
                                                <?php echo e($result['zip']); ?>
                                            </td>
                                            <td>
                                                <?php echo e($result['province']); ?>
                                            </td>
                                            <td>
                                                <?php echo e($result['country']); ?>
                                            </td>
                                            <td>
                                                <?php echo e($result['details']); ?>
                                            </td>
                                            <td>
                                                <?php echo e($result['totalprice']); ?>
                                            </td>
                                            <td>
                                                <?php echo e($result['status']); ?>
                                            </td>
                                            <td>
                                                <a href="status_change.php?id=<?php echo e($result['id']); ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Update Product">
                                                    <i class="far fa-edit ms-3"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php
                                }
                                    ?>
                                    </tbody>
                            </table>
                        </div>
                    </div>
                <?php } else {
                ?>
                    <div class="container">
                        <div class="row card card-body pt-5 pb-5 text-center">
                            <div class="col">
                                <h4>No Products added yet</h4>
                                <a class="btn btn-outline-success mt-5 ps-5 pe-5" href="addproduct.php">Start adding your products</a>
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