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
            <div class="news clearfix">                
                <div>
                    <a href=""><img src="images/news1.png" alt=""></a>
                    <a href=""><h1>The Ten Miles are best accessible by foot or by bike</h1></a>
                    <h2>15:03 20/04/2017</h2>
                    <p>Are you coming to the Ten Miles on sunday 23th of april? Or do you have to transport through the city? Better go by foot or take a bike. We'd like to give some tips on how the event is best reached.</p>
                    <a href="">read more</a>
                </div>
                <div>
                    <a href=""><img src="images/news2.jpg" alt=""></a>
                    <a href=""><h1>10 reasons why you should study at KdG</h1></a>
                    <h2>03:15 19/04/2017</h2>
                    <p>Choosing a college is hard, to help you with your search we compiled a list of 10 reasons why Karel de Grote Hogeschool is a valid choice.</p>
                    <a href="">read more</a>
                </div>
                <div>
                    <a href=""><img src="images/news3.png" alt=""></a>
                    <a href=""><h1>Gate 15 will be closed today</h1></a>
                    <h2>7:00 16/04/2017</h2>
                    <p>Gate 15 will be closed on the 16th of april. Tomorrow we'll be back.</p>
                    <a href="">read more</a>
                </div>
            </div>
            <div class="news clearfix">                
                <div>
                    <a href=""><img src="images/event1.png" alt=""></a>
                    <a href=""><h1>Colin Stetson Solo</h1></a>
                    <h2>20:30 20/04/2017 <br />
                    De Roma</h2>
                    <p>Jazzsaxophonist Colin Stetson's solo concerts are a unique experience where he lets his saxophone sounds like an orchestra including the percussion.</p>
                    <a href="">read more</a>
                </div>
                <div>
                    <a href=""><img src="images/event2.png" alt=""></a>
                    <a href=""><h1>Byr + Emil Landman</h1></a>
                    <h2>20:30 25/04/2017 <br />
                    De Roma</h2>
                    <p>The young, Irish singer/songwriter Bry started his career in the pubs and clubs of Dublin, but decided he wanted to see the world. To keep family and friends up to date he uploaded his adventures to his youtube channel BriBryontour/ Nothing special...</p>
                    <a href="">read more</a>
                </div>
                <div>
                    <a href="https://www.gate15.be/nl/events/kick-off-voor-antwerpse-presidia-6" target="_blank"><img src="images/event3.png" alt=""></a>
                    <a href="https://www.gate15.be/nl/events/kick-off-voor-antwerpse-presidia-6" target="_blank"><h1>Kick-off voor Antwerpse presidia</h1></a>
                    <h2>12:30-20:00 11/05/2017</h2>
                    <p>De kiesweek zit erop, tijd om vooruit te blikken. Hoe verloopt zo'n subsidie- of evenementenaanvraag? Wat als er iets verkeerd gaat? Hoe zet je social media optimaal in om een event te promoten? Zak op donderdag 11 mei met je hele presidium af naar het Zuiderpershuis en start volgend academiejaar volledig voorbereid.</p>
                    <a href="https://www.gate15.be/nl/events/kick-off-voor-antwerpse-presidia-6" target="_blank">read more</a>
                </div>
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