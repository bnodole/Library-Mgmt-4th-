<?php
    require ("../../connection.php");
    include ('../../functions.php');
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if (isset($_POST['sub'])){
            if(isset($_POST['sem'])) {
                $req_sub=$_POST['sub'];
                $req_sem=$_POST['sem'];
                list_books($conn,$req_sem,$req_sub);
                // var_dump($req_sem);
                // var_dump($req_sub); 
            }else{
                echo "error";
            }
        }
        // Process the checked values
        if (isset($_POST['checkedValues'])) {
            $checkedValues = $_POST['checkedValues'];
            
            // Generate the updated table HTML
            $tableHTML = ""; // Initialize an empty string
        
            foreach ($checkedValues as $book) {
                // Append a new row for each checked value
                $tableHTML .= "<tr><td>$book</td></tr>";
            }
            
            // Return the updated table HTML
            echo $tableHTML;
        }
        
    }