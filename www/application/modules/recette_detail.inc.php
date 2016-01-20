<?php
	if(isset($_REQUEST['idr'])){
		date_default_timezone_set('Europe/Paris');
		if(isset($_REQUEST['newcom'])){
			$now=date('Y-m-d H:i:s');
			$PDO_BDD->exec("INSERT INTO t_commentaire_com
				VALUES ('DEFAULT','".addslashes($_REQUEST['newcom'])."','$now','".$_SESSION['id']."','".addslashes($_REQUEST['idr'])."')");
		}
		if(isset($_POST['del_com'])){
			$PDO_BDD->exec('DELETE FROM t_commentaire_com WHERE COM_ID = '.$_REQUEST['com_id']);
		}
		$request=$PDO_BDD->query('SELECT RCT_ID,
		   RCT_DATE,
		   RCT_TITRE,
		   RCT_DESCRIPTION,
		   RCT_TEMPS_PREPARATION,
		   RCT_TEMPS_CUISSON,
		   RCT_TEMPS_REPOS,
		   RCT_DIFFICULTE,
		   RCT_COUT,
		   RCT_STATUT,
		   RCT_ILLUSTRATION,
		   RCT_NBPERSONNE
		FROM t_recette_rct
		WHERE RCT_ID = '.$_REQUEST['idr']);
		$data['rct_req'] = $request->fetchAll(PDO::FETCH_ASSOC);
		$request=$PDO_BDD->query('SELECT UTI_LOGIN, UTI_PRENOM, UTI_ID
		from t_utilisateur_uti
		WHERE UTI_ID IN (SELECT UTI_ID
						FROM t_recette_rct
						where RCT_ID = '.$_REQUEST['idr'].')');
		$data['uti_info'] = $request->fetchAll(PDO::FETCH_ASSOC);
		$request=$PDO_BDD->query('SELECT *
		FROM t_commentaire_com
		WHERE RCT_ID = '.$_REQUEST['idr']);
		$data['rct_com'] = $request->fetchAll(PDO::FETCH_ASSOC);
		$request=$PDO_BDD->query("SELECT UTI_ID
						FROM t_commentaire_com
						where RCT_ID = ".$_REQUEST['idr'])->fetchAll(PDO::FETCH_ASSOC);
		foreach($request as $value)
			foreach($value as $uti_id)
				if($uti_id != null){
					$request=$PDO_BDD->query('SELECT UTI_NOM, UTI_PRENOM, UTI_ID
					FROM t_utilisateur_uti
					WHERE UTI_ID IN (SELECT UTI_ID
									FROM t_commentaire_com
									where RCT_ID = '.$_REQUEST['idr'].')');
					$data['uti_com'] = $request->fetchAll(PDO::FETCH_ASSOC);
				}
	}
?>
