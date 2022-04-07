<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Big eyes agency</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="images/icon.svg">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <!-- fontawesome -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <meta name='viewport' content='width=device-width, initial-scale=1'>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300;500;600&display=swap" rel="stylesheet"> 
    
  </head>
  <body>

      <!--header-->
        <header class="header">
            <nav class="navbar navbar-style" style="margin: 5px 0px 0px 0;">
                <div class="container" style="width: 100%;">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#icon">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="index.php">
                            <img class="logo" src="images/logo.png" alt="">
                        </a>
                    </div>

                    <div class="collapse navbar-collapse" id="icon">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="liste"><a href="index.php" class="liste-link">Accueil</a></li>
                            <li class="liste"><a href="#Nosservices" class="liste-link">Nos Services</a></li>
                            <li class="liste"><a href="#Contactez-nous" class="liste-link">contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="container" style="width: 100%;padding: 0;">
                <div class="row" id="row1" style="width: 100%;margin: 0;">
                    <div id="text" class="col-sm-6 left">
                        <div id="div1" >
                            <h1>vous imaginez ...</h1>
                            <h2 style="color: #FFC93C;">Nous réalisons.</h2>
                            <p>
                                Notre agence digitale 360 vous accompagne vers un niveau jamais 
                                égalé.<br/> Nous faisons de votre réussite une priorité, 
                                en vous fournissant un service complet sur mesure et adapté à votre besoin !
                            </p>
                            <input onClick="window.location.href='contact.php'" type="button" class="button"  value="Nous contacter">
                        </div>
                    </div>
                    <div id="photo" class="col-sm-6 right">
                        <img class="img-responsive" src="images/image1.jpg" style="max-width: 85%" alt="">
                    </div>
                </div>                
            </div>
        </header>

    <section id="Nosservices">
		<div class="project-details">
            <div class="row align-items-center" style="margin-left: 0;margin-right: 0;">
                <div class="col-lg-12">
                    <div class="project-text5 wow fadeInUp" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-name: fadeInUp;">
                        <h2>Nos&nbsp;services </h2>
                    </div>
                </div>
            </div>
		</div>
	</section>



    <section class="featured-projects-sec">
        <div class="container2">
            <div class="projects-list">
                <div class="project-details">
                    <div class="row align-items-center" id="row2">
                        <div class="col-lg-6">
                            <div class="project-text wow fadeInUp" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-name: fadeInUp;">
                                <div class="project-text1">
                                    <h2>Marketing</h2>
                                </div>
                                <div class="title-content1">
                                    <h3>D’influence</h3>
                                </div>
                                <span>“Répétez après moi, l’influence n’est pas la popularité” Brian Solis</span>
                                <p>Nous vous accompagnons pour élaborer la stratégie d’influence qui vous convient, nous veillons à chasser des talons adaptés à vos besoins tout en respectant les budgets alloués. Nous vous promettons des campagnes optimisées et adaptées aux évolutions du marché, ainsi que la possibilité d'évaluer vos résultats grâce à des métriques qui lient vos actions influenceurs à vos objectifs de profit.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="project-thumb wow fadeInUp" style="perspective: 5000px; transform-style: preserve-3d;">
                                <div class="ban_img" style="perspective: 5000px; transform-style: preserve-3d; transform: rotateX(0deg) rotateY(0deg);">
                                    <img id="myImg" src="images/image2.jpg" class="w-100" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project-details">
                    <div class="row align-items-center"  id="row3">
                        <div class="col-lg-6">
                            <div class="project-thumb" style="perspective: 5000px; transform-style: preserve-3d;">
                                <div class="ban_img" style="perspective: 5000px; transform-style: preserve-3d; transform: rotateX(0deg) rotateY(0deg);">
                                    <img id="myImg" src="images/image3.jpg" class="w-100" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="project-text wow fadeInUp" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-name: fadeInUp;">
                            <div class="project-text1">
                                <h2>Création</h2>
                            </div>
                                <div class="title-content1">
                                    <h3>De Site Web</h3>
                                </div>
                                <span>“Un bon site web vaut mieux qu'un beau site web.” Fabien Branchu</span>
                                <p> Que vous désiriez un site moderne, créatif ou dynamique, nous concevons des sites web adaptés à vos finalités, nous vous accompagnons durant tout le processus, de l’élaboration du cahier des charges jusqu'à la réalisation finale.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project-details">
                    <div class="row align-items-center" id="row2">
                        <div class="col-lg-6">
                            <div class="project-text wow fadeInUp" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-name: none;">
                                <div class="project-text1">
                                    <h2>Graphique</h2>
                                </div>
                                <div class="title-content3">
                                    <h3>Design</h3>
                                </div>
                                <span>“Le design est l’ambassadeur silencieux de votre marque” Paul Rand</span>
                                <p>Un bon design est celui qui sert à résoudre un problème, satisfaire un besoin et facilité l’expérience de l’utilisateur, chez big eyes agency notre équipe d’expert designer s’amuse chaque jour à relever des défis pour vous délivrer un travail original et orienté solution.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="project-thumb" style="perspective: 5000px; transform-style: preserve-3d;">
                                <div class="ban_img" style="perspective: 5000px; transform-style: preserve-3d;">
                                    <img id="myImg" src="images/image4.jpg" class="w-100" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project-details">
                    <div class="row align-items-center"  id="row3">
                        <div class="col-lg-6">
                            <div class="project-thumb" style="perspective: 5000px; transform-style: preserve-3d;">
                                <div class="ban_img" style="perspective: 5000px; transform-style: preserve-3d;">
                                    <img id="myImg" src="images/image5.jpg" class="w-100" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="project-text wow fadeInUp" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-name: none;">
                                <div class="project-text1">
                                    <h2>Stratégie</h2>
                                </div>
                                <div class="title-content2">
                                    <h3>Des Réseaux Sociaux</h3>
                                </div>
                                <span>«La passion est l’essence des médias sociaux»  Jay Baer</span>
                                <p>Notre travail consiste à écouter, identifier et analyser vos besoins pour apporter des solutions bénéfiques pour votre business. Nous nous occupons de la mise en place de la stratégie marketing digitale, la création de contenu et la ligne éditoriale, ainsi que la gestion de la communauté et de la e-réputation. Toutes nos démarches sont orientées R.O.I et disposent d'outils d'analyse et de mesure afin de calculer le retour sur investissement.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project-details">
                    <div class="row align-items-center" id="row2">
                        <div class="col-lg-6">
                            <div class="project-text wow fadeInUp" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-name: none;">
                                <div class="project-text1"
                                    ><h2>SEO/ SEA</h2>
                                </div>
                                <span> "Rien ne sert de courir ; il faut partir à point" La fontaine, le lièvre et la tortue</span>
                                <p>Parce que nous n’acceptons pas moins que la première position, nous avons une équipe d’expert disposant des meilleures techniques de référencement naturel, afin d’accroitre la visibilité de votre projet et améliorer constamment votre position dans les moteurs de recherche. Découvrez également notre stratégie référencement payant qui vous permet l’acquisition des leads qualifiés sur de différentes plateformes notamment Facebook, Instagram, Snapchat et Google.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="project-thumb" style="perspective: 5000px; transform-style: preserve-3d;">
                                <div class="ban_img" style="perspective: 5000px; transform-style: preserve-3d;">
                                    <img id="myImg" src="images/image6.jpg" class="w-100" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--****-->
    <!--nous cotacter-->
    <!--****-->
    <section id="Contactez-nous" class="project-hd">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="pr-large">
                        <img src="images/image7.jpg" alt="" class="w-100">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="pr-text wow fadeInUp" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-name: fadeInUp;">
                        <h2>Une Idée Vous Hante ?</h2>
                        <p>Quel que soit le degré de folie de votre idée nous vous accompagnons jusqu'au bout ! Contactez notre équipe d’experts, ils croient en vous !</p>
                        <input onClick="window.location.href='contact.php'" type="button" class="button" value="Nous contacter">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--****-->
    <!--discuter vos projets-->
    <!--****-->
    <section id="Contact" class="testimonial-sec">
        <div class="container2">
            <div class="testi-comment">
                <div class="testi-cm">
                    <p>Si vous voulez discuter vos projets, et avoir plus d'informations n'hésitez pas à nous contacter sur notre adresse mail :</p>
                    <a href="mailto:Contact@bigeyesagency.net" title="" class="mail">Contact@bigeyesagency.net</a>
                </div>
            </div>
        </div>
    </section>


    <section class="contact-section">
        <div class="container">
            <div class="contact-content">
                <div class="contact_info">
                    <h3>Contactez-nous</h3>
                    <ul>
                        <li><a href="mailto:Contact@bigeyesagency.net" title="">Contact@bigeyesagency.net</a></li>
                        <li><a href="tel:+330188310299" title="">+330188310299</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--****-->
    <!--footer-->
    <!--****-->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="row" id="row1">
                    <div class="col-lg-12">
                        <div class="widget-newsletter text-center">
                            <h2>Big Eyes Agency</h2>
                            <p>©<script>document.write(new Date().getFullYear())</script> Tous droits réservés.</p><br>
                            <h3>Suivez nous</h3><br>
                            <ul class="social-links">
                                <li><a href=" https://web.facebook.com/Big-Eyes-Agency-109576691271443" title=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                  </svg>
                                </a></li>
                                <li><a href=" https://www.instagram.com/bigeyesagencyparis/" title=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                                  </svg></a></li>
                            </ul>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <?php 
        $link = mysqli_connect("localhost","bigeuufp_bigeuufp","ye&qS+)1R^Pz", "bigeuufp_BE") or die($link);
        
        $visitor_ip = $_SERVER['REMOTE_ADDR'];
        $query="insert into counter(ip_address) values('$visitor_ip')";
        $resultat = mysqli_query($link,$query);
    ?>
  </body>
</html>