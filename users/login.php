<?php
    require("../connection.php");

    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];

        $_SESSION['email'] = $email;

        // Use prepared statement to prevent SQL injection
        $sql = "SELECT * FROM users WHERE Email = ?";

        // Create a prepared statement
        $stmt = $conn->prepare($sql);
        
        // Bind parameters
        $stmt->bind_param("s", $email);
        
        // Execute the statement
        $stmt->execute();
        
        // Get the result
        $result = $stmt->get_result();

        $row = $result->fetch_assoc();

        $_SESSION['Username'] = $row['Username'];
        $_SESSION['Password'] = $row['Password'];
        if ($row > 0) {
            header ('Location: userlogin.php');
        }else {
            echo "<script>
                if(confirm('Email not registered! Wanna Register?')==true){
                    window.location.replace('userregister.php');
                };</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="css/loginform.css">
</head>
<body>
    <form action="" method="post" id="loginform">
        <h1>Login to your Account</h1>

        <label for="Email">Email:</label>
        <input type="email" name="email" id="Email" value = "<?php echo @$_SESSION['User'];?>"><br><br>
       
        <input type="submit" value="Login">
    </form>
</body>
</html>