<?php
	function current_logo(){
		global $connexion;
		$query = $connexion->prepare('SELECT * FROM logo WHERE actif = :actif');
		$query->bindValue(':actif', '1', PDO::PARAM_STR);
		$query->execute();
		$logo = $query->fetch();
		return $logo;
	}