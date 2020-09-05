<?php

echo $email = $_GET['email'];
echo $pass = $_GET['password'];
echo $name =$_GET['name'];
echo $add = $_GET['address'];


$conn = mysqli_connect('localhost', 'root', '', 'assign01');
if(!$conn){
    echo "db not conntected";
}

$query= "INSERT INTO user ( email,password, name, address)
VALUES ('$email', '$pass', '$name', '$add')";

mysqli_query($conn , $query);




?>

