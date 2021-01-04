<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <div id="card-register">
            <div id="card-content">
                <div id="card-title">
                    <h2>Register</h2>
                <div class="underline-title-signup"></div>
            </div>
            <form action="register-process.php" method="post" class="form">
                <label for="user-full-name" style="padding-top:13px">&nbsp;Full Name</label>
                <input id="user-full-name" class="form-content" type="text" name="full_name" autocomplete="on" required />
                <div class="form-border"></div>

                <label for="username" style="padding-top:13px">&nbsp;Username</label>
                <input id="username" class="form-content" type="text" name="username" autocomplete="on" required />
                <div class="form-border"></div>

                <label for="user-password" style="padding-top:22px">&nbsp;Password</label>
                <input id="user-password" class="form-content" type="password" name="password" required />
                <div class="form-border"></div>

                <input id="submit-btn" type="submit" name="submit" value="SIGN UP" />
                <a href="login.php" id="ask">Already have account?</a>
            </form>
        </div>
    </div>
</body>
</html>