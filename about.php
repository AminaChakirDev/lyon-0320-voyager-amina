<?php
include 'header.html';
?>

    <!--      Banner + button -        -->
    <div class="banner">
        <span class="banner-title">Notre équipage</span>
        <span class="banner-baseline">La tête dans les étoiles</span>
        <div class="overlay"></div>
        <img src="./images/banner.jpg" alt="mars expedition">
        <div class="container-btn container-btn-banner">
            <button class="btn" id="btn-banner" type="submit" data-toggle="modal" data-target="#exampleModal">Réserver</button>
        </div>
    </div>

    <!--      Contenu       -->
    <main class="container">

        <h2>Découvrez l'immensité de l'espace avec :</h2>
        <div class="about-cards">
            <div class="card equipe">
              <!-- <div class="equipe"></div> -->
                <img src="./images/photo-equip/Amina.jpg" class="card-img-top" alt="photo-amina">
                <div class="card-body">
                    <h5 class="card-title">Amina</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>

            <div class="card equipe">
                <img src="./images/photo-equip/Christophe.jpg" class="card-img-top" alt="photo-christophe">
                <div class="card-body">
                    <h5 class="card-title">Christophe</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>

            <div class="card equipe">
                <img src="./images/photo-equip/Guillaume.jpg" class="card-img-top" alt="photo-guillaume">
                <div class="card-body">
                    <h5 class="card-title">Guillaume</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>

            <div class="card equipe">
                <img src="./images/photo-equip/Lucas.jpg" class="card-img-top" alt="photo-lucas">
                <div class="card-body">
                    <h5 class="card-title">Lucas</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>

            <div class="card equipe">
                <img src="./images/photo-equip/Mickael.jpg" class="card-img-top" alt="photo-mickael">
                <div class="card-body">
                    <h5 class="card-title">Mickaël</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
            <div class="card equipe">
                <img src="./images/photo-equip/Raphael.jpg" class="card-img-top" alt="photo-raphael">
                <div class="card-body">
                    <h5 class="card-title">Raphaël</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
        </div>
    </main>


    <!--      Footer -        -->
    <footer>
        <section id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                        <ul class="list-unstyled list-inline social text-center">
                            <li class="list-inline-item"><a href="javascript:void();"><i
                                        class="fa fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void();"><i
                                        class="fa fa-pinterest"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a>
                            </li>
                        </ul>
                    </div>
                    </hr>
                </div>

                <div class="row text-center text-xs-center text-sm-left text-md-left">
                    <div class="col-xs-1 col-sm-9">
                        <h5>Quick links</h5>
                        <ul class="list-unstyled quick-links">
                            <li><a href="index.php"><i class="fa fa-angle-double-right"></i>Accueil</a></li>
                            <li><a href="catalogue.php"><i class="fa fa-angle-double-right"></i>Nos Destinations</a>
                            </li>
                            <li><a href="about.php"><i class="fa fa-angle-double-right"></i>L'équipage</a></li>
                            <li><a href="contact.php"><i class="fa fa-angle-double-right"></i>Contact</a></li>
                        </ul>
                    </div>

                    <div class="col-xs-1 col-sm-3">
                        <h5 class="quickLinks">Quick links</h5>
                        <ul class="list-unstyled quick-links">
                            <li><a href="faq.php"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                            <li><a href="legal.html"><i class="fa fa-angle-double-right"></i>Mentions légales</a></li>
                            <li><a href="sales.html"><i class="fa fa-angle-double-right"></i>Conditions de vente</a>
                            </li>
                            <li><a href="confidentiality.html"><i
                                        class="fa fa-angle-double-right"></i>Confidentialité</a></li>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                        <p><u><a href="index.php">Voyager International Corporation</a></u> est
                            une marque de Voyages Intergalactiques SA, Lyon, France</p>
                        <p class="h6">&copy Tous droits réservés.<a class="text-green ml-2" href="index.php"
                                target="_blank">VI</a></p>
                    </div>
                    </hr>
                </div>
            </div>
        </section>
        <!-- ./Footer -->
    </footer>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Réservez votre voyage</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Prénom et Nom</label>
                    <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                    <label for="recipient-number" class="col-form-label">Nombre de personnes</label>
                    <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Message:</label>
                    <textarea class="form-control" id="message-text"></textarea>
                </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary">Réserver</button>
            </div>
            </div>
        </div>
        </div>

</body>

</html>
