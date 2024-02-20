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
    <form method="post" action="req_book.php" id="bookform">
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
    <table id="bookTable">
    <thead>
        <tr>
            <th>Selected Books</th>
        </tr>
    </thead>
    <tbody id="bookTableBody"></tbody>
</table>
<p id="limit_msg"></p>
</body>
<script>
    $(document).ready(function() {
        let checkedValues = [];
        function updateTable() {
            $('.boooks').each(function() {
                if ($(this).is(":checked")) {
                    let value = $(this).val();
                    if (checkedValues.length < 5 && checkedValues.indexOf(value) === -1) {
                        checkedValues.push(value);
                    }
                }
            });

            if (checkedValues.length === 5) {
                $('#limit_msg').text('Limit reached! Only 5 books!!');
            } else {
                $('#limit_msg').text('');
            }

            // Send AJAX request to update table with checked values
            $.ajax({
                type: "POST",
                url: "show_books.php",
                data: { checkedValues: checkedValues },
                success: function(response) {
                    $('#bookTableBody').html(response);
                }
            });
        }

        $('#semester, #subject').change(function() {
            let sem = $("#semester").val();
            let sub = $("#subject").val();

            $.ajax({
                type: "POST",
                url: "show_books.php",
                data: {
                    sub: sub,
                    sem: sem
                },
                success: function(response) {
                    $('#bookname').html(response);
                }
            });
        });

        //Listen for change event on checkboxes
        $('#bookname').click(function(){
            $('.boooks').change(function() {
                updateTable();
            });
        });
    });
</script>
</html>