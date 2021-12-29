<?php

require_once('C:/wamp64/www/projetPHP/model/Login.php');
class LoginController
{
    public function affciherLogin(){
        require_once('C:/wamp64/www/projetPHP/veiw/login.php');

    }
    public function login ()
    {

        $email= $_POST['email'];
        $password = $_POST['password'];


       $result = Login::login($email, $password);

       if($result){

           header("Location: ../projetPHP/admin/index.php");
       }
       else
       {
           header("Location: 404.php");

       }

    }
}

