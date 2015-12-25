<?php
	// connection a phpMyAdmin : root, root
	// Creation Smarty
	define ('SMARTY_DIR', 'application/libraries/smarty-3.1.27/libs/');
	
	// NOTE: Smarty has a capital 'S'
	require_once(SMARTY_DIR.'Smarty.class.php');
	require_once('../phpapps/phpmyadmin/config.inc.php');
	$smarty = new Smarty();	
	
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
	
	$data = array ();
	$smarty->assign("data", $data);
	
	// On cherche la page a afficher
	if (isset($_GET['page']))
		$current_page = $_GET['page'];
	else
		$current_page = $_PAGES[$HOME_PAGE];
	
	if (!in_array($current_page, $_PAGES))
		$current_page = $_PAGES[$ERROR_404];
		
	
	// Affichage de la page
	$smarty->display("application/views/modules/".$current_page.".tpl", '$data');
?>
