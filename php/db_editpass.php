<?php
    session_start();
    include "../includes/connect.php";
    
    
    $email = $_SESSION['email'];
    $password1 = $_POST['pass1'];
    $password2 = $_POST['pass2'];
    $password3 = $_POST['pass3'];

    $sql = "SELECT password FROM users WHERE email='$email'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_row($result);
    
    if($password1 != $row[0])
    {
        header("Location: ../profile.php?error=wrongpass");
    }
    elseif($password2 != $password3)
    {
        header("Location: ../profile.php?error=nomatch");
    }
    else
    {
        $sql = "UPDATE users SET password = '$password2' WHERE email='$email'";
        $result = mysqli_query($connect, $sql);
        header("Location: ../profile.php?confirm=passupdate");
    }