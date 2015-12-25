{extends file = '../layout.tpl'}
{include_php file = '../accueil.inc.php'}

{block name = "main"}
	<p>Edito</p>
	<p>Les valeurs du jour sont {$data.alea[0]}.</p>
{/block}