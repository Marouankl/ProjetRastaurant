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
   
    <link href="../css/header.css" rel="stylesheet">
    <link href="../css/footer.css" rel="stylesheet">
    <link href="../css/login.css" rel="stylesheet">


</head>

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


<div class="wrapper fadeInDown">
    <div id="formContent">

        <div class="fadeIn first">
            <img src="../img/logo.png" id="icon" alt="User Icon" />
        </div>


        <form  action='?controller=Login&action=login' method = "post">
            <input type="email" id="login" class="fadeIn second" name="email" placeholder="Votre e-mail">
            <input type="password" id="password" class="fadeIn third" name="password" placeholder="Mot de passe">
            <input type="submit" class="fadeIn fourth"  value="Se connecter">
        </form>


    </div>
</div>




<?php include("C:/wamp64/www/projetPHP/footer.php");?>
<script src=" http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
