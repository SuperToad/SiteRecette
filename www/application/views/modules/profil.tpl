{extends file = "../layout.tpl"}
{include_php file = '../accueil.inc.php'}

{block name = "main"}
	<p>Bonjour {$data.$user['prenom']} $data[$user]['nom'].</p>
{/block}
