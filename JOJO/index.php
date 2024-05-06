<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form class="form-container" action="display.php" method="post">
            <h1>Registration</h1>
            <p>Please Complete all fields</p>
            <label>First Name:</label>
            <input type="text" name="FirstName" id="fname">
            <label>Last Name:</label>
            <input type="text" name="LastName" id="lname">
            <label>E-mail:</label>
            <input type="text" name="email" id="email">
            <label>Phone:</label>
            <input type="text" name="phone" id="phone">
            <label>Course taken:</label>
            <input type="text" name="course" id="course">
            <label>Gender</label>
            <input type="text" name="gender" id="gender">
            <button class="btn" id="clear">Clear Form</button>
            <button class="btn" id="Submit" value="Submit">Submit Order</button>
        </form>
    </div>
</body>
</html>