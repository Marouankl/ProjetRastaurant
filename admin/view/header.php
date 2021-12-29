<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Espace admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="C:/wamp64/www/Delicious/admin/public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="../public/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="../public/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../public/vendor/morrisjs/morris.css" rel="stylesheet">
    <link href="../public/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Espace administrateur</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item">
                    <a class="nav-link active" href='?controller=Reservation&action=afficherListReservation'><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active"href='?controller=Utilisateur&action=index'><i class="fa fa-edit fa-fw"></i> Utilisteur</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href='?controller=Produit&action=index'><i class="fa fa-edit fa-fw"></i> Produits</a>
                </li>


            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
</div>