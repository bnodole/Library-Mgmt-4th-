<!DOCTYPE html>
<html lang="en">
<body>
    <nav>
        <a href="homepage.php">Dashboard</a>
        <a href="#">Books</a>
        <a href="#">Request!</a>
        <?php
            session_start();
            if (isset($_SESSION['Username'])){
                echo '<a>' . $_SESSION['Username'] .'</a>';
                echo '<a href="logout.php">' .'Logout'.'</a>';
            }else
                echo '<a href="login.php">'. 'Login|Register'.'</a>';
        ?>
    </nav> 
</body>
</html>