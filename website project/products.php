<?php
session_start();

include("db.php");

$sql = "SELECT * FROM bikes";
$result = $connection->query($sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styling/display.css">
    <title>SUPERIOR MOTORS LTD PRODUCTS</title>
</head>
<body>

    <!-- navbar -->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top">
        <div class="container">
            <a href="#" class="navbar-brand">Superior Motors Products</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    
    <main>
        <?php
        while($row = mysqli_fetch_assoc($result)){

        
        ?>
        <div class="card">
            <div class="image">
                <img src="img/<?php echo $row["BImg"] ?>" alt="">
            </div>
            <div class="caption">
                <p class="rate">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                </p>
                <p class="product_name"><?php  echo $row["Bname"] . $row["BType"] ?></p> 
                <p class="price"><b><?php echo $row["Price"]; ?></b></p>
            </div>
            <button class="add">Add To Cart</button>
        </div>
        <?php

    }
        ?>
    </main>

</body>
</html>