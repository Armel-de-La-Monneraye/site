<?php
	$bdd = new PDO('mysql:host=localhost;dbname=site internet;charset=utf8', 'root', '');
	
	$mail = $_POST['mail'];
	$mdp = $_POST['mdp'];
	$reponse = $bdd->prepare('SELECT password FROM member WHERE email = ?');
	$reponse->execute(array($mail));
	$password = $reponse->fetch();	
	
	if(password_verify($mdp, $password['password'])){
		echo 'Vous êtes bien connecté';		
	}else{
		echo 'Mot de passe incorrect';
	}
?>