<?php
include_once __DIR__.'/../DataBase/DataBase.php';
include_once __DIR__.'/../controller/HomeCont.php';

include_once 'conn.php';

class salles{


    //select
    public function select(){

        $query = "SELECT * FROM salles ORDER BY idSalle ASC";
        $newobj = new DataBase();
        $conn = $newobj -> connect();
        $result = $conn -> query($query);
        return $result -> fetchAll (PDO::FETCH_ASSOC);

    }

    //ajouter
    public function Ajout($libelle, $capacite){

        $query = "INSERT INTO `salles` (`Libelle`, `Capacite`) VALUES ('$libelle','$capacite')";
        $newobj = new DataBase();
        $conn = $newobj -> connect();
        $result = $conn -> query($query);

    }

    //delete
    public function delete($idSalle){

        $query = "DELETE FROM `salles` WHERE idSalle=$idSalle";
        $newobj = new DataBase();
        $conn = $newobj -> connect();
        $result = $conn -> query($query);

    }

    //update
    public function update($IdSalle,$libelle, $capacite){


        try {

            $newobj = new DataBase();
            $conn = $newobj -> connect();

            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $query = "UPDATE `salles` SET `Libelle`='$libelle',`Capacite`=$capacite WHERE IdSalle=$IdSalle";

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


