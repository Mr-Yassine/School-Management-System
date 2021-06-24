<?php


  class connection {

    private $username = 'root';
    private $password = '';
    private $host = 'localhost';
    private $database='school_sys';

    public $conn;

    public function __construct(){

      try {

        // $conn = new PDO ($host, $database, $username, $password);
        $this-> conn = new PDO ("mysql:host=".$this->host.";dbname=".$this->database,$this->username, $this->password);

      } catch (PDOException $e) {

        print "ERREUR : ".$e->getMessage()."<br/>";

      }
     
    }

  }


?>

