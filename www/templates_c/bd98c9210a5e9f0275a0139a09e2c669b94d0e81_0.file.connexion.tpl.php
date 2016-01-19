<?php /* Smarty version 3.1.24, created on 2016-01-18 21:51:27
         compiled from "C:/Users/Gaspard/Documents/Devoirs/UwAmp/www/application/views/modules/connexion.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:23695569d504f4083e4_35640284%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd98c9210a5e9f0275a0139a09e2c669b94d0e81' => 
    array (
      0 => 'C:/Users/Gaspard/Documents/Devoirs/UwAmp/www/application/views/modules/connexion.tpl',
      1 => 1451281580,
      2 => 'file',
    ),
    'da80556857cd7261a53d0481d09bc7ff96082861' => 
    array (
      0 => 'C:/Users/Gaspard/Documents/Devoirs/UwAmp/www/application/views/layout.tpl',
      1 => 1451281580,
      2 => 'file',
    ),
    '2b8631598972f84a1335a6e5b90bdc401ad652da' => 
    array (
      0 => '2b8631598972f84a1335a6e5b90bdc401ad652da',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '23695569d504f4083e4_35640284',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_569d504f49d394_69126754',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_569d504f49d394_69126754')) {
function content_569d504f49d394_69126754 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '23695569d504f4083e4_35640284';
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
$_smarty_tpl->properties['nocache_hash'] = '23695569d504f4083e4_35640284';
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