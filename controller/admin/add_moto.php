<?php
	include_once('model/admin/index.php');
	if(isset($_POST['photo'])){
		add_image($_POST['nom'],$_POST['description'],$_POST['photo'],$_POST['photo_2']);
		$reponse = 'ok';
	}
	else {
		$reponse = 'Erreur somewhere';
	}	

$array['reponse'] = $reponse;
echo json_encode($array);

?>