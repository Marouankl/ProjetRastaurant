<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">


    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- logo -->
    <link href="../img/logo.png" rel="icon">
    <link href="../img/logo.png" rel="icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Vendor CSS Files -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="../vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="../vendor/venobox/venobox.css" rel="stylesheet">
    <link href="../vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">



    <!-- Template Main CSS File -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/header.css" rel="stylesheet">
    <link href="../css/footer.css" rel="stylesheet">


</head>

<body>
<?php include_once "C:\wamp64\www\projetPHP\header.php" ?>
<div class="container">

    <div class="row">

        <div class="col-lg-3">

            <h1 class="my-4">La commande</h1>
            <div class="list-group">
                <a href='?controller=Page&action=plats' class="list-group-item">Plats</a>
                <a href='?controller=Page&action=desserts' class="list-group-item">Desserts</a>

            </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

            <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid" src="../img/slide/slide-1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="../img/slide/slide-2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="../img/slide/slide-3.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="../img/menu/r1.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Planche de Charcuterie</a>
                            </h4>
                            <h5>19.40 &#8364</h5>

                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            <button type="submit" class="btn btn-primary btn-block" name="submit">Ajouter au panier</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="../img/menu/r2.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Brushetta</a>
                            </h4>
                            <h5>20.33 &#8364</h5>

                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            <button type="submit" class="btn btn-primary btn-block" name="submit">Ajouter au panier</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="../img/menu/r3.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Cote de Boeuf</a>
                            </h4>
                            <h5>15 &#8364</h5>

                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            <button type="submit" class="btn btn-primary btn-block" name="submit">Ajouter au panier</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="../img/menu/r4.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Assiette Cote Poitrine</a>
                            </h4>
                            <h5>20 &#8364</h5>

                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            <button type="submit" class="btn btn-primary btn-block" name="submit">Ajouter au panier</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="../img/menu/r5.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Bavette XXL</a>
                            </h4>
                            <h5>20.50 &#8364</h5>

                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            <button type="submit" class="btn btn-primary btn-block" name="submit">Ajouter au panier</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="../img/menu/r6.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Calamars a Larmoricaine</a>
                            </h4>
                            <h5>13 &#8364</h5>

                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            <button type="submit" class="btn btn-primary btn-block" name="submit">Ajouter au panier</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="../img/menu/d6.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Flaming Pudding</a>
                            </h4>
                            <h5>6.40 &#8364</h5>

                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            <button type="submit" class="btn btn-primary btn-block" name="submit">Ajouter au panier</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="../img/menu/d1.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Crescent Ring</a>
                            </h4>
                            <h5>9.50&#8364</h5>

                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            <button type="submit" class="btn btn-primary btn-block" name="submit">Ajouter au panier</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="../img/menu/d2.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Café gourmand</a>
                            </h4>
                            <h5>5.20 &#8364</h5>

                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            <button type="submit" class="btn btn-primary btn-block" name="submit">Ajouter au panier</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="../img/menu/d3.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Chistmas Carols</a>
                            </h4>
                            <h5>5.30 &#8364</h5>

                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            <button type="submit" class="btn btn-primary btn-block" name="submit">Ajouter au panier</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="../img/menu/d4.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Chistmas Carols</a>
                            </h4>
                            <h5>5 &#8364</h5>

                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            <button type="submit" class="btn btn-primary btn-block" name="submit">Ajouter au panier</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="../img/menu/d5.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Turron</a>
                            </h4>
                            <h5>7 &#8364</h5>

                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            <button type="submit" class="btn btn-primary btn-block" name="submit">Ajouter au panier</button>
                        </div>
                    </div>
                </div>


            </div>
            <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->
<?php include_once "C:/wamp64/www/projetPHP/footer.php" ?>

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../vendor/jquery.easing/jquery.easing.min.js"></script>

<script src="../vendor/jquery-sticky/jquery.sticky.js"></script>
<script src="../vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="../vendor/venobox/venobox.min.js"></script>
<script src="../vendor/owl.carousel/owl.carousel.min.js"></script>

<!-- Template Main JS File -->
<script src="../js/main.js"></script>

</body>

</html>