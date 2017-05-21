<?php
    if(isset($_COOKIE['id']))
    {
        include "connect.php";
        
        $id = $_COOKIE['id'];
        $sql = "SELECT * FROM users WHERE id='$id'";
        $result = mysqli_query($connect, $sql);
        
        if(!$row = mysqli_fetch_assoc($result))
        {
            header("Location: ../login.php?error=loginfail");
        }
        else
        {
            $_SESSION['name'] = $row['name'];
            $_SESSION['role'] = $row['role'];
        }
        
    }