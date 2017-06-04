<?php
    session_start();
    include "../includes/connect.php";

    $id    = $_POST['id'];
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $role  = $_POST['role'];
    
    $sql = "UPDATE users SET name='$name', email='$email', role='$role' WHERE id='$id'";
    $result = mysqli_query($connect, $sql);

    
    
    
    header("Location: ../database_manager.php");