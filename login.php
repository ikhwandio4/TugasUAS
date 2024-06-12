<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Nomina - Login</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <link href="quixlab-master/css/style.css" rel="stylesheet">
</head>

<body class="h-100">
    <!-- Preloader start -->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!-- Preloader end -->

    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <!-- Tampilkan pesan error jika ada -->
                                <?php if (isset($_GET["error"])) : ?>
                                    <p style="color: red;">Email atau password salah. Silakan coba lagi.</p>
                                <?php endif; ?>
                                <a class="text-center" href="index.php"> <h4>Login To Nomina</h4></a>
        
                                <form class="mt-5 mb-5 login-input" method="POST" action="proses_login.php">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                                    </div>
                                    <button type="submit" class="btn login-form__btn submit w-100">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="quixlab-master/plugins/common/common.min.js"></script>
    <script src="quixlab-master/js/custom.min.js"></script>
    <script src="quixlab-master/js/settings.js"></script>
    <script src="quixlab-master/js/gleek.js"></script>
    <script src="quixlab-master/js/styleSwitcher.js"></script>
</body>
</html>