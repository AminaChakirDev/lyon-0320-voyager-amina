<?php
include 'header.html';
?>
    <div class="banner-large">
        <h1 class="banner-title">Déjeunez sur <span id="changeText">Mars</span></h1>
        <span class="banner-baseline">L'immensité de l'espace à votre portée !</span>
        <div class="overlay"></div>
        <img src="images/home2.jpg" alt="mars expedition">
        <div class="container-btn container-btn-banner">
            <button class="btn" id="btn-banner" type="submit" data-toggle="modal" data-target="#exampleModal">Réserver</button>
        </div>
    </div>
    <main class="container">

        <h2 class="title-home">Bienvenue chez Voyager !</h2>
        <p class="text-home">Voyager vous permet de réaliser votre rêve d'explorer l'espace et les spots les plus mythiques de la galaxie ou d'ailleurs !</p>

        <div class="container">
            <h3>Nos Meilleurs voyages</h3>
            <div class="home-cards">
                <a href="mars.php" class="">
                  <div class="card bg-dark text-white hover-card">
                    <img src="./images/planetes/mars/mars.jpg" class="card-img" alt="Mars">
                    <div class="card-img-overlay">
                      <h5 class="card-title-home">Visiter Mars</h5>
                      <p class="card-text-home">3M€/pers *</p>
                    </div>
                  </div>
                </a>
                <a href="coruscant.php" class="">
                  <div class="card bg-dark text-white hover-card">
                      <img src="./images/planetes/coruscant/Coruscant.jpg" class="card-img" alt="Coruscant">
                      <div class="card-img-overlay">
                        <h5 class="card-title-home">Visiter Coruscant</h5>
                        <p class="card-text-home">20M€/pers *</p>
                      </div>
                  </div>
                </a>
                <a href="arrakis.php" class="">
                  <div class="card bg-dark text-white hover-card">
                      <img src="./images/planetes/arrakis/arrakis_planete.jpg" class="card-img" alt="Arrakis">
                      <div class="card-img-overlay">
                        <h5 class="card-title-home">Visiter Arrakis</h5>
                        <p class="card-text-home">25M€/pers *</p>
                      </div>
                  </div>
              </a>
            </div>
        </div>

        <h3>Ils nous font confiance</h3>
        <div class="brands">
            <img src="./images/spacex.png" alt="spacex">
            <img src="./images/nasa.png" alt="nasa">
            <img src="./images/amazon.png" alt="amazon">
        </div>
    </main>

    <!--      Footer -        -->
    <footer>
        <section id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                        <ul class="list-unstyled list-inline social text-center">
                            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-pinterest"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
                        </ul>
                    </div>
                    </hr>
                </div>

                <div class="row text-center text-xs-center text-sm-left text-md-left">
                    <div class="col-xs-1 col-sm-9">
                        <h5>Quick links</h5>
                        <ul class="list-unstyled quick-links">
                            <li><a href="index.php"><i class="fa fa-angle-double-right"></i>Accueil</a></li>
                            <li><a href="catalogue.php"><i class="fa fa-angle-double-right"></i>Nos Destinations</a></li>
                            <li><a href="about.php"><i class="fa fa-angle-double-right"></i>L'équipage</a></li>
                            <li><a href="contact.php"><i class="fa fa-angle-double-right"></i>Contact</a></li>
                        </ul>
                    </div>

                    <div class="col-xs-1 col-sm-3">
                        <h5 class="quickLinks">Quick links</h5>
                        <ul class="list-unstyled quick-links">
                            <li><a href="faq.php"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                            <li><a href="legal.html"><i class="fa fa-angle-double-right"></i>Mentions légales</a></li>
                            <li><a href="sales.html"><i class="fa fa-angle-double-right"></i>Conditions de vente</a></li>
                            <li><a href="confidentiality.html"><i class="fa fa-angle-double-right"></i>Confidentialité</a></li>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                        <p><u><a href="index.php">Voyager International Corporation</a></u> est
                            une marque de Voyages Intergalactiques SA, Lyon, France</p>
                        <p class="h6">&copy Tous droits réservés.<a class="text-green ml-2"
                                                                    href="index.php" target="_blank">VI</a></p>
                    </div>
                    </hr>
                </div>
            </div>
        </section>
<?php
include 'footer.html';
?>