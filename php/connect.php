<?php
    $connect = mysqli_connect("localhost", "jensvana", "powerpoint741", "jensvana_");
    
    if(!$connect)
    {
        die("connection failed: ".mysqli_connect_error);
    }