<?php /* Smarty version 3.1.24, created on 2015-12-07 11:45:01
         compiled from "C:/UwAmp/www/ProjetPHP/PartageRecette/application/views/layout/layout_entete.inc.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:172795665632d0e45e8_78742780%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed9d614e53efc7b743906b4eef90d7e1c1755761' => 
    array (
      0 => 'C:/UwAmp/www/ProjetPHP/PartageRecette/application/views/layout/layout_entete.inc.tpl',
      1 => 1449485098,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172795665632d0e45e8_78742780',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5665632d131357_63989169',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5665632d131357_63989169')) {
function content_5665632d131357_63989169 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '172795665632d0e45e8_78742780';
?>
<h1>What to Cook</h1>
<nav>
	<ul>
		<li><a href="index.php?page=">Accueil</a></li>
		<li><a href="index.php?page=liste">Recettes</a></li>
		<li><a href="index.php?page=connexion">Espace Perso</a></li>
	</ul>
</nav>
<?php }
}
?>