<?php
    session_start();
    include "../includes/connect.php";

    $q = $_GET['q'];
    
    $sql = "SELECT instelling, instelling2, instelling3, instelling4 FROM studierichtingen WHERE studierichting='$q'";
    $result = mysqli_query($connect, $sql);

    $row = mysqli_fetch_row($result);

    echo $row[0]; //instelling1
    
    if(isset($row[1]))
    {
        echo "_".$row[1]; //instelling2
        
        if(isset($row[2]))
        {
            echo "_".$row[2]; //instelling3
            
            if(isset($row[3]))
            {
                echo "_".$row[3]; //instelling4
            }
        }
    }