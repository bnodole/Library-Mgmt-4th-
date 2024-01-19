<?php
    require ("../connection.php");
    echo "Register Here";
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = $_POST["email"];
        $uname = $_POST['username'];
        $password = $_POST['password'];

        // Use prepared statement to prevent SQL injection
        $sql = "INSERT INTO users VALUES (?, ?, ?)";

        // Create a prepared statement
        $stmt = $conn->prepare($sql);
                    
       // Bind parameters
        $stmt->bind_param("sss", $uname,$password,$email); 

        // Execute the statement
        $stmt->execute();

        $stmt->close();
        header ('Location: test.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register </title>
</head>
<body>
    <form action="" method="post" id="registerform">
        <h1>Register Account</h1>

        <label for="Username">Username:</label>
        <input type="text" name="username" id="Username"><br><br>

        <label for="Emailreg">Email:</label>
        <input type="email" name="email" id="Emailreg"><br><br>

        <label for="Passwordreg">Password:</label>
        <input type="password" name="password" id="Passwordreg"><br><br>

        <input type="submit" value="Register" name="subform">
    </form>
</body>
</html>