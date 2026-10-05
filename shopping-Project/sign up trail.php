<?php require_once __DIR__ . '/helpers.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-in Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="./bootstrap-5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap-5.2.3/dist/css/bootstrap.min.css">
    <script src="./bootstrap-5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="./bootstrap-5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- online links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>


    <link rel="stylesheet" href="./style.css">

    <style>
        form {
            border: 1px solid rgb(191, 205, 210);
            box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.3);
            width: 500px;
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

    <form class="position-absolute top-50 start-50 translate-middle p-5">
        <h2 class="mb-4 text-primary text-center fw-bold">Sign-In Form</h2>
        <!-- Name input -->
        <div class="row mb-4 ms-2">
            <div class="col-6">
                <div class="form-group">
                    <input type="text" id="name" placeholder="">
                    <label class="name">First name</label>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <input type="text" id="name" placeholder="">
                    <label class="name">Last name</label>
                </div>
            </div>
            <!-- Email input -->
            <div class="col-12">
                <div class="form-group">
                    <input type="text" id="email" placeholder=" ">
                    <label for="email">Email Address</label>
                </div>
            </div>
            <!-- Password input -->
            <div class="col-12">
                <div class="form-group">
                    <input type="password" id="password" placeholder=" ">
                    <label for="password">Password</label>
                </div>
            </div>
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
                <!-- <a href="#">Forgot password?</a> -->
            </div>
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

        <!-- Register buttons -->
        <div class="text-center">
            <button type="button" class="btn btn-light btn-floating mx-1 rounded-circle"
                style="background-color:rgb(236, 242, 244) ; color: mediumblue;">
                <i class="fab fa-facebook-f"></i>
            </button>

            <button type="button" class="btn btn-light btn-floating mx-1 rounded-circle"
                style="background-color:rgb(236, 242, 244) ; color: mediumblue;">
                <i class="fab fa-google"></i>
            </button>

            <button type="button" class="btn btn-light btn-floating mx-1 rounded-circle"
                style="background-color:rgb(236, 242, 244) ; color: mediumblue;">
                <i class="fab fa-twitter"></i>
            </button>

            <button type="button" class="btn btn-light btn-floating mx-1 rounded-circle"
                style="background-color:rgb(236, 242, 244) ; color: mediumblue;">
                <i class="fab fa-github"></i>
            </button>
        </div>
    </form>






    <script>
        // Add/remove the 'filled' class when the input field has a value
        document.querySelectorAll('.form-group input').forEach(input => {
            input.addEventListener('input', () => {
                input.classList.toggle('filled', input.value.trim() !== '');
            });
        });
    </script>

</body>

</html>