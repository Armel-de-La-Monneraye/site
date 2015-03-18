<?php
// Connexion à la base de données

$bdd = new PDO('mysql:host=localhost;dbname=site internet;charset=utf8', 'root', '');


$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mail = $_POST['mail'];
$telephone = $_POST['telephone'];
$adresse = $_POST['adresse'];
$mdp = $_POST['mdp'];
if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
	if(empty($nom) || empty($prenom) || empty($mail) || empty($telephone) || empty($adresse) || empty($mdp)){
		header('Location: formulaire.php');
	}
	else{
	$bdd->exec("INSERT INTO member VALUES( '', '$nom', '$prenom', '$mail', '$telephone', '$adresse', '$mdp', '', '')");
	header('Location: site.php');
	}
}else{header('Location: formulaire.php');}



?>