<?php

include_once '../modele/connexionDB.php';

Class dirigeant_DAO
{

    public function getAllbyLogin($login){
        $connexion = new connexionDB();
        $connexion->connexionPDO();
        $query = $connexion->PrepareRequete('SELECT * FROM dirigeant WHERE login = :login');
        $query->bindValue(':login', $login, PDO::PARAM_STR);
        $query->execute();
        $result = $query-> fetch(PDO::FETCH_ASSOC);
        if($result){
            return $result;
        }
        else{
            return false;
        }
    }

    public function getAllDirigeant() {
        $resultat = array();
        try {
            $connexion = new connexionDB();
            $connexion->connexionPDO();
            $query =  $connexion->PrepareRequete("Select * from dirigeant");
            $query->execute();
            $ligne = $query->fetch(PDO::FETCH_ASSOC);
            while ($ligne) {
                $resultat[] = $ligne;
                $ligne = $query->fetch(PDO::FETCH_ASSOC);
            }
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }



    public static function getElementUserByLogin($login){
        $connexion = new connexionDB();
        $connexion->connexionPDO();
        $query = $connexion->PrepareRequete('SELECT * FROM `dirigeant` where login= :login');
        $query->bindValue(':login', $login, PDO::PARAM_STR);
        $query->execute();
        $result = $query-> fetch(PDO::FETCH_ASSOC);
        if($result){
            return $result;
        }
        else{
            return false;
        }
    }

    public function UpdatePassword($id, $pwd)
    {
        $connexion = new connexionDB();
        $connexion->connexionPDO();
        $query = $connexion->PrepareRequete('UPDATE `dirigeant` SET `mdp`= :pwd WHERE Id = :id');

        $query->bindValue(':pwd', $pwd, PDO::PARAM_STR);
        $query->bindValue(':id', $id, PDO::PARAM_STR);

        $query->execute();
    }
}
