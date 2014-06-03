<?php
	include_once('model/admin/details.php');
	if(isset($_POST['photo'])){
		add_detail($_POST['modele'],$_POST['description'],$_POST['photo']);
		$reponse = 'ok';
	}
	else {
		$reponse = 'Erreur somewhere';
	}	

$array['reponse'] = $reponse;
echo json_encode($array);

?>