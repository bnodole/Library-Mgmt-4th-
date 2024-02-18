<?php
    session_start();

    $requested_books = []; // Initialize as empty array
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['req_book'])) {
            $i = 0;
            foreach ($_POST['delbl'] as $selected) {
                if ($i < 5) {
                    $requested_books[$i] = $selected;
                    $i++;
                }
            }

            // Output requested books
            foreach ($requested_books as $book) {
                echo $book . "<br>";
            }
        }
    }
    