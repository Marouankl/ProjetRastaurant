<?php

require_once('C:/wamp64/www/projetPHP/admin/model/Reservation.php');
class ReservationController
{
  public function afficherListReservation(){
      $listReservation = Reservation::getlistReservation();
      require_once('C:/wamp64/www/projetPHP/admin/view/reseravtion/reservation.php');
  }

    public function supprimer(){
        Reservation::DeleteRservation($_GET['id']);
        $Reservation= Reservation::getlistReservation();
        require_once('C:/wamp64/www/projetPHP/admin/view/produit/index.php');
    }


}