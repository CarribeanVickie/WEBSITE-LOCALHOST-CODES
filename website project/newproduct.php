<?php
    session_start();
    
    include("db.php");
    
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $ProductId = $_POST['PId'];
        $ProductName = $_POST['Pname'];
        $ProductType = $_POST['PType'];
        $ProductManufacturer = $_POST['PManufacturer'];
        $ProductPrice = $_POST['Price'];
        $ProductImage = $_POST['PImg'];

        $targetDirectory = "img/";
    $targetFile = $targetDirectory . basename($_FILES["PImg"]["Pname"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["PImg"]["tmp_Pname"]);
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
    if ($_FILES["photo"]["size"] > 500000) {
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
        if (move_uploaded_file($_FILES["PImg"]["tmp_Pname"], $targetFile)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["PImg"]["Pname"])). " has been uploaded.";

        }
    }

        if(!empty($ProductId) && !empty($ProductName) && !is_numeric($ProductId))
        {
            $query= "insert into products (PId, Pname, PType, PManufacturer, Price, PImg) values('$ProductId', '$ProductName', '$ProductType', '$ProductManufacturer', '$ProductPrice', '$ProductImage')";

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
    <title>Product Register</title>
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
        <h1>New Product</h1>
        <form method="POST" >
            <label>Product Id</label>
            <input type="text" name="PId" required>
            <label>Product Name</label>
            <input type="text" name="Pname" required>
            <label>Product Type</label>
            <input type="text" name="PType" required>
            <label>Product Manufacturer</label>
            <input type="text" name="PManufacturer" required>
            <label>Product Price</label>
            <input type="text" name="Price" required>
            <label for="PImg">Upload Photo:</label>
            <input type="file" id="PImg" name="PImg" accept="image/*" required>
            <input type="submit" name="" value="submit">
            <p>Please Fill The Information Correctly</p>
            <p><a href="AdminPage.php"><-GO BACK</a></p>
        </form>
    </div>
</body>
</html>
    