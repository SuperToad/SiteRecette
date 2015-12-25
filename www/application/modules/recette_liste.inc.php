<?php
	$bd = new Db();
	$db->query('select CAT_LABEL, CAT_DESCRIPTION, CAT_ILLUSTRATION from t_categorie_cat');
	$this->assign('tableau', $db->getRows())
?>