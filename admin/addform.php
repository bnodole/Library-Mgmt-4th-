<?php
    session_start();
    $showad=$showdel=null;
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
    
        $_SESSION['sub']=$sub;
        $_SESSION['semester']=$semester;
    // if (isset($_SESSION['status'])){
    //     echo "<script>alert('Status');</script>";
    // }
    // unset($_SESSION["status"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Books</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php if($showad === 1){   ?>
    <form method="POST" action="addformprocess.php" id="addform">
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
    <?php if($showdel === 1){   ?>
    <form method="POST" action="addformprocess.php" id="delform">
        <h1>Remove Books</h1>   
        <label for="semester">Semester:</label>
        <input type="text" name="semester" id="semester" value="<?php echo $_SESSION['semester'];?>" readonly>
        <label for="sub">Subject:</label>
        <input type="text" name="subject" id="sub" value="<?php echo $_SESSION['sub'];?>" readonly>
        <label for="bookname">Bookname:</label>
        <input type="text" name="bookname" id="bookname" required>
        <button type="submit" name="dlb">Add Book</button>
    </form>
    <?php } ?>
</body>
</html>