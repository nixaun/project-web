<?php
    if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 600)) { //10 minutes
        session_unset();
        session_destroy();
    }

    $_SESSION['LAST_ACTIVITY'] = time();