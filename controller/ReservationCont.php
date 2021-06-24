<?php

include_once __DIR__ . '/../model/reservations.php';

class ReservationCont
{


	function index(){
		
		session_start();
		if(!isset($_SESSION["username"])){
			header("location:http://localhost/School-Management-System/");
		}

		$obj = new Reservations();
		require __DIR__ . "/../view/reservation.php";
	}


	function reservation()
	{
		session_start();
		if(!isset($_SESSION["username"])){
			header("location:http://localhost/School-Management-System/");
		}

		$obj = new Reservations();
		$salles = $obj->selectsalle();
		$cours = $obj->getCours();
		require_once __DIR__ . '/../view/salles/salleRes.php';
	}

	function Ajout()
	{
		session_start();
		if(!isset($_SESSION["username"])){
			header("location:http://localhost/School-Management-System/");
		}

		if (isset($_POST['submit'])) {

			if((isset($_POST['date']) && isset($_POST['capacite']) && isset($_POST['heure']) && isset($_POST['salle']))   ){

				$date = $_POST['date'];
				$capacite = $_POST['capacite'];
				$heure = $_POST['heure'];
				$salle = $_POST['salle'];


				$obj = new Reservations();
				$result=null;

				if(!(empty($date) || empty($capacite) || empty($heure) || empty($salle)) || !($date <  date("d-m-y")) ) {

					$result = $obj->Ajout($date, $capacite, $heure, $salle);

				}
				
			
			
				if ($result) {
					$message = "Reservation effectué";
				} else {
					$message = "Salle déja reservé";
					
				}
				echo "<script>alert('$message')</script>";
				header("location:http://localhost/School-Management-System/ReservationCont/reservation");
			}
				
			else{
				echo "<script>alert('Entrez vos données')</script>";
				header("location:http://localhost/School-Management-System/ReservationCont/reservation");
			}
		}
		
	}

	function delete()
	{
		session_start();
		if(!isset($_SESSION["username"])){
			header("location:http://localhost/School-Management-System/");
		}

		if (isset($_POST['delete'])) {

			$IdCours = $_POST['IdCours'];

			$obj = new Reservations();
			$result = $obj->delete($IdCours);
			header("location:http://localhost/School-Management-System/ReservationCont/reservation");
		}
	}
}
