<?php
    session_start();
    include "connect.php";


    $email = $_POST['loginmail'];
    $password = $_POST['loginpass'];
        
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($connect, $sql);

    if(!$row = mysqli_fetch_assoc($result))
    {
        header("Location: ../login.php?error=loginfail");
    }
    else
    {
        if(isset($_POST['checkbox']))
        {
            setcookie('id', $row['id'], time() + (86400 * 30), "/");
            
            $_SESSION['name'] = $row['name'];
            $_SESSION['role'] = $row['role'];
            header("Location: ../profile.php?confirm=loggedin");
        }
        else
        {
            $_SESSION['name'] = $row['name'];
            $_SESSION['role'] = $row['role'];
            header("Location: ../profile.php?confirm=loggedin");
        }
    }