<?php 
    session_start();
    include_once "includes/connect.php";
    include "includes/session_timeout.php";
    include "includes/cookie_check.php";
    include "includes/username_handler.php";

    date_default_timezone_set('Europe/Brussels');

    $confirmmessage = "";
    $errormessage = "";

    $url = "http://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];

    if (strpos($url, "confirm=loggedin") !== false)
    {
        $confirmmessage = "U bent ingelogd als ".$_SESSION['name'];
    }

    if (strpos($url, "confirm=passupdate") !== false)
    {
        $confirmmessage = "Uw wachtwoord is veranderd";
    }

    if (strpos($url, "error=wrongpass") !== false)
    {
        $errormessage = "Wachtwoord is incorrect";
    }

    if (strpos($url, "error=nomatch") !== false)
    {
        $errormessage = "Je nieuwe wachtwoord en bevestiging komen niet overeen";
    }

?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Studeren In Antwerpen - Atypisch Antwerpen</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style_profile.css">
        <link rel="stylesheet" href="css/fonts.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <script src="css/script.js"></script>
    </head>
    <body>
        <header class="clearfix">
            <a href="index.php"><img src="images/logo.jpg" alt=""></a>
            <a href="index.php"><h1>Studeren in Antwerpen</h1></a>
        </header>        
        <nav>
            <ul class="clearfix">
                <li><a href="atypisch.php">Atypisch Antwerpen</a></li>
                <li><a href="uni.php">Hogescholen en Universiteiten</a></li>
                <li><a href="nieuws.php">Nieuws</a></li>
                <li><a href="evenementen.php">Evenementen</a></li>
                <li><a href="testimonials1.php">Testimonials</a></li>
                <li><a href="<?php echo $userurl ?>" class="activenav"><?php echo $username ?></a></li>
            </ul>
        </nav>            
        <div class="bars"><i class="fa fa-bars fa-2x"></i></div>
        <main class="clearfix">
            <?php if(!isset($_SESSION['role'])) : ?>
            
                <?php header("Location: login.php"); ?>
            
            <?php endif ?>
                
            <?php if($_SESSION['role'] == 2 || $_SESSION['role'] == 1) : ?>
            <p><?php echo $confirmmessage ?></p>
            
            <h1>Mijn Profiel - <?php echo $username ?></h1>
            
            <div class="tab clearfix">
                <a href="#" class="active">Voeg nieuwsartikel toe</a>
                <a href="#">Voeg evenement toe</a>
                <a href="#">Voeg testimonial toe</a>
            </div>
            <div class="tabcontent">
                <form action="php/uploadNieuws.php" class="active" method="POST" enctype="multipart/form-data">
                    <label for="title">Titel</label>
                    <input type="text" name="title" id="title">
                    <label for="link">Link</label>
                    <input type="text" name="link" id="link">
                    <label for="maintext">Tekst</label>
                    <textarea name="maintext" id="maintext" cols="40" rows="10"></textarea>
                    <label for="image">Voeg een foto toe</label>
                    <input type="file" name="nieuwsImage" id="image">
                    <button type="submit" name="newsSubmit">Versturen</button>
                </form>
            
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="title">Titel</label>
                    <input type="text" name="title" id="title">
                    <label for="date">Datum en tijd</label>
                    <input type="text" name="date" id="date">
                    <label for="link">Link</label>
                    <input type="text" name="link" id="link">
                    <label for="date">Plaats</label>
                    <input type="text" name="place" id="place">
                    <label for="maintext">Tekst</label>
                    <textarea name="maintext" id="maintext" cols="40" rows="10"></textarea>
                    <label for="image">Voeg een foto toe</label>
                    <input type="file" name="image" id="image">
                    <button type="submit">Versturen</button>
                </form>
            
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="title">Naam/Titel</label>
                    <input type="text" name="title" id="title">
                    <label for="link">Link</label>
                    <input type="text" name="link" id="link">
                    <label for="maintext">Tekst</label>
                    <textarea name="maintext" id="maintext" cols="40" rows="10"></textarea>
                    <label for="image">Voeg een foto toe</label>
                    <input type="file" name="image" id="image">
                    <button type="submit">Versturen</button>
                </form>
            </div>
            
            
            <?php endif ?>
            
            <?php if($_SESSION['role'] == 2) : ?>
                <a href="database_manager.php" class="extrabuttons"><i class="fa fa-database"></i>Database Manager</a>
            <?php endif ?>
            
            <form action="php/db_editpass.php" method="post" class="editpass">
                <p><?php echo $errormessage ?></p>
                <h2>Verander je wachtwoord</h2>
                <input type="password" name="pass1" placeholder="Huidig wachtwoord" required>
                <input type="password" name="pass2" placeholder="Nieuw wachtwoord" required>
                <input type="password" name="pass3" placeholder="Bevestig wachtwoord" required>
                <button type="submit">Versturen</button>
            </form>
            
            <form action="php/logout.php">
                <button ><i class="fa fa-sign-out"></i>Uitloggen</button>
            </form>
            
        </main>        
        <footer class="clearfix">
            <div class="wrapper">
                <div>
                    <h2>Antwerpen</h2>
                    <ul>
                        <li>Stedelijk contactcenter</li>
                        <li>tel.  +32 3221 13 33</li>
                    </ul>
                    <a href="https://www.antwerpen.be/nl/home" target="_blank">antwerpen.be</a>
                </div>
                <div>
                    <h2>Onderwijs Vlaanderen</h2>
                    <ul>
                        <li>Hendrik Consciencegebouw</li>
                        <li>Koning Albert II-laan 15</li>
                        <li>1210 Brussel</li>
                        <li>tel. binnenland 1700</li>
                        <li>tel. buitenland +32 2 553 17 00</li>
                    </ul>
                    <a href="http://onderwijs.vlaanderen.be/" target="_blank">onderwijs.vlaanderen.be</a>
                </div>
                <div>
                    <h2>Student Kotweb</h2>
                    <ul>
                        <li>Kotwebsecretariaat</li>
                        <li>Universiteitsplein 1</li>
                        <li>2610 Antwerpen</li>
                        <li>tel. +32 3 265 20 82</li>
                    </ul>
                    <a href="https://www.studentkotweb.be/" target="_blank">studentkotweb.be</a>
                </div>
                <div>
                    <h2>Gate 15</h2>
                    <ul>
                        <li>Kleine Kauwenberg 15</li>
                        <li>2000 Antwerpen</li>
                        <li>België</li>
                        <li>tel.  +32 3292 31 70</li>
                    </ul>
                    <a href="https://www.gate15.be/nl/home" target="_blank">gate15.be</a>
                </div>
                <div>
                    <h2>study 360</h2>
                    <ul>
                        <li>affiliatie Gate 15</li>
                    </ul>
                    <a href="https://www.study360.be/" target="_blank">study360.be</a>
                </div>
            </div>
            <img src="images/logo-wit.png" alt="">
        </footer>
    </body>
</html>