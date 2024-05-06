<?php

session_start();

include("db.php");



// Handle the admin controls request

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the user ID and admin privilege from the form
    $UserId = $_POST['UserId'];
    $Admin = $_POST['Admin'];



    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    // Update the user's role based on the adminPrivilege value
    $roleToUpdate = ($Admin == 'add') ? '1' : '0';

    $sql = "UPDATE userdetails SET Admin='$roleToUpdate' WHERE Userid=$UserId";

    if ($connection->query($sql) === TRUE) {
        header("location: admin.php");
        echo "User privileges updated successfully!";
    } else {
        echo "Error updating user privileges: " . $connection->error;
    }

    $connection->close();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styling/style1.css">
    <title>Admin Controls</title>
</head>
<body>

    <div class="login" style="height: 380px;">
    <h2 style="text-align: center;">ADMIN PRIVILIDGES CONTROL</h2>
    <form method="POST">
            <label for="UserId" style="font-size: x-large;">User ID:</label>
            <input type="text" id="UserId" name="UserId" required>
            <label for="Admin" style="font-size: x-large;">Admin Privilege:</label>
        <select id="Admin" name="Admin" style="font-size: x-large;">
            <option value="add">Add Admin Privileges</option>
            <option value="remove">Remove Admin Privileges</option>
        </select>
            <input type="submit" name="" value="submit">
            
    </form>
    </div>

    
    
</body>
</html>
