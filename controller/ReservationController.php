<?php

require_once('C:/wamp64/www/projetPHP/model/Reservation.php');
class ReservationController

{
    public function affciherReservation(){
       require_once('C:/wamp64/www/projetPHP/veiw/reservation.php');

    }
    public function reserver () {

        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $num_tel = $_POST['date'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $personne = $_POST['personne'];

        Reservation::reserver( $nom, $email, $num_tel, $date, $time, $personne);

    }

}