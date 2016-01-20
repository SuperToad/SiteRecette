{extends '../layout.tpl'}

{block name = main}
	<h2>Page d'accueil</h2>
	
	<article>
		<p>Bienvenue sur notre site!</p>
		
		<p>Les valeurs aléatoires du moment sont : </br>
		{foreach $data['alea'] as $value}
			{$value}</br>
		{/foreach}
		</p>
	</article>
{/block}