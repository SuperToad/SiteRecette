<?php /* Smarty version 3.1.24, created on 2015-12-26 16:26:44
         compiled from "C:/UwAmp/www/ProjetPHP/PartageRecette/application/views/modules/recette_detail.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:9051567eb1b4d294f8_85492744%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9721f81715e92ba190d37c08e8e144d2307832b8' => 
    array (
      0 => 'C:/UwAmp/www/ProjetPHP/PartageRecette/application/views/modules/recette_detail.tpl',
      1 => 1451143601,
      2 => 'file',
    ),
    '1b4175c3e93a90a78fbf395ab4c71f04d3800a25' => 
    array (
      0 => 'C:/UwAmp/www/ProjetPHP/PartageRecette/application/views/layout.tpl',
      1 => 1450523864,
      2 => 'file',
    ),
    'b2fc54bba325e6dec3f8aa6f1c9df26095306ba3' => 
    array (
      0 => 'b2fc54bba325e6dec3f8aa6f1c9df26095306ba3',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '9051567eb1b4d294f8_85492744',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567eb1b53cf8b9_03325470',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567eb1b53cf8b9_03325470')) {
function content_567eb1b53cf8b9_03325470 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9051567eb1b4d294f8_85492744';
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
$_smarty_tpl->properties['nocache_hash'] = '9051567eb1b4d294f8_85492744';
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
 alt=<?php echo ("img_rct_").($_smarty_tpl->tpl_vars['rct']->value['RCT_ID']);?>
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