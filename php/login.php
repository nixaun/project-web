<?php
    session_start();

    $connect = mysqli_connect("localhost", "jensvana", "powerpoint741", "jensvana_");
    
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
        header("Location: ../login.php?error=loginfail");
    }
    else
    {
        $_SESSION['name'] = $row['name'];
        header("Location: ../profile.php?confirm=loggedin");
    }
?>