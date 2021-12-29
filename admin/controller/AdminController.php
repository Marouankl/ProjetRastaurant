<?php


class AdminController
{
    public function index() {
        // appel view
        require_once('C:/wamp64/www/projetPHP/admin/view/dashboard.php');
    }

    public function error()
    {
        require_once("C:/wamp64/www/projetPHP/admin/view/admin/404.php");
    }
}