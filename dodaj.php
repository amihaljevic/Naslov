<?php 

	include_once 'konfiguracija.php';

	if($_POST) {
		$izraz = $veza -> prepare("INSERT INTO Naslov(naslov, podnaslov) VALUES(?, ?)");
		$izraz -> execute(array($_POST['naslov'], $_POST['podnaslov']));

		header("location: index.php");
	}

?>