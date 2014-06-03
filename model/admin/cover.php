<?php 
	function add_cover($photo){
		global $connexion;
		$query = $connexion->prepare('INSERT INTO cover_pic (img, actif) VALUES (:photo,:actif)');
		$query->bindValue(':photo', $photo, PDO::PARAM_STR);
		$query->bindValue(':actif', '1', PDO::PARAM_STR);
		$query->execute();
	}
	function current_cover(){
		global $connexion;
		$query = $connexion->prepare('SELECT * FROM cover_pic WHERE actif = :actif');
		$query->bindValue(':actif', '1', PDO::PARAM_STR);
		$query->execute();
		$cover = $query->fetch();
		return $cover;
	}
	function to_zero(){
		global $connexion;
		$query = $connexion->prepare('UPDATE cover_pic SET actif = :actif WHERE actif = :zeroactif');
		$query->bindValue(':actif', '0',PDO::PARAM_INT);
		$query->bindValue(':zeroactif', '1', PDO::PARAM_INT);
		$query->execute();
	}


	
 ?>