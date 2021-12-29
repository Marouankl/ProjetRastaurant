<?php
include("C:/wamp64/www/projetPHP/config.php");

class Login
{


    private $email;
    private $password;

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }
    public static function login($email,$password)
    {


        try {
            $connexion = config::getConnection();

            $req = $connexion->prepare("SELECT email, password FROM admin  WHERE email=? and password=?");
            $req->execute([$email,$password]);

            $user = $req->fetch();

            if($user){
                return true ;
            }else{
                return false;
            }


        } catch (PDOException $e) {

            echo "<br>" . $e->getMessage();
        }

    }





}