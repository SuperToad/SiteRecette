<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml/DTD/xhtml11-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="eng">

	<head>
		<title>Inscription</title>
		<meta http-equiv="content-type" 
			content="text/html;charset=utf-8" />
		<meta http-equiv="Content-Style-Type" content="text/css" />
	</head>
	
	<body>

<?php
	
	echo "<h1>Inscription</h1>";
	
	if(isset($_REQUEST['send']))
	{
		if ($_REQUEST['password'] == $_REQUEST['cpassword'])
		{
			include('configBDD.inc.php');
			echo 'Inscription réussie !!';
			header('location: authent.php');
		}
		else
			echo 'Mot de passe différents !</br>';
	}
	
	echo '<form action="" method="post">
		<label for="log"> * Entrez votre login :</label></br>
		<input name="login" id="log" type="text" value="Login" required /></br>
		
		<label for="nom"> * Entrez votre nom :</label></br>
		<input name="name" id="nom" type="text" value="Nom" required /></br>
		
		<label for="prenom"> * Entrez votre prénom :</label></br>
		<input name="1name" id="prenom" type="text" value="Prénom" required /></br>
		
		<label for="mail"> * Entrez votre email :</label></br>
		<input name="email" id="mail" type="text" value="mail@exemple.comme" required 
		pattern="/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/" /></br>
		
		<label for="psw"> * Entrez votre mot de passe :</label></br>
		<input name="password" id="pwd" type="password" value="" required /></br>
		
		<label for="cpsw"> * Confirmer votre mot de passe :</label></br>
		<input name="cpassword" id="cpwd" type="password" value="" required /></br>
		
		<label for="tel"> Entrez votre n° de téléphone :</label></br>
		<input name="phone" id="tel" type="text" value=""/></br>
		
		<input type="Submit" name="send" value="Valider" /></br>
		* Champs obligatoires
	</form>';
	
?>
	</body>

</html>