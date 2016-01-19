{extends '../layout.tpl'}

{block name = main}
	{if isset($data['rct_req'])}

		{foreach $data['rct_req'] as $rct}
			
			<h2>{$rct.RCT_TITRE}</h2>
			
			<article>
				
				<p>Recette du memebre : {foreach $data['uti_info'] as $uti}{$uti.UTI_LOGIN}{/foreach}</p>
				
				{foreach $data['uti_info'] as $uti}
					<img class="img_detail" src={"./media/"|cat:$uti.UTI_LOGIN|cat:"/"|cat:$rct.RCT_ILLUSTRATION} height="352" width="470" alt={"img_rct_"|cat: $rct.RCT_ID}>
				{/foreach}

				<h3>Paramètres</h3>
				<ul>
					<li>Temps de préparation : {$rct.RCT_TEMPS_PREPARATION} </li>
					<li>Temps de cuisson : {$rct.RCT_TEMPS_CUISSON}</li>
					<li>Coût des ingrédients : {$rct.RCT_COUT}</li>
					<li>Difficulté: {$rct.RCT_DIFFICULTE}</li>
					<li>Pour {$rct.RCT_NBPERSONNE} personnes</li>
				</ul>

				<h3>Description</h3>
				<p>{$rct.RCT_DESCRIPTION}</p>

			</article>
		{/foreach}

	{/if}

	{if isset($data['session']['login'])}
		Que faire ici?
	{/if}

{/block}