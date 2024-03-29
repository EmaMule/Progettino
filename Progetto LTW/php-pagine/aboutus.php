<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us</title>
    <link rel="stylesheet" href="../bootstrap-4.0.0/dist/css/bootstrap.min.css" />

    <!-- Questa mi è servita per le icone-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <script src="https://kit.fontawesome.com/d20fe07ffa.js" crossorigin="anonymous"></script>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="../css/aboutus.css" />
    <link rel="stylesheet" href="../css/stili.css" />
    <script type="application/javascript" src="../js/aboutus.js"></script>
</head>

<body class="bg-dark">
    <header>
        <div class="container p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                <a class="navbar-brand my_brand" href="homepage.php">Museek.com</a>
                <button class="navbar-toggler ml-auto" id="bottone_toggle" value="NOT clicked" type="button"
                    data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav mr-auto mb-2 mb-lg-0 ml-3 justify-content-center" id="lista_navbar">
                        <li class="nav-item my_nav-item">
                            <a class="nav-link" href="archive.php">Latest News</a>
                        </li>
                        <li class="nav-item my_nav-item">
                            <a class="nav-link" href="Post.php">For You</a>
                        </li>
                        <li class="nav-item my_nav-item">
                            <a class="nav-link" href="YourProfile.php">Your Profile</a>
                        </li>
                        <li class="nav-item my_nav-item">
                            <a class="nav-link" href="aboutus.php">About Us</a>
                        </li>
                    </ul>
                </div>
                <div class="search-bar" id="search_bar">
                    <input type="text" class="search-bar-text" placeholder="Search anything" id="Search_input" autocomplete="off"
                        onkeyup="showHint(this.value)" />
                    <button  id="bottone_ricerca">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
                <a class="my_navbar_login" style="color: black; opacity: 100%" href="javascript: void(0);"
                    onclick="see_or_unsee_form();" value="Login"> <?php if (isset($_SESSION["loggedinusers"]) && $_SESSION["loggedinusers"] == true) {
                        echo "<img class='immagine-profilo' src='data:image/jpg;charset=utf8;base64," . $_SESSION['foto_profilo'] . "'>";
                    } else {
                        echo "
                    <i class='fa-solid fa-user-plus icona_utente' aria-hidden='false'
                        aria-valuetext='Accedi Ora'></i>";
                    } ?></a>
            </nav>
            <div class="form_popup">
                <?php if (!isset($_SESSION["loggedinusers"]) || $_SESSION["loggedinusers"] != true) {
                    echo "
                <form action=\"../php-function/login.php\" method=\"POST\" class=\"form-container\" name='login_ema' id=\"my_form\">
                    <h1 class=\"my_h1\">Login</h1>
                    <label for=\"email\"><b>Email</b></label>
                    <input type=\"text\" placeholder=\"Enter Email\" name=\"inputEmail\" required />

                    <label for=\"psw\"><b>Password</b></label>
                    <input type=\"password\" placeholder=\"Enter Password\" name=\"inputPassword\" required />

                    <button type=\"submit\" class=\"btn\">Login</button>
                    <p class=\"messaggio\">
                        Not registered? <a href=\"login.php\">Create an account</a>
                    </p>
                    <p class=\"messaggio\">
                        Password Forgotten? <a href=\"#\">Click here</a>
                    </p>
                </form>";
                } else {
                    echo "<form action=\"../php-function/no-login.php\" method=\"POST\" class=\"form-container\" name='logout_ema' id=\"my_form\">
                    <button type=\"submit\" class=\"btn\">Log Out</button>
                  </form>";
                }
                ?>
            </div>
        </div>
    </header>
    <div class="search-results d-flex" style="color: black;">
        <div id="search_results" class="d-flex"></div>
    </div>
    <div class="container">
        <div class="header_page header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="
          min-height: 500px;
          background-image: url(../images/black-music-2016-shakeil-greeley.webp);
          background-size: cover;
          background-position: center;
        ">
            <!-- Mask -->
            <span class="mask bg-gradient-default opacity-8"></span>
            <!-- Header container -->
            <div class="container-fluid d-flex align-items-center">
                <div class="row">
                    <div class="col-lg-7 col-md-10">
                        <!--IMPORTANTE , qua User dovrà essere cambiato dinamicamente a seconda di chi è l'utente che ha fatto il login-->
                        <h1 class="display-3 text-white">About Us</h1>
                        <p class="text-white mt-0 mb-5">Your story, our story</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-section reveal" style="align-items: start">
            <h2 style="
            font-size: medium;
            font-family: sans-serif;
            text-align: start;
            object-fit: cover;
            justify-content: center;
          "></h2>
            <div class="row">
                <div class="col-sm-6 reveal">
                    <div class="box text-center">
                        <i class="fa-solid fa-music"></i>
                        <h3>Mission</h3>
                        <hr />
                        <div class="limit text-center">
                            <p>
                                Join us today and become a part of our community of music
                                enthusiasts! Whether you're a musician, music lover, or
                                someone who appreciates the power of music, our website is
                                committed to keeping you informed about the latest happenings
                                in the industry. We celebrate emerging artists and their
                                contributions to the music world, while also covering
                                established artists and their latest projects. Our team of
                                dedicated writers and editors strive to deliver high-quality
                                content that both entertains and inspires our readers. So come
                                join us on our mission to keep music at the forefront of music
                                news!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 reveal">
                    <div class="box text-center">
                        <i class="fa-solid fa-headphones"></i>
                        <h3>Vision</h3>
                        <hr />
                        <div class="limit text-center">
                            <p>
                                We are thrilled to present our website, a news platform
                                founded by three young music enthusiasts. Our website was born
                                out of a need for a music news outlet that focuses on the
                                music itself, rather than just the personalities behind it. In
                                a world where music news has become more about the people than
                                the music, we strive to be different. Our team is passionate
                                about bringing you the latest updates and stories from the
                                world of music, with a focus on the artists and their work. We
                                believe that music is more than just entertainment; it's an
                                art form that deserves to be celebrated and appreciated.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="row reveal">
            <h1>Who are we?</h1>
        </div>
        <div class="us">
            <div class="row reveal">
                <div class="column reveal">
                    <div class="box">
                        <div class="img-container">
                            <img class="nostre_img" src="../images/Simone.jpeg" />
                        </div>
                        <h3>Simone Palumbo</h3>
                        <p>Founder</p>
                        <div class="icons">
                            <a href="https://www.linkedin.com/in/simone-palumbo-835b20255/">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="https://github.com/palu001">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                    <div class="fade-in-text">
                        <h3 class="hidden">
                            Ciao, sono Simone Palumbo e studio Ingegneria Informatica alla
                            Sapienza.In particolare sono molto interessato alla
                            CyberSecurity e al Machine Learning. Per quanto riguarda la CyberSecurity, questo progetto mostra
                            in tutto e per tutto le mie competenze, soprattutto nel trattamento delle password.
                        </h3>
                    </div>
                </div>
                <div class="column reveal">
                    <div class="box">
                        <div class="img-container">
                            <img class="nostre_img" src="../images/Emanuele.jpeg" />
                        </div>
                        <h3>Emanuele Mule</h3>
                        <p>Developer</p>
                        <div class="icons">
                            <a href="https://www.linkedin.com/in/emanuele-mule-9622b924b">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="https://github.com/EmaMule">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                    <h3 class="hidden">
                        Ciao, sono Emanuele Mule e studio Ingegneria Informatica presso
                        l'Università di Roma La Sapienza. Amo l'informatica teorica e
                        l'intelligenza artificiale. In futuro vorrei lavorare nella difesa presso Alten Italia, anche se ancora non mi
                        hanno ricontattato.
                    </h3>
                </div>
                <div class="column reveal">
                    <div class="box">
                        <div class="img-container">
                            <img class="nostre_img" src="../images/Gabriele.jpeg" />
                        </div>
                        <h3>Gabriele Matini</h3>
                        <p>Designer</p>
                        <div class="icons">
                            <a href="https://www.linkedin.com/in/gabriele-matini-064aa9256">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="https://github.com/kev187038">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                    <h3 class="hidden">
                        Ciao sono Gabriele Matini e studio Ingegneria Informatica presso La Sapienza, Roma. 
                        Dopo la laurea ho intenzione di diventare un full stack Developer, grazie anche alla mia esperienza
                        con frameworks quali Hibernate, Maven e Java Spring.
                    </h3>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="../js/metodi.js"></script>
</body>

</html>