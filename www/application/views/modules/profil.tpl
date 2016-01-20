{extends '../layout.tpl'}

{block name=main}
{if $data['page_profil'] == 2}
	<h2> Votre profil : </h2>

	<form action="" method="post" enctype="multipart/form-data">
		<label for="new_name">Nom :</label>
		<input required name="name" id="new_name" type="text" value="{$smarty.session.nom}" size="25" /><br>
		<label for="new_firstname">Prénom :</label>
		<input required name="firstname" id="new_firstname" type="text" value="{$smarty.session.prenom}" size="25" /><br>
		<label for="new_mail">e-Mail :</label>
		<input required name="mail" id="new_mail" type="text" value="{$smarty.session.mail}" size="50" /><br>
		<label for="new_mdp">Nouveau mot de passe :</label>
		<input name="mdp" id="new_mdp" type="password" value="" size=""/><br>
		<label for="sec_new_mdp">Confirmer le mot de passe :</label>
		<input name="sec_mdp" id"sec_new_mdp" type="password" value="" size=""/><br>
		<label for="new_avatar1">Avatar:</label>
		<input type="hidden" name="MAX_FILE_SIZE" value="512000"/>
		<input type="file" name="new_avatar" id="new_avatar1"/><br>
		<input type="submit" name="send" value="Envoyer"/> 
		<input type="submit" name="exit" value="Annuler"/>
	</form>
{else}

	<h2> Votre profil : </h2>

	<div>
		<p>Login :	{$smarty.session.login} </p>
		<p>Nom : {$smarty.session.nom} </p>
		<p>Prénom : {$smarty.session.prenom} </p>
		<p>e-Mail : {$smarty.session.mail} </p>
		<img src={"./media/"|cat:$smarty.session.login|cat:"/"|cat:$smarty.session.avatar} height="150" width="150">
		<form action="" method="post" enctype="multipart/form-data">
			<input type="submit" name="modif_profil" value="Modifier"/>
			<input onclick="return(confirm('Etes-vous sûr de vouloir supprimer votre profil?'))" type="submit" name="delete_profil" value="Supprimer le compte"/>
		</form>
	</div>

	<section class="gerer_recette">
		<h2> Vos recettes : </h2>
		<table>
			{foreach $data['recette'] as $recette}
			<tr><td> <a href={"index.php?page=details&idr="|cat:$recette.RCT_ID }>{$recette.RCT_TITRE}</a> </td><td> {$recette.RCT_DESCRIPTION} </td>
				<td> 
					{foreach $data['categorie_rct'] as $rct} 
						{if $rct.RCT_ID == $recette.RCT_ID} 
							{foreach $data['categorie_label'] as $cat}
								{if $cat.CAT_ID == $rct.CAT_ID}
									{$cat.CAT_LABEL}
								{/if}
							{/foreach}
						{/if}
					{/foreach}
				</td>
			</tr>
			{/foreach}
		</table>
		<form action="" method="post" enctype="multipart/form-data">
			<table>
				<tr>
					<td>
						<select name="rct_id">
							{foreach $data['recette'] as $recette}
								<option value={$recette.RCT_ID}>{$recette.RCT_TITRE}</option>
							{/foreach}
						</select>
					</td>
					<td><input type="submit" name="modif_rct" value="Modifier"></input> </td>
					<td><input type="submit" name="delete" value="Supprimer"></input> </td>
				</tr>
			</table>
		<form>

	</section>

	<section class="ajout_recette">
		{if $data['page_profil'] == 1}
			<form action="" method="post" enctype="multipart/form-data"> <input type="submit" name="new_recette" value="Ajouter une recette"/> </form>
		{elseif $data['page_profil'] == 3}
			<form action="" method="post" enctype="multipart/form-data">
				<label for="id_titre">Titre*:</label>
				<input required type="text" id ="id_titre" name="titre"/><br>
				<label for="id_desc">Descritpion:</label><br>
				<textarea name="desc" id="id_desc" rows="10" cols="50" style="resize:none;"></textArea><br>
				<label for="id_prep">Préparation:</label>
				<input type="text" id="id_prep" name="prep"/><label>mn</label><br>
				<label for="id_cuisson">Cuisson:</label>
				<input type="text" id="id_cuisson" name="cuisson"/><label>mn</label><br>
				<label for="id_illustration">Illustration:</label>
				<input type="hidden" name="MAX_FILE_SIZE" value="512000"/>
				<input type="file" name="illustration" id="id_illustration"/><br>
				<label for="id_cout">Coût:</label>
				<select name="cout" id="id_cout">
					<option value="1">faible</option>
					<option value="2">moyen</option>
					<option value="3">élevé</option>
				</select><br>
				<label for="id_diff">Difficulté:</label>
				<select name="diff" id="id_diff">
					<option value="1">facile</option>
					<option value="2">moyen</option>
					<option value="3">difficile</option>
				</select><br>
				<label for="id_cat">Catégorie:</label>
				<select name="cat" id="id_cat">
					<option value="1">Entrée</option>
					<option value="2">Plat</option>
					<option value="3">Dessert</option>
				</select><br>
				<label for="id_repos">Repos:</label>
				<input type="text" id ="id_repos" name="repos"/><br>
				<label for="id_pers">Nombre de convives:</label>
				<input type="text" id ="id_pers" name="pers"/><br>
				<label for="id_recette">La recette*:</label><br>
				<textarea required name="recette" id="id_recette"  rows="10" cols="50" style="resize:none;"></textarea><br>
				<input type="submit" name="new_recette_form" value="Ajouter"/>
				<a href="index.php?page=profil"><button>Annuler</button></a>
			</form>
			<p><i> Les champs spécifiés d'un * sont obligatoires. </i></p>
		{else}
		 	{foreach $data['recette_modif'] as $rct}

		 		{foreach $data['categorie_rct'] as $cat_rct} 
					{if $cat_rct.RCT_ID == $rct.RCT_ID} 
						{foreach $data['categorie_label'] as $cat}
							{if $cat.CAT_ID == $cat_rct.CAT_ID}
								{$cat_label = $cat.CAT_LABEL}
							{/if}
						{/foreach}
					{/if}
				{/foreach}


				<form action="" method="post" enctype="multipart/form-data">
					<input type="text" name="rct_id_form" value="{$rct.RCT_ID}" style="visibility: hidden;"/><br>
					<label for="id_titre">Titre*:</label>
					<input required type="text" id ="id_titre" name="titre" value="{$rct.RCT_TITRE}"/><br>
					<label for="id_desc">Descritpion:</label><br>
					<textarea name="desc" id="id_desc" rows="10" cols="50" style="resize:none;">{$rct.RCT_DESCRIPTION}</textArea><br>
					<label for="id_prep">Préparation:</label>
					<input type="text" id ="id_prep" name="prep" value="{$rct.RCT_TEMPS_PREPARATION}"/><label>mn</label><br>
					<label for="id_cuisson">Cuisson:</label>
					<input type="text" id ="id_cuisson" name="cuisson" value="{$rct.RCT_TEMPS_CUISSON}"/><label>mn</label><br>
					
					<label for="new_img">Illustration:</label>
					<input type="hidden" name="MAX_FILE_SIZE" value="512000"/>
					<input type="file" name="illustration" id="new_img"/><br>

					<label for="id_cout">Coût:</label>
					<select name="cout" id="id_cout">
						<option {if $rct.RCT_COUT == "faible"} selected {/if} value="1">faible</option>
						<option {if $rct.RCT_COUT == "moyen"} selected {/if} value="2">moyen</option>
						<option {if $rct.RCT_COUT == "eleve"} selected {/if} value="3">élevé</option>
					</select><br>
					<label for="id_diff">Difficulté:</label>
					<select name="diff" id="id_diff">
						<option {if $rct.RCT_DIFFICULTE == "facile"} selected {/if} value="1">facile</option>
						<option {if $rct.RCT_DIFFICULTE == "moyen"} selected {/if} value="2">moyen</option>
						<option {if $rct.RCT_DIFFICULTE == "difficile"} selected {/if} value="3">difficile</option>
					</select><br>
					<label for="id_cat">Catégorie:</label>
					<select name="cat" id="id_cat">
						<option {if $cat_label == "Entrées"} selected {/if} value="1">Entrée</option>
						<option {if $cat_label == "Plats"} selected {/if} value="2">Plat</option>
						<option {if $cat_label == "Desserts"} selected {/if} value="3">Dessert</option>
					</select><br>
					<label for="id_repos">Repos:</label>
					<input type="text" id ="id_repos" name="repos" value="{$rct.RCT_TEMPS_REPOS}"/><br>
					<label for="id_pers">Nombre de convives:</label>
					<input type="text" id ="id_pers" name="pers" value="{$rct.RCT_NBPERSONNE}"/><br>
					<label for="id_recette">La recette*:</label><br>
					<textarea required name="recette" id="id_recette"  rows="10" cols="50" style="resize:none;"></textarea><br>
					<input type="submit" name="new_modif_form" value="Confirmer"/>
					<a href="index.php?page=profil"><button>Annuler</button></a>
				</form>
				<p><i> Les champs spécifiés d'un * sont obligatoires. </i></p>
			{/foreach}



	{/if}
	</section>
{/if}

{/block}
