<?php

/*$dns = 'mysql:host=mysql5-12.perso;dbname=lafourberie';
$utilisateur = 'lafourberie';
$mdp = 'tKRm99Uh';*/
$dns = 'mysql:host=localhost;dbname=antonin';
$utilisateur = 'root';
$mdp = 'root';

$options = array(
	PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

	$connexion = new PDO ($dns, $utilisateur, $mdp, $options);
?>

