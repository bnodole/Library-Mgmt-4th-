<?php
    //connection to db
    require("../connection.php");

    //check the submitted form name from button
    if(isset ($_POST['subform'])){
        //check if it is login or register form
        switch ($_POST['subform']){
            //incase of login form
            case "Login":
                $email = $_POST["email"];

                $sql = "SELECT * FROM users WHERE Email = '$email'";

                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) == 1){
                    echo "<script>document.getElementById('registerform').style.display='visible';</script>";
                    echo "<script>document.getElementById('loginform').style.display='hidden';</script>";
                }else{
                    echo "<script>alert('Invalid email');</script>";
                }
                break;
            //incase of register form
            case "Register":
                $email = $_POST['email'];
                $uname = $_POST['username'];
                $password = $_POST['password'];

                $sql = "INSERT INTO users VALUES ('$email','$uname','$password')";

                $res = mysqli_query($conn, $sql);
                break;
            default:
                break;
        }
    }