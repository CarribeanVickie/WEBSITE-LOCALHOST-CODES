<?php
    session_start();

    include("db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $employeeId = $_POST['EId'];
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $Email = $_POST['email'];
        $Phonenumber = $_POST['telno'];
        $EmployeeType = $_POST['EType'];

        if(!empty($employeeId) && !empty($EmployeeType) && !is_numeric($Email))
        {
            $query= "insert into employee (EId,fname, lname, email, telno, EType) values('$employeeId', '$firstname', '$lastname', '$Email', '$Phonenumber','$EmployeeType')";

            mysqli_query($connection, $query);

            echo"<script type='text/javascript'> alert('Successful Registered')</script> ";{
                header("location: AdminPage.php");
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
    <link rel="stylesheet" href="styling/style1.css">
    <title>Employee Register</title>
</head>
<body>
    <div class="signup">
    
        <h1>New Employee</h1>
        <form method="POST" >
            <label>Employee Id</label>
            <input type="text" name="EId" required>
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
            <label for="employee">Choose the type of Employee</label>
            <select id="employee" name="EType" required>
                <option value="Accountant">Accountant</option>
                <option value="Manager">Manager</option>
                <option value="Sales Person">Sales Person</option>
                <option value="Service Engineer">Engineer</option>
            </select>
            <input type="submit" name="" value="submit">
            <p>Please Fill The Information Correctly</p>
            <p><a href="AdminPage.php"><-GO BACK</a></p>
        </form>
    </div>
</body>
</html>