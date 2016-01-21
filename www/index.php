<?php
	session_start();
	
	date_default_timezone_set('Europe/Paris');
	include 'application/libraries/smarty-3.1.24/libs/Smarty.class.php';
	include 'config.inc.php';
	
	
	$smarty = new Smarty();
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
		$smarty->display('application/views/modules/accueil.tpl');
	}
	
?>

