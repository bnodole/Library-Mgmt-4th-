<?php
    require ("../../connection.php");
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMC-BCA Library</title>
</head>
<body>
    <nav>
        <a href="homepage.php">Dashboard</a>
        <a href="booklist.php">Books/Syllabus</a>
        <a href="#">Your Books</a>
        <a href="request_book.php">Request!</a>
        <?php
            if (isset($_SESSION['Username'])){
                echo '<a>' . $_SESSION['Username'] .'</a>';
                //echo '<a href="../logout.php">' .'Delete Account'.'</a>';
                echo '<a href="../logout.php">' .'Logout'.'</a>';
            }else
                echo '<a href="../login.php">'. 'Login|Register'.'</a>';
        ?>
    </nav>
</body>
</html>