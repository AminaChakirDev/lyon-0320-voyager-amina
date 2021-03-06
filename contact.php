<?php
include 'header.html';
?>

      <div class="banner">
        <span class="banner-title">Nous contacter</span>
        <span class="banner-baseline">Restons connectés !</span>
        <div class="overlay"></div>
        <img src="./images/banner.jpg" alt="mars expedition">
        <div class="container-btn container-btn-banner">
            <button class="btn" id="btn-banner" type="submit" data-toggle="modal" data-target="#exampleModal">Réserver</button>
        </div>
    </div>
    <main class="container">
        <!--      Présentation agence -        -->
    <h2 class="title-home">Nous sommes Voyager</h2>
    <p class="text-home">Conctrétisez vos rêves sur Voyager ! Notre agence vous propose de nombreux séjours sur de nombreuses destinations à travers la galaxie. Rendez-vous dans l'un de nos bureaux de vente, ou contactez-nous dès maintenant via le formulaire ci-dessous.</p>
    <!--      Formulaire de contact -        -->
        <h2 class="title">Nous contacter</h2>
        <form class="form">
            <div class="form-row row1">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Prénom">
                </div>
            </div>
            <div class="form-row row3">
                <label for="exampleFormControlTextarea1"></label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                    placeholder="Entrez votre message"></textarea>
            </div>
            <button class="btn" type="submit">Envoyer</button>
        </form>
        <!--      Adresse agence-        -->
        <div class="contactAddress">
            <address>
                <img id="logo" src="./images/rocket.png" alt="logo" height="auto" width="100px" />
                <span>Voyager</span><br>
                17, rue Delandine <br>
                69002 Lyon <br>
                <a href="tel:+33472010203">+33 4 72 01 02 03</a>
            </address>

            <!-- Iframe -->
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2784.2486673943386!2d4.82533751533099!3d45.74616052260613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea4ab96b2285%3A0xd07b1fb24dc8242f!2s17%20Rue%20Delandine%2C%2069002%20Lyon!5e0!3m2!1sfr!2sfr!4v1583852860518!5m2!1sfr!2sfr"
                width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
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
    <!-- ./Footer -->

</footer>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
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
</html>
