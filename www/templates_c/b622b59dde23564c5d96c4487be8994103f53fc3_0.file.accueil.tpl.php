<?php /* Smarty version 3.1.24, created on 2015-12-28 15:25:06
         compiled from "C:/UwAmp/www/Projet_PHP/PartageRecette/application/views/modules/accueil.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:305256814642140012_08085250%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b622b59dde23564c5d96c4487be8994103f53fc3' => 
    array (
      0 => 'C:/UwAmp/www/Projet_PHP/PartageRecette/application/views/modules/accueil.tpl',
      1 => 1449480903,
      2 => 'file',
    ),
    '996da188aec477b38394b859fc0ad89f8b3474e9' => 
    array (
      0 => 'C:/UwAmp/www/Projet_PHP/PartageRecette/application/views/layout.tpl',
      1 => 1451312357,
      2 => 'file',
    ),
    '9aa3f50cc380b415bbd5eab3589045f5ce2be2e3' => 
    array (
      0 => '9aa3f50cc380b415bbd5eab3589045f5ce2be2e3',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '305256814642140012_08085250',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_568146421a95a2_08289106',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_568146421a95a2_08289106')) {
function content_568146421a95a2_08289106 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '305256814642140012_08085250';
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
$_smarty_tpl->properties['nocache_hash'] = '305256814642140012_08085250';
?>

	<article>
		<p>BIENVENUE NARVALO</p>
	</article>
	<section>
		<?php
$_from = $_smarty_tpl->tpl_vars['data']->value['alea'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$foreach_value_Sav = $_smarty_tpl->tpl_vars['value'];
?>
			<?php echo $_smarty_tpl->tpl_vars['value']->value;?>

		<?php
$_smarty_tpl->tpl_vars['value'] = $foreach_value_Sav;
}
?>
	</section>

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