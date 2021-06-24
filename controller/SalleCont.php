<?php


require __DIR__.'/../model/salles.php';


class SalleCont
{

	function salle(){

		session_start();
		if(!isset($_SESSION["username"])){
			header("location:http://localhost/School-Management-System/");
		}

		$obj= new salles();
		$result = $obj -> select();
		require_once __DIR__.'/../view/salles/salle.php';
	}


	function Ajout(){

		session_start();
		if(!isset($_SESSION["username"])){
			header("location:http://localhost/School-Management-System/");
		}
		
		$i = 0;
		if (isset ($_POST ['submit'])){

			$libelle=$_POST ['libelle'];
			$capacite=$_POST ['capacite'];

			$obj= new salles();
			$result = $obj -> Ajout($libelle, $capacite);

			while(isset($_POST['Libelle'.$i])){
				$salle = new Salles();
				$salle->Ajout($_POST['Libelle'.$i],$_POST['capacite'.$i]);
				$i++;
			}
			
			header ("location:http://localhost/School-Management-System/salleCont/salle");
		}
	}

	function delete(){


		session_start();
		if(!isset($_SESSION["username"])){
			header("location:http://localhost/School-Management-System/");
		}

		if (isset ($_POST ['submit'])){
			
			$IdSalle=$_POST ['IdSalle'];

			$obj= new salles();
			$result = $obj -> delete ($IdSalle);
			header ("location:http://localhost/School-Management-System/salleCont/salle");
		}
	}

	function update(){

		session_start();
		if(!isset($_SESSION["username"])){
			header("location:http://localhost/School-Management-System/");
		}

	
		if (isset($_POST ['update'])){
		
			// print_r($_POST);

			$IdSalle=$_POST ['IdSalle'];
			$libelle=$_POST ['libelle'];
			$capacite=$_POST ['capacite'];
			

			$obj= new salles();
			$result = $obj -> update ($IdSalle,$libelle, $capacite);
			header ("location:http://localhost/School-Management-Systems/salleCont/salle");
		}
		
	}

	
	

	
}
