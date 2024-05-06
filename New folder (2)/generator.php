<?php

if(isset($_POST['submit'])) {
    // Retrieve marks from the form
    $marks = $_POST['marks'];

    // Validate if the input is a number
    if (is_numeric($marks)) {
        // Convert marks to integer
        $marks = intval($marks);

        // Grading criteria
        if ($marks >= 70 && $marks <= 100) {
            $grade = "Distinction";
        } elseif ($marks >= 60 && $marks <= 69) {
            $grade = "Credit";
        } elseif ($marks >= 50 && $marks <= 59) {
            $grade = "Pass";
        } elseif ($marks >= 0 && $marks <= 49) {
            $grade = "Fail";
        } else {
            $grade = "Invalid";
        }

        // Set the result
        $result = $marks.""."="."".$grade;
    } else {
        // Set an error message if input is not a number
        $result = "<h3>Error:</h3>";
        $result .= "<p>Please enter a valid numeric value for marks.</p>";
    }
}

?>
