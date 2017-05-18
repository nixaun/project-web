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
        <title>Studeren In Antwerpen - Hogescholen en Universiteiten</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style_uni.css">
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
                <li><a href="uni.php" class="activenav">Hogescholen en Universiteiten</a></li>
                <li><a href="nieuws.php">Nieuws</a></li>
                <li><a href="evenementen.php">Evenementen</a></li>
                <li><a href="testimonials1.php">Testimonials</a></li>
                <li><a href="<?php echo $userurl ?>"><?php echo $username ?></a></li>
            </ul>
        </nav>
        <div class="bars"><i class="fa fa-bars fa-2x"></i></div>        
        <div class="heroimage">
            <img src="images/uni.png" alt="">
            <h1>Hogescholen en Universiteiten</h1>
        </div>        
        <h1>Hogescholen en Universiteiten</h1>            
        <main class="clearfix">
            <div class="unilist clearfix">
                <ul class="clearfix">
                    <li><a href="#" class="active">Antwerp Management School <i class="fa fa-chevron-right"></i></a></li>
                    <li><a href="#">Artesis Plantijn Hogeschool <i class="fa fa-chevron-right"></i></a></li>
                    <li><a href="#">Hogere Zeevaartschool <i class="fa fa-chevron-right"></i></a></li>
                    <li><a href="#">Instituut voor Tropische Geneeskunde <i class="fa fa-chevron-right"></i></a></li>
                    <li><a href="#">Karel de Grote Hogeschool <i class="fa fa-chevron-right"></i></a></li>
                    <li><a href="#">KU Leuven Campus Antwerpen <i class="fa fa-chevron-right"></i></a></li>
                    <li><a href="#">Thomas More Hogeschool <i class="fa fa-chevron-right"></i></a></li>
                    <li><a href="#">Universiteit Antwerpen <i class="fa fa-chevron-right"></i></a></li>
                </ul>
            </div>                
            <div class="uniinfo">
                <div class="active">
                    <h1>Antwerp Management School</h1>
                    <p>Antwerp Management School is een autonome divisie van Universiteit Antwerpen gespecialiseerd in marketing, management en entrepeneurschap.</p>                    
                    <h2>Campus</h2>
                    <p>Sint-Jacobsmarkt 9-13</p>                    
                    <h2>Wat kan je hier studeren?</h2>
                    <p>Marketing, General Management, International Business...</p>
                    <a href="https://www.antwerpmanagementschool.be/programmas/voltijds/" target="_blank">Bekijk alle studierichtingen</a>                    
                    <h2>Contact</h2>
                    <p><a href="https://www.antwerpmanagementschool.be/" target="_blank">Website</a></p>
                    <p>+32 (0)3 265 47 58</p>
                    <p>info@antwerpmanagementschool.be</p>
                </div>                   
                <div>
                    <h1>Artesis Plantijn Hogeschool</h1>
                    <p>AP is een hogeschool met zo’n 12.000 studenten, 19 HBO5-opleidingen, 24 professionele bachelor- en 8 artistieke opleidingen, verdeeld over 4 departementen en 2 schools of arts. Ook al is de fusiehogeschool nieuw, toch hebben ze al een lange geschiedenis.</p>                    
                    <h2>Campussen</h2>
                    <p>Campus Lange Nieuwstraat: Lange Nieuwstraat 101</p>
                    <p>Campus Kronenburg: Kronenburgstraat 47</p>
                    <p>Campus Spoor Noord: Ellermanstraat 33</p>
                    <p>Campus Meistraat: Meistraat 5</p>                    
                    <h2>Wat kan je hier studeren?</h2>
                    <p>Gezondheid en Welzijn, Management en Communicatie, Onderwijs, Wetenschap en Techniek, Schone Kunsten en Grafisch Ontwerp</p>
                    <a href="https://www.ap.be/node/1090" target="_blank">Bekijk alle studierichtingen</a>
                    <h2>Contact</h2>
                    <p><a href="https://www.ap.be/" target="_blank">Website</a></p>
                    <p>+32 (0)3 220 54 00</p>
                    <p>info@ap.be</p>
                </div>                   
                <div>
                    <h1>Hogere Zeevaartschool</h1>
                    <p>De Hogere Zeevaartschool is de enige hogeschool in België die de academische opleidingen Nautische Wetenschappen en de professionele opleiding Scheepswerktuigkunde aanbiedt. Studeren aan de HZS betekent studeren in een internationale leeromgeving: wij hebben ruim 35% buitenlandse studenten van 20 verschillende nationaliteiten!</p>                    
                    <h2>Campus</h2>
                    <p>Noordkasteel Oost 6</p>                    
                    <h2>Wat kan je hier studeren?</h2>
                    <p>Nautische Wetenschappen en Scheepswerktuigkunde</p>
                    <a href="https://www.hzs.be/nl/ontdek-alles-over-hzs/studieaanbod" target="_blank">Bekijk alle studierichtingen</a>
                    <h2>Contact</h2>
                    <p><a href="https://www.hzs.be/">Website</a></p>
                    <p>+32 (0)3 205 64 30</p>
                    <p>info@hzs.be</p>
                </div>                   
                <div>
                    <h1>Instituut voor Tropische Geneeskunde</h1>
                    <p>Het Instituut voor Tropische Geneeskunde biedt al meer dan een eeuw lang een venster op de wereld.  Studenten uit meer dan 30 landen specialiseren zich hier in Antwerpen in tropische infectieziekten en gezondheidszorg in ontwikkelingslanden. Onze vorsers doen onderzoek in het laboratorium en in het veld, in samenwerking met partners in Afrika, Azië en Latijns-Amerika. Onze artsen en verpleegkundigen bieden reisadvies, vaccinaties en zorg op maat voor importziekten, hiv en soa’s.</p>                    
                    <h2>Campus</h2>
                    <p>Nationalestraat 155</p>                    
                    <h2>Wat kan je hier studeren?</h2>
                    <p>Klinische wetenschappen, volks- en persoonlijke gezondheid en tropische geneeskunde</p>
                    <a href="https://edu.itg.be/course" target="_blank">Bekijk alle studierichtingen</a>
                    <h2>Contact</h2>
                    <p><a href="http://www.itg.be/" target="_blank">Website</a></p>
                    <p>+32 (0)3 247 66 66</p>
                    <p>itmedu@itg.be</p>
                </div>                    
                <div>
                    <h1>Karel de Grote Hogeschool</h1>
                    <p>De Karel de Grote Hogeschool (KdG) is de grootste hogeschool in Antwerpen met zo'n 50+ studierichtingen, 12000 studenten en 9 campussen. Studentgeoriënteerd handelen, duurzame ontwikkeling van studenten en omgeving en naar topkwaliteit streven zijn de waarden.</p>
                    <h2>Campussen</h2>
                    <p>Campus Congres: Kerkstraat 45</p>
                    <p>Campus Hoboken: Salesianenlaan 90, Hoboken</p>
                    <p>Campus Linkeroever: Louis Frarylaan 30</p>
                    <p>Campus Sint Lucas: Sint-Jozefstraat 35</p>
                    <p>Campus Zuid: Brusselstraat 45</p>
                    <p>Stadscampus - Groenplaats: Nationalestraat 5</p>
                    <p>Stadscampus - Mechelseplein: Maarschalk Gérardstraat 4</p>
                    <p>Stadscampus - Stadswaag: Predikerinnenstraat 18</p>                    
                    <h2>Wat kan je hier studeren?</h2>
                    <p>Economie en management, gezondheid, ICT en multimedia, kunst, onderwijs, recht, sociale wetenschappen, talen en wetenschappen</p>
                    <a href="https://www.kdg.be/opleidingen" target="_blank">Bekijk alle studierichtingen</a>
                    <h2>Contact</h2>
                    <p><a href="https://www.kdg.be/" target="_blank">Website</a></p>
                    <p>+32 (0)3 613 13 13</p>
                    <p>info@kdg.be</p>
                </div>                   
                <div>
                    <h1>KU Leuven Campus Antwerpen</h1>
                    <p>De opleidingen aan de KU Leuven reiken veel verder dan de stad Leuven. In Antwerpen zijn er twee campussen gelinkt aan de KU Leuven.</p>                    
                    <h2>Campus</h2>
                    <p>Campus Sint-Andries: Sint-Andriesstraat 2</p>
                    <p>Campus Carolus: Korte Nieuwstraat 33</p>                    
                    <h2>Wat kan je hier studeren?</h2>
                    <p>Toegepaste taalkunde (Campus Sint-Andries) en economie en bedrijfswetenschappen (Campus Carolus)</p>
                    <p><a href="http://www.arts.kuleuven.be/studeren/studenten/copy_of_antwerpen" target="_blank">Bekijk alle studierichtingen op Campus Sint-Andries</a></p>
                    <a href="http://feb.kuleuven.be/antwerpen/home" target="_blank">Bekijk alle studierichtingen op Campus Carolus</a>
                    <h2>Contact</h2>
                    <p><a href="http://www.kuleuven.be/kuleuven/" target="_blank">Website</a></p>
                    <p>+32 (0)3 206 04 91 / +32 (0)3 201 18 40</p>
                    <p>letteren.antwerpen@kuleuven.be / feb.antwerpen@kuleuven.be</p>
                </div>                   
                <div>
                    <h1>Thomas More Hogeschool</h1>
                    <p>Thomas More is een unie van hogescholen binnen de Associatie KU Leuven. Zij biedt studenten innovatief professioneel hoger onderwijs in nauwe samenwerking met het werkveld. Door haar toonaangevend onderwijs, toepassingsgericht onderzoek en dienstverlening vormt zij een motor van regionale ontwikkeling.</p>                    
                    <h2>Campussen</h2>
                    <p>Campus National: Kronenburgstraat 62 - 68</p>
                    <p>Campus Sanderus: Molenstraat 8</p>                    
                    <h2>Wat kan je hier studeren?</h2>
                    <p>Toegepaste Psychologie en logopedie</p>
                    <a href="http://www.thomasmore.be/opleidingen" target="_blank">Bekijk alle studierichtingen</a>
                    <h2>Contact</h2>
                    <p><a href="http://www.thomasmore.be/" target="_blank">Website</a></p>
                    <p>+32 15 36 91 00</p>
                    <p>info@thomasmore.be</p>
                </div>                   
                <div>
                    <h1>Universiteit Antwerpen</h1>
                    <p>Dé universiteit van Antwerpen. Het is een jonge, dynamische en toekomstgerichte universiteit. Ze integreert de troeven van haar historische wortels in haar ambitie positief bij te dragen aan de samenleving.</p>                    
                    <h2>Campussen</h2>
                    <p>Stadscampus: Prinsstraat 13</p>
                    <p>Campus Mutsaardstraat: Mutsaardstraat 31</p>
                    <p>Campus Drie Eiken: Universiteitsplein 1, Wilrijk</p>
                    <p>Campus Groenenborger: Groenenborgerlaan 171</p>
                    <p>Campus Middelheim: Middelheimlaan 1</p>                    
                    <h2>Wat kan je hier studeren?</h2>
                    <a href="https://www.uantwerpen.be/nl/faculteiten/" target="_blank">Bekijk alle studierichtingen</a>
                    <h2>Contact</h2>
                    <p><a href="https://www.uantwerpen.be/" target="_blank">Website</a></p>
                    <p>+32 (0)3 265 41 11</p>
                    <p></p>
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