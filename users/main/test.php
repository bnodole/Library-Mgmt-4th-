<?php
    require ("../../connection.php");
    include ('../../functions.php');
    if (isset($_POST['sub']) && isset($_POST['sem'])) {
        $req_sub=$_POST['sub'];
        $req_sem=$_POST['sem'];
        list_books($conn,$req_sem,$req_sub);
        // var_dump($req_sem);
        // var_dump($req_sub); 
    }else{
        echo "error";
    }
