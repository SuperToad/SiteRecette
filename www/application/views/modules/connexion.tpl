{extends '../layout.tpl'}

{block name = main}
	{if $data['inscription'] == true}

		<h2>Inscription : </h2>

		<article>
			<form action="" method="post" enctype="multipart/form-data">
				<label for="new_login">Login*:</label>
				<input required name="new_login" id="new_login" type="text" size="25" /><br>
				<label for="new_name">Nom*:</label>
				<input required name="new_name" id="new_name" type="text" size="25" /><br>
				<label for="new_firstname">Prénom*:</label>
				<input required name="new_firstname" id="new_firstname" type="text" size="25" /><br>
				<label for="new_mail">e-Mail*:</label>
				<input required name="new_mail" id="new_mail" type="text" size="50" /><br>
				<label for="new_mdp">Nouveau mot de passe*:</label>
				<input name="new_mdp" id="new_mdp" type="password" size=""/><br>
				<label for="sec_new_mdp">Confirmer le mot de passe*:</label>
				<input name="new_sec_mdp" id"sec_new_mdp" type="password"size=""/><br>
				<label for="new_avatar1">Avatar:</label>
				<input type="hidden" name="MAX_FILE_SIZE" value="512000"/>
				<input type="file" name="new_new_avatar" id="new_avatar1"/><br>
				<input type="submit" name="inscription" value="Envoyer"/> 
				<input type="submit" name="exit" value="Annuler" formnovali	date/>
			</form>
			<p><i>Les champs spécifiés d'un * sont obligatoires.</i></p>
		</article>


	{else}
		{if isset($smarty.session.login)}
			<h2>Déconnexion : </h2>
			<article>
				<p> Vous êtes actuellement connecté. </p>
				<form action="" method="post">
					<input type="submit" name="deco" value="Se déconnecter"/>
				</form>
			</article>
		{else}

			<h2>Connexion : </h2>

			<article>
				<form action="" method="post">
					<label for="form-login">Entrez votre login :</label><br/>
					<input required name="login" id="form-login" type="text" placeholder="login" size="25" /><br/>
					<label for="form-mdp">Entrez votre mot de passe :</label><br/>
					<input required name="mdp" id="form-mdp" type="password" size="25" /><br/>
					<input type="submit" name="connex" value="Se connecter"/>
					<input type="submit" name="connexion_inscription" value="S'inscrire" formnovalidate/>
				</form>
			</article>
		{/if}
	{/if}

{/block}
