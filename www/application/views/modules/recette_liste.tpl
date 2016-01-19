{extends '../layout.tpl'}

{block name = main}
	{if isset($data['rct_req'])}

		<h2>{foreach $data['label_cat_desc'] as $cat_label}{$cat_label.CAT_LABEL}{/foreach}</h2>

		<p>{foreach $data['label_cat_desc'] as $cat_desc}{$cat_desc.CAT_DESCRIPTION}{/foreach}</p>

		{foreach $data['rct_req'] as $rct}
			<article>
				<h3>{$rct.RCT_TITRE}</h3>

				{foreach $data['uti_info'] as $uti}
					<img src={"./media/"|cat: $uti.UTI_LOGIN|cat:"/"|cat: $rct.RCT_ILLUSTRATION} height="150" width="250" alt={"img_rct_"|cat: $rct.RCT_ID}>
				{/foreach}

				<p> {$rct.RCT_DESCRIPTION} </p>
				<a href={'index.php?page=details&idr='|cat: $rct.RCT_ID}>Voir la recette</a>

			</article>
		{/foreach}


	{else}
		<h2>Catégories de recettes</h2>
		{foreach $data['cat_req'] as $cat}
			<article class="categories">
				<h3>{$cat.CAT_LABEL}</h2>
				<img src= {"./media/categories/"|cat: $cat.CAT_ILLUSTRATION} height="150" width="200" alt={"img_cat_"|cat: $cat.CAT_ID}>
				<p>{$cat.CAT_DESCRIPTION}</p>
				<a href={'index.php?page=liste&idc='|cat: $cat.CAT_ID}>Voir les recettes</a>
			</article>
		{/foreach}
	{/if}
{/block}
