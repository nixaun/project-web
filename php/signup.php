<?php
    session_start();

    $connect = mysqli_connect("localhost", "jensvana", "powerpoint741", "jensvana_");
    
    if(!$connect)
    {
        die("connection failed: ".mysqli_connect_error);
    }

    $name = $_POST['registername'];
    $email = $_POST['registermail'];
    $password = $_POST['registerpass'];
    $passwordCheck = $_POST['registerpass2'];
    
    $sql = "SELECT email FROM users WHERE email='$email'";
    $result = mysqli_query($connect, $sql);
    $emailcheck = mysqli_num_rows($result);

    if ($emailcheck > 0)
    {
        header("Location: ../login.php?error=email");
    }
    else
    {
        if ($password != $passwordCheck)
        {
            header("Location: ../login.php?error=password");
        }
        else
        {
            $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
            $result = mysqli_query($connect, $sql);
    
            header("Location: ../login.php?confirm=signedup");
        }
    }
?>