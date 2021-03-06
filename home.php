<?php
require_once('C:/wamp64/www/projetPHP/Routes.php');

?>

<!DOCTYPE html>
<html lang="fr">

<head>



    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- logo -->
    <link href="img/logo.png" rel="icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.4.1, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="New Bootstrap HTML Restaurant Forms & Info Template - Download Now">
    <!-- Vendor CSS Files -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="vendor/venobox/venobox.css" rel="stylesheet">
    <link href="vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/header.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">








</head>

<body>

    <?php include_once "C:\wamp64\www\projetPHP\header.php" ?>




<section id="hero">

    <div class="hero-container">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">


                <div class="carousel-item active" style="background: url(img/slide/slide-1.jpg);">
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 class="animate__animated animate__fadeInDown"><span>Restaurant</span> La Rochelle</h2>
                            <!-- en peut ajouter des  messages ou text--->
                            <div>
                                <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Menu</a>
                                <a href="?controller=Reservation&action=affciherReservation" class="btn-book animate__animated animate__fadeInUp scrollto">R??server un table </a>
                            </div>

                        </div>
                    </div>
                </div>

                <!--<a class="carousel-control-prev" href="#" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                  <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>-->

            </div>
        </div>
</section>

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container-fluid">

            <div class="row">

                <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("img/about.jpg");'>

                </div>

                <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

                    <div class="content">
                        <h3>Fait maison ?? partir <strong>de produits bruts de saison !</strong></h3>
                        <p>
                            Situ?? au coeur du Vieux Port, non loin des deux tours que le RESTAURANT LA Rochelle
                        </p>
                        <p class="font-italic">
                            ?? d??poser ces valises pour vous y accueillir. Cette nouvelle et jeune ??quipe s'est donn?? pour mission de vous faire partager leurs passions et de vous faire plaisir!!!!.
                        </p>

                        <p>
                            Nous sommes heureux de vous accueillir dans une ambiance chaleureuse et d??contract??e, plonger dans un d??cor fleuri et convivial pour y d??guster notre cuisine traditionnelle.
                            Vous y trouverez une petite carte ainsi qu'un menu ?? choix,
                            le tout fait maison ?? partir de produits frais, vous pourrez ??galement y d??couvrir une belle carte des vins de plusieurs r??gions Fran??aise.
                        </p>
                    </div>

                </div>

            </div>

        </div>
    </section><!-- End About Section -->
    <!-- ======= Menu  ======= -->
    <section id="menu" class="menu">
        <div class="container">

            <div class="section-title">
                <h2><span>Menu</span></h2>
            </div>


            <div class="row menu-container">

                <div class="col-lg-6 menu-item filter-starters">
                    <div class="menu-content">
                        <a href="#">Flaming Pudding</a><span>6.40 &#8364</span>
                    </div>
                    <div class="menu-ingredients">
                        Lorem, deren, trataro, filede, nerada
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-specialty">
                    <div class="menu-content">
                        <a href="#">Crescent Ring</a><span>9.50&#8364</span>
                    </div>
                    <div class="menu-ingredients">
                        Lorem, deren, trataro, filede, nerada
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-starters">
                    <div class="menu-content">
                        <a href="#">Caf?? gourmand</a><span>5.20 &#8364</span>
                    </div>
                    <div class="menu-ingredients">
                        A delicate crab cake served on a toasted roll with lettuce and tartar sauce
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-salads">
                    <div class="menu-content">
                        <a href="#">Chistmas Carols</a><span>5.30 &#8364</span>
                    </div>
                    <div class="menu-ingredients">
                        Lorem, deren, trataro, filede, nerada
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-specialty">
                    <div class="menu-content">
                        <a href="#">Turron</a><span>7 &#8364</span>
                    </div>
                    <div class="menu-ingredients">
                        Grilled chicken with provolone, artichoke hearts, and roasted red pesto
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-starters">
                    <div class="menu-content">
                        <a href="#">Calamars a Larmoricaine</a><span>13 &#8364</span>
                    </div>
                    <div class="menu-ingredients">
                        Lorem, deren, trataro, filede, nerada
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-salads">
                    <div class="menu-content">
                        <a href="#">Bavette XXL</a><span>20.50 &#8364</span>
                    </div>
                    <div class="menu-ingredients">
                        Fresh spinach, crisp romaine, tomatoes, and Greek olives
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-salads">
                    <div class="menu-content">
                        <a href="#">Assiette Cote Poitrine</a><span>20 &#8364</span>
                    </div>
                    <div class="menu-ingredients">
                        Fresh spinach with mushrooms, hard boiled egg, and warm bacon vinaigrette
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-specialty">
                    <div class="menu-content">
                        <a href="#">Cote de Boeuf</a><span>15 &#8364</span>
                    </div>
                    <div class="menu-ingredients">
                        Plump lobster meat, mayo and crisp lettuce on a toasted bulky roll
                    </div>
                </div>
                <div class="col-lg-6 menu-item filter-specialty">
                    <div class="menu-content">
                        <a href="#">Brushetta</a><span>20.33 &#8364</span>
                    </div>
                    <div class="menu-ingredients">
                        Plump lobster meat, mayo and crisp lettuce
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Menu -->

    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
        <div class="container">

            <div class="section-title">
                <h2>Sp??cialit??s  <span>La Rochelle</span></h2>
                <p>Top 3 des sp??cialit??s de La Rochelle.</p>
            </div>

            <div class="row">
                <div class="col-lg-3">
                    <ul class="nav nav-tabs flex-column">
                        <li class="nav-item">
                            <a class="nav-link active show" data-toggle="tab" href="#tab-1">Modi sit est</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-2">Unde praesentium sed</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-3">Pariatur explicabo vel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-4">Nostrum qui quasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-5">Iusto ut expedita aut</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-9 mt-4 mt-lg-0">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="tab-1">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>La mouclade</h3>
                                    <p class="font-italic">La mouclade charentaise un est plat historique du littoral saintongeais o?? l???on p??chait les moucles (moules)</p>
                                    <p>C???est une sp??cialit?? tr??s r??pandue qui se cuisine avec des moules de bouchot, des jaunes d???oeufs, de la cr??me fra??che, du pineau et du beurre(de Charente bien s??r), de l?????chalote et de l???ail. On peut y rajouter du curry dans la version Fourasine ou encore du safran pour la Saintongeaise. Ces ??pices provenaient ?? l?????poque des bateaux de commerce venant d???Orient qui transitaient par La Rochelle, un des principaux ports de la c??te Atlantique</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="https://i0.wp.com/blog.gooding-sudouest.fr/wp-content/uploads/2017/12/specialite-la-rochelle-gooding-sud-ouest1.jpg?resize=300%2C157&ssl=1" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-2">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>La galette charentaise</h3>
                                    <p class="font-italic">G??teau traditionnel et r??gional, elle ??tait surnomm??e ??galette de premi??re communion??</p>
                                    <p>C?????tait un mets de choix ?? offrir ?? ses invit??s ?? l???occasion des communions puis des mariages et autres jours de f??tes par la suite. Elle s???accorde ?? merveille avec un verre de pineau des Charentes. On la dit originaire du village de Beurlay, cr????e par la famille Barraud. On la trouve maintenant fabriqu??e aussi industriellement dans toutes les grandes surfaces et m??me d??clin??e aux fruits ! Si on la pr??f??re croustillante, on choisira le ??broy???? autre sp??cialit?? sucr??e de la r??gion</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="https://i0.wp.com/blog.gooding-sudouest.fr/wp-content/uploads/2017/06/galette-charentaise.jpg?resize=300%2C157&ssl=1" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-3">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>La moule de Bouchot</h3>
                                    <p class="font-italic"> Son mode de production traditionnel en fait le seul produit fran??ais ?? porter le label europ??en Sp??cialit?? Traditionnelle Garantie.</p>
                                    <p>La moule de bouchot est ??lev??e sur des cordes enroul??es sur des pieux en bois (les bouchots) r??guli??rement couverts et d??couverts par les mar??es. Cette technique d?????levage pr??serve les moules du contact avec le sol sableux et leur conf??re un go??t finement iod?? tr??s appr??ci??. En Charente-Maritime, vous pourrez d??couvrir ce type d?????levage si particulier dans la Baie de l???Aiguillon.</p>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="img/specials-3.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-4">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>La Crevette imp??riale des marais</h3>
                                        <p class="font-italic">Reconnaissable ?? sa robe tigr??e, la crevette imp??riale des marais est ??lev??e par une poign??e d???ostr??iculteurs passionn??s</p>
                                        <p>Vivant la nuit, ces demoiselles trouvent dans la vase des marais (Marennes, Seudre, R?? et Ol??ron) un refuge r??v?? et de quoi s???alimenter pour bien grandir. Seulement 4 ?? 6 crevettes sont introduites au m??tre carr??, contre 100 fois plus dans les ??levages de certains pays tropicaux ! Vous la retrouverez de fin juillet ?? fin novembre sur les ??tals des poissonneries ou directement chez les producteurs.</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="https://www.infiniment-charentes.com/wp-content/uploads/2018/03/La-Tour-du-Senechal-Ars-en-Re.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-5">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                                        <p class="font-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                                        <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="img/specials-5.jpg" alt="" class="img-fluid">
                                    </div>d'??v??nementinterieur exterieur
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </section><!-- End Specials Section -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
        <div class="container">

            <div class="section-title">
                <h2>Organisation<span> d'??v??nement </span> dans Restaurant interieur && exterieur</h2>
            </div>

            <div class="owl-carousel events-carousel">

                <div class="row event-item">
                    <div class="col-lg-6">
                        <img src="img/event-birthday.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content">
                        <h3>Pour les anniversaires</h3>
                        <div class="price">
                            <p><span>189 &#8364</span></p>
                        </div>
                        <p class="font-italic">
                            Vous avez envie de f??ter votre anniversaire et de vous d??fouler sur une piste de danse apr??s avoir partag?? un bon repas (et quelques verres) avec vos ami.
                        </p>

                        <p>
                            Mais voil??, comment s???assurer de ne pas perdre la moiti?? du groupe entre le restaurant et le club
                        </p>
                    </div>
                </div>

                <div class="row event-item">
                    <div class="col-lg-6">
                        <img src="img/event-private.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content">
                        <h3>Soir??e priv??e</h3>
                        <div class="price">
                            <p><span>290 &#8364</span></p>
                        </div>
                        <p class="font-italic">
                            Mais voil??, comment s???assurer de ne pas perdre la moiti?? du groupe entre le restaurant et le club
                        </p>

                        <p>
                            Mais voil??, comment s???assurer de ne pas perdre la moiti?? du groupe entre le restaurant et le club
                        </p>
                    </div>
                </div>

                <div class="row event-item">
                    <div class="col-lg-6">
                        <img src="img/event-custom.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content">
                        <h3>Soir??es quiz</h3>
                        <div class="price">
                            <p><span>50 &#8364</span></p>
                        </div>
                        <p class="font-italic">
                            C???est un classique, et pour une bonne raison. Facile ?? mettre en place, et ne coute pas grand chose.
                        </p>

                        <p>
                            Du moment que vous avez quelqu???un d???engageant pour poser des questions int??ressantes et amusantes, la soir??e devrait ??tre r??ussie. Les quiz font ressortir l???esprit de comp??tition. Que la comp??tition soit individuelle ou par ??quipes, vous pourrez cr??er facilement une atmosph??re agr??able qui fera revenir les joueurs
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Events Section -->


    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
        <div class="container-fluid">

            <div class="section-title">
                <h2>Photos  <span>de Restaurant</span></h2>
            </div>

            <div class="row no-gutters">

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="img/gallery/gallery-1.jpg" class="venobox" data-gall="gallery-item">
                            <img src="img/gallery/gallery-1.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="img/gallery/gallery-2.jpg" class="venobox" data-gall="gallery-item">
                            <img src="img/gallery/gallery-2.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="img/gallery/gallery-3.jpg" class="venobox" data-gall="gallery-item">
                            <img src="img/gallery/gallery-3.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="img/gallery/gallery-4.jpg" class="venobox" data-gall="gallery-item">
                            <img src="img/gallery/gallery-4.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="img/gallery/gallery-5.jpg" class="venobox" data-gall="gallery-item">
                            <img src="img/gallery/gallery-5.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="img/gallery/gallery-6.jpg" class="venobox" data-gall="gallery-item">
                            <img src="img/gallery/gallery-6.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="img/gallery/gallery-7.jpg" class="venobox" data-gall="gallery-item">
                            <img src="img/gallery/gallery-7.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="img/gallery/gallery-8.jpg" class="venobox" data-gall="gallery-item">
                            <img src="img/gallery/gallery-8.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
        <div class="container">

            <div class="section-title">
                <h2>Les chefs <span>professionnel</span></h2>
                <p>UNE EXP??RIENCE CULINAIRE COMME AUCUNE AUTRE.</p>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="member">
                        <div class="pic"><img src="img/chefs/chefs-1.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Walter White</h4>
                            <span>Master Chef</span>
                            <div class="social">
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="member">
                        <div class="pic"><img src="img/chefs/chefs-2.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Sarah Jhonson</h4>
                            <span>Patissier</span>
                            <div class="social">
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="member">
                        <div class="pic"><img src="img/chefs/chefs-3.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>William Anderson</h4>
                            <span>Cook</span>
                            <div class="social">
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Chefs Section -->


</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php include_once "C:/wamp64/www/projetPHP/footer.php" ?>

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery.easing/jquery.easing.min.js"></script>

<script src="vendor/jquery-sticky/jquery.sticky.js"></script>
<script src="vendor/jquery-sticky/jquery.sticky.js"></script>
<script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="vendor/venobox/venobox.min.js"></script>
<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>


</body>

</html>


