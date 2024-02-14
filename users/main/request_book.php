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
    <script src="../assets/js/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <form method="post" action="req_book.php">
        <label for="semester">Semester:</label>
        <select name="semester" id="semester" onchange="select_subjects();">
            <option selected disabled hidden>Select Semester:</option>
            <option value="First">I</option>
            <option value="Second">II</option>
            <option value="Third">III</option>
            <option value="Fourth">IV</option>
            <option value="Fifth">V</option>
            <option value="Sixth">VI</option>
            <option value="Seventh">VII</option>
            <option value="Eigth">VIII</option>
        </select><br>
        <label for="subject">Subjects:</label>
        <select type="submit" name='subject' id='subject'>
            <option selected disabled hidden>Select subject</option>
        </select> <br>
        <label for="bookname">Books Available:</label>
        <p id="bookname">asdds</p>
        <button type="submit" name="req_book" id="req_books">Request Book</button>
    </form>
</body>
<script>
    $(document).ready(function() {
        $('#semester').change(function() {
        $('#subject').change(function(){
            sem=$("#semester").val();
            sub=$("#subject").val();

            $.ajax({
                type: "POST",
                url: "test.php",
                data: {
                    sub: sub,
                    sem: sem
                },
                success: function(response) {
                    $('#bookname').html(response);
                    console.log(response);
                }
            });
        });
        });
    });
</script>
</html>