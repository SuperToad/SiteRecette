<?php /* Smarty version 3.1.24, created on 2016-01-20 16:52:30
         compiled from "C:/Users/Gaspard/Documents/Devoirs/UwAmp/www/application/views/nav/nav.inc.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:5489569fad3e33a897_40317079%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09d268f795dba9251b5c4dcca2760ee786179bc9' => 
    array (
      0 => 'C:/Users/Gaspard/Documents/Devoirs/UwAmp/www/application/views/nav/nav.inc.tpl',
      1 => 1453305132,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5489569fad3e33a897_40317079',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_569fad3e386461_04818245',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_569fad3e386461_04818245')) {
function content_569fad3e386461_04818245 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5489569fad3e33a897_40317079';
?>
<nav>
	<a href="index.php?page=">Accueil</a>
	<a href="index.php?page=liste">Les Recettes</a>
	<a href="index.php?page=connexion">Connexion</a>
</nav>
<?php }
}
?>