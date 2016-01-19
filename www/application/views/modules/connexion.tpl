{extends '../layout.tpl'}

{block name = main}
	<form action="application/modules/connexion.inc.php" method="post">
		<label for="coLogin">Login : </label><br/>
		<input name="inpLogin" id="coLogin" type="text" size="25" /><br/>
		<label for="coMDP">Mot de passe : </label><br/>
		<input name="inpMDP" id="coMDP" type="password" size="25" /><br/>
		<input type="submit" name="form_test" value="Se connecter"/>
	</form>
{/block}