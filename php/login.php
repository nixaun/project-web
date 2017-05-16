<?php
    session_start();

    $connect = mysqli_connect("localhost", "root", "", "antwerpen");
    
    if(!$connect)
    {
        die("connection failed: ".mysqli_connect_error);
    }

    $email = $_POST['loginmail'];
    $password = $_POST['loginpass'];
        
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($connect, $sql);

    if(!$row = mysqli_fetch_assoc($result))
    {
        echo "your username or password is incorrect";
        header("Location: ../login.php");
    }
    else
    {
        $_SESSION['name'] = $row['name'];
        header("Location: ../index.php");
    }
?>