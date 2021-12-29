<?php


include ("C:/wamp64/www/projetPHP/admin/config/Db.php");

class Utilisateur
{
    public $id;
    public $nom;
    public $prenom;
    public $sexe;
    public $date_naissance;
    public $adresse;
    public $num_tel;
    public $email;
    public $password;



    public function __construct($id, $nom, $prenom, $sexe, $date_naissance, $adresse,$num_tel,$email,$password) {
        $this->id = $id;
        $this->nom  = $nom;
        $this->prenom = $prenom;
        $this->sexe  = $sexe;
        $this->date_naissance = $date_naissance;
        $this->adresse = $adresse;
        $this->num_tel = $num_tel;
        $this->email = $email;
        $this->password = $password;

    }

    public static  function allUser() {
        $listUser = [];

        $connexion = Db::getConnection();

        $req = $connexion->query('SELECT * FROM clients',PDO::FETCH_ASSOC);
        // we create a list of User objects from the database results
        foreach($req  as $Utilisateur) {
            $listUser[] = new Utilisateur($Utilisateur['id'],$Utilisateur['prenom'],$Utilisateur['nom'],$Utilisateur['sexe'],$Utilisateur['date_naissance'],$Utilisateur['adresse'],$Utilisateur['num_tel'],$Utilisateur['email'],$Utilisateur['password']);
        }
        return $listUser;
    }


    public static function ajouter( $nom, $prenom, $sexe, $date_naissance, $adresse,$num_tel,$email,$password) {
        try {
            $connexion = Db::getConnection();

            $req = $connexion->query("INSERT INTO clients(nom,prenom,sexe,date_naissance,email,password,num_tel,adresse) VALUES('".$nom."', '".$prenom."', '".$sexe."', '".$date_naissance."', '".$email."','".$password."','".$num_tel."','".$adresse."')");

        }
        catch(PDOException $e) {

            echo"<br>" . $e->getMessage();
        }
    }

    public static function getUserbyId($id){

        $connexion = Db::getConnection();

        $stmt = $connexion->prepare("SELECT * FROM clients where id='$id'");
        $stmt->execute();
        $row  = $stmt->fetch();


        $user = new Utilisateur($row['id'],$row['prenom'],$row['nom'],$row['sexe'],$row['date_naissance'],$row['adresse'],$row['num_tel'],$row['email'],$row['password']);

        return $user;
    }


    public static function deleteUser($id) {
        try {
            $connexion = Db::getConnection();
            $sql = "DELETE from clients where id = '$id' ";
            $stmt = $connexion->query($sql);

        }
        catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }
    public static function modifier($id,$nom, $prenom, $sexe, $date_naissance, $adresse,$num_tel,$email,$password) {
        try {
            $connexion = Db::getConnection();

            $sql = "UPDATE clients SET  nom=?,prenom=?,sexe=?,date_naissance=?, adresse=?,num_tel=?,email=?,password=? WHERE id=?";
            $stmt = $connexion->prepare($sql);
            $stmt->execute([$nom,$prenom, $sexe, $date_naissance, $adresse,$num_tel,$email,$password,$id]);


        }
        catch(PDOException $e) {

            echo"<br>" . $e->getMessage();
        }
    }







}