<?php
    require ('../connection.php');
    $n=1; //not used right now

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        //check if 'Add Book' button clicked in 'addform.php' file
        if (isset($_POST['adb'])){
            $ad_sub= $_POST['subject'];     //get the subject name
            $ad_sem= $_POST['semester'];    //get the semester
            $ad_book= $_POST['bookname'];   //get the book name
            addbook($conn,$ad_sub,$ad_book,$ad_sem);     //call the function to add book
        }

        //check if 'Delete Book' button clicked in 'addform.php' file
        if(isset($_POST['delbl'])) {
            //loop through the selected checkboxes and remove them from database
            foreach($_POST['delbl'] as $selected) {
                delete_book($conn,$selected);
            }
        }else{
            echo '<script>alert("Please select atleast one book to remove");</script>';
        }
    }

    function addbook($conn,$subname,$bookname,$semester){
        //NOTE: The line with # is not used right now because they are for other process

        mysqli_begin_transaction($conn);
        try {
            #Dynamically create a column in the booklist table for the book
            #$alt_tbl = "ALTER TABLE booklist ADD COLUMN (book_$n varchar(255));";
            #$check = mysqli_query($conn, $alt_tbl);

            #if ($check) {
                // Insert the bookname into the newly created column
                $insert = "INSERT INTO booklist VALUES ('$semester','$subname','$bookname');";
                $ins = mysqli_query($conn, $insert);
                if ($ins) {
                    // Commit the transaction if insertion is successful
                    mysqli_commit($conn);
                    header("Location: booklist.php");
                }else{
                    echo "is error: ";
                }
                #$n++;
            #}else{
                #echo "sql error";
            #}
        } catch (mysqli_sql_exception $err) {
            // Rollback the transaction in case of any errors
            mysqli_rollback($conn);
            echo $err;
        }
    }

    function delete_book($conn,$selected){
        mysqli_begin_transaction($conn);
        try {
            $delete = "DELETE FROM booklist WHERE Books = '$selected'";
            $dels = mysqli_query($conn, $delete);
            if ($dels) {
                mysqli_commit($conn);
                header ("Location: booklist.php");
            }
        }catch(Exception $err) {
            echo $err;
        }
    }
