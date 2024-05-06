<?php
session_start();

include("db.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $Email = $_POST['email'];
    $Password = $_POST['pass'];

    if (!empty($Email) && !empty($Password) && !is_numeric($Email)) {
        $query = "SELECT * FROM userdetails WHERE email = '$Email' LIMIT 1";
        $result = mysqli_query($connection, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);

            if ($user_data['pass'] == $Password) {
                // Check if the user has admin privileges
                if ($user_data['Admin'] == 1) {
                    $_SESSION['admin_username'] = $Email;
                    header("location: AdminPage.php");
                    die;
                } else {
                    $_SESSION['user_username'] = $Email;
                    // Redirect to a non-admin page or show an error message
                    header("location: UserPage.php");
                    die;
                }
            }
        }

        // Display error message if credentials are incorrect
        echo "<script type='text/javascript'> alert('Wrong Username or Password')</script> ";
        header("location: Login.php");
    } else {
        // Display error message if fields are empty or email is numeric
        echo "<script type='text/javascript'> alert('Wrong Username or Password')</script> ";
        header("location: Login.php");
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
    <link rel="stylesheet" href="styling/signup.css">
    <title>LogIn</title>
</head>
<body>
    <div class="login" style="height: 480px;">
        <h1>LogIn</h1>
        <form method="POST">
            <label>Email</label>
            <input type="email" name="email" required>
            <label>Password</label>
            <input type="password" name="pass" required>
            <div class="form-check mb-3">
                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
            </div>
            <input type="submit" name="" value="submit">
            
        </form>
        <p>Are You a New? <a href="signup.php">  SignUp Here</a></p>
        <p><a href="index.php"><-GO BACK</a></p>
    </div>
</body>
</html>