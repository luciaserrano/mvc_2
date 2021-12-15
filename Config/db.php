<?php

class Database
{
    private static $bdd = null;

    private function __construct() {
    }

    public static function getBdd() {
        try{
            if(is_null(self::$bdd)) {
                self::$bdd = new PDO("mysql:host=localhost;dbname=proyectomvc", 'root', 'root');
            }
            return self::$bdd;
        }
        catch (PDOException $e){
            print_r($e->getMessage());
        }
    }
}
?>