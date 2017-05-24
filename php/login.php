<?php
    session_start();
    include "../includes/connect.php";


    $email = $_POST['loginmail'];
    $password = $_POST['loginpass'];
        
    $sql = "SELECT id, name, email, role FROM users WHERE email='$email' AND password='$password'";
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
            $_SESSION['email'] = $row['email'];
            $_SESSION['role'] = $row['role'];
            header("Location: ../profile.php?confirm=loggedin");
        }
        else
        {
            $_SESSION['name'] = $row['name'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['role'] = $row['role'];
            header("Location: ../profile.php?confirm=loggedin");
        }
    }