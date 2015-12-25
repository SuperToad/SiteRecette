<?php /* Smarty version 3.1.27, created on 2015-12-07 08:41:13
         compiled from "G:\UwAmp\www\application\views\modules\recette_liste.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3008956654629f03c07_49759769%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b64f86a00c688a8e7d2c021f5a377f4f7ff48c7' => 
    array (
      0 => 'G:\\UwAmp\\www\\application\\views\\modules\\recette_liste.tpl',
      1 => 1449477672,
      2 => 'file',
    ),
    '0630ae5642714752b1174063372b5bb9e9a48599' => 
    array (
      0 => 'G:\\UwAmp\\www\\application\\views\\layout.tpl',
      1 => 1449471896,
      2 => 'file',
    ),
    '1b45a3a00e8813a0cfab8445f9447c086aab672d' => 
    array (
      0 => '1b45a3a00e8813a0cfab8445f9447c086aab672d',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '3008956654629f03c07_49759769',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5665462a1dc908_79594091',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5665462a1dc908_79594091')) {
function content_5665462a1dc908_79594091 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3008956654629f03c07_49759769';
echo '<?xml ';?>
version="1.0" encoding="utf-8"<?php echo '?>';?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml/DTD/xhtml11-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="eng">

	<head>
		<title>Projet - TP1</title>
		<meta http-equiv="content-type" 
			content="text/html;charset=utf-8" />
		<meta http-equiv="Content-Style-Type" content="text/css" />
	</head>
	
	<body>
		<header>
			<?php echo $_smarty_tpl->getSubTemplate ('../layout/layout_entete.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		</header>
		<main>
			
			<?php
$_smarty_tpl->properties['nocache_hash'] = '3008956654629f03c07_49759769';
?>

	<p>Liste des recettes</p>
	<p>Voici la liste des recettes du site.</p>
	<?php
$_from = $_smarty_tpl->tpl_vars['tab']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['rec'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['rec']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['rec']->value) {
$_smarty_tpl->tpl_vars['rec']->_loop = true;
$foreach_rec_Sav = $_smarty_tpl->tpl_vars['rec'];
?>
		<p><?php echo $_smarty_tpl->tpl_vars['rec']->value['CAT_LABEL'];?>
</p>
	<?php
$_smarty_tpl->tpl_vars['rec'] = $foreach_rec_Sav;
}
?>

		</main>
	</body>
</html><?php }
}
?>