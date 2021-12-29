
<?php
 require_once('C:/wamp64/www/projetPHP/admin/model/Utilisateur.php');

  class UtilisateurController  {

    public function index() {
      // appel model
        $Utilisateurs = Utilisateur::allUser();
      // appel view
      require_once('C:/wamp64/www/projetPHP/admin/view/utilisateur/index.php');
    }

    public function supprimer(){
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            Utilisateur::DeleteUser( $id);
        }
    }

public function afficherFormulaire(){

     require_once('C:/wamp64/www/projetPHP/admin/view/utilisateur/ajouter.php');
}
 public function ajouter() {


 	$nom= $_POST['nom'];
 	$prenom = $_POST['prenom'];
 	$sexe = $_POST['sexe'];
    $date_naissance = $_POST['date_naissance'];
    $adresse = $_POST['adresse'];
    $num_tel = $_POST['num_tel'];
    $email = $_POST['email'];
    $password = $_POST['password'];

     //$utilisateur = new Utilisateur($_POST['nom'],$Utilisateur['prenom'],$Utilisateur['nom'],$Utilisateur['sexe'],$Utilisateur['date_naissance'],$Utilisateur['adresse'],$Utilisateur['num_tel'],$Utilisateur['email'],$Utilisateur['password']);
     Utilisateur::ajouter( $nom, $prenom, $sexe, $date_naissance, $adresse,$num_tel,$email,$password);
 }
 public function modifierFormulaire(){

          $id= $_GET['id'];
          $User = Utilisateur::getUserbyId( $id);
          require_once('C:/wamp64/www/projetPHP/admin/view/utilisateur/modifier.php');
      }

 public function modifier() {


          $id= $_POST['id'];
          $nom= $_POST['nom'];
          $prenom = $_POST['prenom'];
          $sexe = $_POST['sexe'];
          $date_naissance = $_POST['date_naissance'];
          $adresse = $_POST['adresse'];
          $num_tel = $_POST['num_tel'];
          $email = $_POST['email'];
          $password = $_POST['password'];


          Utilisateur::modifier($id,$nom, $prenom, $sexe, $date_naissance, $adresse,$num_tel,$email,$password);
      }

}
?>