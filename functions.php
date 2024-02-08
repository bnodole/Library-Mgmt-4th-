<?php
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
    function list_books($conn,$selsem,$selsub){
        $listsql = 'SELECT * FROM booklist WHERE Semester = ? AND Subject = ? ';
        $stm = $conn -> prepare($listsql);
        $stm ->bind_param("ss",$selsem,$selsub);
        $stm -> execute();

        $lists = $stm->get_result();
        
        while ($bookss = $lists->fetch_object()){
            echo ' <input type="checkbox" class="boooks" name="delbl[]" value="'.$bookss->Books.'"> '. $bookss->Books;
            echo "<br>";
        }
    }
