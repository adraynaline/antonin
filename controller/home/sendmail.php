<?php
	include_once('model/home/sendmail.php');
	if(isset($_POST['destinataire'])){
		sendmail($_POST['destinataire'],$_POST['subject'],$_POST['message']);
		$reponse = 'ok';
	}
	else {
		$reponse = 'Erreur somewhere';
	}	

$array['reponse'] = $reponse;
echo json_encode($array);

?>