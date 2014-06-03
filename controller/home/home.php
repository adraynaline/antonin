<?php 
	include_once('model/home/home.php');
	$modele_id = $_GET['modele'];

	$modele = random_modele();
	$cover = current_cover();
	$modele_full =  $modele['id']; 
    $other_modele = other_one($modele_full);  
    $details = detail($modele_full);
    $modele_select = modele_select($modele_id);
    $details_select = details_select($modele_id);
	include_once('view/layout/header.home.php');
	include_once('view/home/home.php');
	include_once('view/layout/footer.home.php');
 ?>