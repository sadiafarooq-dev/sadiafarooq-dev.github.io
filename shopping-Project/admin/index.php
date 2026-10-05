<?php

session_start();

include('../conn.php');

if (isset($_POST['submit'])) {
    // $vname = esc($_POST['name'] ?? '');
    $vemail = esc($_POST['email'] ?? '');
    $vpassword = $_POST['password'] ?? '';   // raw: only compared, never put into SQL

    $sql = "SELECT * FROM `admin_register` WHERE `email`='$vemail' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row1 = $result ? mysqli_fetch_assoc($result) : null;

    if ($row1 && check_password($vpassword, $row1['pswrd'], 'admin_register', 'pswrd', $row1['id'])) {

        session_regenerate_id(true);
        $_SESSION['vid'] = $row1['id'];
        // $_SESSION['email']=$row1['email'];
        // $_SESSION['password']=$row1['pswd'];
        $_SESSION['name'] = $row1['name'];
        header('location:dash.php'); exit;

?>

        <script>
            alert("account login Successfully");
        </script>

    <?php
    } else {
    ?>
        <script>
            alert("Name & Email not match");
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
    <link rel="stylesheet" href="/admin/style.css">
    <style>
        ul li a {
            text-decoration: none;
            color: black;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">

            </div>
            <div class="col-lg-6">
                <!-- Default form login -->
                <form class="text-center border border-light p-5"  method="Post" enctype="multipart/form-data">

                    <p class="h4 mb-4">Sign in</p>

                    <!-- Email -->
                    <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" name="email" placeholder="E-mail">

                    <!-- Password -->
                    <input type="password" id="defaultLoginFormPassword" name="password" class="form-control mb-4" placeholder="Password">

                    <div class="d-flex justify-content-around">
                        <div>
                            <!-- Remember me -->
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                                <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
                            </div>
                        </div>
                        <div>
                            <!-- Forgot password -->
                            <a href="">Forgot password?</a>
                        </div>
                    </div>

                    <!-- Sign in button -->
                    <button class="btn btn-info btn-block my-4" name="submit" type="submit">Sign in</button>

                    <!-- Register -->
                    <p>Not a member?
                        <a href="">Register</a>
                    </p>

                    <!-- Social login -->
                    <p>or sign in with:</p>

                    <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
                    <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
                    <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
                    <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>

                </form>
                <!-- Default form login -->
            </div>
            <div class="col-lg-3">

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>