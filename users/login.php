<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="login.css">
    <!-- <style>
        .pass{
            display: none;
        }

        #loginform{
            display: visible;
        }

        #registerform{
            display: hidden;
        }
    </style> -->
</head>
<body>
    <form action="validate.php" method="post" id="loginform">
        <h1>Login to your Account</h1>

        <label for="Email">Email:</label>
        <input type="email" name="email"><br><br>

        <label for="Password" class="pass">Password:<br></label>
        <input type="password" name="password" class="pass"><br>

        <input type="submit" value="Login" name="subform">
    </form>

    <form action="validate.php" method="post" id="registerform">
        <h1>Register Account</h1>

        <label for="Email">Email:</label>
        <input type="email" name="email"><br><br>

        <label for="Password">Password:</label>
        <input type="password" name="password"><br><br>

        <input type="submit" value="Register" name="subform">
    </form>
</body>
</html>