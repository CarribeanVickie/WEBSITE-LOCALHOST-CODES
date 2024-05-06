<?php
    session_start();
    
    include("db.php");
    
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $StoreId = $_POST['StoreId'];
        $StoreName = $_POST['StoreName'];
        $StoreManager = $_POST['StoreManager'];
        $StoreEarning = $_POST['StoreEarning'];
        $Location = $_POST['Location'];

        
        if(!empty($StoreId) && !empty($StoreName) && !is_numeric($StoreId))
        {
            $query= "insert into stores (StoreId, StoreName, StoreManager, StoreEarning, Location) values('$StoreId', '$StoreName', '$StoreManager', '$StoreEarning', '$Location')";

            mysqli_query($connection, $query);

            echo"<script type='text/javascript'> alert('Successful Registered')</script> ";{
                header("location: AdminPage.php");
            }
        }
        else

        {
            echo"<script type='text/javascript'> alert('Please Enter Valid Info')</script> ";
            {
                header("location: AdminPage.php");
            }
        }
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
    <title>Store Register</title>
</head>
<body>
<style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
    </style>
    <div class="signup" style="text-align: center; height: 680px;">
    <!-- Form to add items -->
        <h1>New Store</h1>
        <form method="POST" >
            <label>Store Id</label>
            <input type="text" name="StoreId" required>
            <label>Store Name</label>
            <input type="text" name="StoreName" required>
            <label>Store Manager</label>
            <input type="text" name="StoreManager" required>
            <label>Store Earning /Month</label>
            <input type="text" name="StoreEarning" required>
            <label>Location</label>
            <input type="text" name="Location" required>
            <input type="submit" name="" value="submit">
            <p>Please Fill The Information Correctly</p>
            <p><a href="AdminPage.php"><-GO BACK</a></p>
        </form>
    </div>
</body>
</html>
    