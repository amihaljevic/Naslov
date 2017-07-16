<?php 

	include_once 'konfiguracija.php';

	if(isset($_GET["id"])) {
		$izraz = $veza -> prepare("SELECT * FROM Naslov WHERE id=:id");
		$izraz -> bindParam(":id", $_GET["id"]);
		$izraz -> execute();
		$Naslov = $izraz -> fetch(PDO::FETCH_OBJ);
	}

	if($_POST) {
		$izraz = $veza -> prepare("UPDATE Naslov SET naslov=:naslov, podnaslov=:podnaslov WHERE id=:id");
		$izraz -> execute($_POST);

		header("location: index.php");
	}

?>
