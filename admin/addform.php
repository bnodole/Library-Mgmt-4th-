<?php
    session_start();
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        //check if 'semester' and 'Add Book' are set
        if (isset($_POST['sems']) && isset($_POST['adbook'])){
            $sub = $_POST['adbook'];    //get the book name 
            $semester = $_POST['sems']; //get semester from dropdown
        }
        $_SESSION['sub']=$sub;
        $_SESSION['semester']=$semester;
    }
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
</head>
<body>
    <form method="POST" action="addformprocess.php">
        <h1>Add Books</h1>
        <label for="semester">Semester:</label>
        <input type="text" name="semester" id="semester" value="<?php echo $_SESSION['semester'];?>" readonly>
        <label for="sub">Subject:</label>
        <input type="text" name="subject" id="sub" value="<?php echo $_SESSION['sub'];?>" readonly>
        <label for="bookname">Bookname:</label>
        <input type="text" name="bookname" id="bookname">
        <button type="submit" name="adb">Add Book</button>
    </form>
</body>
</html>