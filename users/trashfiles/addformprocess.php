<?php
    session_start();
    if (isset($_POST['adb'])){
        $bookname = $_POST['bookname'];
    if (isset($_SESSION['adbook'])) {
        $semester = $_SESSION['adbook']; // Get the selected semester from the session
        $sub = $subjects[$semester]; // Initialize the subject variable
        // if(isset($_POST['adb'])){
        //     $bookname = $_POST['bookname']; // Get the bookname from the form
        // }
        // Iterate through subjects array
        foreach ($subjects as $subcode => $subname) {
            // Check if the 'Add' button is clicked and the selected semester matches the subject code
            if ($semester == $subcode) {
                // Start a database transaction
                mysqli_begin_transaction($conn);
                try {
                    // Dynamically create a column in the booklist table for the book
                    $alt_tbl = "ALTER TABLE booklist ADD COLUMN (book_$n varchar(255));";
                    $check = mysqli_query($conn, $alt_tbl);

                    if ($check) {
                        // Insert the bookname into the newly created column
                        $insert = "INSERT INTO booklist VALUES ('$subcode','$subname','$bookname');";
                        $ins = mysqli_query($conn, $insert);
                        if ($ins) {
                            // Commit the transaction if insertion is successful
                            mysqli_commit($conn);
                            echo "<script>alert('Book added successfully')</script>"; // Fix: Added single quotes around the message
                        }
                        $n++;
                    }
                    break;
                } catch (mysqli_sql_exception $err) {
                    // Rollback the transaction in case of any errors
                    mysqli_rollback($conn);
                    echo $err;
                    break;
                }
            }else{
                echo "An error occurred";
            }
        }
    }
    else{
        echo "errrrrrrrror";
    }
}
?>