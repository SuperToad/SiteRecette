<?php
if(!defined('DB_HOST'))
{
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
}

if(isset($_POST['connexion_inscription']))
{
	$data['inscription'] = true;
}
else{
	$data['inscription'] = false;
}


if(isset($_POST['inscription']))
{
	$loginok = true;
	$mdpok = false;
	$request = $PDO_BDD->query("SELECT UTI_LOGIN FROM t_utilisateur_uti")->fetchAll(PDO::FETCH_ASSOC);
	foreach($request as $value)
		foreach($value as $login)
			if($login == $_POST['new_login']){
				$loginok = false;
				echo "<script>alert(\"cet utilisateur existe déjà !\")</script>";
				$data['inscription'] = true;
			}
	if($_POST['new_mdp'] == $_POST['new_sec_mdp'])
		$mdpok = true;
	else{
		echo "<script>alert(\"les mots de passe ne sont pas identiques\")</script>";
		$data['inscription'] = true;
	}
	if($loginok && $mdpok){
		mkdir("./media/".$_POST['new_login']."/");
		$destination = "./media/".$_POST['new_login'].'/'; // dossier où sera déplacé le fichier
		$fichier = $_FILES['new_new_avatar']['tmp_name'];
		
		$image = true;
		if( !is_uploaded_file($fichier))
			$image = false;
		if($image){
			if($_FILES['new_new_avatar']['size'] == 0)
			echo "<script>alert(\"Ce fichier n'est pas conforme : taille limite dépassé\")</script>";
			$type = $_FILES['new_new_avatar']['type'];
			if(!strstr($type, 'jpg') && !strstr($type, 'jpeg') && !strstr($type, 'png'))
				echo "<script>alert(\"Ce fichier n'est pas conforme : utiliser les formats .jpg .jpeg .png\")</script>";
			$newfichier = $_FILES['new_new_avatar']['name'];
			if(!move_uploaded_file($fichier, $destination . $newfichier))
				echo "Impossible de copier le fichier dans $destination";
		}
		$PDO_BDD->exec("INSERT INTO t_utilisateur_uti VALUES('DEFAULT',
														 '".$_POST['new_login']."',
														 '".$_POST['new_mail']."',
														 '".$_POST['new_name']."',
														 '".$_POST['new_firstname']."',
														 '".$_POST['new_mdp']."',
														 'DEFAULT',
														 '".$_FILES['new_new_avatar']['name']."')");
	}
}

if(isset($_REQUEST['login']) && isset($_REQUEST['mdp']) && isset($_REQUEST['connex']))
{
session_start();
	$login = $_REQUEST['login'];
	$mdp = $_REQUEST['mdp'];
	$request_login=$PDO_BDD->query('SELECT UTI_LOGIN
		from t_utilisateur_uti');
	$login_ok = false;
	$pwd_ok = false;
	foreach ($request_login->fetchAll(PDO::FETCH_ASSOC) as $value)
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
		$_SESSION['login'] = $login;
		
	$request=$PDO_BDD->query("SELECT *
		FROM t_utilisateur_uti where UTI_LOGIN = '".$login."'");
	foreach($request->fetchAll(PDO::FETCH_ASSOC) as $uti){
			$_SESSION['id'] = $uti['UTI_ID'];
			$_SESSION['nom'] = $uti['UTI_NOM'];
			$_SESSION['prenom'] = $uti['UTI_PRENOM'];
			$_SESSION['mail'] = $uti['UTI_MAIL'];
			$_SESSION['admin'] = $uti['UTI_ADMIN'];
			$_SESSION['avatar'] = $uti['UTI_AVATAR'];
		}
		header('location: index.php?page=');
	}
	else{
	}
}

if(isset($_REQUEST['deco'])){
		session_start();
		session_destroy();
		header('location: index.php?page=connexion');
	}
?>
