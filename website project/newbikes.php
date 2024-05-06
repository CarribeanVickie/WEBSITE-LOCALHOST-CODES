<?php
    session_start();
    
    include("db.php");
    
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $BikeId = $_POST['BId'];
        $BikeName = $_POST['Bname'];
        $BikeType = $_POST['BType'];
        $BikeManufacturer = $_POST['BManufacturer'];
        $BikePrice = $_POST['Price'];
        $BikeImage = $_POST['BImg'];

        $targetDirectory = "img/";
    $targetFile = $targetDirectory . basename($_FILES["BImg"]["Bname"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["BImg"]["tmp_Bname"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    // Check if file already exists
    if (file_exists($targetFile)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["PImg"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["BImg"]["tmp_Bname"], $targetFile)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["BImg"]["Bname"])). " has been uploaded.";

        }
    }

    if(!empty($BikeId) && !empty($BikeName) && !is_numeric($BikeId))
    {
        $query= "insert into bikes (BId, Bname, BType, BManufacturer, Price, BImg) values('$BikeId', '$BikeName', '$BikeType', '$BikeManufacturer', '$BikePrice', '$BikeImage')";

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
    <title>BIKE REGISTER</title>
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
    <div class="signup" style="text-align: center; height: 715px;">
    <!-- Form to add items -->
        <h1>New Bike</h1>
        <form method="POST" >
            <label>Bike Id</label>
            <input type="text" name="BId" required>
            <label>Bike Name</label>
            <input type="text" name="Bname" required>
            <label>Bike Type</label>
            <input type="text" name="BType" required>
            <label>Bike Manufacturer</label>
            <input type="text" name="BManufacturer" required>
            <label>Bike Price</label>
            <input type="text" name="Price" required>
            <label for="PImg">Upload Photo:</label>
            <input type="file" id="PImg" name="BImg" accept="image/*" required>
            <input type="submit" name="" value="submit">
            <p>Please Fill The Information Correctly <br> <a href="AdminPage.php"><-GO BACK</a></p>
        </form>
    </div>
</body>
</html>
    