<?php
require_once __DIR__."/../model/users.php";
require_once __DIR__."/../model/loginMod.php";
require_once __DIR__."/../model/enseignants.php";

class LoginCont{

    public function index(){
        require __DIR__."/../view/login.php";
    }

    public function auth(){   
        
        require_once __DIR__. "/../model/conn.php";

        if(isset($_POST['login'])){

            $obj= new loginMod();
		    $result = $obj -> select( $_POST['username'], $_POST['password'] );
            

            if($result == null) {
                
                echo "<script>alert('Username or password not valid')</script>";
                header("location:http://localhost/School-Management-System/");

            } else {

                session_start();
                $_SESSION['username']=$result[0]['username'];
                $role =  $_SESSION['Role']=$result[0]['Role'];
                
                
                if ($role != "Admin") {  

                    header("location:http://localhost/School-Management-System/ReservationCont/index");
                    
                } else {
                    
                    header("location:http://localhost/School-Management-System/homeCont");
                }
           
            }
        }

        
    }

    function logout(){

        if(isset($_POST['logout'])){

            $obj= new loginMod();
		    $result = $obj -> logout();

            header("location:http://localhost/School-Management-System/loginCont/index ");
        }
    }

            
}

?>