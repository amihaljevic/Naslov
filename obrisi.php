<?php 

	include_once 'konfiguracija.php';

	$izraz = $veza -> prepare("DELETE FROM Naslov WHERE id=:id");

	if($izraz -> execute(array(":id" => $_GET['id']))) {
		header("location: index.php");
	}
	else {
		header("location: error.php");
	}

?>