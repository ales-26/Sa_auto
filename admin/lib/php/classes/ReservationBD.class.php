<?php

class ReservationBD extends Reservation{

    private $_db_; //recevoir la valeur de $cnx lors de la connexion à la Bd dans l'index
    private $_data = array();
    private $_resultset;

    public function __construct($cnx){ //$cnx envoyé depuis la page qui instancie
        $this->_db =$cnx;
    }

    public function getlistereservationbytel($num_client){
        try{
            $query = "select * from vue_reservation where tel = :num_client";
            $_resultset = $this->_db->prepare($query);
            $_resultset->bindValue(':num_client', $num_client);
            $_resultset->execute();
            $data = $_resultset->fetchall();
            return $data;

            $this->_db->commit();

        } catch(PDOException $e){
            print "Echec de la requête : ".$e->getMessage();
            $_db->rollback();
        }
    }

    public function getlisteallreserv(){
        try{
            $query = "select * from vue_reservation";
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

    public function Reservation_voit_Ajout($id_client,$id_voiture,$date){
        try{
            $query = "select Ajout_reserv_voiture(:id_client,:id_voiture,:date)as retour";
            $_resultset = $this->_db->prepare($query);
            $_resultset->bindValue(':id_client', $id_client);
            $_resultset->bindValue(':id_voiture', $id_voiture);
            $_resultset->bindValue(':date', $date);
            $_resultset->execute();
            $retour =$_resultset->fetchColumn(0);

            return $retour;
        }catch(PDOException $e){
            print "Echec ".$e->getMessage();
        }
    }

    public function Reservation_moto_Ajout($id_client,$id_moto,$date){
        try{
            $query = "select Ajout_reserv_moto(:id_client,:id_moto,:date)as retour";
            $_resultset = $this->_db->prepare($query);
            $_resultset->bindValue(':id_client', $id_client);
            $_resultset->bindValue(':id_moto', $id_moto);
            $_resultset->bindValue(':date', $date);
            $_resultset->execute();
            $retour =$_resultset->fetchColumn(0);

            return $retour;
        }catch(PDOException $e){
            print "Echec ".$e->getMessage();
        }
    }

    public function getliste_reserv_client_voit($id_client){
        try{
            $flag=0;
            $query = "select * from vue_reservation_client_voit where id_client=:id_client";
            $_resultset = $this->_db->prepare($query);
            $_resultset->bindValue(':id_client', $id_client);
            $_resultset->execute();

            while ($d = $_resultset->fetch()){
                $_data []= new reservation($d);
                $flag=1;
            }
            if($flag==1){
                return $_data;
            }

        }catch(PDOException $e){
            print "Echec ".$e->getMessage();
        }
    }

    public function getliste_reserv_client_moto($id_client){
        try{
            $flag=0;
            $query = "select * from vue_reservation_client_moto where id_client=:id_client";
            $_resultset = $this->_db->prepare($query);
            $_resultset->bindValue(':id_client', $id_client);
            $_resultset->execute();

            while ($d = $_resultset->fetch()){
                $_data []= new reservation($d);
                $flag=1;
            }
            if($flag==1){
                return $_data;
            }

        }catch(PDOException $e){
            print "Echec ".$e->getMessage();
        }
    }
}