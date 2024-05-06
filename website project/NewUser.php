<?php
    session_start();
    
    include("db.php");
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $Address = $_POST['address'];
        $Email = $_POST['email'];
        $Phonenumber = $_POST['telno'];
        $Password = $_POST['pass'];

        if(!empty($Email) && !empty($Password) && !is_numeric($Email))
        {
            $query= "insert into userdetails (fname, lname,address, email, telno, pass) values('$firstname', '$lastname', '$Address', '$Email', '$Phonenumber','$Password')";

            mysqli_query($connection, $query);

            echo"<script type='text/javascript'> alert('Successful Registered')</script> ";{
                header("location: Login.php");
            }
        }
        else

        {
            echo"<script type='text/javascript'> alert('Please Enter Valid Info')</script> ";
            {
                header("location: signup.php");
            }
        }
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styling/signup.css">
    <title>New User</title>
</head>
<body>
    <div class="signup" style="text-align: center;">
    
        <h1>New User</h1>
        <form method="POST" >
            <label>First Name</label>
            <input type="text" name="fname" required>
            <label>Last Name</label>
            <input type="text" name="lname" required>
            <label>Address</label>
            <input type="text" name="address" required>
            <label>Email</label>
            <input type="email" name="email" required>
            <label>Phone Number</label>
            <input type="text" name="telno" required>
            <label>Password</label>
            <input type="password" name="pass" required>
            <input type="submit" name="" value="submit">
            <p><a href="index.php"><-GO BACK</a></p>
        </form>
    </div>
</body>
</html>