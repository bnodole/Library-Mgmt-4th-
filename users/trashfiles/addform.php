<?php
    session_start();
    require ("../connection.php");
    $subjects = array(
                        101=>'Computer Fundamental', 102=>'Society and Technology', 103=>'English I', 104=>'Mathematics I', 105=>'Digital Logic',
                        151=>'C Programming', 152=>'Financial Accounting', 153=>'English II', 154=>'Mathematics II', 155=>'Microprocessor and Computer Architecture',
                        201=>'Data Structures and Algorithms', 202=>'Probability and Statistics', 203=>'System Analysis and Design', 204=>'OOP in Java', 205=>'Web Technology',
                        251=>'Operating System', 252=>'Numerical Methods', 253=>'Software Engineering', 254=>'Scripting Languages', 255=>'Database Management System',
                        301=>'MIS and E-Business', 302=>'DotNet Technology', 303=>'Computer Networking', 304=>'Introduction to Management', 305=>'Computer Graphics and Animation',
                        351=>'Mobile Programming', 352=>'Distributed System', 353=>'Applied Echonomics', 354=>'Advanced Java Programming', 355=>'Network Programming',
                        401=>'Cyber Law and Professional Ethics', 402=>'Cloud Computing', 404=>'Image Processing', 405=>'Database Administration', 406=> 'Network Administration', 408=> 'Advanced DotNet Technology', 409=> 'E-Governance', 410=> 'Artificial Intelligence',
                        451=> 'Operations Research', 453=> 'Database Programming', 454=> 'Geographical Information System', 455=> 'Data Analysis and Visualization', 456=> 'Machine Learning', 457=> 'Multimedia System', 458=> 'Knowledge Engineering', 459=> 'Information Security', 460=> 'Internet of Things'
                    );  

    $n = 1;$bookname="test";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['adbook'])){
            $semester = $_POST['sems'];
            $_SESSION['adbook']=$_POST['adbook'];
        }
    }
    // Check if the 'ter' session variable is set
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Books</title>
</head>
<body>
    <form method="post">
        <h1>Add Books</h1>
        <label for="semester">Semester:</label>
        <input type="text" id="semester" value="<?php echo $semester;?>" disabled>
        <label for="sub">Subject:</label>
        <input type="text" id="sub" value="<?php echo $sub;?>" disabled>
        <label for="bookname">Bookname:</label>
        <input type="text" name="bookname" id="bookname">
        <input type="submit" value="adb">
    </form>
</body>
</html>