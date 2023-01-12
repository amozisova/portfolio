<?php
require_once 'email.php';
?>

<!DOCTYPE html>
<html lang="cs-cz">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alzbeta Mozisova - portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <div class="container" id="home">
        <nav class="navbar">
            <div class="nav_home">
                <span class="home-icon">
                    <a class="nav-link" href="index.php#home"><img src="img/icons/home.jpg" alt="home icon"></a>
                </span>
                <span class="toggle">
                    <a id="toggle-icon">
                        <img src="img/icons/menu.png" alt="toggle menu icon">
                    </a>
                </span>
            </div>

            <div class="menu-items">
                <span class="nav-item">
                    <a class="nav-link" href="index.php#aboutme">o mně</a>
                </span>
                <span class="nav-item">
                    <a class="nav-link" href="index.php#skills">dovednosti</a>
                </span>

                <span class="nav-item">
                    <a class="nav-link" href="index.php#projects">projekty</a>
                </span>

                <span class="nav-item">
                    <a class="nav-link" href="index.php#contact">kontakt</a>
                </span>

            </div>
        </nav>


        <section class="intro">
            <header class="title">
                <h1>Dobrý den.
                    <br>Jsem <span class="name">Alžběta Možíšová</span>.
                </h1>
            </header>

            <div class="intro-content">
                <div class="arrow">
                    <a href="#aboutme"><img src="img/arrow_down.png" width="325" height="485" alt="arrow down"></a>
                </div>
                <div class="subheading">
                    <h3>PHP programátorka.</h3>
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
        <main class="content" id="aboutme">
            <header class="section_title">
                <h1>O mně</h1>
            </header>
            <section class="main-content">
                <div>
                    <img src="img/mozisova_face.jpg" alt="Alzbeta Mozisova" height="223" width="200" class="story_img">
                </div>
                <div class="tab-wrapper">
                    <nav class="tabs">
                        <button class="tab-button active" data-id="tab-work">Práce</button>
                        <button class="tab-button" data-id="tab-edu">Vzdělání</button>
                        <button class="tab-button" data-id="tab-courses">Kurzy</button>
                        <button class="tab-button" data-id="tab-me">O mně</button>
                    </nav>
                    <article class="storybox">

                        <div class="tab-content active" id="tab-work">
                            Od října 2022 pracuji jako vývojářka webových aplikací v jazyce PHP.

                            <p>Řadu let jsem se profesně pohybovala v sociální oblasti, převážně v neziskovém sektoru, v tématech domácího násilí a ohrožených dětí.
                                <br>V lednu 2022 jsem se však rozhodla pro zásadní kariérní změnu – vzpomněla jsem si na svou zálibu ve vytváření webů, na svůj zájem o počítače a internet – a vydala jsem se směrem k IT, s cílem nezůstat u webových stránek, ale naučit se programovat.
                            </p>
                            <p>Absolvovala jsem rekvalifikační kurz na pozici „programátor webových aplikací v PHP“ a několik kurzů zaměřených na web development, abych se mohla stát programátorkou a věnovat se tomu naplno.</p>
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
                        <div class="tab-content" id="tab-me">
                            Už během studia na střední škole mě zajímaly počítače, koupila jsem si učebnici HTML a učila se psát web v poznámkovém bloku… Moje první webová stránka byl deníček, kam jsem zapisovala své zážitky. Další stránka byla o hudbě, která mě zajímala. Během let jsem občas vytvořila webové stránky pro někoho známého, pro nový studijní obor, pro studentský spolek, který jsme založili…
                            <p>Ale ve svém studiu jsem se vydala humanitním směrem a věnovala se sociologii. Řadu let jsem se profesně pohybovala v sociální oblasti, převážně v neziskovém sektoru.</p>
                            <p>V 35 letech jsem se však rozhodla pro zásadní kariérní změnu, probudila se ve mně touha zase něco vytvářet (od nul a jedniček) a rozhodla jsem se vkročit naplno do světa IT.
                        </div>
                    </article>
                </div>
            </section>
        </main>
    </div>


    <div class="container">
        <section class="content" id="skills">
            <header class="section_title">
                <h1>Dovednosti</h1>
            </header>
            <article class="skills-content">
                <div class="skill">
                    <header class="skill_title">pravidelně používám</header>
                    <img src="img/logos/php_logo.png" alt="PHP, MySQL logo">
                    <img src="img/logos/html5_logo.png" alt="HTML5 logo">
                    <img src="img/logos/css3_logo.png" alt="CSS3 logo">
                </div>

                <div class="skill">
                    <header class="skill_title">další technologie</header>
                    <img src="img/logos/js_logo.png" alt="JavaScript logo">
                    <img src="img/logos/sass_logo.png" alt="SASS logo">
                </div>

                <div class="skill">
                    <header class="skill_title">knihovny</header>
                    <img src="img/logos/nette_logo.png" alt="Nette logo">
                    <img src="img/logos/bootstrap_logo.png" alt="Bootstrap logo">
                    <img src="img/logos/jquery_logo.png" alt="jQuery logo">
                </div>

                <div class="skill">
                    <header class="skill_title">nástroje</header>
                    <img src="img/logos/git_logo.png" alt="Git logo">
                    <img src="img/logos/composer_logo.png" alt="Composer logo">
                    <img src="img/logos/docker_logo.png" alt="Docker logo">
                    <img src="img/logos/vscode_logo.png" alt="VSCode logo">
                    <img src="img/logos/figma_logo.png" alt="Figma logo">
                    <img src="img/logos/wordpress_logo.png" alt="Wordpress logo">
                </div>
            </article>
        </section>
    </div>

    <div class="container">
        <section class="content" id="projects">
            <header class="section_title">
                <h1>Projekty</h1>
            </header>
            <!-- first row of projects -->
            <div class="projects_wrapper">
                <article class="project">
                    <div class="project-top">
                        <div class="project-img">
                            <img src="img/projects/ntt.png" alt="nette app thumbnail">
                        </div>
                        <div class="project-info">
                            <h4>projekt Jednoduchý redakční systém s použitím frameworku Nette</h4>
                            <p>Obsahuje admin sekci pro správu článků, ve dvou úrovních uživatelských oprávnění (admin, redaktor).</p>
                            <ul>
                                <li>PHP, HTML5</li>
                                <li>Nette, Latte</li>
                                <li>MySQL, Javascript, CSS</li>
                            </ul>
                        </div>
                    </div>
                    <div class="project-buttons">
                        <a href="https://ntt.mozisa.eu" target="_blank"><button class="tab-button">Demo</button></a>
                        <span class="project-note">
                            <h5>Pokud si chcete vyzkoušet i admin část aplikace, <a href="index.php#contact">napište mi.</a></h5>
                        </span>
                    </div>
                </article>


                <article class="project">
                    <div class="project-top">
                        <div class="project-img">
                            <img src="img/projects/insapp.png" alt="app thumbnail">
                        </div>
                        <div class="project-info">
                            <h4>projekt Evidence a správa pojištění</h4>
                            <p>Vývoj webové aplikace pro evidenci pojištění v třívrstvé architektuře (MVC) v technologiích:</p>
                            <ul>
                                <li>PHP, HTML5, CSS3</li>
                                <li>MySQL, Twig</li>
                                <li>Javascript</li>
                            </ul>
                        </div>
                    </div>
                    <div class="project-buttons">
                        <a href="https://github.com/amozisova/ins_app" target="_blank"><button class="tab-button">Zdrojový kód</button></a>
                        <a href="https://insapp.mozisa.eu" target="_blank"><button class="tab-button">Demo</button></a>
                    </div>
                </article>

                <article class="project">
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
                </article>
            </div>

            <!-- second row of projects -->
            <div class="projects_wrapper">

                <article class="project">
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
                </article>

                <article class="project">
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
                        <a href="https://github.com/amozisova/Frontend-Mentor---order-summary" target="_blank"><button class="tab-button">Zdrojový kód</button></a>
                        <a href="https://www.frontendmentor.io/solutions/order-summary-card-mobilefirst-6FT1wc-Df" target="_blank"><button class="tab-button">Demo</button></a>
                    </div>
                </article>

                <article class="project">
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
                </article>


            </div>
        </section>
    </div>

    <div class="container">
        <section class="content" id="contact">
            <header class="section_title">
                <h1>Kontakt</h1>
            </header>
            <div class="contacts_wrapper">

                <nav class="contactIcons">
                    <a href="mailto:amozisova@gmail.com"><img src="img/icons/message.png" alt="message icon"></a>
                    <a href="https://github.com/amozisova" target="_blank"><img src="img/icons/github.png" alt="GitHub icon"></a>
                    <a href="http://www.linkedin.com/in/mozisa" target="_blank"><img src="img/icons/linkedin-logo.png" alt="LinkedIn icon"></a>
                </nav>
                <div class="contact_form_wrapper ">
                    <header class="contact_title">
                        <h3>Zanechte mi zprávu</h3>
                    </header>
                    <!-- displays form validation status from email.php -->
                    <div class="php_formStatus" id="status">
                        <?php echo $formStatus ? $formStatus : ''; ?>
                    </div>

                    <div class="contactbox">

                        <form method="POST" action="email.php" id="contact-form">

                            <label for="name">Vaše jméno:</label>
                            <input type="text" id="name" name="name">
                            <div class="formCheck">
                                <img src="img/icons/error.png" class="failed">
                                <img src="img/icons/check.png" class="passed">
                                <div class="errorMessage"></div>
                            </div>

                            <label for="email">Váš e-mail:</label>
                            <input type="email" id="email" name="email">
                            <div class="formCheck">
                                <img src="img/icons/error.png" class="failed">
                                <img src="img/icons/check.png" class="passed">
                                <div class="errorMessage"></div>
                            </div>

                            <label for="subject">Předmět:</label>
                            <input type="text" id="subject" name="subject">
                            <div class="formCheck">
                                <img src="img/icons/error.png" class="failed">
                                <img src="img/icons/check.png" class="passed">
                                <div class="errorMessage"></div>
                            </div>

                            <label for="message">Vaše zpráva:</label>
                            <textarea id="message" name="message" rows="8" cols="50"></textarea>
                            <div class="formCheck">
                                <img src="img/icons/error.png" class="failed">
                                <img src="img/icons/check.png" class="passed">
                                <div class="errorMessage"></div>
                            </div>

                            <button type="submit" class="form_button tab-button">Odeslat</button>

                        </form>
                    </div>
                </div>
                <footer class="copyright">
                    ©2023 |
                    <a href="https://www.mozisa.eu">Alžběta Možíšová</a>
                </footer>
            </div>

        </section>
    </div>

    <script src="js/script.js"></script>
</body>

</html>