<?php 
    session_start();
    include "includes/connect.php";
    include "php/session_timeout.php";
    include "php/getNieuws.php";
//VZkpV2UmR
    $username = "";
    $userurl = "";

    if (isset($_SESSION['name']))
    {
        $username = $_SESSION['name'];
        $userurl = "profile.php";
    }
    else
    {
        $username = "Log In";
        $userurl = "login.php";
    }

?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Studeren In Antwerpen - Nieuws</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style_news.css">
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
            <ul>
                <li><a href="atypisch.php">Atypisch Antwerpen</a></li>
                <li><a href="uni.php">Hogescholen en Universiteiten</a></li>
                <li><a href="nieuws.php" class="activenav">Nieuws</a></li>
                <li><a href="evenementen.php">Evenementen</a></li>
                <li><a href="testimonials1.php">Testimonials</a></li>
                <li><a href="<?php echo $userurl ?>"><?php echo $username ?></a></li>
            </ul>
        </nav>
            
        <div class="bars"><i class="fa fa-bars fa-2x"></i></div>

        <div class="heroimage">
            <img src="images/news.png" alt="">
            <h1>Nieuws</h1>
        </div>        
        <h1>Nieuws</h1>            
        <main>
        <?php
            $nieuwsID = 
            $uid = $_SESSION['name'];
            $title = $_POST['title'];
            $link = $_POST['link'];
            $maintext = $_POST['maintext'];

            echo "<form action='editNieuws.php' class='active' method='POST' enctype='multipart/form-data'>
                    <h2>post van ".$uid."</h2>
                    <label for='title'>Titel</label>
                    <input type='text' name='title' id='title' value='".$title."'>
                    <label for='link'>Link</label>
                    <input type='text' name='link' id='link' value='".$link."'>
                    <label for='maintext'>Tekst</label>
                    <textarea name='maintext' id='maintext' cols='40' rows='10' value='>".$maintext."</textarea>
                    <label for='image'>Voeg een foto toe</label>
                    <input type='file' name='nieuwsImage' id='image' value=''>
                    <button type='submit' name='newsSubmit'>Pas aan</button>
                </form>"

            /*
                
            */
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