<?php /* Smarty version 3.1.24, created on 2016-01-19 15:21:08
         compiled from "C:/Users/Gaspard/Documents/Devoirs/UwAmp/www/application/views/modules/accueil.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18844569e4655009822_79796759%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb37ab89b2d261b4cc268064a9eaf30d368faa35' => 
    array (
      0 => 'C:/Users/Gaspard/Documents/Devoirs/UwAmp/www/application/views/modules/accueil.tpl',
      1 => 1453213233,
      2 => 'file',
    ),
    'da80556857cd7261a53d0481d09bc7ff96082861' => 
    array (
      0 => 'C:/Users/Gaspard/Documents/Devoirs/UwAmp/www/application/views/layout.tpl',
      1 => 1453208088,
      2 => 'file',
    ),
    '23fff40a023af85a142c01235e6a3b000c80b1be' => 
    array (
      0 => '23fff40a023af85a142c01235e6a3b000c80b1be',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '18844569e4655009822_79796759',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_569e46550b4ca8_11118117',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_569e46550b4ca8_11118117')) {
function content_569e46550b4ca8_11118117 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18844569e4655009822_79796759';
echo '<?xml version="1.0" encoding="utf-8"?>';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml/DTD/xhtml11-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="eng">

	<head>
		<title>Site de partage de recettes</title>
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
$_smarty_tpl->properties['nocache_hash'] = '18844569e4655009822_79796759';
?>

	<h2>Page d'acceuil</h2>
	
	<article>
		<p>Bienvenue sur notre site!</p>
		
		<p>Les valeurs aléatoires du moment sont : </br>
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
</br>
		<?php
$_smarty_tpl->tpl_vars['value'] = $foreach_value_Sav;
}
?>
		</p>
	</article>

		</main>
		<footer>
			<?php echo $_smarty_tpl->getSubTemplate ('../layout/layout_pied.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		</footer>
	</body>
</html><?php }
}
?>