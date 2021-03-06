<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>game</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="login-dark">
        <form action="login_action.php" method="post">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="form-group">
                    <div class="error">
<?php
    if (isset($errors) && !empty($errors)) {
        echo '<p id="err_msg"></p>';
        foreach ($errors as $msg) {
            echo " - $msg<br>";
        }
        echo 'Please try again';
    }
?>

    </div>
                <input class="form-control" type="text" name="email" placeholder="Email" style="color: black;">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="pass" placeholder="Password">
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Login</button>
                <button class="btn btn-primary btn-block" type="submit" formaction="register.php">Register </button>
            <a href="#" class="forgot">Forgot your email or password?</a></form>
            </div>
            <img class="img-responsive" src="assets/img/background1.jpg">
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>