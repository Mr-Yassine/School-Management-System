<?php


require __DIR__.'/../model/enseignants.php';


class EnseignantCont{

	
	function enseignant(){

		session_start();
			if(!isset($_SESSION["username"])){
			header("location:http://localhost/School-Management-System/");
		}

		$obj= new enseignants();
		$result = $obj -> select();
		require_once __DIR__.'/../view/enseignants/enseignant.php';


	}
	


	function Ajout(){

		session_start();
		if(!isset($_SESSION["username"])){
			header("location:http://localhost/School-Management-System/");
		}
		
		if (isset ($_POST ['submit'])){

			$Nom=$_POST ['Nom'];
			$Email=$_POST ['Email'];
            $Password=$_POST ['Password'];
			$Matiere=$_POST ['Matiere'];

			$obj= new enseignants();


			$result = $obj -> Ajout($Nom, $Email, $Password, $Matiere);

			header ("location:http://localhost/School-Management-System/EnseignantCont/enseignant");
		}
	}

	function delete(){

		session_start();
		if(!isset($_SESSION["username"])){
			header("location:http://localhost/School-Management-System/");
		}

		if (isset ($_POST ['submit'])){
			
			$IdEns=$_POST ['IdEns'];

			$obj= new enseignants();

			$result = $obj -> delete ($IdEns);

			header ("location:http://localhost/School-Management-System/EnseignantCont/enseignant");
		}
	}

	function update(){

		session_start();
		if(!isset($_SESSION["username"])){
			header("location:http://localhost/School-Management-System/");
		}

	
		if (isset ($_POST ['update'])){
			

			$IdEns=$_POST ['IdEns'];
			$Nom=$_POST ['Nom'];
			$Email=$_POST ['Email'];
            $Password=$_POST ['Password'];
			$Matiere=$_POST ['Matiere'];


			$obj= new enseignants();

			$result = $obj -> update ($IdEns, $Nom, $Email, $Password, $Matiere);

			header ("location:http://localhost/School-Management-System/EnseignantCont/enseignant");
		}
		
	}

	
	
}