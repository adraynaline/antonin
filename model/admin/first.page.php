<?php 
	function add_logo($photo){
		global $connexion;
		$query = $connexion->prepare('INSERT INTO logo (photo, actif) VALUES (:photo,:actif)');
		$query->bindValue(':photo', $photo, PDO::PARAM_STR);
		$query->bindValue(':actif', '1', PDO::PARAM_STR);
		$query->execute();
	}
	function current_logo(){
		global $connexion;
		$query = $connexion->prepare('SELECT * FROM logo WHERE actif = :actif');
		$query->bindValue(':actif', '1', PDO::PARAM_STR);
		$query->execute();
		$logo = $query->fetch();
		return $logo;
	}
	function to_zero(){
		global $connexion;
		$query = $connexion->prepare('UPDATE logo SET actif = :actif WHERE actif = :zeroactif');
		$query->bindValue(':actif', '0',PDO::PARAM_INT);
		$query->bindValue(':zeroactif', '1', PDO::PARAM_INT);
		$query->execute();
	}


	
 ?>