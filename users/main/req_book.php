<?php
    session_start();
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(isset($_POST['req_sem'])){
            $req_sem=$_POST['req_sem'];
        }
        if (isset($_POST['req_subject'])){
            $req_sub=$_POST['req_subject'];
        }
        $_SESSION['req_sem']=$req_sem;
        $_SESSION['req_sub']=$req_sub;
        // if (isset($_SESSION['req_sub']) && isset($_SESSION['req_sem'])){
        //     list_books($conn, $_SESSION['req_sem'],$_SESSION['req_sub']
        // }
    }