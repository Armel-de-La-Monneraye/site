<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
	<link rel="stylesheet" href="site_css.css" />
        <title>menu</title>
    </head>

    <body>
	<header>
        	<h1>NEIGHBORFOOD</h1>
	</header>
	<h2>BIENVENU SUR NOTRE SITE</h2>
	<aside class="profil">
		<form name="connexion" method="post" action="clef.php">
			<table>		
				<tr><td><label for="mail">Mail</label> : <input type="text" name="mail" id="mail" /></tr></td>
				<tr><td><label for="mdp">Mot de passe</label> : <input type="password" name="mdp" id="mdp" /></tr></td>
			</table>
				<input type="submit" name="valider" value="Se connecter" class="bouton"/>
		</form>
		
	</aside>
	<nav>
		<p class="pages">
		<a href="achat.php" title="Pour ouvrir la page achat" class="achat" >Achat</a>
		<a href="vente.php" class="vente">Vente</a>
		<a href="echange.php" class="echange">Echange</a><br/>
		<a href="formulaire.php" class="inscription">Inscription</a><br/>
		</p>	
	</nav>
	<section class="carre">
	</section>



	<footer>
		<em> Aide </em>
		<em> Nous contacter </em>
	</footer>

    </body>
</html>

