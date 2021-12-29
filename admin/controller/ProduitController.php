<?php

require_once('C:/wamp64/www/projetPHP/admin/model/Produit.php');
class ProduitController
{
    public function index() {
        // appel model
        $Produits = Produit::allProduit();
        // appel view
        require_once('C:/wamp64/www/projetPHP/admin/view/produit/index.php');
    }
    public function supprimer(){
        Produit::DeleteProduit($_GET['id']);
        $produits = Produit::allProduit();
        require_once('C:/wamp64/www/projetPHP/admin/view/produit/index.php');
    }

    public function afficherFormulaire(){

        require_once('C:/wamp64/www/projetPHP/admin/view/Produit/ajouter.php');
    }
    public function ajouter() {



        $categorie = $_POST['categorie'];
        $nom = $_POST['nom'];
        $description = $_POST['description'];
        $prix = $_POST['prix'];
        $img = $_POST['img'];

        Produit::ajouter( $categorie,  $nom, $description, $prix,$img);
            var_dump($prix);
    }
    public function modifierFormulaire(){

        $id = $_GET['id'];
        $Produit = Produit::getProduitbyId( $id);
        require_once('C:/wamp64/www/projetPHP/admin/view/produit/modifier.php');
    }


    public function modifier()

    {
           $id_produit = $_POST['id_produit'];
           $categorie = $_POST['categorie'];
           $nom = $_POST['nom'];
           $description = $_POST['description'];
           $prix = $_POST['prix'];
           $img = $_POST['img'];


            Produit::modifier($categorie,$nom,$description,$prix,$img,$id_produit);
            var_dump($categorie);
        }




}