<?php

try {
	$db_options = array(
		PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", // On force l'encodage en utf8
	    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // On récupère tous les résultats en tableau associatif
	    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING // On affiche des warnings pour les erreurs, à commenter en prod
	);

	$db = "aircolis";
	$user = "root";
	$password = "root";

	$dbh = new PDO('mysql:host=localhost;dbname=aircolis', 'root','root', $db_options);
} catch(Exception $e) {
	die('Erreur MySQL : ' . $e->getMessage());
}



