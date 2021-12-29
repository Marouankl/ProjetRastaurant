
<html>
<head>

    <!-- logo -->
    <link href="../img/logo.png" rel="icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.4.1, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="New Bootstrap HTML Restaurant Forms & Info Template - Download Now">

    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="../vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="../vendor/venobox/venobox.css" rel="stylesheet">
    <link href="../vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/header.css" rel="stylesheet">
    <link href="../css/footer.css" rel="stylesheet">
<body>
<?php include("C:/wamp64/www/projetPHP/header.php");?>

<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <div class="carousel-item active" style="background: url(../img/slide/slide-3.jpg);">
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 class="animate__animated animate__fadeInDown"><span>Restaurant</span> La Rochelle</h2>

                        </div>
                    </div>
                </div>


            </div>
        </div>
</section>



<section class="form2">
    <div class="container">
        <div class="row justify-content-center align-items-stretch">
          <div  style="background: url(../img/gallery/gallery-3.jpg);">
            <div class="form-1 col-sm-12 col-xl-4 align-center col-md-4">
                <h3 class="form-title mbr-fonts-style align-center display-2">Réservation</h3>
                <div class="ornament align-center pt-3 pb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 133 20" height="20" width="150" fill="#f9e2af">
                        <g><path d="M127.18,6.19C121-.05,109.94-.24,101.84.1,90.84.56,80,3.3,69.32,5.77c-8,1.86-16,3.63-24,5.72-9.21,2.41-18.6,4.72-28.14,5.19-4.1.2-8.48,0-12.16-2a6.6,6.6,0,0,1-2.7-9A5.46,5.46,0,0,1,7.07,2.77c4-.22,6.73,8.39-.08,4.58a.49.49,0,0,0-.49.84c4.88,3,10.8,0,5.4-4.91C7.6-.63.4,2.06,0,8-1,24,28.25,17,36.29,15.24,53.74,11.37,70.9,6.44,88.53,3.33c11.1-2,24.75-3.54,35.06,2.19a16,16,0,0,1,6.86,8.85c1.29,4.31-4.35,4.2-7,3.52-4.84-1.26-2.42-8,1.22-3,.61.83,2,0,1.4-.82-2.15-2.93-6.71-4.9-7.12.35s8.36,7.24,11.72,4.47C135,15.32,129.91,9,127.18,6.19Z"></path></g>
                    </svg>
                </div>
                <form class="mbr-form" action='?controller=Reservation&action=reserver' method="post" >
                    <div class="input-wrap">
                        <label><b>Nom</b></label></br>
                        <input type="text" class="field display-7" name="nom" placeholder="Name" >
                    </div>
                    <div class="input-wrap" >
                        <label><b>E-mail</b></label></br>
                        <input type="email" class="field display-7" name="email" placeholder="E-mail"  >
                    </div>
                    <div class="input-wrap">
                        <label><b>Numéro de Téléphone</b></label></br>
                        <input type="text" class="field display-5" name="num_tel" placeholder="Numéro de Téléphone"  >
                    </div>
                    <div class="input-wrap" >
                        <label><b>Date de réservation</b></label></br>
                        <input type="date" class="field display-7" name="date" placeholder="Date"  >
                    </div>
                    <div class="input-wrap">
                        <label><b>Temps de réservation</b></label></br>
                        <input type="time" class="field display-7" name="time" placeholder="Time" >
                    </div>

                    <label><b>Personnes </b></label></br>
                    <select name="personne">
                        <option value="1">Personne</option>
                        <option value="2">deux personnes</option>
                        <option value="3">Trois personnes</option>
                        <option value="4">Quatres personnes</option>

                    </select></br>

                    <div class="btn-row">
                        <span class="input-group-btn">
                            <button href="#" type="submit"  class="btn btn-warning">Réserver</button>
                        </span>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</section>



<?php include("C:/wamp64/www/projetPHP/footer.php");?>


    <!-- Vendor JS Files -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="../vendor/jquery-sticky/jquery.sticky.js"></script>
    <script src="../vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../vendor/venobox/venobox.min.js"></script>
    <script src="../vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="../js/main.js"></script>
</body>
</html>