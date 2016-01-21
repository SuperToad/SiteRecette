<?php /* Smarty version 3.1.24, created on 2016-01-21 00:41:06
         compiled from "C:/Users/Gaspard/Documents/Devoirs/UwAmp/www/application/views/modules/recette_detail.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:99256a01b12d227e0_77629674%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0946957d743d68aae52f0a6d2c7089f1d66f3599' => 
    array (
      0 => 'C:/Users/Gaspard/Documents/Devoirs/UwAmp/www/application/views/modules/recette_detail.tpl',
      1 => 1453333264,
      2 => 'file',
    ),
    'da80556857cd7261a53d0481d09bc7ff96082861' => 
    array (
      0 => 'C:/Users/Gaspard/Documents/Devoirs/UwAmp/www/application/views/layout.tpl',
      1 => 1453324219,
      2 => 'file',
    ),
    '664da4084dfd9e43d4245633c5760b12f7bb6220' => 
    array (
      0 => '664da4084dfd9e43d4245633c5760b12f7bb6220',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '99256a01b12d227e0_77629674',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56a01b12ed9392_85303102',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56a01b12ed9392_85303102')) {
function content_56a01b12ed9392_85303102 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '99256a01b12d227e0_77629674';
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
$_smarty_tpl->properties['nocache_hash'] = '99256a01b12d227e0_77629674';
?>

	<?php if (isset($_smarty_tpl->tpl_vars['data']->value['rct_req'])) {?>

		<?php
$_from = $_smarty_tpl->tpl_vars['data']->value['rct_req'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['rct'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['rct']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['rct']->value) {
$_smarty_tpl->tpl_vars['rct']->_loop = true;
$foreach_rct_Sav = $_smarty_tpl->tpl_vars['rct'];
?>
			
			<h2><?php echo $_smarty_tpl->tpl_vars['rct']->value['RCT_TITRE'];?>
</h2>
			
			<article>
				
				<p>Recette du memebre : <?php
$_from = $_smarty_tpl->tpl_vars['data']->value['uti_info'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['uti'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['uti']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['uti']->value) {
$_smarty_tpl->tpl_vars['uti']->_loop = true;
$foreach_uti_Sav = $_smarty_tpl->tpl_vars['uti'];
echo $_smarty_tpl->tpl_vars['uti']->value['UTI_LOGIN'];
$_smarty_tpl->tpl_vars['uti'] = $foreach_uti_Sav;
}
?></p>
				
				<?php
$_from = $_smarty_tpl->tpl_vars['data']->value['uti_info'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['uti'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['uti']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['uti']->value) {
$_smarty_tpl->tpl_vars['uti']->_loop = true;
$foreach_uti_Sav = $_smarty_tpl->tpl_vars['uti'];
?>
					<img class="img_detail" src=<?php echo ((("./media/").($_smarty_tpl->tpl_vars['uti']->value['UTI_LOGIN'])).("/")).($_smarty_tpl->tpl_vars['rct']->value['RCT_ILLUSTRATION']);?>
 height="352" width="470" alt=<?php echo ("img_rct_").($_smarty_tpl->tpl_vars['rct']->value['RCT_ID']);?>
>
				<?php
$_smarty_tpl->tpl_vars['uti'] = $foreach_uti_Sav;
}
?>

				<h3>Paramètres</h3>
				<ul>
					<li>Temps de préparation : <?php echo $_smarty_tpl->tpl_vars['rct']->value['RCT_TEMPS_PREPARATION'];?>
 </li>
					<li>Temps de cuisson : <?php echo $_smarty_tpl->tpl_vars['rct']->value['RCT_TEMPS_CUISSON'];?>
</li>
					<li>Coût des ingrédients : <?php echo $_smarty_tpl->tpl_vars['rct']->value['RCT_COUT'];?>
</li>
					<li>Difficulté: <?php echo $_smarty_tpl->tpl_vars['rct']->value['RCT_DIFFICULTE'];?>
</li>
					<li>Pour <?php echo $_smarty_tpl->tpl_vars['rct']->value['RCT_NBPERSONNE'];?>
 personnes</li>
				</ul>

				<h3>Description</h3>
				<p><?php echo $_smarty_tpl->tpl_vars['rct']->value['RCT_DESCRIPTION'];?>
</p>

			</article>
		<?php
$_smarty_tpl->tpl_vars['rct'] = $foreach_rct_Sav;
}
?>
		<?php if (isset($_smarty_tpl->tpl_vars['data']->value['rct_com'])) {?>
			<?php
$_from = $_smarty_tpl->tpl_vars['data']->value['rct_com'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['com'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['com']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['com']->value) {
$_smarty_tpl->tpl_vars['com']->_loop = true;
$foreach_com_Sav = $_smarty_tpl->tpl_vars['com'];
?>
				<?php if (isset($_SESSION['login']) && $_SESSION['id'] == $_smarty_tpl->tpl_vars['com']->value['UTI_ID']) {?>
				<form action="" method="post">
					<article>
						<?php
$_from = $_smarty_tpl->tpl_vars['data']->value['uti_com'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['uticom'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['uticom']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['uticom']->value) {
$_smarty_tpl->tpl_vars['uticom']->_loop = true;
$foreach_uticom_Sav = $_smarty_tpl->tpl_vars['uticom'];
?>
							<?php if ($_smarty_tpl->tpl_vars['uticom']->value['UTI_ID'] == $_smarty_tpl->tpl_vars['com']->value['UTI_ID']) {?>
									<b>Auteur : <?php echo $_smarty_tpl->tpl_vars['uticom']->value['UTI_NOM'];?>
 <?php echo $_smarty_tpl->tpl_vars['uticom']->value['UTI_PRENOM'];?>

							<?php }?>
						<?php
$_smarty_tpl->tpl_vars['uticom'] = $foreach_uticom_Sav;
}
?>
						- Date : <?php echo $_smarty_tpl->tpl_vars['com']->value['COM_DATE'];?>
</b>
						<input type="submit" name="del_com" value="Effacer"/></br>
						Commentaire : <?php echo $_smarty_tpl->tpl_vars['com']->value['COM_TEXTE'];?>

					</article>
				</form>
				<?php } else { ?>
					<article>
						<?php if (isset($_smarty_tpl->tpl_vars['data']->value['uti_com'])) {?>
							<?php
$_from = $_smarty_tpl->tpl_vars['data']->value['uti_com'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['uticom'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['uticom']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['uticom']->value) {
$_smarty_tpl->tpl_vars['uticom']->_loop = true;
$foreach_uticom_Sav = $_smarty_tpl->tpl_vars['uticom'];
?>
								<?php if ($_smarty_tpl->tpl_vars['uticom']->value['UTI_ID'] == $_smarty_tpl->tpl_vars['com']->value['UTI_ID']) {?>
									<b>Auteur : <?php echo $_smarty_tpl->tpl_vars['uticom']->value['UTI_NOM'];?>
 <?php echo $_smarty_tpl->tpl_vars['uticom']->value['UTI_PRENOM'];?>

								<?php }?>
							<?php
$_smarty_tpl->tpl_vars['uticom'] = $foreach_uticom_Sav;
}
?>
						<?php } else { ?>
							<b>Auteur : Anonyme
						<?php }?>
						- Date : <?php echo $_smarty_tpl->tpl_vars['com']->value['COM_DATE'];?>
</b></br>
						Commentaire : <?php echo $_smarty_tpl->tpl_vars['com']->value['COM_TEXTE'];?>

					</article>		
				<?php }?>
			<?php
$_smarty_tpl->tpl_vars['com'] = $foreach_com_Sav;
}
?>
		<?php }?>

	<?php }?>

	<?php
$_from = $_smarty_tpl->tpl_vars['data']->value['uti_info'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['uti_info'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['uti_info']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['uti_info']->value) {
$_smarty_tpl->tpl_vars['uti_info']->_loop = true;
$foreach_uti_info_Sav = $_smarty_tpl->tpl_vars['uti_info'];
?>
		<?php if (isset($_SESSION['login'])) {?>
			<h3>Nouveau commentaire</h3>
			<article>
				<form id="form" action="" method="post">
					<label for="form-newcom">Votre commentaire : </label></br>
					<textarea required form="form" name="newcom" id="form-newcom" rows="8" cols="60" style="resize:none;"></textarea></br>
					<input type="submit" name="form-send" value="Poster"/>
				</form>
			<article>
		<?php }?>
	<?php
$_smarty_tpl->tpl_vars['uti_info'] = $foreach_uti_info_Sav;
}
?>


		</main>
		<footer>
			<?php echo $_smarty_tpl->getSubTemplate ('../layout/layout_pied.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		</footer>
	</body>
</html><?php }
}
?>