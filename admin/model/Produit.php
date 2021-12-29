<?php
include ("C:/wamp64/www/projetPHP/admin/config/Db.php");
class Produit
{
    public $id_produit;
    public $categorie;
    public $nom;
    public $description;
    public $prix;
    public $img;



    public function __construct($id_produit, $categorie, $nom,  $description, $prix, $img)
    {
        $this->id_produit = $id_produit;
        $this->categorie = $categorie;
        $this->nom = $nom;
        $this->description = $description;
        $this->prix = $prix;
        $this->img = $img;
    }

    public static  function allProduit() {
        $listProduit = [];

        $connexion = Db::getConnection();

        $req = $connexion->query('SELECT * FROM produit',PDO::FETCH_ASSOC);

        foreach($req  as $Produit) {
            $listProduit[] = new Produit($Produit['id_produit'],$Produit['categorie'],$Produit['nom'],$Produit['description'],$Produit['prix'],$Produit['img']);
        }
        return $listProduit;
    }

    public static function getProduitbyId($id){

        $connexion = Db::getConnection();
        $stmt = $connexion->prepare("SELECT * FROM produit where id_produit='$id'");
        $stmt->execute();
        $row  = $stmt->fetch();
       $categorie = "";
        if($row['categorie']== "1"){
            $categorie = "Plat";
        }else{
            $categorie = "Déssert";
        }

        $produit = new Produit($row['id_produit'],$categorie,$row['nom'],$row['description'],$row['prix'],$row['img']);

        return $produit;
    }


    public static function ajouter( $categorie, $nom, $description, $prix ,$img) {
        try {
            $connexion = Db::getConnection();

            $req = $connexion->query("INSERT INTO produit( categorie, nom, description, prix ,img) VALUES('".$categorie."', '".$nom."', '".$description."', '".$prix."','".$img."')");

        }
        catch(PDOException $e) {

            echo"<br>" . $e->getMessage();
        }
    }


    public static function DeleteProduit($id) {
        try {
            $connexion = Db::getConnection();
            $sql = "DELETE from produit where id_produit ='".$id."' ";
            $stmt = $connexion->query($sql);
        }
        catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    public static function modifier($categorie, $nom, $description, $prix ,$img,$id_produit)
    {
        try {
            $connexion = Db::getConnection();

            $imageAncien = "";
            if(empty($img)){
                $produit = Produit::getProduitbyId($id_produit);
                $imageAncien = $produit->img;
            }

            $sql = "UPDATE produit SET  categorie=?,nom=?,description=?,prix=?,img=? WHERE id_produit=?";
            $stmt = $connexion->prepare($sql);
            if(!empty($imageAncien)){

                $stmt->execute([$categorie, $nom, $description, $prix, $imageAncien, $id_produit]);
            }else{
                $stmt->execute([$categorie, $nom, $description, $prix, $img, $id_produit]);
            }


        } catch (PDOException $e) {

            echo "<br>" . $e->getMessage();
        }

    }



}