<?php /* Smarty version 3.1.24, created on 2016-01-20 23:58:30
         compiled from "C:/Users/Gaspard/Documents/Devoirs/UwAmp/www/application/views/modules/connexion.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:857556a0111630ff04_05310994%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd98c9210a5e9f0275a0139a09e2c669b94d0e81' => 
    array (
      0 => 'C:/Users/Gaspard/Documents/Devoirs/UwAmp/www/application/views/modules/connexion.tpl',
      1 => 1453327954,
      2 => 'file',
    ),
    'da80556857cd7261a53d0481d09bc7ff96082861' => 
    array (
      0 => 'C:/Users/Gaspard/Documents/Devoirs/UwAmp/www/application/views/layout.tpl',
      1 => 1453324219,
      2 => 'file',
    ),
    '25417044c7bcbe2f6319875d8d281891e065dd6f' => 
    array (
      0 => '25417044c7bcbe2f6319875d8d281891e065dd6f',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '857556a0111630ff04_05310994',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56a011163e0c21_79195048',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56a011163e0c21_79195048')) {
function content_56a011163e0c21_79195048 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '857556a0111630ff04_05310994';
echo '<?xml version="1.0" encoding="utf-8"?>';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml/DTD/xhtml11-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="eng">

	<head>
		<title>Site de partage de recettes</title>
		<meta http-equiv="content-type" 
			content="text/html;charset=utf-8" />
		<meta http-equiv="Content-Style-Type" content="text/css" />
		<link href="../asset/css/style.css" rel="stylesheet" type="text/css" /> 
	</head>
	
	<body>
		<header>
			<?php echo $_smarty_tpl->getSubTemplate ('../layout/layout_entete.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		</header>
		<main>
			<?php
$_smarty_tpl->properties['nocache_hash'] = '857556a0111630ff04_05310994';
?>

	<?php if ($_smarty_tpl->tpl_vars['data']->value['inscription'] == true) {?>

		<h2>Inscription : </h2>

		<article>
			<form action="" method="post" enctype="multipart/form-data">
				<label for="new_login">Login*:</label>
				<input required name="new_login" id="new_login" type="text" size="25" /><br>
				<label for="new_name">Nom*:</label>
				<input required name="new_name" id="new_name" type="text" size="25" /><br>
				<label for="new_firstname">Prénom*:</label>
				<input required name="new_firstname" id="new_firstname" type="text" size="25" /><br>
				<label for="new_mail">e-Mail*:</label>
				<input required name="new_mail" id="new_mail" type="text" size="50" /><br>
				<label for="new_mdp">Nouveau mot de passe*:</label>
				<input name="new_mdp" id="new_mdp" type="password" size=""/><br>
				<label for="sec_new_mdp">Confirmer le mot de passe*:</label>
				<input name="new_sec_mdp" id"sec_new_mdp" type="password"size=""/><br>
				<label for="new_avatar1">Avatar:</label>
				<input type="hidden" name="MAX_FILE_SIZE" value="512000"/>
				<input type="file" name="new_new_avatar" id="new_avatar1"/><br>
				<input type="submit" name="inscription" value="Envoyer"/> 
				<input type="submit" name="exit" value="Annuler" formnovali	date/>
			</form>
			<p><i>Les champs spécifiés d'un * sont obligatoires.</i></p>
		</article>


	<?php } else { ?>
		<?php if (isset($_SESSION['login'])) {?>
			<h2>Déconnexion : </h2>
			<article>
				<p> Vous êtes actuellement connecté. </p>
				<form action="" method="post">
					<input type="submit" name="deco" value="Se déconnecter"/>
				</form>
			</article>
		<?php } else { ?>

			<h2>Connexion : </h2>

			<article>
				<form action="" method="post">
					<label for="form-login">Entrez votre login :</label><br/>
					<input required name="login" id="form-login" type="text" placeholder="login" size="25" /><br/>
					<label for="form-mdp">Entrez votre mot de passe :</label><br/>
					<input required name="mdp" id="form-mdp" type="password" size="25" /><br/>
					<input type="submit" name="connex" value="Se connecter"/>
					<input type="submit" name="connexion_inscription" value="S'inscrire" formnovalidate/>
				</form>
			</article>
		<?php }?>
	<?php }?>


		</main>
		<footer>
			<?php echo $_smarty_tpl->getSubTemplate ('../layout/layout_pied.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		</footer>
	</body>
</html><?php }
}
?>