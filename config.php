<?php


class config
{
    // specify your own db credentials
    private static $host = "localhost";
    private static $db_name = "siteweb";
    private static $username = "root";
    private static $password = "root";
    private static $conn;


    // get the db connection
    public static function getConnection(){

        self::$conn = null;

        try{
            self::$conn = new \PDO("mysql:host=" . self::$host . ";dbname=" . self::$db_name, self::$username, self::$password);
            self::$conn->exec("set names utf8");
        }
        catch(\PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }

        return self::$conn;
    }

}