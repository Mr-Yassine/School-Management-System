<?php
// require 'conn.php';
include_once __DIR__.'/../DataBase/DataBase.php';



class users {

    private $username;
    private $password;



    //select User
    public function select($username,$password){

        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $newobj = new DataBase();
        $conn = $newobj -> connect();

        $this -> username = $username;
        $this -> password = $password;


        $result = $conn -> query($query);
        return $result -> fetchAll (PDO::FETCH_ASSOC);

    }


}