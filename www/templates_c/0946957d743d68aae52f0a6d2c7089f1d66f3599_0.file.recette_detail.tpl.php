<?php /* Smarty version 3.1.24, created on 2016-01-19 15:39:46
         compiled from "C:/Users/Gaspard/Documents/Devoirs/UwAmp/www/application/views/modules/recette_detail.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14662569e4ab2261150_00166283%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0946957d743d68aae52f0a6d2c7089f1d66f3599' => 
    array (
      0 => 'C:/Users/Gaspard/Documents/Devoirs/UwAmp/www/application/views/modules/recette_detail.tpl',
      1 => 1453214380,
      2 => 'file',
    ),
    'da80556857cd7261a53d0481d09bc7ff96082861' => 
    array (
      0 => 'C:/Users/Gaspard/Documents/Devoirs/UwAmp/www/application/views/layout.tpl',
      1 => 1453208088,
      2 => 'file',
    ),
    '6cf9ba9ecb484f62308188ac9bb080a8849c53ef' => 
    array (
      0 => '6cf9ba9ecb484f62308188ac9bb080a8849c53ef',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '14662569e4ab2261150_00166283',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_569e4ab23b08b3_45403807',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_569e4ab23b08b3_45403807')) {
function content_569e4ab23b08b3_45403807 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14662569e4ab2261150_00166283';
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
$_smarty_tpl->properties['nocache_hash'] = '14662569e4ab2261150_00166283';
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

	<?php }?>

	<?php if (isset($_smarty_tpl->tpl_vars['data']->value['session']['login'])) {?>
		Que faire ici?
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