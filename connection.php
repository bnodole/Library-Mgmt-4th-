<?php
    $server = "localhost";
    $username = "root";
    $upassword = "";
    $dbname = "Library_Database";

    //Connect to database
    $conn = new mysqli($server, $username, $upassword, $dbname);

    //Check if connected to database
    if($conn->connect_error){
        die("Can't connect to database". $conn->connect_error);
    }