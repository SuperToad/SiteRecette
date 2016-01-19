<?php

	// Creation PDO
	define ('DB_HOST', 'localhost');
	define ('DB_PORT', '3307');
	define ('DB_DATABASE', 'recette');
	define ('DB_USERNAME', 'root');
	define ('DB_PASSWORD', 'root');
	try
	{
		$PDO_BDD = new PDO ('mysql:host'.DB_HOST.';port='.DB_PORT.';dbname='.DB_DATABASE, DB_USERNAME, DB_PASSWORD);
		$PDO_BDD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$PDO_BDD->exec ("SET NAMES 'utf8'");
	}
	catch (Exception $e)
	{
		echo 'Erreur : '.$e->getMessage().'<br/>';
		echo 'N° : '.$e->getCode().'<br/>';
		exit();
	}

	// Liste pages du site
	$_PAGES = array(""=>"accueil",
					"connexion"=>"connexion",
					"profil"=>"profil", 
					"details"=>"recette_detail",
					"liste"=>"recette_liste");

	$HOME_PAGE = "accueil";
	$ERROR_404 = "accueil";

?>
