<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8" />
	<link rel="stylesheet" href="formulaire.css" />
        <title>formulaire</title>
    </head>
	
	<body>
		<header>
        	<h1>NEIGHBORFOOD</h1>
			
		</header>
		<h2>INSCRIPTION</h2>
		
		<nav>
		<p class="pages">
		<a href="achat.php" title="Pour ouvrir la page achat" class="achat" >Achat</a>
		<a href="vente.php" class="vente">Vente</a>
		<a href="echange.php" class="echange">Echange</a><br/>
		<a href="site.php" class="menu">Menu</a><br/>
		</p>	
		</nav>
	
		<section>
		<form name="formulaire" method="post" action="formulaire_post.php">
		
		<table>		
			<tr><td><label for="nom">Nom</label> : <input type="text" name="nom" id="nom" placeholder="Nom"/></tr></td>
			<tr><td><label for="prenom">Prénom</label> : <input type="text" name="prenom" id="prenom" placeholder="Prénom"/></tr></td>
			<tr><td><label for="mail">Adresse mail</label> : <input type="mail" name="mail" id="mail" placeholder="adresse@email.com"/></tr></td>
			<tr><td><label for="adresse">Telephone</label> : <input type="text" name="telephone" id="adresse" placeholder="07 77 77 77 77"/></tr></td>
			<tr><td><label for="postal">Adresse</label> : <input type="tel" name="adresse" id="postal" placeholder="35 rue du chateau 53600 trou-ville"/></tr></td>
			<tr><td><label for="mdp">Mot de passe</label> : <input type="password" name="mdp" id="mdp" placeholder="MotDePasse"/></tr></td>
			
		</table>
			<input type="reset" name="stop" value="Annuler" class="bouton"/>
			<input type="submit" name="valider" value="Inscription" class="bouton"/>
		
		
		</form>
		
				
	<footer>
		<em> Aide </em>
		<em> Nous contacter </em>
	</footer>
	
	</body>
</html>