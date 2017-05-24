<?php
    session_start();
    include "../includes/connect.php";

    $q = $_GET['q'];
    
    $sql = "SELECT instelling FROM studierichtingen WHERE studierichting='$q'";
    $result = mysqli_query($connect, $sql);

    $row = mysqli_fetch_row($result);
    echo $row[0];