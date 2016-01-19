<?php /* Smarty version 3.1.24, created on 2015-12-28 13:31:07
         compiled from "C:/UwAmp/www/Projet_PHP/PartageRecette/application/views/modules/recette_detail.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1250956812b8b538765_66586989%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b6be00185d3db4b938a8b97fe60e1065d107de7' => 
    array (
      0 => 'C:/UwAmp/www/Projet_PHP/PartageRecette/application/views/modules/recette_detail.tpl',
      1 => 1451305715,
      2 => 'file',
    ),
    '996da188aec477b38394b859fc0ad89f8b3474e9' => 
    array (
      0 => 'C:/UwAmp/www/Projet_PHP/PartageRecette/application/views/layout.tpl',
      1 => 1451303609,
      2 => 'file',
    ),
    '56c0caf1784810216b93bf1517d4080b6f678887' => 
    array (
      0 => '56c0caf1784810216b93bf1517d4080b6f678887',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '1250956812b8b538765_66586989',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56812b8b5f1ec1_70771434',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56812b8b5f1ec1_70771434')) {
function content_56812b8b5f1ec1_70771434 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1250956812b8b538765_66586989';
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
$_smarty_tpl->properties['nocache_hash'] = '1250956812b8b538765_66586989';
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
			<article class="rct">

				<h3 class="titre_rct_list"><?php echo $_smarty_tpl->tpl_vars['rct']->value['RCT_TITRE'];?>
</h3>

				<ul class="ul_list_rct">
					<li>Préparation: <?php echo $_smarty_tpl->tpl_vars['rct']->value['RCT_TEMPS_PREPARATION'];?>
 </li>
					<li>Cuisson: <?php echo $_smarty_tpl->tpl_vars['rct']->value['RCT_TEMPS_CUISSON'];?>
</li>
					<li>Coût: <?php echo $_smarty_tpl->tpl_vars['rct']->value['RCT_COUT'];?>
</li>
					<li>Difficulté: <?php echo $_smarty_tpl->tpl_vars['rct']->value['RCT_DIFFICULTE'];?>
</li>
					<li>Nombre de personnes: <?php echo $_smarty_tpl->tpl_vars['rct']->value['RCT_NBPERSONNE'];?>
</li>
				</ul>

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

				<p class="separateur"/>

				<p>
					<?php echo $_smarty_tpl->tpl_vars['rct']->value['RCT_TITRE'];?>
<br/>
					<i>recette proposée par</i> <?php
$_from = $_smarty_tpl->tpl_vars['data']->value['uti_info'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['uti'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['uti']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['uti']->value) {
$_smarty_tpl->tpl_vars['uti']->_loop = true;
$foreach_uti_Sav = $_smarty_tpl->tpl_vars['uti'];
echo $_smarty_tpl->tpl_vars['uti']->value['UTI_PRENOM'];
$_smarty_tpl->tpl_vars['uti'] = $foreach_uti_Sav;
}
?>
				</p>

				<p class="separateur"/>

				<p class="description_rct">
				<?php echo $_smarty_tpl->tpl_vars['rct']->value['RCT_DESCRIPTION'];?>

				</p>

			</article>
		<?php
$_smarty_tpl->tpl_vars['rct'] = $foreach_rct_Sav;
}
?>

	<?php }?>

	<?php if (isset($_smarty_tpl->tpl_vars['data']->value['session']['login'])) {?>

		lololololololololol

	<?php }?>


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