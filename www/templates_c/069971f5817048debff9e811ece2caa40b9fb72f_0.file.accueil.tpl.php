<?php /* Smarty version 3.1.27, created on 2015-11-26 12:47:15
         compiled from "H:\UwAmp\www\application\views\modules\accueil.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:103595656ff53a9ec22_98363422%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '069971f5817048debff9e811ece2caa40b9fb72f' => 
    array (
      0 => 'H:\\UwAmp\\www\\application\\views\\modules\\accueil.tpl',
      1 => 1448533810,
      2 => 'file',
    ),
    'daf4ca3a3da474c7455d157e80f7d2dc602d9d2c' => 
    array (
      0 => 'H:\\UwAmp\\www\\application\\views\\layout.tpl',
      1 => 1447936492,
      2 => 'file',
    ),
    '7bdd666854fd6a8f889327195672883a3d311932' => 
    array (
      0 => '7bdd666854fd6a8f889327195672883a3d311932',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '103595656ff53a9ec22_98363422',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5656ff553e08b5_75029647',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5656ff553e08b5_75029647')) {
function content_5656ff553e08b5_75029647 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '103595656ff53a9ec22_98363422';
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
$_smarty_tpl->properties['nocache_hash'] = '103595656ff53a9ec22_98363422';
?>

<?php echo '<?php
	';?>$files = scandir ('../modules/accueil.inc.php' data = $data);
	print_r($files);
	echo 'lol';
<?php echo '?>';?>
	<p>Edito</p>
	<p>Les valeurs du jour sont <?php echo $_smarty_tpl->tpl_vars['alea']->value;?>
</p>

		</main>
	</body>
</html><?php }
}
?>