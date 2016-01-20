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
		{if isset($data['rct_com'])}
			{foreach $data['rct_com'] as $com}
				{if isset($smarty.session.login) and $smarty.session.id == $com.UTI_ID}
				<form action="" method="post">
					<article>
						{foreach $data['uti_com'] as $uticom}
							{if $uticom.UTI_ID == $com.UTI_ID}
									<b>Auteur : {$uticom.UTI_NOM} {$uticom.UTI_PRENOM}
							{/if}
						{/foreach}
						- Date : {$com.COM_DATE}</b>
						<input type="submit" name="del_com" value="Effacer"/></br>
						Commentaire : {$com.COM_TEXTE}
					</article>
				</form>
				{else}
					<article>
						{if isset($data['uti_com'])}
							{foreach $data['uti_com'] as $uticom}
								{if $uticom.UTI_ID == $com.UTI_ID}
									<b>Auteur : {$uticom.UTI_NOM} {$uticom.UTI_PRENOM}
								{/if}
							{/foreach}
						{else}
							<b>Auteur : Anonyme
						{/if}
						- Date : {$com.COM_DATE}</b></br>
						Commentaire : {$com.COM_TEXTE}
					</article>		
				{/if}
			{/foreach}
		{/if}

	{/if}

	{foreach $data['uti_info'] as $uti_info}
		{if isset($smarty.session.login)}
			<h3>Nouveau commentaire</h3>
			<article>
				<form id="form" action="" method="post">
					<label for="form-newcom">Votre commentaire : </label></br>
					<textarea required form="form" name="newcom" id="form-newcom" rows="8" cols="60" style="resize:none;"></textarea></br>
					<input type="submit" name="form-send" value="Poster"/>
				</form>
			<article>
		{/if}
	{/foreach}

{/block}
