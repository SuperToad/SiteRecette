<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml/DTD/xhtml11-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="eng">

	<head>
		<title>Premier site avec PHP</title>
		<meta http-equiv="content-type" 
			content="text/html;charset=utf-8" />
		<meta http-equiv="Content-Style-Type" content="text/css" />
	</head>
	
	<body>
<?php
			echo "<h2>Exo1</h2>";
			echo "It just works!</br>
				Juste avec du PHP =)</br>"
				.'<a href="http://iut.univ-amu.fr/sites/arles">Site IUT</a></br>';
				
			echo "<h2>Exo2</h2>";
			$nom = "Deuf";
			$prenom = "John";
			$age = 12;
			echo $nom." ".$prenom."</br>";
			echo "$prenom a $age ans</br>";
			echo '$prenom ne marche pas =(</br>';
			
			echo "<h2>Exo3</h2>";
			$prix = 150;
			$remise = 0.8;
			$reduction = $prix*$remise;
			echo "Prix = ".$prix.gettype($prix).'</br>'
				."% de remise = ".$remise.gettype($remise).'</br>'
				."Remise = ".$reduction.gettype($reduction).'</br>'
				."Prix final = ".($prix-$reduction).gettype($prix-$reduction).'</br>';
				
			echo "<h2>Exo4</h2>";
			$prix_table = 150;
			$remise_table = 0.7;
			$prix_armoire = 120;
			$remise_armoire = 0.9;
			$final_table = $prix_table - ($prix_table*$remise_table);
			$final_armoire = $prix_armoire - ($prix_armoire*$remise_armoire);
			echo ($final_table > $final_armoire) ? 
				$final_table." > ".$final_armoire : $final_armoire." > ".$final_table.'</br>';
			
			echo "<h2>Exo5</h2>";
			$nombre = 10;
			$somme = 0;
			echo "Somme de 0 a $nombre</br>";
			for ($i = 0; $i <= $nombre; $i++) {
				$somme += $i;
			}
			echo "Avec un for = $somme</br>";
			$somme = 0;
			while ($nombre > 0) {
				$somme += $nombre;
				$nombre--;
			}
			echo "Avec un while = $somme</br>";
			
			echo "<h2>Exo6</h2>";
			$tableau = array(5, 6, 3, 7);
			$somme = 0;
			foreach ($tableau as $element) {
				$somme += $element;
			}
			echo "Somme des elements = $somme</br>";
			
			echo "<h2>Exo7 : Final</h2>";
			$titres = array("Python en francais", "Apprendre a programmer");
			$auteurs = array("Mark Lutz", "Gérard Swinne");
			
?>
	</body>

</html>