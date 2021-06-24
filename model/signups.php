<?php
include_once __DIR__.'/../DataBase/DataBase.php';
include_once __DIR__.'/../controller/signupCont.php';

include_once 'conn.php';

class signups{



    //ajouter
    public function Ajout($username, $email, $password, $matiere){

        $query = "INSERT INTO `users`(`username`, `password`, `Role` ) VALUES ('$username','$password','enseignant')";
        $query1 = "INSERT INTO `enseignants`(`Nom`, `Email`, `Password`,`Matiere` ) VALUES ('$username','$email','$password','$matiere')";
        $query2 = "INSERT INTO `matieres`(`Libelle`, `Enseignee`) VALUES ('$matiere','$username')";
        
        $newobj = new DataBase();
        $conn = $newobj -> connect();

        $result = $conn -> query($query);
        $result1 = $conn -> query($query1);
        $result2 = $conn -> query($query2);

    }

}