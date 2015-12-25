{extends file = '../layout.tpl'}
{include '../recette_liste.inc.php' tableau = $tab}

{block name = "main"}
	<p>Liste des recettes</p>
	<p>Voici la liste des recettes du site.</p>
	{foreach item='rec' from=$tab}
		<p>{$rec['CAT_LABEL']}</p>
	{/foreach}
{/block}