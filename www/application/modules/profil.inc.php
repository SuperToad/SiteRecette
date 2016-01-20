<?php

if(isset($_POST['delete_profil']))
{
	//supprimer les commentaires de chaque recette de l'utilisateur
	$PDO_BDD->exec("DELETE FROM t_commentaire_com WHERE RCT_ID IN
						(SELECT RCT_ID FROM t_recette_rct WHERE UTI_ID = ".$_SESSION['id'].")");
	//supprime dans la table de liaison des recettes et categories
	$PDO_BDD->exec("DELETE FROM tj_cat_rct WHERE RCT_ID IN
			(SELECT RCT_ID FROM t_recette_rct WHERE UTI_ID = ".$_SESSION['id'].")");
	//supprime les recettes de l'utilisateur
	$PDO_BDD->exec("DELETE FROM t_recette_rct WHERE UTI_ID = ".$_SESSION['id']);
	//supprime le dossier
	$folder="./media/".$_SESSION['login']."/";
	$files = scandir($folder);
	foreach($files as $file)
		unlink($folder.$file);
	 rmdir("./media/".$_SESSION['login']."/");
	 //mettre a null le UTI_ID dans la table de commentaires
	 $PDO_BDD->exec("UPDATE t_commentaire_com SET UTI_ID = NULL WHERE UTI_ID = ".$_SESSION['id']);
	//supprimer l'utilisateur
	 $PDO_BDD->exec("DELETE FROM t_utilisateur_uti WHERE UTI_ID = ".$_SESSION['id']);
	//commentaires anonymes
	//fermer la session en même temps
	session_destroy();
	session_start();
	header('location: index.php?page=connexion');
}
 	if(isset($_POST['modif_profil'])) $page = 2;
 	else if(isset($_POST['new_recette'])) $page = 3;
 	else if(isset($_POST['modif_rct'])){
 		$page = 4;
 		$data['recette_modif']=$PDO_BDD->query("SELECT * 
 											FROM t_recette_rct 
 											WHERE RCT_ID = ".$_POST['rct_id'])->fetchAll(PDO::FETCH_ASSOC);
 	}
 	else $page = 1;
 		
 	if(isset($_POST['send']))
	{
 		if($_POST['mdp'] == $_POST['sec_mdp'])
		{
 			if($_POST['mdp'] != null)
			{
 				$destination = "./media/".$_SESSION['login'].'/';
 				$fichier = $_FILES['new_avatar']['tmp_name'];
 				$image = true;
 				if( !is_uploaded_file($fichier))
 					$image = false;
 				if($image == true){
 					if($_FILES['new_avatar']['size'] == 0)
 						echo "<script>alert(\"Ce fichier n'est pas conforme : taille limite dépassé\")</script>";
 					$type = $_FILES['new_avatar']['type'];
 					if(!strstr($type, 'jpg') && !strstr($type, 'jpeg') && !strstr($type, 'png'))
 						echo "<script>alert(\"Ce fichier n'est pas conforme : utiliser les formats .jpg .jpeg .png\")</script>";
 					$newfichier = $_FILES['new_avatar']['name'];
 					if(!move_uploaded_file($fichier, $destination . $newfichier))
 						echo "Impossible de copier le fichier dans $destination";
 					$PDO_BDD->exec("UPDATE t_utilisateur_uti
 					SET UTI_AVATAR = '".addslashes($newfichier)."'
 					WHERE UTI_ID = '".$_SESSION['id']."'");
 					$_SESSION['avatar'] = $newfichier;
 				}
 				$PDO_BDD->exec("UPDATE t_utilisateur_uti
 					SET UTI_MAIL = '".addslashes($_POST['mail'])."',
 						UTI_NOM = '".addslashes($_POST['name'])."',
 						UTI_PRENOM = '".addslashes($_POST['firstname'])."',
 						UTI_PASS = '".addslashes($_POST['mdp'])."'
 					WHERE UTI_ID = '".$_SESSION['id']."'");
 			}
 			else
			{
 				$destination = "./media/".$_SESSION['login'].'/';
 				$fichier = $_FILES['new_avatar']['tmp_name'];
 				$image = true;
 				if( !is_uploaded_file($fichier))
 					$image = false;
 				if($image == true){
 					if($_FILES['new_avatar']['size'] == 0)
 						echo "<script>alert(\"Ce fichier n'est pas conforme : taille limite dépassé\")</script>";
 					$type = $_FILES['new_avatar']['type'];
 					if(!strstr($type, 'jpg') && !strstr($type, 'jpeg') && !strstr($type, 'png'))
 						echo "<script>alert(\"Ce fichier n'est pas conforme : utiliser les formats .jpg .jpeg .png\")</script>";
 					$newfichier = $_FILES['new_avatar']['name'];
 					if(!move_uploaded_file($fichier, $destination . $newfichier))
 						echo "Impossible de copier le fichier dans $destination";
 					$PDO_BDD->exec("UPDATE t_utilisateur_uti
 					SET UTI_AVATAR = '".addslashes($newfichier)."'
 					WHERE UTI_ID = '".$_SESSION['id']."'");
 					$_SESSION['avatar'] = $newfichier;
 				}
 				$PDO_BDD->exec("UPDATE t_utilisateur_uti
 				SET UTI_MAIL = '".addslashes($_POST['mail'])."',
 					UTI_NOM = '".addslashes($_POST['name'])."',
 					UTI_PRENOM = '".addslashes($_POST['firstname'])."'
 				WHERE UTI_ID = '".$_SESSION['id']."'");
 			}
 			$_SESSION['mail'] = $_POST['mail'];
 			$_SESSION['nom'] = $_POST['name'];
 			$_SESSION['prenom'] = $_POST['firstname'];
 		}	
 		else
 			$page=2;
 	}
 	else if(isset($_POST['exit']))
 		$page=1;
 	if(isset($_POST['new_recette_form'])){
 		if(is_uploaded_file($_FILES['illustration']['tmp_name']))
 			if($_FILES['illustration']['size'] == 0)
 				echo "<script>alert(\"Ce fichier n'est pas conforme : taille limite dépassé\")</script>";
 		$PDO_BDD->exec("INSERT INTO t_recette_rct VALUES('DEFAULT',
 														'".date('Y-m-d H:i:s')."',
 														'".addslashes($_POST['titre'])."',
 														'".addslashes($_POST['desc'])."',
 														'".addslashes($_POST['prep'])."',
 														'".addslashes($_POST['cuisson'])."',
 														'".addslashes($_POST['repos'])."',
 														'".addslashes($_POST['diff'])."',
 														'".addslashes($_POST['cout'])."',
 														'DEFAULT',
 														'".addslashes($_FILES['illustration']['name'])."',
 														'".$_SESSION['id']."',
 														'".addslashes($_POST['pers'])."')");
 		$request=$PDO_BDD->query("SELECT MAX(RCT_ID) FROM t_recette_rct");
 		foreach($request->fetchAll(PDO::FETCH_ASSOC) as $value)
 			foreach ($value as $rct_id)
 				$PDO_BDD->exec("INSERT INTO tj_cat_rct VALUES('".addslashes($_POST['cat'])."','".$rct_id."')");
 	}
 	if(isset($_POST['new_modif_form'])){
 		$destination = "./media/".$_SESSION['login'].'/'; // dossier où sera déplacé le fichier
 		$fichier = $_FILES['illustration']['tmp_name'];
 		$image = true;
 		if( !is_uploaded_file($fichier))
 			$image = false;
 		if($image){
 			if($_FILES['illustration']['size'] == 0)
 				echo "<script>alert(\"Ce fichier n'est pas conforme : taille limite dépassé\")</script>";
 			$type = $_FILES['illustration']['type'];
 			if(!strstr($type, 'jpg') && !strstr($type, 'jpeg') && !strstr($type, 'png'))
 				echo "<script>alert(\"Ce fichier n'est pas conforme : utiliser les formats .jpg .jpeg .png\")</script>";
 			$newfichier = $_FILES['illustration']['name'];
 			if(!move_uploaded_file($fichier, $destination . $newfichier))
 				echo "Impossible de copier le fichier dans $destination";	
 			$PDO_BDD->exec("UPDATE t_recette_rct
 							SET RCT_ILLUSTRATION = '".addslashes($newfichier)."'
 							WHERE RCT_ID = '".$_POST['rct_id_form']."'");
 		}
 		$PDO_BDD->exec("UPDATE t_recette_rct
 						SET RCT_TITRE = '".addslashes($_POST['titre'])."',
 							RCT_DESCRIPTION = '".addslashes($_POST['desc'])."',
 							RCT_TEMPS_PREPARATION = '".addslashes($_POST['prep'])."',
 							RCT_TEMPS_CUISSON = '".addslashes($_POST['cuisson'])."',
 							RCT_TEMPS_REPOS = '".addslashes($_POST['repos'])."',
 							RCT_DIFFICULTE = '".addslashes($_POST['diff'])."',
 							RCT_COUT = '".addslashes($_POST['cout'])."',
 							RCT_NBPERSONNE = '".addslashes($_POST['pers'])."'
 						WHERE RCT_ID = '".addslashes($_POST['rct_id_form'])."'");
 		$PDO_BDD->exec("UPDATE tj_cat_rct
 						SET CAT_ID = ".addslashes($_POST['cat'])."
 						WHERE RCT_ID = ".addslashes($_POST['rct_id_form']));
 	}
 	if(isset($_POST['delete'])){
 		$request = $PDO_BDD->query("SELECT RCT_ILLUSTRATION FROM t_recette_rct WHERE RCT_ID = ".$_POST['rct_id'])->fetchAll(PDO::FETCH_ASSOC);
 		$illust = $PDO_BDD->query("SELECT RCT_ILLUSTRATION FROM t_recette_rct")->fetchAll(PDO::FETCH_ASSOC);
 		$avat = $PDO_BDD->query("SELECT UTI_AVATAR FROM t_utilisateur_uti")->fetchAll(PDO::FETCH_ASSOC);
 		$notin=true;
 		foreach($request as $value)
 			foreach($value as $image){
 				foreach($illust as $value)
 					foreach($value as $ill)
 						if($ill == $image)
 							$notin = false;
 				foreach($avat as $value)
 					foreach($value as $av)
 						if($av == $image)
 							$notin = false;
 			}
 		if($notin){
 			foreach($request as $value)
 				foreach($value as $image)
 					$file="./media/".$_SESSION['login']."/".$image;
 			unlink($file);
 		}
 		$PDO_BDD->exec("DELETE FROM tj_cat_rct WHERE RCT_ID = ".addslashes($_POST['rct_id']));
 		$PDO_BDD->exec("DELETE FROM t_commentaire_com WHERE RCT_ID = ".addslashes($_POST['rct_id']));
 		$PDO_BDD->exec("DELETE FROM t_recette_rct WHERE RCT_ID = ".addslashes($_POST['rct_id']));
 	}
 	$data['recette']=$PDO_BDD->query("SELECT * 
 										FROM t_recette_rct 
 											WHERE UTI_ID = ".$_SESSION['id'])->fetchAll(PDO::FETCH_ASSOC);
 	$data['categorie_rct']=$PDO_BDD->query("SELECT *
 											FROM tj_cat_rct")->fetchAll(PDO::FETCH_ASSOC);
 	$data['categorie_label']=$PDO_BDD->query("SELECT CAT_ID, CAT_LABEL
 											FROM t_categorie_cat")->fetchAll(PDO::FETCH_ASSOC);
 	$data['page_profil'] = $page;
 	
?>
