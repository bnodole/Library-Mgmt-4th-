<?php
    require ("../../connection.php");
    require ("../../functions.php");
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Books</title>
</head>
<body>
    <form method="POST" id="delform" action="addformprocess.php">
        <h1>Remove Books</h1>   
        <label for="semester">Semester:</label> <?php echo $_SESSION['semester'];?> <br>
        <label for="sub">Subject:</label> <?php echo $_SESSION['sub'];?>
        <br>
        <label for="bookname">Books Available:</label> <br>
        <?php 
            list_books($conn,$_SESSION['semester'],$_SESSION['sub']);          
        ?>
        <button type="submit" name="dlb" id="remove_books">Remove Book</button>
    </form>
</body>
</html>