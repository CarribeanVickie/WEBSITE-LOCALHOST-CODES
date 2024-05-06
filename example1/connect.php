<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['firstname'];


//database connection
$conn = new mysqli('localhost','root','','web database');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(firstname, lastname, email, phone)
    values(?, ?, ?, ?)");
    $stmt->bind_param("sssi", $firstname, $lastname, $email, $phone);
    $stmt->execute();
    echo "Enrolled Successfully...";
    $stmt->close();
    $conn->close();
}


?>