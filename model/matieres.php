<?php
include_once __DIR__.'/../DataBase/DataBase.php';
include_once __DIR__.'/../controller/HomeCont.php';

include_once 'conn.php';

class matieres{
    // ORDER BY IdMat ASC


    //select
    public function select(){

        $query1 = "SELECT * FROM matieres ORDER BY IdMat ASC";

        // $query = "SELECT m.IdMat  , m.Libelle , e.Nom FROM `matieres` m ,`enseignants`e  WHERE m.Enseignee= e.IdEns  ";
        
        

        $newobj = new DataBase();
        $conn = $newobj -> connect();
        
        // $result = $conn -> query($query);
        $result = $conn -> query($query1);
        
        
        // return $result -> fetchAll (PDO::FETCH_ASSOC);
        return $result -> fetchAll (PDO::FETCH_ASSOC);
        
       

    }

    public function getEns(){

        $query1 = "SELECT DISTINCT Nom FROM enseignants";
        $newobj = new DataBase();
        $conn = $newobj -> connect();
        $result = $conn -> query($query1);
        
        return $result -> fetchAll (PDO::FETCH_ASSOC);

    }


    //ajouter
    public function Ajout($libelle, $enseignee){

        $query = "INSERT INTO `matieres` (`Libelle`, `Enseignee`) VALUES ('$libelle','$enseignee')";
        $newobj = new DataBase();
        $conn = $newobj -> connect();
        $result = $conn -> query($query);

    }

    //delete
    public function delete($idMat){

        $query = "DELETE FROM `matieres` WHERE IdMat=$idMat";
        $newobj = new DataBase();
        $conn = $newobj -> connect();
        $result = $conn -> query($query);

    }

    //update
    public function update($idMat,$libelle, $enseignee){


        try {

            $newobj = new DataBase();
            $conn = $newobj -> connect();

            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $query = "UPDATE `matieres` SET `Libelle`='$libelle',`Enseignee`='$enseignee' WHERE IdMat=$idMat";

            // Prepare statement
            $stmt = $conn->prepare($query);

            // execute the query
            $stmt->execute();

            // echo a message to say the UPDATE succeeded
            echo $stmt->rowCount() . " Information UPDATED successfully";
        
        } catch(PDOException $e) {
        
            echo $query . "<br>" . $e->getMessage();
        
        }

        $conn = null;
    }
    
}














