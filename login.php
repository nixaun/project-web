<?php 
    session_start();
    include "includes/session_timeout.php";
    include "includes/cookie_check.php";
    include "includes/username_handler.php";

    $loginfailmessage = "";
    $registerfailmessage = "";
    $passwordfailmessage = "";
    $confirmmessage = "";

    $url = "http://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];

    if (strpos($url, "error=loginfail") !== false)
    {
        $loginfailmessage = "Uw email of wachtwoord is incorrect";
    }

    if (strpos($url, "error=email") !== false)
    {
        $registerfailmessage = "Deze email bestaat al";
    }

    if (strpos($url, "error=password") !== false)
    {
        $passwordfailmessage = "De wachtwoorden komen niet overeen";
    }

    if (strpos($url, "confirm=signedup") !== false)
    {
        $confirmmessage = "U bent geregistreerd, u kan zich nu inloggen";
    }

    if (strpos($url, "confirm=loggedout") !== false)
    {
        $confirmmessage = "U bent uitgelogd";
    }
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Studeren In Antwerpen - Atypisch Antwerpen</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style_login.css">
        <link rel="stylesheet" href="css/fonts.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <script src="css/script.js"></script>
        <link rel="icon" type="image/jpg" href="images/logo.jpg"/>
    </head>
    <body>
        <header class="clearfix">
            <a href="index.php"><img src="images/logo.jpg" alt=""></a>
            <a href="index.php"><h1>Studeren in Antwerpen</h1></a>
        </header>        
        <nav>
            <ul>
                <li><a href="atypisch.php">Atypisch Antwerpen</a></li>
                <li><a href="uni.php">Hogescholen en Universiteiten</a></li>
                <li><a href="nieuws.php">Nieuws</a></li>
                <li><a href="evenementen.php">Evenementen</a></li>
                <li><a href="testimonials.php">Testimonials</a></li>
                <li><a href="<?php echo $userurl ?>" class="activenav"><?php echo $username ?></a></li>
            </ul>
        </nav>            
        <div class="bars"><i class="fa fa-bars fa-2x"></i></div>
        <main class="clearfix">
            <?php if(isset($_SESSION['role'])) : ?>
            
                <?php header("Location: profile.php"); ?>
                
            <?php else : ?>
            <?php endif ?>
            <p><?php echo $confirmmessage ?></p>
            <div class="logindiv">
                <h1>Log in met bestaand account</h1>
                <p><?php echo $loginfailmessage ?></p>
                <form action="php/login.php" method="post">
                    <label for="loginmail">E-mail</label>
                    <input type="email" name="loginmail" id="loginmail" required>                    
                    <label for="loginpass">Wachtwoord</label>
                    <input type="password" name="loginpass" id="loginpass" required>                    
                    <input type="checkbox" name="checkbox" id="checkbox">
                    <label for="checkbox">Onthoud mij</label>
                    <button type="submit">Log in</button>
                </form>
            </div>
            <div class="logindiv">
                <h1>Geen account? Registreer nu!</h1>
                <p><?php echo $registerfailmessage ?></p>
                <p><?php echo $passwordfailmessage ?></p>
                <form action="php/signup.php" method="post">
                    <label for="registername">Naam</label>
                    <input type="text" name="registername" id="registername" required>                    
                    <label for="registermail">E-mail</label>
                    <input type="email" name="registermail" id="registermail" required>                    
                    <label for="registerpass">Wachtwoord</label>
                    <input type="password" name="registerpass" id="registerpass" required>
                    <label for="registerpass">Herhaal Wachtwoord</label>
                    <input type="password" name="registerpass2" id="registerpass2" required>  
                    <button type="submit">Registreer</button>
                </form>
            </div>
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