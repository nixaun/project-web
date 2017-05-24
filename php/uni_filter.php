<?php
    session_start();
    include "../includes/connect.php";

    $q = $_GET['q'];
    
    $sql = "SELECT instelling, instelling2 FROM studierichtingen WHERE studierichting='$q'";
    $result = mysqli_query($connect, $sql);

    $row = mysqli_fetch_row($result);

    echo $row[0];
    
    if(isset($row[1]))
    {
        echo "_".$row[1];
    }