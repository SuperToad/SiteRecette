<?php /* Smarty version 3.1.27, created on 2015-12-07 06:49:15
         compiled from "G:\UwAmp\www\application\views\modules\profil.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1408156652bebe54c04_37654569%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e84913011da0278bcde611a254cf53f68e70924' => 
    array (
      0 => 'G:\\UwAmp\\www\\application\\views\\modules\\profil.tpl',
      1 => 1449470956,
      2 => 'file',
    ),
    '0630ae5642714752b1174063372b5bb9e9a48599' => 
    array (
      0 => 'G:\\UwAmp\\www\\application\\views\\layout.tpl',
      1 => 1447936492,
      2 => 'file',
    ),
    '6b92c7e9299e329de6ce231f592324b73c168c53' => 
    array (
      0 => '6b92c7e9299e329de6ce231f592324b73c168c53',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '1408156652bebe54c04_37654569',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56652bec0bc488_00674149',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56652bec0bc488_00674149')) {
function content_56652bec0bc488_00674149 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1408156652bebe54c04_37654569';
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
$_smarty_tpl->properties['nocache_hash'] = '1408156652bebe54c04_37654569';
?>

	<p>Bonjour <?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['user']->value]['prenom'];?>
 $data[$user]['nom'].</p>

		</main>
	</body>
</html><?php }
}
?>