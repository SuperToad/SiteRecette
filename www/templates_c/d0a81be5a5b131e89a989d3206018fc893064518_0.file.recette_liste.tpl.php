<?php /* Smarty version 3.1.24, created on 2016-01-20 22:20:44
         compiled from "C:/Users/Gaspard/Documents/Devoirs/UwAmp/www/application/views/modules/recette_liste.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18091569ffa2cb80258_88767376%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0a81be5a5b131e89a989d3206018fc893064518' => 
    array (
      0 => 'C:/Users/Gaspard/Documents/Devoirs/UwAmp/www/application/views/modules/recette_liste.tpl',
      1 => 1453213186,
      2 => 'file',
    ),
    'da80556857cd7261a53d0481d09bc7ff96082861' => 
    array (
      0 => 'C:/Users/Gaspard/Documents/Devoirs/UwAmp/www/application/views/layout.tpl',
      1 => 1453324219,
      2 => 'file',
    ),
    '48d61acff765c009f9e317aba030877e50e57232' => 
    array (
      0 => '48d61acff765c009f9e317aba030877e50e57232',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '18091569ffa2cb80258_88767376',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_569ffa2ccd58c7_52078090',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_569ffa2ccd58c7_52078090')) {
function content_569ffa2ccd58c7_52078090 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18091569ffa2cb80258_88767376';
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
$_smarty_tpl->properties['nocache_hash'] = '18091569ffa2cb80258_88767376';
?>

	<?php if (isset($_smarty_tpl->tpl_vars['data']->value['rct_req'])) {?>

		<h2><?php
$_from = $_smarty_tpl->tpl_vars['data']->value['label_cat_desc'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['cat_label'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['cat_label']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cat_label']->value) {
$_smarty_tpl->tpl_vars['cat_label']->_loop = true;
$foreach_cat_label_Sav = $_smarty_tpl->tpl_vars['cat_label'];
echo $_smarty_tpl->tpl_vars['cat_label']->value['CAT_LABEL'];
$_smarty_tpl->tpl_vars['cat_label'] = $foreach_cat_label_Sav;
}
?></h2>

		<p><?php
$_from = $_smarty_tpl->tpl_vars['data']->value['label_cat_desc'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['cat_desc'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['cat_desc']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cat_desc']->value) {
$_smarty_tpl->tpl_vars['cat_desc']->_loop = true;
$foreach_cat_desc_Sav = $_smarty_tpl->tpl_vars['cat_desc'];
echo $_smarty_tpl->tpl_vars['cat_desc']->value['CAT_DESCRIPTION'];
$_smarty_tpl->tpl_vars['cat_desc'] = $foreach_cat_desc_Sav;
}
?></p>

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
			<article>
				<h3><?php echo $_smarty_tpl->tpl_vars['rct']->value['RCT_TITRE'];?>
</h3>

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
					<img src=<?php echo ((("./media/").($_smarty_tpl->tpl_vars['uti']->value['UTI_LOGIN'])).("/")).($_smarty_tpl->tpl_vars['rct']->value['RCT_ILLUSTRATION']);?>
 height="150" width="250" alt=<?php echo ("img_rct_").($_smarty_tpl->tpl_vars['rct']->value['RCT_ID']);?>
>
				<?php
$_smarty_tpl->tpl_vars['uti'] = $foreach_uti_Sav;
}
?>

				<p> <?php echo $_smarty_tpl->tpl_vars['rct']->value['RCT_DESCRIPTION'];?>
 </p>
				<a href=<?php echo ('index.php?page=details&idr=').($_smarty_tpl->tpl_vars['rct']->value['RCT_ID']);?>
>Voir la recette</a>

			</article>
		<?php
$_smarty_tpl->tpl_vars['rct'] = $foreach_rct_Sav;
}
?>


	<?php } else { ?>
		<h2>Catégories de recettes</h2>
		<?php
$_from = $_smarty_tpl->tpl_vars['data']->value['cat_req'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['cat']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
$foreach_cat_Sav = $_smarty_tpl->tpl_vars['cat'];
?>
			<article class="categories">
				<h3><?php echo $_smarty_tpl->tpl_vars['cat']->value['CAT_LABEL'];?>
</h2>
				<img src= <?php echo ("./media/categories/").($_smarty_tpl->tpl_vars['cat']->value['CAT_ILLUSTRATION']);?>
 height="150" width="200" alt=<?php echo ("img_cat_").($_smarty_tpl->tpl_vars['cat']->value['CAT_ID']);?>
>
				<p><?php echo $_smarty_tpl->tpl_vars['cat']->value['CAT_DESCRIPTION'];?>
</p>
				<a href=<?php echo ('index.php?page=liste&idc=').($_smarty_tpl->tpl_vars['cat']->value['CAT_ID']);?>
>Voir les recettes</a>
			</article>
		<?php
$_smarty_tpl->tpl_vars['cat'] = $foreach_cat_Sav;
}
?>
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