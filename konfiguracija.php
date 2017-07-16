<?php 

	$naslovAplikacije = "Naslov";

	//localhost
	$putanja = "/Naslov/";
	$mysql_host = "localhost";
	$mysql_database = "naslov";
	$mysql_user = "root";
	$mysql_password = "";

	//spajanje na bazu
	$veza = new PDO("mysql:dbname=" . $mysql_database . "; host=" . "", $mysql_user, $mysql_password);
	$veza -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$veza -> setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	$veza -> exec("SET CHARACTER SET utf8");
	$veza -> exec("SET NAMES utf8");

?>