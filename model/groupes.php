<?php
include_once __DIR__.'/../DataBase/DataBase.php';
include_once __DIR__.'/../controller/HomeCont.php';

include_once 'conn.php';

class groupes{


    //select
    public function select(){

        $query = "SELECT * FROM groupes ORDER BY idGrp ASC";
        $newobj = new DataBase();
        $conn = $newobj -> connect();
        $result = $conn -> query($query);
        return $result -> fetchAll (PDO::FETCH_ASSOC);

    }

    //ajouter
    public function Ajout($libelle, $effectif){

        $query = "INSERT INTO `groupes` (`Libelle`, `Effectif`) VALUES ('$libelle','$effectif')";
        $newobj = new DataBase();
        $conn = $newobj -> connect();
        $result = $conn -> query($query);

    }

    //delete
    public function delete($idGrp){

        $query = "DELETE FROM `groupes` WHERE idGrp=$idGrp";
        $newobj = new DataBase();
        $conn = $newobj -> connect();
        $result = $conn -> query($query);

    }

    //update
    public function update($IdGrp,$libelle, $effectif){


        try {

            $newobj = new DataBase();
            $conn = $newobj -> connect();

            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $query = "UPDATE `groupes` SET `Libelle`='$libelle',`Effectif`=$effectif WHERE IdGrp=$IdGrp";

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














