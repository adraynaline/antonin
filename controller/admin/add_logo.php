<?php
	include_once('model/admin/first.page.php');
	if(isset($_POST['photo'])){
		to_zero();
		add_logo($_POST['photo']);
		$reponse = 'ok';
	}
	else {
		$reponse = 'Erreur somewhere';
	}	

$array['reponse'] = $reponse;
echo json_encode($array);

?>