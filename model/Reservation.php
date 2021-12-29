<?php
include ("C:/wamp64/www/projetPHP/config.php");

class Reservation
{
    public $res_id;
    public $nom;
    public $email;
    public $num_tel;
    public $date;
    public $time;
    public $personne;


    public function __construct($res_id, $nom, $email, $num_tel, $date, $time, $personne)
    {
        $this->res_id = $res_id;
        $this->nom = $nom;
        $this->email = $email;
        $this->num_tel = $num_tel;
        $this->date = $date;
        $this->time = $time;
        $this->personne = $personne;
    }


    public static function reserver($nom, $email, $num_tel, $date, $time, $personne) {
        try {
            $connexion = config::getConnection();

            $req = $connexion->query("INSERT INTO reservations (nom, email, num_tel, date,time , personne) VALUES('".$nom."', '".$email."', '".$num_tel."', '".$date."', '".$time."','".$personne."')");

        }
        catch(PDOException $e) {

            echo"<br>" . $e->getMessage();
        }
        echo "Votre réservation bien enregistrer ";
    }




}