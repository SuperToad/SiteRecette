<?php /* Smarty version 3.1.24, created on 2016-01-19 16:06:24
         compiled from "C:/Users/Gaspard/Documents/Devoirs/UwAmp/www/application/views/layout/layout_entete.inc.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:11648569e50f0db2cc7_06727183%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1920800ed066a508f695ab39b70c3e72aadd7dbc' => 
    array (
      0 => 'C:/Users/Gaspard/Documents/Devoirs/UwAmp/www/application/views/layout/layout_entete.inc.tpl',
      1 => 1453215981,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11648569e50f0db2cc7_06727183',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_569e50f0dfc183_26878995',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_569e50f0dfc183_26878995')) {
function content_569e50f0dfc183_26878995 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11648569e50f0db2cc7_06727183';
?>
<h1>Site de partage de recettes</h1>
<p>Finit la prise de tête lors de la préparation des plats !</p>

<?php echo $_smarty_tpl->getSubTemplate ('../nav/nav.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>