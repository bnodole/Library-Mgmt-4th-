<?php
    //coneect to db
    require ("../connection.php");

    $passdisp = false;
    $formdisp = false;

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //check the submitted form name from button
        if(isset ($_POST['subform'])){
            //check if it is login or register form
            switch ($_POST['subform']){
                //incase of login form
                case "Login":
                    $email = $_POST["email"];

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
    
                    $row = $result->fetch_array();

                    if(!isset($row)){
                        $passdisp = true;
                        break;
                    }else{
                        $formdisp = true;
                        break;
                    }
                    //$stmt->close();
                    //break;
                case "Register":
                    $email = $_POST["email"];
                    $uname = $_POST['username'];
                    $password = $_POST['password'];

                    // Use prepared statement to prevent SQL injection
                    $sql = "INSERT INTO users VALUES (?, ?, ?)";

                    // Create a prepared statement
                    $stmt = $conn->prepare($sql);
                    
                    // Bind parameters
                    $stmt->bind_param("sss", $email,$uname,$password);
                    
                    // Execute the statement
                    $stmt->execute();
                    break;
                default:
                    break;
            }
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
    <?php
        if($formdisp == false){
            echo '<form action="" method="post" id="loginform">
                <h1>Login to your Account</h1>

                <label for="Email">Email:</label>
                <input type="email" name="email" id="Email"><br><br>';
        }
    ?>

        <?php
            if($passdisp == true){
                echo '<label for="Password" class="pass">Password:<br></label>
                <input type="password" name="password" class="pass" id="Password"><br>';
            }
        ?>
    <?php
        if($formdisp == false){
            echo '<input type="submit" value="Login" name="subform">
            </form>';
        }
    ?>
    <?php 
        if($formdisp == true){
        echo '<form action="" method="post" id="registerform">
            <h1>Register Account</h1>

            <label for="Username">Username:</label>
            <input type="text" name="username" id="Username"><br><br>

            <label for="Emailreg">Email:</label>
            <input type="email" name="email" id="Emailreg"><br><br>

            <label for="Passwordreg">Password:</label>
            <input type="password" name="password" id="Passwordreg"><br><br>

            <input type="submit" value="Register" name="subform">
        </form>';
        }
    ?>
</body>
</html>