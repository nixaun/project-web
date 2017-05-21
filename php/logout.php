<?php
    session_start();
    session_destroy();

    if(isset($_COOKIE['id']))
    {
        setcookie('id', null, time() - 3600, "/");
    }

    header("Location: ../login.php?confirm=loggedout");