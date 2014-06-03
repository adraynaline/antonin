<?php

if (isset($_POST['login']) && isset($_POST['password'])){

	include_once('model/admin/connect.php');
	$verif = connect($_POST['login'] , $_POST['password']);
	
	//include_once('view/home/content_accueil.php');
	//echo $verif;

	if($verif != 0){
		include_once('controller/admin/modele.php');

	}
	else {
		echo 'erreur';
	
	}

}
 


?>