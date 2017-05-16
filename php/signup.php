<?php
    session_start();

    $connect = mysqli_connect("localhost", "root", "", "antwerpen");
    
    if(!$connect)
    {
        die("connection failed: ".mysqli_connect_error);
    }

    $name = $_POST['registername'];
    $email = $_POST['registermail'];
    $password = $_POST['registerpass'];
    
    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
    $result = mysqli_query($connect, $sql);
    
    header("Location: ../index.php");
?>