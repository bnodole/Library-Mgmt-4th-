<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Library_Database";

    //Connect to database
    $conn = mysqli_connect($server, $username, $password, $dbname);

    //Check if connected to database
    if(!$conn){
        die("Can't connect to database". mysqli_connect_error());
    }