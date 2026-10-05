<?php require_once __DIR__ . "/auth.php"; // admins only ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
</head>
<body>

    <main class="bg-light pt-5 pb-5">
        <section>
            <div class="container">
                <div class="row mt-5 mb-5 bg-light">
                    <div class="col mt-5 mb-5">
                        <table class="table lms_table_active table-hover bg-white rounded" id="myTable">
                            <tr class="text-center">
                                <th>Id</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Details</th>
                                <th>Total Price</th>
                                <th>Status</th>
                            </tr>
                            <?php
                                    include "../conn.php";
                                    $id = (int) ($_GET['id'] ?? 0);
                                    $select_query = "SELECT * FROM `orders` WHERE id=$id";
                                    $run_select_query = mysqli_query($conn, $select_query);
                                    $data = mysqli_fetch_array($run_select_query);
                            ?>
                            
                            <tr class="text-center">
                                <td><?php echo e($data['id']); ?></td>
                                <td><?php echo e($data['name']); ?></td>
                                <td><?php echo e($data['phone']); ?></td>
                                <td><?php echo e($data['details']); ?></td>
                                <td><?php echo e($data['totalprice']); ?></td>
                                <td>
                                    <form enctype="multipart/form-data" method="POST">
                                        <input type="submit" class="btn btn-outline-primary" name="shipping" value="shipping">
                                        <input type="submit" class="btn btn-outline-success" name="completed" value="completed">
                                    </form>
                                </td>
                            </tr>
                        </table>    
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php
        if(isset($_POST['shipping'])){
            $update_ship = "UPDATE `orders` SET status = 'shipping' WHERE id=$id";
            $result_ship = mysqli_query($conn, $update_ship);
            ?>
            <script>
                alert("The Order is now in Shipping phase");
                window.location.href = "dsplyorders.php"
            </script>
            <?php
        }

        if(isset($_POST['completed'])){
            $update_com = "UPDATE `orders` SET status = 'completed' WHERE id=$id";
            $result_com = mysqli_query($conn, $update_com);
            ?>
            <script>
                alert("The Order is paid.");
                window.location.href = "dsplyorders.php"
            </script>
            <?php
        }?>
</body>
</html>