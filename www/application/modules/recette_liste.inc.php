<?php

	$request=$PDO_BDD->query('SELECT CAT_LABEL,CAT_DESCRIPTION, CAT_ILLUSTRATION, CAT_ID
FROM t_categorie_cat');

	$data['cat_req'] = $request->fetchAll(PDO::FETCH_ASSOC);

	if(isset($_REQUEST['idc'])){

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
			RCT_NBPERSONNE,
			UTI_ID
		FROM t_recette_rct
		WHERE RCT_ID IN (SELECT RCT_ID
						FROM tj_cat_rct
						WHERE cat_id = '.$_REQUEST['idc'].')');



	$data['rct_req'] = $request->fetchAll(PDO::FETCH_ASSOC);

	$request=$PDO_BDD->query('SELECT CAT_LABEL, CAT_DESCRIPTION FROM t_categorie_cat WHERE CAT_ID = '.$_REQUEST['idc']);
	$data['label_cat_desc'] = $request->fetchAll(PDO::FETCH_ASSOC);

	$request=$PDO_BDD->query('SELECT UTI_ID,
	UTI_LOGIN,
	UTI_NOM,
	UTI_PRENOM
	FROM t_utilisateur_uti
	WHERE UTI_ID IN (SELECT UTI_ID
					FROM t_recette_rct
					WHERE RCT_ID IN (SELECT RCT_ID
									FROM tj_cat_rct
									WHERE cat_id = '.$_REQUEST['idc'].'))');
	$data['uti_info'] = $request->fetchAll(PDO::FETCH_ASSOC);


	}

?>
