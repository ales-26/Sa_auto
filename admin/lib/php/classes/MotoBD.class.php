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
            $_data[] = new moto($d);
        }

        return $_data;
    }

    public function getMotomarque(){
        $query = "select distinct marque from moto";
        $_resultset = $this->_db->prepare($query);
        $_resultset->execute();

        while ($d = $_resultset->fetch()){
            $_data[] = new moto($d);
        }

        return $_data;
    }

    public function getNewMoto(){
        $query = "select * from moto where new='true'";
        $_resultset = $this->_db->prepare($query);
        $_resultset->execute();

        while ($d = $_resultset->fetch()){
            $_data[] = new moto($d);
        }

        return $_data;
    }

    public function NewMotoAjout($image_nom,$marque,$modele,$carburant,$annee,$puissance,$km,$prix){
        try{
            $query = "select Ajout_moto(:image_nom,:marque,:modele,:carburant,:annee,:puissance,:km,:prix,true)as retour";
            $_resultset = $this->_db->prepare($query);
            $_resultset->bindValue(':image_nom', $image_nom);
            $_resultset->bindValue(':marque', $marque);
            $_resultset->bindValue(':modele', $modele);
            $_resultset->bindValue(':carburant', $carburant);
            $_resultset->bindValue(':annee', $annee);
            $_resultset->bindValue(':puissance', $puissance);
            $_resultset->bindValue(':km', $km);
            $_resultset->bindValue(':prix', $prix);
            $_resultset->execute();
            $retour =$_resultset->fetchColumn(0);

            return $retour;
        }catch(PDOException $e){
            print "Echec ".$e->getMessage();
        }
    }

    public function MotoAjout($image_nom,$marque,$modele,$carburant,$annee,$puissance,$km,$prix){
        try{
            $query = "select Ajout_moto(:image_nom,:marque,:modele,:carburant,:annee,:puissance,:km,:prix,false)as retour";
            $_resultset = $this->_db->prepare($query);
            $_resultset->bindValue(':image_nom', $image_nom);
            $_resultset->bindValue(':marque', $marque);
            $_resultset->bindValue(':modele', $modele);
            $_resultset->bindValue(':carburant', $carburant);
            $_resultset->bindValue(':annee', $annee);
            $_resultset->bindValue(':puissance', $puissance);
            $_resultset->bindValue(':km', $km);
            $_resultset->bindValue(':prix', $prix);
            $_resultset->execute();
            $retour =$_resultset->fetchColumn(0);

            return $retour;
        }catch(PDOException $e){
            print "Echec ".$e->getMessage();
        }
    }

    //AJAX
    public function getidMoto($id_moto){
        try {
            $this->_db->beginTransaction();
            $query = "select * from moto where id_moto = :id_moto";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':id_moto', $id_moto);
            $resultset->execute();
            $data = $resultset->fetch();
            return $data;

            $this->_db->commit();

        } catch(PDOException $e){
            print "Echec de la requête : ".$e->getMessage();
            $_db->rollback();
        }
    }

    public function ModifPrixmoto($id_moto,$prix){
        try {
            $query = "select Modif_prix_moto($id_moto,$prix)as retour";
            $resultset = $this->_db->prepare($query);
            $resultset->execute();
            $retour =$resultset->fetchColumn(0);

            return $retour;
        }catch(PDOException $e){
            print "Echec ".$e->getMessage();
        }
    }

    public function SuppNewMoto($id_moto){
        try {
            $query = "select Supp_new_moto($id_moto,false)as retour";
            $resultset = $this->_db->prepare($query);
            $resultset->execute();
            $retour =$resultset->fetchColumn(0);

            return $retour;
        }catch(PDOException $e){
            print "Echec ".$e->getMessage();
        }
    }

    public function SuppMoto($id_moto){
        try {
            $query = "select Supp_mot_moto($id_moto)as retour";
            $resultset = $this->_db->prepare($query);
            $resultset->execute();
            $retour =$resultset->fetchColumn(0);

            return $retour;
        }catch(PDOException $e){
            print "Echec ".$e->getMessage();
        }
    }

    public function getmarquemodelmoto($marque,$modele){
        try {
            $this->_db->beginTransaction();
            $query = "select * from moto where marque = :marque and lower(modele) like lower('%".$modele."%')";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':marque', $marque);
            $resultset->execute();
            $data = $resultset->fetchall();
            return $data;

            $this->_db->commit();

        } catch(PDOException $e){
            print "Echec de la requête : ".$e->getMessage();
            $_db->rollback();
        }
    }

    public function getrecherche_rapide_moto($marque,$modele,$carbu){
        $flag=0;
        $query = "select * from moto where marque = :marque and lower(modele) like lower('%".$modele."%') and carburant = :carbu ";
        $_resultset = $this->_db->prepare($query);
        $_resultset->bindValue(':marque', $marque);
        $_resultset->bindValue(':carbu', $carbu);
        $_resultset->execute();

        while ($d = $_resultset->fetch()){
            $_data []= new moto($d);
            $flag=1;
        }
        if($flag==1){
            return $_data;
        }
    }

    public function getrecherche_long_moto($marque,$modele,$carbu,$annee,$prixmin,$prixmax){
        $flag=0;
        $query = "select * from moto where marque = :marque and lower(modele) like lower('%".$modele."%') and carburant = :carbu and annee >= :annee and prix >= :prixmin and prix <= :prixmax";
        $_resultset = $this->_db->prepare($query);
        $_resultset->bindValue(':marque', $marque);
        $_resultset->bindValue(':carbu', $carbu);
        $_resultset->bindValue(':annee', $annee);
        $_resultset->bindValue(':prixmin', $prixmin);
        $_resultset->bindValue(':prixmax', $prixmax);
        $_resultset->execute();

        while ($d = $_resultset->fetch()){
            $_data []= new moto($d);
            $flag=1;
        }
        if($flag==1){
            return $_data;
        }
    }
}