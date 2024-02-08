<?php
    session_start();
    require ("../connection.php");
    require ("../functions.php");
    $showad=$showdel=$sub=$semester=null;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Check if 'semester' and 'Add Book' are set
        if (isset($_POST['sems']) && isset($_POST['adbook'])) {
            $sub = $_POST['adbook'];    // Get the book name 
            $semester = $_POST['sems']; // Get semester from dropdown
            $showad=1;
        }
        // Check if 'semester' and 'Delete Book' are set
        else if (isset($_POST['sems']) && isset($_POST['delbook'])) {
            $sub = $_POST['delbook'];    // Get the book name 
            $semester = $_POST['sems']; // Get semester from dropdown
            $showdel = 1;
        }
    }
    
    $_SESSION['sub']=$sub;  //set subject name to session variable
    $_SESSION['semester']=$semester;    //set semester name to session variable
    $_SESSION['showad']=$showad; //set showad to session variable
    $_SESSION['showdel']=$showdel; //set showdel to session variable

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Books</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <?php if($_SESSION['showad'] === 1){   ?>
    <form method="POST" action="addformprocess.php" id="addform" onsubmit="return addbook();">
        <h1>Add Books</h1>
        <label for="semester">Semester:</label>
        <input type="text" name="semester" id="semester" value="<?php echo $_SESSION['semester'];?>" readonly>
        <label for="sub">Subject:</label>
        <input type="text" name="subject" id="sub" value="<?php echo $_SESSION['sub'];?>" readonly>
        <label for="bookname">Bookname:</label>
        <input type="text" name="bookname" id="bookname" required>
        <button type="submit" name="adb">Add Book</button>
    </form>
    <?php } ?>



    <?php if($_SESSION['showdel'] === 1){   ?>
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
    <?php } ?>
</body>
<script>
    $(document).ready(function(){
        $('#remove_books').click(function(){
            if($('.boooks:checked').length > 0){ // Check if any checkboxes are checked
                return true; // Allow form submission
            } else {
                alert('No books selected');
                return false; // Prevent form submission
            }
        });
    });
</script>
</html>