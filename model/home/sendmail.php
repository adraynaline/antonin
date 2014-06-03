<?php

function sendmail($desti, $subject, $mess){
		// Préparation du mail contenant le lien d'activation
		$destinataire = 'infos@antoninguidicci.com';
		$sujet = $subject ;
		$entete = $desti ;
				
		// Le lien d'activation est composé du login(log) et de la clé(cle)
		$message = $mess;
		
		
		mail($destinataire, $sujet, $message, $entete);	
		
				
		
}