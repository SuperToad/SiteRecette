<?php
	
	// Connection a phpMyAdmin : root, root
	date_default_timezone_set('Europe/Paris');
	
	// Inclusion Smarty
	include 'application/libraries/smarty-3.1.24/libs/Smarty.class.php';
	include 'config.inc.php';
	
	$smarty = new Smarty();
	
	// Inclusion CodeIgniter
	// Ne marche pas encore
	//include 'codeIgniter.php';

	if(isset($_GET["page"])){
		if(array_key_exists($_GET["page"], $_PAGES)){
			include 'application/modules/'.$_PAGES[$_GET["page"]].'.inc.php';
			if(isset($data))
				$smarty->assign("data",$data);
		}
		else
			include 'application/modules/'.$ERROR_404.'.inc.php';
		
		$smarty->display('application/views/modules/'.$_PAGES[$_GET["page"]].'.tpl');
	}
	else{
		include 'application/modules/accueil.inc.php';
		if(isset($data))
				$smarty->assign("data",$data);
		include 'application/modules/accueil.inc.php';
		$smarty->display('application/views/modules/accueil.tpl');
	}
	
?>
