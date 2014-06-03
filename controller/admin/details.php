<?php 
	$modele = $_GET['modele'];
	include_once('model/admin/details.php');
	$details = show_details_model($modele);
	include_once('view/layout/header.admin.php');
	include_once('view/admin/details.php');
	include_once('view/layout/footer.admin.php');

 ?>