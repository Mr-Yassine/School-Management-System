<?php
    class DataBase{

        static public function connect(){
            $db = new PDO("mysql:host=localhost;dbname=school_sys","root","");
            $db->exec("set names utf8");
           
            return $db;

            
        }
    }

?>