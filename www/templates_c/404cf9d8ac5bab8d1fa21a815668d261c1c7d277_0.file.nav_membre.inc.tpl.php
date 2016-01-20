<?php /* Smarty version 3.1.24, created on 2016-01-20 21:38:25
         compiled from "C:/Users/Gaspard/Documents/Devoirs/UwAmp/www/application/views/nav/nav_membre.inc.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3882569ff0418347f9_32145580%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '404cf9d8ac5bab8d1fa21a815668d261c1c7d277' => 
    array (
      0 => 'C:/Users/Gaspard/Documents/Devoirs/UwAmp/www/application/views/nav/nav_membre.inc.tpl',
      1 => 1453322296,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3882569ff0418347f9_32145580',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_569ff04187ca98_24839931',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_569ff04187ca98_24839931')) {
function content_569ff04187ca98_24839931 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3882569ff0418347f9_32145580';
?>
<nav>
	<a href="index.php?page=">Accueil</a>
	<a href="index.php?page=liste">Les Recettes</a>
	<a href="index.php?page=profil">Profil</a>
	<a href="index.php?page=connexion">Se déconnecter</a>
</nav><?php }
}
?>