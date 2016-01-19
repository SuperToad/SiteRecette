<?php

	if(isset($_REQUEST['idr'])){

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

		$request=$PDO_BDD->query('SELECT UTI_LOGIN, UTI_PRENOM
		from t_utilisateur_uti
		where UTI_ID IN (SELECT UTI_ID
						FROM t_recette_rct
						where RCT_ID = '.$_REQUEST['idr'].')');
		$data['uti_info'] = $request->fetchAll(PDO::FETCH_ASSOC);
	}

	if(isset($_SESSION['login']))
		$data['session'] = $_SESSION;
?>