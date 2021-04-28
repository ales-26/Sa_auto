<?php

class Reservation{
    private $_attribut = array();

    public function __construct(array $data){  //$date est recu de themeBD
        $this->hydrate($data);
    }

    public function hydrate(array $data){   //recu du constructeur
        foreach ($data as $champ => $valeur){  //chaque champs est créé et associé à sa valeur
            $this->$champ = $valeur;
        }
    }

    public function __get($champ){  //champ = clé
        if(isset($this->_attribut[$champ])){
            return $this->_attribut[$champ];
        }
    }

    public function __set($champ, $valeur){
        $this->_attribut[$champ] = $valeur;
    }



}
