<?php
$Arraycontrollers = array(
    'Page' => ['home','error','produit','plats','desserts'],
    'Reservation' => ['reserver','affciherReservation'],
    'Login' => ['login','affciherLogin'],

    'Panier' => ['index', 'modifier', 'supprimer', 'ajouter']);


if (array_key_exists($controller, $Arraycontrollers)) {
    if (in_array($action, $Arraycontrollers[$controller])) {
        call($controller, $action);
    } else {
        call('Page', 'error');
    }
} else {
    call('Page', 'error');
}




function call($controller, $action)
{

    include('C:/wamp64/www/projetPHP/controller/' . $controller . 'Controller.php');


    switch ($controller) {
        case 'Page':
            $controller = new PageController();
             break;
        case 'Reservation':
            require_once('model/Reservation.php');
            $controller = new ReservationController();
             break;
        case 'Login':
            require_once('model/Login.php');
            $controller = new LoginController();
            break;




    }
    ;
    $controller->{$action}();
}


