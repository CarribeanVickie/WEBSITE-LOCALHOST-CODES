<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Submitted</title>
</head>
<body>
    <h1>Form Submission Result</h1>

    <?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $firstname = isset($_POST["FirstName"]) ? $_POST["FirstName"] : "";
        $lastname = isset($_POST["LastName"]) ? $_POST["LastName"] : "";
        $Email = isset($_POST["email"]) ? $_POST["email"] : "";
        $Phone = isset($_POST["phone"]) ? $_POST["phone"] : "";
        $Course = isset($_POST["course"]) ? $_POST["course"] : "";
        $Gender = isset($_POST["gender"]) ? $_POST["gender"] : "";


        echo "<p><b>First Name:</b> $firstname</p>";
        echo "<p><b>First Name:</b> $lastname</p>";
        echo "<p><b>First Name:</b> $Email</p>";
        echo "<p><b>First Name:</b> $Phone</p>";
        echo "<p><b>First Name:</b> $Course</p>";
        echo "<p><b>First Name:</b> $Gender</p>";

    }else{
        echo "<p> Please Enter Data </p>";
    }

    ?>

    <a href="index.php">Go Back</a>
</body>
</html>