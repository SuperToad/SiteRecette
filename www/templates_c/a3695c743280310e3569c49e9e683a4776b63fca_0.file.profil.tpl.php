<?php /* Smarty version 3.1.24, created on 2016-01-20 22:59:20
         compiled from "C:/Users/Gaspard/Documents/Devoirs/UwAmp/www/application/views/modules/profil.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2362256a00338b9c326_93394427%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3695c743280310e3569c49e9e683a4776b63fca' => 
    array (
      0 => 'C:/Users/Gaspard/Documents/Devoirs/UwAmp/www/application/views/modules/profil.tpl',
      1 => 1453327159,
      2 => 'file',
    ),
    'da80556857cd7261a53d0481d09bc7ff96082861' => 
    array (
      0 => 'C:/Users/Gaspard/Documents/Devoirs/UwAmp/www/application/views/layout.tpl',
      1 => 1453324219,
      2 => 'file',
    ),
    'c1af0f2fd4ee82b4df3d5fb9322309570bb23f9d' => 
    array (
      0 => 'c1af0f2fd4ee82b4df3d5fb9322309570bb23f9d',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '2362256a00338b9c326_93394427',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56a00338c683a1_22937754',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56a00338c683a1_22937754')) {
function content_56a00338c683a1_22937754 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2362256a00338b9c326_93394427';
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
$_smarty_tpl->properties['nocache_hash'] = '2362256a00338b9c326_93394427';
?>


	<h2>Profil du membre</h2>
	<article>
		<p>Compte de <?php echo $_smarty_tpl->tpl_vars['data']->value['user']['nom'];?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value['user']['prenom'];?>
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