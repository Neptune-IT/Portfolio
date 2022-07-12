<?php
    require_once $_SERVER["DOCUMENT_ROOT"] . "/Portfolioo/app/projects/Projects.php";
    require_once $_SERVER["DOCUMENT_ROOT"] . "/Portfolioo/app/projects/ProjectsManager.php";
    require_once $_SERVER["DOCUMENT_ROOT"] . "/Portfolioo/app/langs/php/LangTranslator.php";
    __load_projects();
    $backgound_id = mt_rand(0, 11);

    if (!isset($_COOKIE["lang"])){
        $_COOKIE["lang"] = "spanish";
        setcookie("lang", "english", time() + 60 * 60 * 24 * 30 * 12 * 100);
    }
?>

<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <title> Neptune </title>

        <!-- Head Meta -->
        <link rel="icon" type="image/png" sizes="16x16" href="images/icon.ico">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta property="og:title" content="Neptune | Portfolio">
        <meta property="og:image" content="https://neptune-it.xyz/images/meta-img.png">
        <meta property="og:description" content="Neptune's portfolio website.">
        <meta name="author" content="Neptune">

        <!-- CSS Style & JS de Merde -->
        <link rel="stylesheet" href="style/css/base.css">
        <link rel="stylesheet" href="style/css/main.css">
        <link rel="stylesheet" href="style/css/vendor.css">
        <script src="style/js/modernizr.js"></script>
    </head>

    <body id="top">
        <div id="preloader">
            <div id="loader" class="dots-fade">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <script>
                /*setTimeout(function (){
                    document.getElementById("preloader").remove();
                }, 1500);*/
            </script>
        </div>

        <header class="s-header">
            <div class="header-logo">
                <a href="../">
                    <img src="images/logo.svg" alt="Homepage">
                </a>
            </div>

            <div class="header-content">
                <nav class="row header-nav-wrap">
                    <ul class="header-nav">
                        <li><a id="NAV_HOME" class="smoothscroll" href="#home" title="Intro"> <?php echo translate("NAV_HOME", $_COOKIE["lang"]); ?> </a></li>
                        <li><a id="NAV_ABOUT" class="smoothscroll" href="#about" title="About"> <?php echo translate("NAV_ABOUT", $_COOKIE["lang"]); ?> </a></li>
                        <li><a id="NAV_SKILLS" class="smoothscroll" href="#skills" title="Skills"> <?php echo translate("NAV_SKILLS", $_COOKIE["lang"]); ?> </a></li>
                        <li><a id="NAV_PROJECTS" class="smoothscroll" href="#projects" title="Projects"> <?php echo translate("NAV_PROJECTS", $_COOKIE["lang"]); ?> </a></li>
                        <li><a id="NAV_CONTACTS" class="smoothscroll" href="#contacts" title="Contacts"> <?php echo translate("NAV_CONTACTS", $_COOKIE["lang"]); ?> </a></li>
                    </ul>
                </nav>
                <select class="btn btn--stroke btn--small" id="language-changer">
                    <?php if ($_COOKIE["lang"] === "english"): ?>
                        <option value="english" id="LANG_ENGLISH"> English </option>
                        <option value="french" id="LANG_FRENCH"> French </option>
                        <option value="spanish" id="LANG_SPANISH"> Spanish </option>
                    <?php elseif ($_COOKIE["lang"] === "french"): ?>
                        <option value="french"> Français </option>
                        <option value="english"> Anglais </option>
                        <option value="spanish"> Espagnol </option>
                    <?php elseif ($_COOKIE["lang"] === "spanish"): ?>
                        <option value="spanish"> Espanol </option>
                        <option value="french"> Frances </option>
                        <option value="english"> Ingles </option>
                    <?php else: ?>
                        <option value="english"> English </option>
                        <option value="french"> French </option>
                        <option value="spanish"> Spanish </option>
                    <?php endif; ?>
                </select>
                <script type="module">
                    import { change } from "./app/langs/changer.js";

                    document.getElementById('language-changer').addEventListener('change', function (e) {
                        const lang = e.target.value;
                        document.cookie = "lang=" + lang + "; expires=Thu, 31 Dec 2099 23:59:59 GMT";
                        change(lang);
                    });
                </script>
            </div>
            <a class="header-menu-toggle" href=""><span> Menu </span></a>
        </header>

        <section id="home" class="s-hero target-section" data-parallax="scroll" data-image-src='<?php echo "images/backgrounds/background{$backgound_id}.jpg"; ?>' data-natural-width=3840 data-natural-height=2160 data-position-y=center>
            <div class="row hero-content">
                <div class="column large-full">
                    <h1 id="HOME_PRESENTATION_TEXT">
                        <?php echo translate("HOME_PRESENTATION_TEXT", $_COOKIE["lang"]); ?>
                    </h1>

                    <ul class="hero-social">
                        <li>
                            <a href="https://github.com/Neptune-IT" title=""> Github </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/neptune_it/" title=""> Instagram </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="hero-scroll">
                <a href="#about" class="scroll-link smoothscroll">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 24l-8-9h6v-15h4v15h6z"/></svg>
                </a>
            </div>
        </section>

        <section id="about" class="s-about target-section">
            <div class="s-about__section s-about__section--profile">
                <div class="right-vert-line"></div>
                <div class="row">
                    <div class="column large-6 medium-8 tab-full">
                        <div class="section-intro" data-num="01" data-aos="fade-up">
                            <h3 id="ABOUT_TITLE" class="subhead"> <?php echo translate("ABOUT_TITLE", $_COOKIE["lang"]); ?> </h3>
                            <h1 id="ABOUT_SUBTITLE" class="display-1"> <?php echo translate("ABOUT_SUBTITLE", $_COOKIE["lang"]); ?> </h1>
                        </div>
                        <div class="profile-pic" data-aos="fade-up">
                            <img src="images/profile-pic.jpg" srcset="images/profile-pic.jpg 1x, images/profile-pic@2x.jpg 2x" alt="">
                        </div>
                        <h3 id="ABOUT_PROFILE_TITLE" data-aos="fade-up"> <?php echo translate("ABOUT_PROFILE_TITLE", $_COOKIE["lang"]); ?> </h3>

                        <p id="ABOUT_PROFILE_TEXT" data-aos="fade-up">
                            <?php echo translate("ABOUT_PROFILE_TEXT", $_COOKIE["lang"]); ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="s-about__section">
                <div class="row">
                    <div class="column">
                        <h3 id="CAREER_TITLE" data-aos="fade-up"> <?php echo translate("CAREER_TITLE", $_COOKIE["lang"]); ?> </h3>
                    </div>
                </div>
                <div class="row block-large-1-2 block-900-full work-positions">
                    <div class="column" data-aos="fade-up">
                        <div class="position">
                            <div class="position__header">
                                <h6>
                                    <span class="position__co" id="CAREER_COLUMN1_TITLE"> <?php echo translate("CAREER_COLUMN1_TITLE", $_COOKIE["lang"]); ?> </span>
                                    <span class="position__pos" id="CAREER_COLUMN1_SUBTITLE"> <?php echo translate("CAREER_COLUMN1_SUBTITLE", $_COOKIE["lang"]); ?> </span>
                                </h6>
                                <div class="position__timeframe" id="CAREER_COLUMN1_DATE">
                                    <?php echo translate("CAREER_COLUMN1_DATE", $_COOKIE["lang"]); ?>
                                </div>
                            </div>
                            <p id="CAREER_COLUMN1_TEXT">
                                <?php echo translate("CAREER_COLUMN1_TEXT", $_COOKIE["lang"]); ?>
                            </p>
                        </div>
                    </div>
                    <div class="column" data-aos="fade-up">
                        <div class="position">
                            <div class="position__header">
                                <h6>
                                    <span class="position__co" id="CAREER_COLUMN2_TITLE"> <?php echo translate("CAREER_COLUMN2_TITLE", $_COOKIE["lang"]); ?> </span>
                                    <span class="position__pos" id="CAREER_COLUMN2_SUBTITLE"> <?php echo translate("CAREER_COLUMN2_SUBTITLE", $_COOKIE["lang"]); ?> </span>
                                </h6>
                                <div class="position__timeframe" id="CAREER_COLUMN2_DATE">
                                    <?php echo translate("CAREER_COLUMN2_DATE", $_COOKIE["lang"]); ?>
                                </div>
                            </div>
                            <p id="CAREER_COLUMN2_TEXT">
                                <?php echo translate("CAREER_COLUMN2_TEXT", $_COOKIE["lang"]); ?>
                            </p>
                        </div>
                    </div>
                    <div class="column" data-aos="fade-up">
                        <div class="position">
                            <div class="position__header">
                                <h6>
                                    <span class="position__co" id="CAREER_COLUMN3_TITLE"> <?php echo translate("CAREER_COLUMN3_TITLE", $_COOKIE["lang"]); ?> </span>
                                    <span class="position__pos" id="CAREER_COLUMN3_SUBTITLE"> <?php echo translate("CAREER_COLUMN3_SUBTITLE", $_COOKIE["lang"]); ?> </span>
                                </h6>
                                <div class="position__timeframe" id="CAREER_COLUMN3_DATE">
                                    <?php echo translate("CAREER_COLUMN3_DATE", $_COOKIE["lang"]); ?>
                                </div>
                            </div>
                            <p id="CAREER_COLUMN3_TEXT">
                                <?php echo translate("CAREER_COLUMN3_TEXT", $_COOKIE["lang"]); ?>
                            </p>
                        </div>
                    </div>
                    <div class="column" data-aos="fade-up">
                        <div class="position">
                            <div class="position__header">
                                <h6>
                                    <span class="position__co" id="CAREER_COLUMN4_TITLE"> <?php echo translate("CAREER_COLUMN4_TITLE", $_COOKIE["lang"]); ?> </span>
                                    <span class="position__pos" id="CAREER_COLUMN4_SUBTITLE"> <?php echo translate("CAREER_COLUMN4_SUBTITLE", $_COOKIE["lang"]); ?> </span>
                                </h6>
                                <div class="position__timeframe" id="CAREER_COLUMN4_DATE">
                                    <?php echo translate("CAREER_COLUMN4_DATE", $_COOKIE["lang"]); ?>
                                </div>
                            </div>
                            <p id="CAREER_COLUMN4_TEXT">
                                <?php echo translate("CAREER_COLUMN4_TEXT", $_COOKIE["lang"]); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="skills" class="s-about target-section">
            <div class="s-about__section s-about__section--profile">
                <div class="row">
                    <div class="column large-6 medium-8 tab-full">
                        <div class="section-intro" data-num="02" data-aos="fade-up">
                            <h3 id="SKILLS_TITLE" class="subhead"> <?php echo translate("SKILLS_TITLE", $_COOKIE["lang"]); ?> </h3>
                            <h1 id="SKILLS_SUBTITLE" class="display-1"> <?php echo translate("SKILLS_SUBTITLE", $_COOKIE["lang"]); ?> </h1>
                        </div>

                        <ul id="SKILLS" class="skill-bars" data-aos="fade-up">
                            <li>
                                <div class="progress percent85"><span>85%</span></div>
                                <strong>HTML5</strong>
                            </li>
                            <li>
                                <div class="progress percent80"><span>80%</span></div>
                                <strong>CSS3</strong>
                            </li>
                            <li>
                                <div class="progress percent95"><span>95%</span></div>
                                <strong>PHP</strong>
                            </li>
                            <li>
                                <div class="progress percent75"><span>75%</span></div>
                                <strong>Python</strong>
                            </li>
                            <li>
                                <div class="progress percent70"><span>70%</span></div>
                                <strong>C</strong>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="projects" class="s-portfolio target-section">
            <div class="row s-portfolio__header">
                <div class="column large-6 medium-8 tab-full">
                    <div class="section-intro" data-num="03" data-aos="fade-up">
                        <h3 id="PROJECTS_TITLE" class="subhead"> <?php echo translate("PROJECTS_TITLE", $_COOKIE["lang"]); ?> </h3>
                        <h1 id="PROJECTS_SUBTITLE" class="display-1">
                            <?php echo translate("PROJECTS_SUBTITLE", $_COOKIE["lang"]); ?>
                        </h1>
                    </div>
                </div>
            </div>

            <div class="row s-porfolio__list block-large-1-2 block-tab-full collapse">
                <?php
                foreach (Projects::$projects_list as $project){
                    echo '
                        <div class="column" data-aos="fade-up">
                            <div class="folio-item">
                                <div class="folio-item__thumb">
                                    <a class="folio-item__thumb-link" href="images/projects/' . strtolower($project->get_name()) . '.png" title="' . $project->get_name() . '" data-size="1920x1080">
                                        <img src="images/projects/' . strtolower($project->get_name()) . '.png" srcset="images/projects/' . strtolower($project->get_name()) . '.png 1x, images/projects/' . strtolower($project->get_name()) . '.png 2x" alt="">
                                    </a>
                                </div>
                                <div class="folio-item__info">
                                    <div class="folio-item__cat">' . $project->get_statement() . '</div>
                                    <h4 class="folio-item__title">' . $project->get_name() . '</h4>
                                </div>
                                <a href="' . $project->get_link() . '" title="Project Link" class="folio-item__project-link"> Project Link </a>
                                <div class="folio-item__caption">
                                    <p>' . $project->get_description() . '</p>
                                </div>
                            </div>
                        </div>
                    ';
                }
                ?>
            </div>
        </section><br>

        <footer id="contacts" class="s-footer h-dark-bg">
            <div class="right-vert-line"></div>
            <div class="row s-footer__main">
                <div class="column large-6">
                    <div class="section-intro" data-aos="fade-up">
                        <h3 id="CONTACTS_TITLE" class="subhead"> <?php echo translate("CONTACTS_TITLE", $_COOKIE["lang"]); ?> </h3>

                        <h1 id="CONTACTS_SUBTITLE" class="display-1">
                            <?php echo translate("CONTACTS_SUBTITLE", $_COOKIE["lang"]); ?>
                        </h1>
                    </div>
                </div>

                <div class="column large-5">
                    <div class="footer-contacts">
                        <div class="footer-contact-block" data-aos="fade-up">
                            <h5 class="footer-contact-block__header">
                                Email
                            </h5>
                            <p class="footer-contact-block__content">
                                <a href="mailto:#0"> neptune-it@protonmail.com </a>
                            </p>
                        </div>
                        <br>
                        <div class="footer-contact-block" data-aos="fade-up">
                            <h5 class="footer-contact-block__header">
                                Social
                            </h5>
                            <ul class="footer-contact-block__list">
                                <li><a href="https://discord.gg/hardware"> Discord </a></li>
                                <li><a href="https://github.com/Neptune-IT"> Github </a></li>
                                <li><a href="https://www.instagram.com/neptune_it/"> Instagram </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row s-footer__bottom">
                <div class="column large-full ss-copyright">
                    <span> © Copyright Neptune 2022 </span>
                    <span id="FOOTER"> <?php echo translate("FOOTER", $_COOKIE["lang"]); ?> </span>
                </div>

                <div class="ss-go-top">
                    <a class="smoothscroll" title="Back to Top" href="#top">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0l8 9h-6v15h-4v-15h-6z"/></svg>
                    </a>
                </div>
            </div>
        </footer>

        <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">
            <div class="pswp__bg"></div>
            <div class="pswp__scroll-wrap">
                <div class="pswp__container">
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                </div>

                <div class="pswp__ui pswp__ui--hidden">
                    <div class="pswp__top-bar">
                        <div class="pswp__counter"></div>
                        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                        <button class="pswp__button pswp__button--share" title="Share"></button>
                        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                        <div class="pswp__preloader">
                            <div class="pswp__preloader__icn">
                                <div class="pswp__preloader__cut">
                                    <div class="pswp__preloader__donut"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                        <div class="pswp__share-tooltip"></div>
                    </div>
                    <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                    <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                    <div class="pswp__caption">
                        <div class="pswp__caption__center"></div>
                    </div>
                </div>
            </div>
        </div>

        <script src="style/js/jquery-3.2.1.min.js"></script>
        <script src="style/js/plugins.js"></script>
        <script src="style/js/main.js"></script>
    </body>
</html>