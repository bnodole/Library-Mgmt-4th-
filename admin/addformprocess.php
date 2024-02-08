<?php
    require ('../connection.php');
    require ('../functions.php');
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
