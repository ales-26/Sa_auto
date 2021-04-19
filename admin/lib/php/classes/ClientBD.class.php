<?php

class ClientBD extends Client{

    private $_db_; //recevoir la valeur de $cnx lors de la connexion à la Bd dans l'index
    private $_data = array();
    private $_resultset;

    public function __construct($cnx){ //$cnx envoyé depuis la page qui instancie
        $this->_db =$cnx;
    }

    public function getlisteclientbytel($num_client){
        try{
            $query = "select * from vue_client where tel = :num_client and type_compte = 'membre'";
            //$query = "select liste_client_by_tel(:num_client)as retour";
            $_resultset = $this->_db->prepare($query);
            $_resultset->bindValue(':num_client', $num_client);
            $_resultset->execute();
            $data = $_resultset->fetch();
            return $data;

            $this->_db->commit();

        } catch(PDOException $e){
            print "Echec de la requête : ".$e->getMessage();
            $_db->rollback();
        }
    }

    public function getlisteAllclient(){
        try{
            $query = "select * from vue_client where type_compte = 'membre'";
            $_resultset = $this->_db->prepare($query);
            $_resultset->execute();
            $data = $_resultset->fetchall();

            return $data;

            $this->_db->commit();

        } catch(PDOException $e){
           print "Echec de la requête : ".$e->getMessage();
            $_db->rollback();
        }
    }

    public function getlisteadmin(){
        $query = "select * from vue_client where type_compte = 'admin' ";
        $_resultset = $this->_db->prepare($query);
        $_resultset->execute();

        while ($d = $_resultset->fetch()){
            $_data[] = new client($d);
        }
        //var_dump($_data);
        return $_data;
    }

    public function devient_admin($id_admin){
        try {
            $query = "select devient_admin($id_admin,'admin')as retour";
            $resultset = $this->_db->prepare($query);
            $resultset->execute();
            $retour =$resultset->fetchColumn(0);

            return $retour;
        }catch(PDOException $e){
            print "Echec ".$e->getMessage();
        }
    }
}