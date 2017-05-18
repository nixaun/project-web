<?php 
    session_start();
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
        <title>Studeren In Antwerpen - Atypisch Antwerpen</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style_atypisch.css">
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
                <li><a href="atypisch.php" class="activenav">Atypisch Antwerpen</a></li>
                <li><a href="uni.php">Hogescholen en Universiteiten</a></li>
                <li><a href="nieuws.php">Nieuws</a></li>
                <li><a href="evenementen.php">Evenementen</a></li>
                <li><a href="testimonials1.php">Testimonials</a></li>
                <li><a href="<?php echo $userurl ?>"><?php echo $username ?></a></li>
            </ul>
        </nav>            
        <div class="bars"><i class="fa fa-bars fa-2x"></i></div>        
        <div class="heroimage">
            <img src="images/atypisch2.png" alt="">
            <h1>Atypisch Antwerpen</h1>
        </div>        
        <h1>Atypisch Antwerpen</h1>
        <main class="clearfix">
        <div class="clearfix">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Q0nLdnB_Ezw" frameborder="0" allowfullscreen></iframe>
            <h1 class="title">Atypische studentenstad</h1>
            <p>Antwerpen is niet zomaar een doorsnee studentenstad. In tegenstelling tot andere studentensteden is Antwerpen vrij uniek, het percentage studenten is veel lager. Dit zorgt voor een leuke dynamiek in de stad. Als student leef je tussen het dagelijkse volk en zelfs op de verlof dagen is de stad nog steeds bruisend.</p>
            <p>De verschillende campussen zijn verspreid over de volledige stad, hierdoor is er in overal wel iets te beleven. Dit is uniek aan Antwerpen en vindt je in geen enkele andere studentenstad.</p>
            <a href="http://www.antwerpen.be/dossier/atypisch/" target="_blank">Leer hier meer over Atypisch Antwerpen</a>
        </div>
        <div class="clearfix">
            <img src="images/gate15.jpg" alt="">
            <h1 class="title">GATE15</h1>
            <p>GATE15 is een aftakking van de non-profit organisatie Antwerpen Studentenstad. Ze werken samen met de stad en onderwijs maar zijn toch onafhankelijk en kunnen zelf initiatieven nemen. Het is niet enkel een fysieke locatie maar ook een groep van enthousiaste mensen die je doorheen het studentenleven in Antwerpen willen gidsen.</p>
            <h3>Wat doet GATE15?</h3>
            <ul>
                <li>Informatie Helpdesk</li>
                <li>Digitaal platform</li>
                <li>Gidsingen aanbieden</li>
                <li>Infrastructuur voor studeren (computers en studieruimte)</li>
                <li>Events (zoals StuDay en ADream)</li>
                <li>Cultuur Cheques</li>
                <li><a href="https://www.gate15.be/nl/content/over-gate15" target="_blank">en nog meer...</a></li>
            </ul>
            
            <p>Voor alle informatie bezoek de site <a href="https://www.gate15.be" target="_blank">GATE15.be</a></p>
            <!--
            <h3>Projecten van GATE15</h3>
            <ul>
                <li><a href="https://www.gate15.be/nl/nieuws/onze-student-guide-antwerp-app-al-gedownload" target="_blank">De GATE15 app</a>, een gidsing app die je de beste plekjes toont in de stad</li>
                <li><a href="https://www.study360.be/" target="_blank">Study 360</a>, zoek een plek om te studeren</li>
                <li><a href="https://www.studentkotweb.be/" target="_blank">Kotweb</a>, zoek je kot in Antwerpen</li>
            </ul>
            <h3>Praktische informatie</h3>
            
            <ul>
                <li>Website: <a href="https://www.gate15.be" target="_blank">https://www.gate15.be/nl/home</a></li>
                <li>Kleine Kauwenberg 15, Antwerpen</li>
                <li>+32 3 292 31 70</li>
                <li>info@gate15.be</li>
            </ul>
            -->
        </div>
        <div class="clearfix">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/73wfuYU0gaE" frameborder="0" allowfullscreen></iframe>
            <h1>Student Life</h1>
            <h3>Geïnteresseerd in projecten van onze studenten?</h3>
            <p>Bekijk dan zeker eens onze trots-pagina. Hier vind u de interessantste projecten die onze studenten te bieden hebben.</p>
            <p><a href="https://www.gate15.be/nl/trots" target="_blank">GATE15 trots</a></p>
            <h3>Wilt u meer te weten komen over het studentenleven in Antwerpen?</h3>
            <p>Krijg het dan rechtstreeks te horen van de studenten zelf, op de GATE15 blog-pagina.</p>
            <p><a href="https://www.gate15.be/nl/blog" target="_blank">GATE15 blog</a></p>
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