<?php /* Smarty version 3.1.24, created on 2016-01-20 20:16:16
         compiled from "C:/Users/Gaspard/Documents/Devoirs/UwAmp/www/application/views/layout/layout_entete.inc.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:29334569fdd00b87f07_95559423%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1920800ed066a508f695ab39b70c3e72aadd7dbc' => 
    array (
      0 => 'C:/Users/Gaspard/Documents/Devoirs/UwAmp/www/application/views/layout/layout_entete.inc.tpl',
      1 => 1453317373,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29334569fdd00b87f07_95559423',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_569fdd00bedf25_94890057',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_569fdd00bedf25_94890057')) {
function content_569fdd00bedf25_94890057 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '29334569fdd00b87f07_95559423';
?>
<h1>Site de partage de recettes</h1>
<p>Finit la prise de tête lors de la préparation des plats !</p>

<?php if (isset($_SESSION['login'])) {?>
<?php echo $_smarty_tpl->getSubTemplate ('../nav/nav_membre.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php } else { ?>
<?php echo $_smarty_tpl->getSubTemplate ('../nav/nav.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }

}
}
?>