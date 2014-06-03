<?php 
	include_once('model/admin/index.php');
	if(isset($_POST['id'])){
		delete_modele($_POST['id']);
		$reponse = 'ok';
	}
	else {
		$reponse = 'Erreur somewhere';
	}	

$array['reponse'] = $reponse;
echo json_encode($array);

 ?>