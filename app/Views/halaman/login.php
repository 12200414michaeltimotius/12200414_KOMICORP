<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login | KomiCorp</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/vendorlogin/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="csslogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="csslogin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/vendorlogin/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/vendorlogin/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/vendorlogin/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="csslogin/css/util.css">
    <link rel="stylesheet" type="text/css" href="csslogin/css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('csslogin/images/bg-03.jpg');">
            <div class="wrap-login100 p-t-190 p-b-30">
                <form class="login100-form validate-form" method="POST" action="<?= base_url('/login') ?>">
                    <div class="login100-form-avatar">
                        <img src="komik/gojo.jpg" alt="AVATAR">
                    </div>

                    <span class="login100-form-title p-t-20 p-b-45">
                        Selamat datang di KomiCorp <br> Website untuk membaca Komik Terbaik

                    </span>

                    <div class="wrap-input100 validate-input m-b-10" data-validate="Username is required">
                        <input class="input100" type="text" name="nama" placeholder="Masukkan Username">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-10" data-validate="Password is required">
                        <input class="input100" type="password" name="password" placeholder="Masukkan Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn ">
                        <h1>
                            <a class="btn btn-warning" style="font-size:xx-large;" href="sidebar">LOGIN</a>
                        </h1>
                    </div>




                </form>
            </div>
        </div>
    </div>




    <!--===============================================================================================-->
    <script src="vendor/vendorlogin/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/vendorlogin/bootstrap/js/popper.js"></script>
    <script src="vendor/vendorlogin/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/vendorlogin/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="csslogin/js/main.js"></script>

</body>

</html>