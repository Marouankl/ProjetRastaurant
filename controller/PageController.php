<?php


class PageController
{
    public function home() {
        // appel view
        require_once('C:/wamp64/www/projetPHP/home.php');
    }

    public function error()
    {
        require_once("C:/wamp64/www/projetPHP/404.php");
    }

    function produit()
    {
        require("C:/wamp64/www/projetPHP/veiw/Produit.php");
    }
    function desserts()
    {
        require("C:/wamp64/www/projetPHP/veiw/Desserts.php");
    }
    function plats()
    {
        require("C:/wamp64/www/projetPHP/veiw/Plats.php");
    }

    function login(){
        require("C:/wamp64/www/projetPHP/veiw/login.php");
    }

}