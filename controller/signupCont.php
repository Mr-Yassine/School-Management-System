<?php


require __DIR__.'/../model/Signups.php';
require_once __DIR__.'/../model/matieres.php';


class signupCont{


    function index(){

		$obj= new signups();
		$obj= new matieres();
		$result = $obj -> select();
        require_once __DIR__.'/../view/Signup.php';	
		

    }

        

    function Ajout(){


		if (isset($_POST['Username']) ){

			$username=$_POST ['Username'];
			$email=$_POST ['Email'];
            $password=$_POST ['Password'];
			$matiere=$_POST ['Matiere'];

			$obj= new signups();

			$result = $obj -> Ajout($username, $email, $password, $matiere);
			
			header ("location:http://localhost/School-Management-System/");
		}
	}
}

?>