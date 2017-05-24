<?php
    session_start();
    include "../includes/connect.php";
    
    $id = $_GET['id'];
    
    $sql = "DELETE FROM users WHERE id='$id'";
    $result = mysqli_query($connect, $sql);
    
    if(! $result )
    {
        echo "fail";
    }

    header("Location: ../database_manager.php");