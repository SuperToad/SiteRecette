<?php /* Smarty version 3.1.24, created on 2015-12-24 11:15:16
         compiled from "C:/UwAmp/www/ProjetPHP/PartageRecette/application/views/modules/connexion.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:20949567bc5b5000982_02089799%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4c466f2fe71bea1293756934898044c80baa563' => 
    array (
      0 => 'C:/UwAmp/www/ProjetPHP/PartageRecette/application/views/modules/connexion.tpl',
      1 => 1450952100,
      2 => 'file',
    ),
    '1b4175c3e93a90a78fbf395ab4c71f04d3800a25' => 
    array (
      0 => 'C:/UwAmp/www/ProjetPHP/PartageRecette/application/views/layout.tpl',
      1 => 1450523864,
      2 => 'file',
    ),
    '7d18e25684dcf8cb40ed0627339da28fafa41c57' => 
    array (
      0 => '7d18e25684dcf8cb40ed0627339da28fafa41c57',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '20949567bc5b5000982_02089799',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567bc5b508e4b0_53086778',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567bc5b508e4b0_53086778')) {
function content_567bc5b508e4b0_53086778 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '20949567bc5b5000982_02089799';
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title> Welcome on what to cook </title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
							   integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<header>
				<?php echo $_smarty_tpl->getSubTemplate ('../layout/layout_entete.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

			</header>
			<main>
				<?php
$_smarty_tpl->properties['nocache_hash'] = '20949567bc5b5000982_02089799';
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