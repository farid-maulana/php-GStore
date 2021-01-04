<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <div id="card-login">
            <div id="card-content">
                <div id="card-title">
                    <h2>LOGIN</h2>
                <div class="underline-title-login"></div>
            </div>
            <form action="login-process.php" method="post" class="form">
                <label for="username" style="padding-top:13px">&nbsp;Username</label>
                <input id="username" class="form-content" type="text" name="username" autocomplete="on" required />
                <div class="form-border"></div>

                <label for="user-password" style="padding-top:22px">&nbsp;Password</label>
                <input id="user-password" class="form-content" type="password" name="password" required />
                <div class="form-border"></div>

                <input id="submit-btn" type="submit" name="submit" value="LOGIN" />
                <a href="register.php" id="ask">Don't have account yet?</a>
                <a href="index.php" id="ask">Back to catalog product.</a>
            </form>
        </div>
    </div>
</body>
</html>