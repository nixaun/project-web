<?php 
    session_start();
    include "includes/connect.php";
    include "includes/session_timeout.php";
    include "includes/cookie_check.php";
    include "includes/username_handler.php";
    include "php/getEvent.php";

?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Studeren In Antwerpen - Atypisch Antwerpen</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style_news.css">
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
                <li><a href="evenementen.php" class="activenav">Evenementen</a></li>
                <li><a href="testimonials.php">Testimonials</a></li>
                <li><a href="<?php echo $userurl ?>"><?php echo $username ?></a></li>
            </ul>
        </nav>            
        <div class="bars"><i class="fa fa-bars fa-2x"></i></div>        
        <div class="heroimage">
            <img src="images/events.png" alt="">
            <h1>Evenementen</h1>
        </div>
        <h1>Evenementen</h1>
        <main class="clearfix">
            <?php
                
            $eventlID = $_POST['eventID'];
            $uid = $_POST['uid'];
            $title = $_POST['title'];
            $link = $_POST['link'];
            $place = $_POST['place'];
            $eventDate = $_POST['eventDate'];
            $maintext = $_POST['message'];

            echo "<form action='php/editEvent.php' method='POST'>
                    <input type='hidden' name='testimonialID2' value='".$testimonialID."'>
                    <h2>post van ".$uid."</h2>
                    <label for='title'>Titel</label>
                    <input type='text' name='title2' id='title' value='".$title."'>
                    <label for='eventDate'>Datum en tijd</label>
                    <input type='datetime-local' name='eventDate2' id='eventDate' value='".$eventDate."'>
                    <label for='place'>Plaats</label>
                    <input type='text' name='place2' id='place' value='".$place."'>
                    <label for='link'>Link</label>
                    <input type='text' name='link2' id='link' value='".$link."'>
                    <label for='maintext'>Tekst</label>
                    <textarea name='maintext2' id='maintext' cols='40' rows='10'>".$maintext."</textarea>
                    <button type='submit' name='eventEdit'>Pas aan</button>
                </form>";
            ?>       
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