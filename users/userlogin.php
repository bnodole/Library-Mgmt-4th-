<?php
    require ('../connection.php');

    session_start();

    $error = "";
    if  ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (password_verify($_POST['password'], $_SESSION['Password']))
            header ('Location: homepage.php');
        else{
            global $error;
            $error = "Password doesn't match";
        }
    }    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <h2>Enter your password</h2>
        <h4>Currently signed in as:</h4>
        <h5><?php echo $_SESSION['Username']; ?></h5>
        <br>
        <label for="Password" class="pass">Password:</label>
        <input type="password" name="password" class="pass" id="Password"><br>
        <span style="color: red"><?php echo $error;?></span>
        <br><input type="submit" value="Login">
    </form>    
</body>
</html>