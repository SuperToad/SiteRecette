<?php

if(isset($_REQUEST['login']) && isset($_REQUEST['mdp'])){

	/*************creation de l'acces bdd***************/
	define('DB_HOST', 'localhost');
	define('DB_DATABASE', 'recette');
	define('DB_USERNAME', 'u_recette');
	define('DB_PASSWORD', 'SJzEeqLb2HHeNYVV');

	try{
		$PDO_BDD = new PDO('mysql:host='.DB_HOST.';dbname='.DB_DATABASE, DB_USERNAME, DB_PASSWORD);
		$PDO_BDD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$PDO_BDD->exec("SET NAMES 'utf8'");
	}
	catch(Exception $e){
		echo 'Erreur : '.$e->getMessage().'<br />';
		echo 'N° : '.$e->getCode();
		exit();
	}

	/***************************************************/

	$login = $_REQUEST['login'];
	$mdp = $_REQUEST['mdp'];

	$request_login=$PDO_BDD->query('SELECT UTI_LOGIN
		from t_utilisateur_uti');

	$login_ok = false;
	$pwd_ok = false;

	foreach ($request_login->fetchAll(PDO::FETCH_ASSOC) as $value) // j'ai pas vraiment compris pourquoi il falait deux foreach je l'ai un peu fait a taton
		foreach ($value as $value2) 
			if($value2 == $login)
				$login_ok = true;

	if($login_ok){
		$request_pwd=$PDO_BDD->query("SELECT UTI_PASS
			from t_utilisateur_uti where UTI_LOGIN = '".$login."'");

		foreach ($request_pwd->fetchAll(PDO::FETCH_ASSOC) as $value)
			foreach ($value as $value2)
				if($value2 == $mdp)
					$mdp_ok = true;
	}

	if($login_ok && $mdp_ok){
		session_set_cookie_params(time() + 3600 * 24 * 2);
		session_start();
		$_SESSION['login'] = $login;

		header('location: ../../index.php?page=liste');
	}
	else{
		header('location: ../../index.php?page=connexion');
	}
}
?>