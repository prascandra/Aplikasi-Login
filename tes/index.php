<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css" media="screen" title="no title">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <div class="login">
        <form action="controller/login.php" method="POST" class="login-username">
            <div class="avatar">
                <i class="fa fa-user"></i>
            </div>
            <h2>Login Form</h2>
            <div class="box-login">
                <i class="fas fa-envelope-open-text"></i>
                <input type="text" placeholder="username" name="username" required>
            </div>
            <div class="box-login">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="password" name="password" required>
            </div>
            <button type="submit" class="btn-login" name="submit">Login</button>
            <div class="bottom">
                <a href="register.php">Register</a>
                <a href="#">Forgot Password</a>
            </div>
        </form>
    </div>
</body>

</html>