<?php
include_once 'language.php';
?>

<!DOCTYPE html>
<html lang="cs-cz">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300&display=swap" rel="stylesheet">
    <!--link rel="stylesheet" href="styles/stylereset.css"-->
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <div class="container" id="home">
        <nav class="navbar">
            <div class="nav_home">
                <span class="home-icon">
                    <a class="nav-link" href="#home"><img src="img/icons/home.jpg" alt="home icon"></a>
                </span>
                <span class="toggle-icon">
                    <a id="toggle-icon">
                        <img src="img/menu.png" alt="toggle menu icon">
                    </a>
                </span>
            </div>

            <div class="menu-items">
                <span class="nav-item">
                    <a class="nav-link" href="#aboutme">o mně</a>
                </span>
                <span class="nav-item">
                    <a class="nav-link" href="#skills">dovednosti</a>
                </span>

                <span class="nav-item">
                    <a class="nav-link" href="#projects">projekty</a>
                </span>

                <span class="nav-item">
                    <a class="nav-link" href="#contact">kontakt</a>
                </span>

            </div>
        </nav>


        <section class="intro">
            <div class="title">
                <h1>Dobrý den.
                    <br>Jsem <span class="name">Alžběta Možíšová</span>.
                </h1>
            </div>

            <div class="subtitle">
                <div class="arrow">
                    <a href="#aboutme"><img src="img/arrow_down.png" width="325" height="485" alt="arrow down"></a>
                </div>
                <div class="subheading">
                    <h3>Programátorka, která čeká na svou příležitost.</h3>
                    <div class="contactIcons">
                        <a href="mailto:amozisova@gmail.com"><img src="img/icons/message.png" alt="message icon"></a>
                        <a href="https://github.com/amozisova" target="_blank"><img src="img/icons/github.png" alt="GitHub icon"></a>
                        <a href="http://www.linkedin.com/in/mozisa" target="_blank"><img src="img/icons/linkedin-logo.png" alt="LinkedIn icon"></a>
                    </div>
                </div>

            </div>
        </section>
    </div>


    <div class="container">
        <section class="main" id="aboutme">
            <div class="section_title">
                <h1>O mně</h1>
            </div>
            <div class="main_content">
                <div>
                    <img src="img/mozisova_face.jpg" alt="Alzbeta Mozisova" height="223" width="200" class="story_img">
                </div>
                <div class="tab-wrapper">
                    <div class="tabs">
                        <button class="tab-button active" data-id="tab-me">O mně</button>
                        <button class="tab-button" data-id="tab-edu">Vzdělání</button>
                        <button class="tab-button" data-id="tab-courses">Kurzy</button>
                    </div>
                    <div class="storybox">
                        <div class="tab-content active" id="tab-me">
                            Už během studia na střední škole mě zajímaly počítače, koupila jsem si učebnici HTML a učila se psát web v poznámkovém bloku… Moje první webová stránka byl deníček, kam jsem zapisovala své zážitky. Další stránka byla o hudbě, která mě zajímala. Během let jsem občas vytvořila webové stránky pro někoho známého, pro nový studijní obor, pro studentský spolek, který jsme založili…
                            <p>Ale ve svém studiu jsem se vydala humanitním směrem a věnovala se sociologii. Řadu let jsem se profesně pohybovala v sociální oblasti, převážně v neziskovém sektoru, v tématech domácího násilí a ohrožených dětí.</p>
                            <p>Ve svých 35 letech jsem se však rozhodla pro zásadní kariérní změnu – vzpomněla jsem si na svou zálibu ve vytváření webů, na svůj zájem o počítače a internet, probudila se ve mně touha zase něco vytvářet (od nul a jedniček) a vydala jsem se směrem k IT, s cílem nezůstat u webových stránek, ale naučit se programovat.</p>
                            <p>Teď čekám na svou první pracovní příležitost, která mi umožní být skutečně programátorkou a věnovat se tomu naplno.</p>
                        </div>
                        <div class="tab-content" id="tab-edu">
                            <ul>
                                <h5>Rekvalifikační kurz Programátor WWW aplikací v PHP</h5>
                                <h6><a href="https://www.itnetwork.cz/prace-a-podnikani-v-it/rekvalifikacni-kurzy/rekvalifikacni-kurzy-php" target="_blank">ITnetwork s.r.o. - IT AKADEMIE</a></h6>
                                <li>Základní konstrukce jazyka PHP (zakončeno certifikátem)</li>
                                <li>Objektově-orientované programování v PHP (zakončeno certifikátem)</li>
                                <li>MVC architektura v PHP (zakončeno certifikátem)</li>
                                <li>Moderní webdesign</li>
                                <li>MySQL</li>
                                <li>Základní konstrukce jazyka JavaScript</li>
                                <li>PHP frameworky (Nette, Symfony, Laravel)</li>
                                <li>Responzivní webdesign</li>
                                <li>Bootstrap</li>
                                <li>JavaScriptová knihovna jQuery</li>
                            </ul>
                        </div>
                        <div class="tab-content" id="tab-courses">
                            <ul>
                                <h5>The Complete 2022 Web Development Bootcamp</h5>
                                <h6>Angela Yu (<a href="https://www.udemy.com/course/the-complete-web-development-bootcamp" target="_blank">udemy.com</a>)</h6>
                                <p>
                                <h5>Write PHP Like a Pro: Build a PHP MVC Framework From Scratch</h5>
                                <h6>Dave Hollingworth (<a href="https://www.udemy.com/course/php-mvc-from-scratch" target="_blank">udemy.com</a>)</h6>
                                </p>
                                <p>
                                <h5>Ultimate Web Designer & Web Developer Course</h5>
                                <h6>Brad Hussey (<a href="https://www.udemy.com/course/web-developer-course" target="_blank">udemy.com</a>)</h6>
                                </p>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </div>


    <div class="container">
        <section class="main" id="skills">
            <div class="section_title">
                <h1>Dovednosti</h1>
            </div>
            <div class="skills_wrapper">
                <div class="skill">
                    <span class="skill_title">pravidelně používám</span>
                    <img src="img/logos/php_logo.png" alt="PHP, MySQL logo">
                    <img src="img/logos/html5_logo.png" alt="HTML5 logo">
                    <img src="img/logos/css3_logo.png" alt="CSS3 logo">
                </div>

                <div class="skill">
                    <span class="skill_title">další technologie</span>
                    <img src="img/logos/js_logo.png" alt="JavaScript logo">
                    <img src="img/logos/sass_logo.png" alt="SASS logo">
                </div>

                <div class="skill">
                    <span class="skill_title">knihovny</span>
                    <img src="img/logos/symfony_logo.png" alt="Symfony logo">
                    <img src="img/logos/bootstrap_logo.png" alt="Bootstrap logo">
                    <img src="img/logos/jquery_logo.png" alt="jQuery logo">
                </div>

                <div class="skill">
                    <span class="skill_title">nástroje</span>
                    <img src="img/logos/xampp_logo.png" alt="XAMPP logo">
                    <img src="img/logos/git_logo.png" alt="Git logo">
                    <img src="img/logos/composer_logo.png" alt="Composer logo">
                    <img src="img/logos/vscode_logo.png" alt="VSCode logo">
                    <img src="img/logos/figma_logo.png" alt="Figma logo">
                    <img src="img/logos/wordpress_logo.png" alt="Wordpress logo">

                </div>

            </div>
        </section>
    </div>

    <div class="container">
        <section class="main" id="projects">
            <div class="section_title">
                <h1>Projekty</h1>
            </div>
            <div class="projects_wrapper">

                <div class="project">
                    <div class="project-top">
                        <div class="project-img">
                            <img src="img/projects/portfolio.png" alt="project thumbnail">
                        </div>
                        <div class="project-info">
                            <h4>projekt Evidence pojistných událostí</h4>
                            <p>Vývoj webové aplikace pro evidenci pojistných událostí v třívrstvé architektuře (MVC) v technologiích:</p>
                            <ul>
                                <li>PHP, MySQL</li>
                                <li>HTML5, CSS3</li>
                                <li>Twig, Bootstrap</li>
                            </ul>
                        </div>
                    </div>
                    <div class="project-buttons">
                        <button class="tab-button">Zdrojový kód</button>
                        <button class="tab-button">Demo</button>
                    </div>
                </div>

                <div class="project">
                    <div class="project-top">
                        <div class="project-img">
                            <img src="img/projects/portfolio.png" alt="project thumbnail">
                        </div>
                        <div class="project-info">
                            <h4>Osobní webové portfolio</h4>
                            <p>Responzivní webové stránky v technologiích:</p>
                            <ul>
                                <li>PHP</li>
                                <li>HTML5, CSS3</li>
                                <ul>
                                    <li>CSS Grid, CSS Flexbox</li>
                                </ul>
                                <li>JavaScript</li>
                            </ul>
                        </div>
                    </div>
                    <div class="project-buttons">
                        <a href="https://github.com/amozisova/portfolio" target="_blank"><button class="tab-button">Zdrojový kód</button></a>
                    </div>
                </div>

                <div class="project">
                    <div class="project-top">
                        <div class="project-img">
                            <img src="img/projects/drumkit.png" alt="project thumbnail">
                        </div>
                        <div class="project-info">
                            <h4>Drum kit</h4>
                            <p>Online sada bubnů na hraní.</p>
                            <p>Moje verze projektu z <a href="https://www.udemy.com/course/the-complete-web-development-bootcamp" target=_"blank">kurzu Angely Yu</a> k procvičení JavaScriptu a DOM manipulace.</p>
                            <p>Použité technologie:</p>
                            <ul>
                                <li>JavaScript</li>
                                <li>HTML5, CSS3</li>
                            </ul>
                        </div>
                    </div>
                    <div class="project-buttons">
                        <a href="https://github.com/amozisova/drumkit" target="_blank"><button class="tab-button">Zdrojový kód</button></a>
                        <a href="https://amozisova.github.io/drumkit/" target="_blank"><button class="tab-button">Demo</button></a>
                    </div>
                </div>



            </div>

            <!-- second row of projects -->

            <div class="projects_wrapper">

                <div class="project">
                    <div class="project-top">
                        <div class="project-img">
                            <img src="img/projects/order.png" alt="project thumbnail">
                        </div>
                        <div class="project-info">
                            <h4>Frontend Mentor challenge: Order summary component</h4>
                            Mé zpracování designu objednávky dle zadání <a href="https://www.frontendmentor.io/" target="_blank">Frontend Mentor</a>.
                            <p>Použité technologie:</p>
                            <ul>
                                <li>HTML5, CSS3</li>
                                <ul>
                                    <li>CSS Grid, CSS Flexbox</li>
                                    <li>Mobile-first</li>
                                </ul>
                            </ul>
                        </div>
                    </div>
                    <div class="project-buttons">
                        <a href="https://github.com/amozisova/order-summary-FMchallenge" target="_blank"><button class="tab-button">Zdrojový kód</button></a>
                        <a href="https://www.frontendmentor.io/solutions/order-summary-card-mobilefirst-6FT1wc-Df" target="_blank"><button class="tab-button">Demo</button></a>
                    </div>
                </div>

                <div class="project">
                    <div class="project-top">
                        <div class="project-img">
                            <img src="img/projects/qr-th.jpg" alt="project thumbnail">
                        </div>
                        <div class="project-info">
                            <h4>Frontend Mentor challenge: QR code component</h4>
                            Mé zpracování designu QR kódu dle zadání <a href="https://www.frontendmentor.io/" target="_blank">Frontend Mentor</a>.
                            <p>Použité technologie:</p>
                            <ul>
                                <li>HTML5, CSS3</li>
                                <ul>
                                    <li>CSS Grid</li>
                                </ul>
                            </ul>
                        </div>
                    </div>
                    <div class="project-buttons">
                        <a href="https://github.com/amozisova/Frontend-Mentor---QR-code-component" target="_blank"><button class="tab-button">Zdrojový kód</button></a>
                        <a href="https://www.frontendmentor.io/solutions/qr-code-component-using-css-grid-GNvblQ89S" target="_blank"><button class="tab-button">Demo</button></a>
                    </div>
                </div>

                <div class="project">
                    <div class="project-top">
                        <div class="project-img">
                            <img src="img/projects/drumkit.png" alt="project thumbnail">
                        </div>
                        <div class="project-info">
                            <h4>-doplnit-</h4>

                            <p>Použité technologie:</p>
                            <ul>
                                <li>JavaScript</li>
                                <li>HTML5, CSS3</li>
                            </ul>
                        </div>
                    </div>
                    <div class="project-buttons">
                        <a href="https://github.com/amozisova/drumkit" target="_blank"><button class="tab-button">Zdrojový kód</button></a>
                        <a href="https://amozisova.github.io/drumkit/" target="_blank"><button class="tab-button">Demo</button></a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- contact -->
    <div class="container">
        <section class="main" id="contact">
            <div class="section_title">
                <h1>Kontakt</h1>
            </div>
            <div class="contacts_content">

                <div class="contactIcons">
                    <a href="mailto:amozisova@gmail.com"><img src="img/icons/message.png" alt="message icon"></a>
                    <a href="https://github.com/amozisova" target="_blank"><img src="img/icons/github.png" alt="GitHub icon"></a>
                    <a href="http://www.linkedin.com/in/mozisa" target="_blank"><img src="img/icons/linkedin-logo.png" alt="LinkedIn icon"></a>
                </div>
                <div class="wrapper">
                    <header class="contact_title">
                        <h3>Zanechte mi zprávu</h3>
                    </header>
                    <div class="contactbox">

                    <form method="POST" action="">
                        <label for="name">Vaše jméno:</label>
                        <input type="text" id="name" name="name" required>
                        
                            <label for="surname">Vaše příjmení:</label>
                            <input type="text" id="surname" name="surname" required>
                        
                            <label for="email">Váš e-mail:</label>
                            <input type="email" id="email" name="email" required>
                        
             
                            <label for="subject">Předmět:</label>
                            <input type="text" id="subject" name="subject" required>
                       
                        
                        <label for="message">Vaše zpráva:</label>
                        <textarea id="message" name="message" rows="8" cols="50" required>
                        </textarea>

                        <button type="submit" class="form_button tab-button">Odeslat</button>

                    </form>



                    </div>
                </header>
            </div>
        </section>
    </div>

    <script src="js/script.js"></script>
</body>

</html>