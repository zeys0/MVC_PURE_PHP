<?php
require '../app/models/LoginModel.php';


if (isset($_POST['login'])) {
    $loginModel = new LoginModel();
    $loginModel->login($_POST);
}

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="<?php echo BASEURL; ?>/sweet/package/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>/css/login.css">


</head>

<body class="sd">


    <div class="form-wrapper" id="loginPage">
        <h2>Sign In</h2>
        <form action="" method="post">
            <div class="form-control">
                <input type="text" placeholder="Username" name="username" required>
                <label>Username</label>
            </div>
            <div class="form-control">
                <input type="password" placeholder="Password" name="password" required>
                <label>Password</label>
            </div>
            <button name="login" class="btn" type="submit">Sign in</button>
            <div class="form-help">
                <div class="remember-me">
                    <input type="checkbox" id="remember-me">
                    <label for="remember-me">Remember me</label>
                </div>
                <a href="#">Need help?</a>
            </div>
        </form>
        <p>Baru? <a href="<?php echo BASEURL; ?>/Login/registrasi">Daftar duls ngab</a></p>
        <small>
            This page is protected by Google reCAPTCHA to ensure you're not a bot.
            <a href="#">Learn more.</a>
        </small>
    </div>
    <div id="loadingPage" class="hidden">
        <div class="loading-container">
            <div class="loading-circle"></div>
        </div>
    </div>


    <script src="<?php echo BASEURL; ?>/sweet/package/dist/sweetalert2.all.min.js"></script>
</body>

</html>