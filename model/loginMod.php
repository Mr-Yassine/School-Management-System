<?php
include_once __DIR__.'/../DataBase/DataBase.php';
include_once __DIR__.'/../controller/loginCont.php';

include_once 'conn.php';

class loginMod{


    //select
    public function select($username, $password){

        $query = "SELECT * FROM `users` WHERE Username='$username' and Password='$password'";
        $newobj = new DataBase();
        $conn = $newobj -> connect();
        $result = $conn -> query($query);
        return $result -> fetchAll (PDO::FETCH_ASSOC);

    }

    public function logout(){
        
        session_start();
        session_destroy();
       
    }

    
}