<?php 
    session_start();
    include "includes/session_timeout.php";
    include "includes/cookie_check.php";
    include "includes/username_handler.php";

?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Studeren In Antwerpen - Atypisch Antwerpen</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style_testimonials.css">
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
                <li><a href="nieuws.php">Nieuws</a></li>
                <li><a href="evenementen.php">Evenementen</a></li>
                <li><a href="testimonials1.php" class="activenav">Testimonials</a></li>
                <li><a href="<?php echo $userurl ?>"><?php echo $username ?></a></li>
            </ul>
        </nav>
        <div class="bars"><i class="fa fa-bars fa-2x"></i></div>        
        <div class="heroimage">
            <img src="images/testimonials.png" alt="">
            <h1>Testimonials</h1>
        </div>        
        <h1>Testimonials</h1>        
        <main class="clearfix">
            <div>
                <a href=""><img src="images/testim1.jpg" alt=""></a>
                <a href=""><h1>Lennert Peeters</h1></a>
                <h2>15:03 20/04/2017</h2>
                <p>Ik kom uit Leuven maar zit op kot in Antwerpen want Antwerpen is gewoon een leukere stad. De richting die ik nu studeer hebben ze ook niet in Leuven.</p>
            </div>
            <div>
                <a href=""><img src="images/testim2.jpg" alt=""></a>
                <a href=""><h1>Jens Van Assche</h1></a>
                <h2>03:15 19/04/2017</h2>
                <p>Ik studeer graag in Antwerpen want hier is elke dag wel iets nieuws te beleven. De dynamiek in de stad is uniek, niet zoals eender waar.</p>
            </div>
            <div>
                <a href="https://www.gate15.be/nl/trots/peter-lanceerde-de-populaire-app-chestnote" target="_blank"><img src="images/openAvatar.jpg" alt=""></a>
                <a href="https://www.gate15.be/nl/trots/peter-lanceerde-de-populaire-app-chestnote" target="_blank"><h1>Peter lanceerde de populaire app Chestnote</h1></a>
                <h2>15 dagen geleden</h2>
                <p>Peter Wellens (29) is een ex-student handelsingenieur (Universiteit Antwerpen) met een passie voor ondernemen. Vanuit deze passie is hij dan ook begonnen aan zijn eigen onderneming; Chestnote. Chestnote is ondertussen een van de populairdere apps onder de jongeren in Antwerpen. Reden genoeg voor redactielid Yana om een langst Chestnote te gaan.</p>
            </div>
            <section class="numNav clearfix">
                <a href="testimonials1.php"><<</a>
                <a href="testimonials1.php"><</a>
                <a href="testimonials1.php">1</a>
                <a href="testimonials2.php" class="numNavActive">2</a>
                <a href="testimonials3.php">3</a>
                <a href="testimonials3.php">></a>
                <a href="testimonials3.php">>></a>
            </section>
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