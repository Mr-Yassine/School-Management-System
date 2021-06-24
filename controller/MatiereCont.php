<?php


require __DIR__.'/../model/matieres.php';


class MatiereCont
{

	function matiere(){

		session_start();
		if(!isset($_SESSION["username"])){
			header("location:http://localhost/School-Management-System/");
		}

		$obj= new matieres();
		$result = $obj-> select();
		
		$ens= $obj-> getEns();

		require_once __DIR__.'/../view/matieres/matiere.php';
	}


	function Ajout(){

		session_start();
		if(!isset($_SESSION["username"])){
			header("location:http://localhost/School-Management-System/");
		}
		
		if (isset ($_POST ['submit'])){

			$libelle=$_POST ['libelle'];
			$enseignee=$_POST ['enseignee'];

			$obj= new matieres();
			$result = $obj -> Ajout($libelle, $enseignee);
			
			header ("location:http://localhost/School-Management-System/matiereCont/matiere");
		}
	}

	function delete(){

		session_start();
		if(!isset($_SESSION["username"])){
			header("location:http://localhost/School-Management-System/");
		}

		if (isset ($_POST ['submit'])){
			
			$IdMat=$_POST ['IdMat'];

			$obj= new matieres();
			$result = $obj -> delete ($IdMat);
			header ("location:http://localhost/School-Management-System/matiereCont/matiere");
		}
	}

	function update(){

		session_start();
		if(!isset($_SESSION["username"])){
			header("location:http://localhost/School-Management-System/");
		}

	
		if (isset($_POST ['update'])){
		
			// print_r($_POST);

			$IdMat=$_POST ['IdMat'];
			$libelle=$_POST ['libelle'];
			$enseignee=$_POST ['enseignee'];
			

			$obj= new matieres();
			$result = $obj -> update ($IdMat,$libelle, $enseignee);
			header ("location:http://localhost/School-Management-System/matiereCont/matiere");
		}
		
	}

	
	

	
}
