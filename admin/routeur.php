<?php

// controller : [liste des fonctions dans controller ]
$Arraycontrollers = array(
    'Pages' => ['error'],
    'Admin' => ['index','error'],
    'Utilisateur' => ['index', 'modifier', 'modifierFormulaire','supprimer', 'ajouter','afficherFormulaire'],
    'Produit' => ['index', 'modifier', 'modifierFormulaire','supprimer', 'ajouter','afficherFormulaire'],
    'Reservation' => [ 'afficherListReservation']);


if (array_key_exists($controller, $Arraycontrollers)) {
    if (in_array($action, $Arraycontrollers[$controller])) {
          call($controller, $action);
            } else {
               call('Admin', 'error');
            }
    } else {
            call('Admin', 'error');
    }




function call($controller, $action)
{

   include('C:/wamp64/www/projetPHP/admin/controller/' . $controller . 'Controller.php');


    switch ($controller) {
        case 'Pages':
            $controller = new PagesController();
        case 'Admin':
            $controller = new AdminController();
            break;
        case 'Utilisateur':
            // we need the model to query the database later in the controller
            require_once('model/Utilisateur.php');
            $controller = new UtilisateurController();
            break;
        case 'Produit':
            // we need the model to query the database later in the controller
            require_once('model/Produit.php');
            $controller = new ProduitController();
            break;
        case 'Reservation':
            // we need the model to query the database later in the controller
            require_once('model/Reservation.php');
            $controller = new ReservationController();
            break;

        case 'commande':
            // we need the model to query the database later in the controller
            require_once('models/commande.php');
            $controller = new commandesController();
            break;

    }
    ;
    $controller->{$action}();
}


