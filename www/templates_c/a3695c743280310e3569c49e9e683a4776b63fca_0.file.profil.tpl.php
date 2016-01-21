<?php /* Smarty version 3.1.24, created on 2016-01-21 00:53:49
         compiled from "C:/Users/Gaspard/Documents/Devoirs/UwAmp/www/application/views/modules/profil.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:142256a01e0d3c55b6_06190026%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3695c743280310e3569c49e9e683a4776b63fca' => 
    array (
      0 => 'C:/Users/Gaspard/Documents/Devoirs/UwAmp/www/application/views/modules/profil.tpl',
      1 => 1453334017,
      2 => 'file',
    ),
    'da80556857cd7261a53d0481d09bc7ff96082861' => 
    array (
      0 => 'C:/Users/Gaspard/Documents/Devoirs/UwAmp/www/application/views/layout.tpl',
      1 => 1453324219,
      2 => 'file',
    ),
    'b864b7cf9cfcb66cbef818f99c784dae3a74859c' => 
    array (
      0 => 'b864b7cf9cfcb66cbef818f99c784dae3a74859c',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '142256a01e0d3c55b6_06190026',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56a01e0d62a1f8_49673161',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56a01e0d62a1f8_49673161')) {
function content_56a01e0d62a1f8_49673161 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '142256a01e0d3c55b6_06190026';
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
$_smarty_tpl->properties['nocache_hash'] = '142256a01e0d3c55b6_06190026';
?>

<?php if ($_smarty_tpl->tpl_vars['data']->value['page_profil'] == 2) {?>
	<h2> Votre profil </h2>

	<article>
		<form action="" method="post" enctype="multipart/form-data">
			<label for="new_name">Nom :</label>
			<input required name="name" id="new_name" type="text" value="<?php echo $_SESSION['nom'];?>
" size="25" /><br>
			<label for="new_firstname">Prénom :</label>
			<input required name="firstname" id="new_firstname" type="text" value="<?php echo $_SESSION['prenom'];?>
" size="25" /><br>
			<label for="new_mail">e-Mail :</label>
			<input required name="mail" id="new_mail" type="text" value="<?php echo $_SESSION['mail'];?>
" size="50" /><br>
			<label for="new_mdp">Nouveau mot de passe :</label>
			<input name="mdp" id="new_mdp" type="password" value="" size=""/><br>
			<label for="sec_new_mdp">Confirmer le mot de passe :</label>
			<input name="sec_mdp" id"sec_new_mdp" type="password" value="" size=""/><br>
			<label for="new_avatar1">Avatar:</label>
			<input type="hidden" name="MAX_FILE_SIZE" value="512000"/>
			<input type="file" name="new_avatar" id="new_avatar1"/><br>
			<input type="submit" name="send" value="Envoyer"/> 
			<input type="submit" name="exit" value="Annuler"/>
		</form>
	</article>
<?php } else { ?>

	<h2>Votre profil </h2>

	<article>
		<p>Login :	<?php echo $_SESSION['login'];?>
 </p>
		<p>Nom : <?php echo $_SESSION['nom'];?>
 </p>
		<p>Prénom : <?php echo $_SESSION['prenom'];?>
 </p>
		<p>e-Mail : <?php echo $_SESSION['mail'];?>
 </p>
		<img src=<?php echo ((("./media/").($_SESSION['login'])).("/")).($_SESSION['avatar']);?>
 height="150" width="150">
		<form action="" method="post" enctype="multipart/form-data">
			<input type="submit" name="modif_profil" value="Modifier"/>
			<input onclick="return(confirm('Etes-vous sûr de vouloir supprimer votre profil?'))" type="submit" name="delete_profil" value="Supprimer le compte"/>
		</form>
	</article>

	<section class="gerer_recette">
		<h2> Vos recettes </h2>
		
		<?php
$_from = $_smarty_tpl->tpl_vars['data']->value['recette'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['recette'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['recette']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['recette']->value) {
$_smarty_tpl->tpl_vars['recette']->_loop = true;
$foreach_recette_Sav = $_smarty_tpl->tpl_vars['recette'];
?>
			<article>
				<a href=<?php echo ("index.php?page=details&idr=").($_smarty_tpl->tpl_vars['recette']->value['RCT_ID']);?>
><?php echo $_smarty_tpl->tpl_vars['recette']->value['RCT_TITRE'];?>
</a>
				<?php
$_from = $_smarty_tpl->tpl_vars['data']->value['categorie_rct'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['rct'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['rct']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['rct']->value) {
$_smarty_tpl->tpl_vars['rct']->_loop = true;
$foreach_rct_Sav = $_smarty_tpl->tpl_vars['rct'];
?> 
					<?php if ($_smarty_tpl->tpl_vars['rct']->value['RCT_ID'] == $_smarty_tpl->tpl_vars['recette']->value['RCT_ID']) {?> 
						<?php
$_from = $_smarty_tpl->tpl_vars['data']->value['categorie_label'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['cat']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
$foreach_cat_Sav = $_smarty_tpl->tpl_vars['cat'];
?>
							<?php if ($_smarty_tpl->tpl_vars['cat']->value['CAT_ID'] == $_smarty_tpl->tpl_vars['rct']->value['CAT_ID']) {?>
								<?php echo $_smarty_tpl->tpl_vars['cat']->value['CAT_LABEL'];?>

							<?php }?>
						<?php
$_smarty_tpl->tpl_vars['cat'] = $foreach_cat_Sav;
}
?>
					<?php }?>
				<?php
$_smarty_tpl->tpl_vars['rct'] = $foreach_rct_Sav;
}
?>
				</br><?php echo $_smarty_tpl->tpl_vars['recette']->value['RCT_DESCRIPTION'];?>

			</article>
		<?php
$_smarty_tpl->tpl_vars['recette'] = $foreach_recette_Sav;
}
?>
		<form action="" method="post" enctype="multipart/form-data">
			<select name="rct_id">
				<?php
$_from = $_smarty_tpl->tpl_vars['data']->value['recette'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['recette'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['recette']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['recette']->value) {
$_smarty_tpl->tpl_vars['recette']->_loop = true;
$foreach_recette_Sav = $_smarty_tpl->tpl_vars['recette'];
?>
					<option value=<?php echo $_smarty_tpl->tpl_vars['recette']->value['RCT_ID'];?>
><?php echo $_smarty_tpl->tpl_vars['recette']->value['RCT_TITRE'];?>
</option>
				<?php
$_smarty_tpl->tpl_vars['recette'] = $foreach_recette_Sav;
}
?>
			</select>
			<input type="submit" name="modif_rct" value="Modifier"></input>
			<input type="submit" name="delete" value="Supprimer"></input>
		<form>

	</section>

	<section class="ajout_recette">
		<?php if ($_smarty_tpl->tpl_vars['data']->value['page_profil'] == 1) {?>
			<form action="" method="post" enctype="multipart/form-data"> <input type="submit" name="new_recette" value="Ajouter une recette"/> </form>
		<?php } elseif ($_smarty_tpl->tpl_vars['data']->value['page_profil'] == 3) {?>
			<form action="" method="post" enctype="multipart/form-data">
				<label for="id_titre">Titre*:</label>
				<input required type="text" id ="id_titre" name="titre"/><br>
				<label for="id_desc">Descritpion:</label><br>
				<textarea name="desc" id="id_desc" rows="8" cols="60" style="resize:none;"></textArea><br>
				<label for="id_prep">Préparation:</label>
				<input type="text" id="id_prep" name="prep"/><label>mn</label><br>
				<label for="id_cuisson">Cuisson:</label>
				<input type="text" id="id_cuisson" name="cuisson"/><label>mn</label><br>
				<label for="id_illustration">Illustration:</label>
				<input type="hidden" name="MAX_FILE_SIZE" value="512000"/>
				<input type="file" name="illustration" id="id_illustration"/><br>
				<label for="id_cout">Coût:</label>
				<select name="cout" id="id_cout">
					<option value="1">faible</option>
					<option value="2">moyen</option>
					<option value="3">élevé</option>
				</select><br>
				<label for="id_diff">Difficulté:</label>
				<select name="diff" id="id_diff">
					<option value="1">facile</option>
					<option value="2">moyen</option>
					<option value="3">difficile</option>
				</select><br>
				<label for="id_cat">Catégorie:</label>
				<select name="cat" id="id_cat">
					<option value="1">Entrée</option>
					<option value="2">Plat</option>
					<option value="3">Dessert</option>
				</select><br>
				<label for="id_repos">Repos:</label>
				<input type="text" id ="id_repos" name="repos"/><br>
				<label for="id_pers">Nombre de convives:</label>
				<input type="text" id ="id_pers" name="pers"/><br>
				<label for="id_recette">La recette*:</label><br>
				<textarea required name="recette" id="id_recette"  rows="10" cols="50" style="resize:none;"></textarea><br>
				<input type="submit" name="new_recette_form" value="Ajouter"/>
				<a href="index.php?page=profil"><button>Annuler</button></a>
			</form>
			<p><i> Les champs spécifiés d'un * sont obligatoires. </i></p>
		<?php } else { ?>
		 	<?php
$_from = $_smarty_tpl->tpl_vars['data']->value['recette_modif'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['rct'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['rct']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['rct']->value) {
$_smarty_tpl->tpl_vars['rct']->_loop = true;
$foreach_rct_Sav = $_smarty_tpl->tpl_vars['rct'];
?>

		 		<?php
$_from = $_smarty_tpl->tpl_vars['data']->value['categorie_rct'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['cat_rct'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['cat_rct']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cat_rct']->value) {
$_smarty_tpl->tpl_vars['cat_rct']->_loop = true;
$foreach_cat_rct_Sav = $_smarty_tpl->tpl_vars['cat_rct'];
?> 
					<?php if ($_smarty_tpl->tpl_vars['cat_rct']->value['RCT_ID'] == $_smarty_tpl->tpl_vars['rct']->value['RCT_ID']) {?> 
						<?php
$_from = $_smarty_tpl->tpl_vars['data']->value['categorie_label'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['cat']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
$foreach_cat_Sav = $_smarty_tpl->tpl_vars['cat'];
?>
							<?php if ($_smarty_tpl->tpl_vars['cat']->value['CAT_ID'] == $_smarty_tpl->tpl_vars['cat_rct']->value['CAT_ID']) {?>
								<?php $_smarty_tpl->tpl_vars['cat_label'] = new Smarty_Variable($_smarty_tpl->tpl_vars['cat']->value['CAT_LABEL'], null, 0);?>
							<?php }?>
						<?php
$_smarty_tpl->tpl_vars['cat'] = $foreach_cat_Sav;
}
?>
					<?php }?>
				<?php
$_smarty_tpl->tpl_vars['cat_rct'] = $foreach_cat_rct_Sav;
}
?>


				<form action="" method="post" enctype="multipart/form-data">
					<input type="text" name="rct_id_form" value="<?php echo $_smarty_tpl->tpl_vars['rct']->value['RCT_ID'];?>
" style="visibility: hidden;"/><br>
					<label for="id_titre">Titre*:</label>
					<input required type="text" id ="id_titre" name="titre" value="<?php echo $_smarty_tpl->tpl_vars['rct']->value['RCT_TITRE'];?>
"/><br>
					<label for="id_desc">Descritpion:</label><br>
					<textarea name="desc" id="id_desc" rows="10" cols="50" style="resize:none;"><?php echo $_smarty_tpl->tpl_vars['rct']->value['RCT_DESCRIPTION'];?>
</textArea><br>
					<label for="id_prep">Préparation:</label>
					<input type="text" id ="id_prep" name="prep" value="<?php echo $_smarty_tpl->tpl_vars['rct']->value['RCT_TEMPS_PREPARATION'];?>
"/><label>mn</label><br>
					<label for="id_cuisson">Cuisson:</label>
					<input type="text" id ="id_cuisson" name="cuisson" value="<?php echo $_smarty_tpl->tpl_vars['rct']->value['RCT_TEMPS_CUISSON'];?>
"/><label>mn</label><br>
					
					<label for="new_img">Illustration:</label>
					<input type="hidden" name="MAX_FILE_SIZE" value="512000"/>
					<input type="file" name="illustration" id="new_img"/><br>

					<label for="id_cout">Coût:</label>
					<select name="cout" id="id_cout">
						<option <?php if ($_smarty_tpl->tpl_vars['rct']->value['RCT_COUT'] == "faible") {?> selected <?php }?> value="1">faible</option>
						<option <?php if ($_smarty_tpl->tpl_vars['rct']->value['RCT_COUT'] == "moyen") {?> selected <?php }?> value="2">moyen</option>
						<option <?php if ($_smarty_tpl->tpl_vars['rct']->value['RCT_COUT'] == "eleve") {?> selected <?php }?> value="3">élevé</option>
					</select><br>
					<label for="id_diff">Difficulté:</label>
					<select name="diff" id="id_diff">
						<option <?php if ($_smarty_tpl->tpl_vars['rct']->value['RCT_DIFFICULTE'] == "facile") {?> selected <?php }?> value="1">facile</option>
						<option <?php if ($_smarty_tpl->tpl_vars['rct']->value['RCT_DIFFICULTE'] == "moyen") {?> selected <?php }?> value="2">moyen</option>
						<option <?php if ($_smarty_tpl->tpl_vars['rct']->value['RCT_DIFFICULTE'] == "difficile") {?> selected <?php }?> value="3">difficile</option>
					</select><br>
					<label for="id_cat">Catégorie:</label>
					<select name="cat" id="id_cat">
						<option <?php if ($_smarty_tpl->tpl_vars['cat_label']->value == "Entrées") {?> selected <?php }?> value="1">Entrée</option>
						<option <?php if ($_smarty_tpl->tpl_vars['cat_label']->value == "Plats") {?> selected <?php }?> value="2">Plat</option>
						<option <?php if ($_smarty_tpl->tpl_vars['cat_label']->value == "Desserts") {?> selected <?php }?> value="3">Dessert</option>
					</select><br>
					<label for="id_repos">Repos:</label>
					<input type="text" id ="id_repos" name="repos" value="<?php echo $_smarty_tpl->tpl_vars['rct']->value['RCT_TEMPS_REPOS'];?>
"/><br>
					<label for="id_pers">Nombre de convives:</label>
					<input type="text" id ="id_pers" name="pers" value="<?php echo $_smarty_tpl->tpl_vars['rct']->value['RCT_NBPERSONNE'];?>
"/><br>
					<label for="id_recette">La recette*:</label><br>
					<textarea required name="recette" id="id_recette"  rows="10" cols="50" style="resize:none;"></textarea><br>
					<input type="submit" name="new_modif_form" value="Confirmer"/>
					<a href="index.php?page=profil"><button>Annuler</button></a>
				</form>
				<p><i> Les champs spécifiés d'un * sont obligatoires. </i></p>
			<?php
$_smarty_tpl->tpl_vars['rct'] = $foreach_rct_Sav;
}
?>



	<?php }?>
	</section>
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