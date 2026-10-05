<?php require_once __DIR__ . "/auth.php"; // admins only ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="./style.css">
    <style>
        * {
            font-family: 'Times New Roman', Times, serif;
        }
    </style>
</head>

<body>

    <div class="appl text-center">
        <h1 class="fw-bold p-4 text-success">Admin Signup</h1>
    </div>

    <div class="container d-flex justify-content-center mt-5">

        <form class="row g-3 ms-5" method="Post" enctype="multipart/form-data" style="border: 2px solid gainsboro;">

            <div class="nam-email d-flex justify-content-center">
                <div class="col-lg-4 ms-5">
                    <h3>Name</h3>
                    <input type="text" class="form-control" name="name" placeholder="Enter Name">
                </div>
                <div class="col-lg-4 ms-5">
                    <h3>Email</h3>
                    <input type="email" class="form-control" name="email" placeholder="admin@gmail.com">
                </div>
            </div>

            <div class="pswrd d-flex justify-content-center">
                <div class="col-lg-4 ms-5">
                    <h3>Password</h3>
                    <input type="password" class="form-control" name="password" placeholder="*****">
                </div>
                <div class="col-lg-4 ms-5">
                    <div class="form-group">
                        <h3>Profile Pic</h3>
                        <input type="file" class="form-control" name="profile">
                    </div>
                </div>
            </div>


            <div class="col-lg-10 mb-2">
                <div class="but ms-5 mt-3 text-center">
                    <button type="submit" class="fs-5 btn btn-success" name="submit">Submit</button>
                </div>
            </div>


            <!-- Register buttons -->
            <div class="text-center">
                <p>Not a member? <a href="./sign up.php">Register</a></p>
            </div>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


</body>