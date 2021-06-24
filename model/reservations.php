<?php

include_once __DIR__ . '/../DataBase/DataBase.php';
include_once __DIR__ . '/../controller/ReservationCont.php';
include_once __DIR__ . '/../model/reservations.php';

include_once 'conn.php';



class Reservations
{

    //select salle
    function selectsalle(){

        $query = "SELECT * FROM salles ";
        $newobj = new DataBase();
        $conn = $newobj->connect();
        $result = $conn->query($query);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCours(){

        $query1 = "SELECT * FROM cours ORDER BY IdCours ASC";
        $newobj = new DataBase();
        $conn = $newobj->connect();
        $result = $conn->query($query1);

        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    private function checkifAvailble($date, $salle, $heure){

        $query = "SELECT count(*) FROM cours WHERE salle = '$salle' and heure = '$heure' and Date='$date' ";
        $newobj = new DataBase();
        $conn = $newobj->connect();
        
        $result=$conn->query($query)->fetchColumn();
        echo $result;
        if($result == 0){
            return true;
        }
        return false;
    }

    public function Ajout($date, $capacite, $heure, $salle){

        if ($this->checkifAvailble($date, $salle, $heure)) {
            $query = "INSERT INTO `cours`(`Date`, `Capacite`, `Heure`, `Salle`) VALUES ('$date', '$capacite', '$heure','$salle')";
            $newobj = new DataBase();
            $conn = $newobj->connect();
            $result = $conn->query($query);
            return true;
        } else {
            return false;
        }
    }


    //delete
    public function delete($idCours){

        $query = "DELETE FROM `cours` WHERE idCours=$idCours";
        $newobj = new DataBase();
        $conn = $newobj->connect();
        $result = $conn->query($query);
    }
}
