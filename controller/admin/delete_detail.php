<?php 
	include_once('model/admin/details.php');
	if(isset($_POST['id'])){
		delete_detail($_POST['id']);
		$reponse = 'ok';
	}
	else {
		$reponse = 'Erreur somewhere';
	}	

$array['reponse'] = $reponse;
echo json_encode($array);

 ?>