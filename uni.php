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
                <li><a href="testimonials.php">Testimonials</a></li>
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
            <h2>Filter op studierichting</h2>
            <form action="php/uni_filter.php" method="post">
                <select name="studierichtingen" onchange='onDropDownPick(this.value)'>
                    <option value="default" selected="selected">Kies een studierichting</option>
                    <option disabled>---------------------</option>
                    <option value="arch">Architectuur</option>                            <!-- UA/ -->
                    <option value="auto">Autotechnologie</option>                         <!-- KDG/ -->
                    <option value="bedrijf">Bedrijfsmanagement</option>                   <!-- AP/KDG/KUL/AMS -->
                    <option value="bioing">Bio-ingenieur</option>                         <!-- UA/ -->
                    <option value="biochem">Biochemie</option>                            <!-- UA/KDG -->
                    <option value="biomed">Biomedische wetenschappen</option>             <!-- UA/AP/KDG -->
                    <option value="bio">Biologie</option>                                 <!-- UA/ -->
                    <option value="chem">Chemie</option>                                  <!-- UA/AP/KDG -->
                    <option value="com">Communicatiewetenschappen</option>                <!-- UA/AP/ -->
                    <option value="dier">Diergeneeskunde</option>                         <!-- UA/ -->
                    <option value="elektro">Elektromechanica</option>                     <!-- AP/ -->
                    <option value="ergo">Ergotherapie</option>                            <!-- AP/ -->
                    <option value="farma">Farmaceutische wetenschappen</option>           <!-- UA/ -->
                    <option value="foto">Fotografie</option>                              <!-- KDG/ -->
                    <option value="fys">Fysica</option>                                   <!-- UA/ -->
                    <option value="genees">Geneeskunde</option>                           <!-- UA/ -->
                    <option value="gesch">Geschiedenis</option>                           <!-- UA/ -->
                    <option value="graf">Grafische en digitale media</option>             <!-- AP/ -->
                    <option value="indus">Industriële wetenschappen</option>              <!-- UA/ -->
                    <option value="ict">Informatica</option>                              <!-- UA/AP/KDG -->
                    <option value="journ">Journalistiek</option>                          <!-- AP -->
                    <option value="kine">Kinesitherapie</option>                          <!-- UA/ -->
                    <option value="kleuter">Kleuteronderwijs</option>                     <!-- AP/KDG -->
                    <option value="lager">Lager onderwijs</option>                        <!-- AP/KDG -->
                    <option value="logo">Logopedie</option>                               <!-- TM -->
                    <option value="multi">Multimedia technologie</option>                 <!-- KDG -->
                    <option value="naut">Nautische wetenschappen</option>                 <!-- HZ -->
                    <option value="ortho">Orthopedagogie</option>                         <!-- AP/KDG -->
                    <option value="pol">Politieke wetenschappen</option>                  <!-- UA/ -->
                    <option value="psy">Psychologie</option>                              <!-- UA/AP/TM -->
                    <option value="recht">Rechten</option>                                <!-- UA/ -->
                    <option value="scheep">Scheepswerktuigkunde</option>                  <!-- HZ/ -->
                    <option value="soceco">Sociaal-Economische wetenschappen</option>     <!-- UA/ -->
                    <option value="socwerk">Sociaal werk</option>                         <!-- AP/KDG -->
                    <option value="soc">Sociologie</option>                               <!-- UA/ -->
                    <option value="taal">Taal- en letterkunde</option>                    <!-- UA/ -->
                    <option value="toegeco">Toegepaste economische wetenschappen</option> <!-- UA/KUL -->
                    <option value="toegtaal">Toegepaste taalkunde</option>                <!-- UA/KUL/ -->
                    <option value="verpl">Verpleegkunde</option>                          <!-- AP/KDG -->
                    <option value="wijs">Wijsbegeerte</option>                            <!-- UA/ -->
                    <option value="wisk">Wiskunde</option>                                <!-- UA/ -->
                </select>
                <noscript><input type="submit" value="Submit"></noscript>
            </form>
            
            <div class="unilist clearfix">
                <ul class="clearfix">
                    <li><a href="#" id="ams" class="active default">Antwerp Management School <i class="fa fa-chevron-right"></i></a></li>
                    <li><a href="#" id="ap"  class="default">Artesis Plantijn Hogeschool <i class="fa fa-chevron-right"></i></a></li>
                    <li><a href="#" id="hz"  class="default">Hogere Zeevaartschool <i class="fa fa-chevron-right"></i></a></li>
                    <li><a href="#" id="itg" class="default">Instituut voor Tropische Geneeskunde <i class="fa fa-chevron-right"></i></a></li>
                    <li><a href="#" id="kdg" class="default">Karel de Grote Hogeschool <i class="fa fa-chevron-right"></i></a></li>
                    <li><a href="#" id="kul" class="default">KU Leuven Campus Antwerpen <i class="fa fa-chevron-right"></i></a></li>
                    <li><a href="#" id="tm"  class="default">Thomas More Hogeschool <i class="fa fa-chevron-right"></i></a></li>
                    <li><a href="#" id="ua"  class="default">Universiteit Antwerpen <i class="fa fa-chevron-right"></i></a></li>
                </ul>
            </div>                
            <div class="uniinfo">
                <div class="active">
                    <h1>Antwerp Management School</h1>
                    <p>Antwerp Management School is een autonome divisie van Universiteit Antwerpen gespecialiseerd in marketing, management en entrepeneurschap. De school biedt specifieke masters aan en geen bachelors.</p>                    
                    <h2>Campus</h2>
                    <p>Sint-Jacobsmarkt 9-13</p>                    
                    <h2>Wat kan je hier studeren?</h2>
                    <p>Marketing, General Management, International Business...</p>
                    <a href="https://www.antwerpmanagementschool.be/programmas/voltijds/" target="_blank">Bekijk alle studierichtingen</a>                    
                    <h2>Contact</h2>
                    <p><a href="https://www.antwerpmanagementschool.be/" target="_blank">Website</a></p>
                    <p><a href="https://www.onderwijskiezer.be/v2/hoger/hoger_instellingen_detail.php?instelling=77&var=I" target="_blank">Meer info op onderwijskiezer.be</a></p>
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
                    <p>Artesis Plantijn biedt een totaalpakket van professionele en academische bachelors aan. Ontdek met de filter bovenaan of klik door naar hun volledige lijst.</p>
                    <a href="https://www.ap.be/node/1090" target="_blank">Bekijk alle studierichtingen</a>
                    <h2>Contact</h2>
                    <p><a href="https://www.ap.be/" target="_blank">Website</a></p>
                    <p><a href="https://www.onderwijskiezer.be/v2/hoger/hoger_instellingen_detail.php?instelling=39&var=I" target="_blank">Meer info op onderwijskiezer.be</a></p>
                    <p>+32 (0)3 220 54 00</p>
                    <p>info@ap.be</p>
                </div>                   
                <div>
                    <h1>Hogere Zeevaartschool</h1>
                    <p>De Hogere Zeevaartschool is de enige hogeschool in België die de academische opleidingen Nautische Wetenschappen en de professionele opleiding Scheepswerktuigkunde aanbiedt. Studeren aan de HZS betekent studeren in een internationale leeromgeving: zij hebben ruim 35% buitenlandse studenten van 20 verschillende nationaliteiten.</p>                    
                    <h2>Campus</h2>
                    <p>Noordkasteel Oost 6</p>                    
                    <h2>Wat kan je hier studeren?</h2>
                    <p>Nautische Wetenschappen en Scheepswerktuigkunde</p>
                    <a href="https://www.hzs.be/nl/ontdek-alles-over-hzs/studieaanbod" target="_blank">Bekijk alle studierichtingen</a>
                    <h2>Contact</h2>
                    <p><a href="https://www.hzs.be/">Website</a></p>
                    <p><a href="https://www.onderwijskiezer.be/v2/hoger/hoger_instellingen_detail.php?instelling=38&var=I" target="_blank">Meer info op onderwijskiezer.be</a></p>
                    <p>+32 (0)3 205 64 30</p>
                    <p>info@hzs.be</p>
                </div>                   
                <div>
                    <h1>Instituut voor Tropische Geneeskunde</h1>
                    <p>Het Instituut voor Tropische Geneeskunde biedt al meer dan een eeuw lang een venster op de wereld. Studenten uit meer dan 30 landen specialiseren zich hier in Antwerpen in tropische infectieziekten en gezondheidszorg in ontwikkelingslanden. Hun vorsers doen onderzoek in het laboratorium en in het veld, in samenwerking met partners in Afrika, Azië en Latijns-Amerika. Hun artsen en verpleegkundigen bieden reisadvies, vaccinaties en zorg op maat voor importziekten, hiv en soa’s.</p>                    
                    <h2>Campus</h2>
                    <p>Nationalestraat 155</p>                    
                    <h2>Wat kan je hier studeren?</h2>
                    <p>Klinische wetenschappen, volks- en persoonlijke gezondheid en tropische geneeskunde</p>
                    <a href="https://edu.itg.be/course" target="_blank">Bekijk alle studierichtingen</a>
                    <h2>Contact</h2>
                    <p><a href="http://www.itg.be/" target="_blank">Website</a></p>
                    <p><a href="https://www.onderwijskiezer.be/v2/hoger/hoger_instellingen_detail.php?instelling=76&var=I">Meer info op onderwijskiezer.be</a></p>
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
                    <p><a href="https://www.onderwijskiezer.be/v2/hoger/hoger_instellingen_detail.php?instelling=40&var=I" target="_blank">Meer info op onderwijskiezer.be</a></p>
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
                    <p><a href="https://www.onderwijskiezer.be/v2/hoger/hoger_instellingen_detail.php?instelling=33&var=I" target="_blank">Meer info op onderwijskiezer.be</a></p>
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
                    <p><a href="https://www.onderwijskiezer.be/v2/hoger/hoger_instellingen_detail.php?instelling=44&var=I" target="_blank">Meer info op onderwijskiezer.be</a></p>
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
                    <p><a href="https://www.onderwijskiezer.be/v2/hoger/hoger_instellingen_detail.php?instelling=36&var=I" target="_blank">Meer info op onderwijskiezer.be</a></p>
                    <p>+32 (0)3 265 41 11</p>
                    <p>info@ua.be</p>
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