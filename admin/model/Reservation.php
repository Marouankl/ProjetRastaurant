<?php

include ("C:/wamp64/www/projetPHP/admin/config/Db.php");
class Reservation
{

    public $nom;
    public $email;
    public $num_tel;
    public $date;
    public $time;
    public $personne;


    public function __construct( $nom, $email, $num_tel, $date, $time, $personne)
    {
        $this->nom = $nom;
        $this->email = $email;
        $this->num_tel = $num_tel;
        $this->date = $date;
        $this->time = $time;
        $this->personne = $personne;
    }

    public static  function getlistReservation() {
        $listReservation = [];

        $connexion = Db::getConnection();

        $req = $connexion->query('SELECT * FROM reservations',PDO::FETCH_ASSOC);

        foreach($req  as $Reservation) {
            $listReservation[] = new Reservation( $Reservation['nom'],$Reservation['email'],$Reservation['num_tel'],$Reservation['date'],$Reservation['time'],$Reservation['personne']);
        }

        return $listReservation;
    }

    public static function DeleteReservation($id) {
        try {
            $connexion = Db::getConnection();
            $sql = "DELETE from reservations where res_id ='".$id."' ";
            $stmt = $connexion->query($sql);
            var_dump($stmt);

        }
        catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }

}