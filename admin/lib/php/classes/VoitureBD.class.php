<?php

class VoitureBD extends Voiture{

    private $_db_; //recevoir la valeur de $cnx lors de la connexion à la Bd dans l'index
    private $_data = array();
    private $_resultset;

    public function __construct($cnx){ //$cnx envoyé depuis la page qui instancie
        $this->_db =$cnx;
    }

    public function getVoiture(){
        $query = "select * from voiture";
        $_resultset = $this->_db->prepare($query);
        $_resultset->execute();

        while ($d = $_resultset->fetch()){
            $_data[] = new voiture($d);
        }
        //var_dump($_data);
        return $_data;
    }

    public function getNewVoiture(){
        $query = "select * from voiture where new='true'";
        $_resultset = $this->_db->prepare($query);
        $_resultset->execute();

        while ($d = $_resultset->fetch()){
            $_data[] = new voiture($d);
        }
        //var_dump($_data);
        return $_data;
    }

    public function getVoituremarque(){
        $query = "select distinct marque from voiture";
        $_resultset = $this->_db->prepare($query);
        $_resultset->execute();

        while ($d = $_resultset->fetch()){
            $_data[] = new voiture($d);
        }
        //var_dump($_data);
        return $_data;
    }

    public function NewVoitureAjout($image_nom,$marque,$modele,$carburant,$annee,$puissance,$boite,$km,$prix){
        try{
            $query = "select Ajout_voiture(:image_nom,:marque,:modele,:carburant,:annee,:puissance,:boite,:km,:prix,true)as retour";
            $_resultset = $this->_db->prepare($query);
            $_resultset->bindValue(':image_nom', $image_nom);
            $_resultset->bindValue(':marque', $marque);
            $_resultset->bindValue(':modele', $modele);
            $_resultset->bindValue(':carburant', $carburant);
            $_resultset->bindValue(':annee', $annee);
            $_resultset->bindValue(':puissance', $puissance);
            $_resultset->bindValue(':boite', $boite);
            $_resultset->bindValue(':km', $km);
            $_resultset->bindValue(':prix', $prix);
            $_resultset->execute();
            $retour =$_resultset->fetchColumn(0);

            return $retour;
        }catch(PDOException $e){
            print "Echec ".$e->getMessage();
        }
    }

    public function VoitureAjout($image_nom,$marque,$modele,$carburant,$annee,$puissance,$boite,$km,$prix){
        try{
            $query = "select Ajout_voiture(:image_nom,:marque,:modele,:carburant,:annee,:puissance,:boite,:km,:prix,false)as retour";
            $_resultset = $this->_db->prepare($query);
            $_resultset->bindValue(':image_nom', $image_nom);
            $_resultset->bindValue(':marque', $marque);
            $_resultset->bindValue(':modele', $modele);
            $_resultset->bindValue(':carburant', $carburant);
            $_resultset->bindValue(':annee', $annee);
            $_resultset->bindValue(':puissance', $puissance);
            $_resultset->bindValue(':boite', $boite);
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
    public function getidvoiture($id_voiture){
        try {
            $this->_db->beginTransaction();
            $query = "select * from voiture where id_voiture = :id_voiture";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':id_voiture', $id_voiture);
            $resultset->execute();
            $data = $resultset->fetch();
            return $data;

            $this->_db->commit();

        } catch(PDOException $e){
            print "Echec de la requête : ".$e->getMessage();
            $_db->rollback();
        }
    }

    public function ModifPrixVoit($id_voiture,$prix){
        try {
            $query = "select Modif_prix_voiture($id_voiture,$prix)as retour";
            $resultset = $this->_db->prepare($query);
            $resultset->execute();
            $retour =$resultset->fetchColumn(0);

            return $retour;
        }catch(PDOException $e){
            print "Echec ".$e->getMessage();
        }
    }

    public function SuppNewVoit($id_voiture){
        try {
            $query = "select Supp_new_voiture($id_voiture,false)as retour";
            $resultset = $this->_db->prepare($query);
            $resultset->execute();
            $retour =$resultset->fetchColumn(0);

            return $retour;
        }catch(PDOException $e){
            print "Echec ".$e->getMessage();
        }
    }

    public function SuppVoit($id_voiture){
        try {
            $query = "select Supp_voit_voiture($id_voiture)as retour";
            $resultset = $this->_db->prepare($query);
            $resultset->execute();
            $retour =$resultset->fetchColumn(0);

            return $retour;
        }catch(PDOException $e){
            print "Echec ".$e->getMessage();
        }
    }


    public function getmarquemodelvoit($marque,$modele){
        try {
            $this->_db->beginTransaction();
            $query = "select * from voiture where marque = :marque and lower(modele) like lower('%".$modele."%')";
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

    public function getrecherche_rapide_voit($marque,$modele,$carbu){
        $flag=0;
        $query = "select * from voiture where marque = :marque and lower(modele) like lower('%".$modele."%') and carburant = :carbu ";
        $_resultset = $this->_db->prepare($query);
        $_resultset->bindValue(':marque', $marque);
        $_resultset->bindValue(':carbu', $carbu);
        $_resultset->execute();

        while ($d = $_resultset->fetch()){
            $_data []= new voiture($d);
            $flag=1;
        }
        if($flag==1){
            return $_data;
        }
    }


}