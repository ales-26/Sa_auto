<?php

class Connexion {

    private static $_instance = null;

    public static function getInstance($dsn, $user, $password){
        // :: --> maniere d'atteindre une variable statique
        // self est l'objet lui meme
        if (!self::$_instance){
            //si l'instance de connexion n'existe pas encore
            try{
                //on essaie d'instancier un objet PDO
                self::$_instance = new PDO($dsn,$user,$password);
                //print "Connecté";
            } catch (PDOException $e){
                print "Echec : ".$e->getMessage();
            }
        }
        return self::$_instance;
    }
}