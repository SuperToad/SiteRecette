{extends '../layout.tpl'}

{block name = main}

	<h2>Profil du membre</h2>
	<article>
		<p>Compte de {$data['user'].nom} {$data['user'].prenom}.</p>
	</article>

{/block}