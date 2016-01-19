<?php /* Smarty version 3.1.24, created on 2015-12-28 15:25:08
         compiled from "C:/UwAmp/www/Projet_PHP/PartageRecette/application/views/modules/connexion.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2925856814644419454_24505362%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbed6cc5ac942ac30b7b35cc72186a6020cfa7c8' => 
    array (
      0 => 'C:/UwAmp/www/Projet_PHP/PartageRecette/application/views/modules/connexion.tpl',
      1 => 1451303609,
      2 => 'file',
    ),
    '996da188aec477b38394b859fc0ad89f8b3474e9' => 
    array (
      0 => 'C:/UwAmp/www/Projet_PHP/PartageRecette/application/views/layout.tpl',
      1 => 1451312357,
      2 => 'file',
    ),
    'a3fccba2947d8802e012adca48d9904fb4f03ef9' => 
    array (
      0 => 'a3fccba2947d8802e012adca48d9904fb4f03ef9',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '2925856814644419454_24505362',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_568146444799b7_14627242',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_568146444799b7_14627242')) {
function content_568146444799b7_14627242 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2925856814644419454_24505362';
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title> Welcome on what to cook </title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="./asset/css/style.css"/>
	</head>
	<body>
		<div class="container">
			<header>
				<?php echo $_smarty_tpl->getSubTemplate ('../layout/layout_entete.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

			</header>
			<main>
				<?php
$_smarty_tpl->properties['nocache_hash'] = '2925856814644419454_24505362';
?>

	<form action="application/modules/connexion.inc.php" method="post">
		<label for="form-login">Entrez votre login :</label><br/>
		<input name="login" id="form-login" type="text" size="25" /><br/>
		<label for="form-prenom">Entrez votre mot de passe :</label><br/>
		<input name="mdp" id="form-mdp" type="password" size="25" /><br/>
		<input type="submit" name="form_test" value="Envoyer"/>
	</form>

			</main>
			<footer>
				<?php echo $_smarty_tpl->getSubTemplate ('../layout/layout_pied.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

			</footer>
		</div>
	</body>

</html>
<?php }
}
?>