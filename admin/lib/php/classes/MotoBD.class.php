<?php

class MotoBD extends Moto{

    private $_db_; //recevoir la valeur de $cnx lors de la connexion à la Bd dans l'index
    private $_data = array();
    private $_resultset;

    public function __construct($cnx){ //$cnx envoyé depuis la page qui instancie
        $this->_db =$cnx;
    }

    public function getMoto(){
        $query = "select * from moto";
        $_resultset = $this->_db->prepare($query);
        $_resultset->execute();

        while ($d = $_resultset->fetch()){
            $_data[] = new voiture($d);
        }
        //var_dump($_data);
        return $_data;
    }



}