<?php /* Smarty version 3.1.27, created on 2015-12-07 06:37:28
         compiled from "G:\UwAmp\www\application\views\modules\accueil.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:32659566529285bd880_71270407%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a18c3d0690dd0b82f19bc377d7b4b5061f631721' => 
    array (
      0 => 'G:\\UwAmp\\www\\application\\views\\modules\\accueil.tpl',
      1 => 1449470246,
      2 => 'file',
    ),
    '0630ae5642714752b1174063372b5bb9e9a48599' => 
    array (
      0 => 'G:\\UwAmp\\www\\application\\views\\layout.tpl',
      1 => 1447936492,
      2 => 'file',
    ),
    '6ba1697665a40c4867169a5b9844cab77110d7c2' => 
    array (
      0 => '6ba1697665a40c4867169a5b9844cab77110d7c2',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '32659566529285bd880_71270407',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5665292878e606_88779045',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5665292878e606_88779045')) {
function content_5665292878e606_88779045 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '32659566529285bd880_71270407';
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
$_smarty_tpl->properties['nocache_hash'] = '32659566529285bd880_71270407';
?>

	<p>Edito</p>
	<p>Les valeurs du jour sont <?php echo $_smarty_tpl->tpl_vars['data']->value['alea'][0];?>
.</p>

		</main>
	</body>
</html><?php }
}
?>