<?php 
function random_modele(){
	global $connexion;
	$query = $connexion->prepare('SELECT * FROM modele LIMIT 1');
	$query->execute();
	$modele = $query->fetch();

	return $modele;
}	
function other_one(){
	global $connexion;
	$query = $connexion->prepare('SELECT * FROM modele');
	$query->bindValue(':modele_full', $modele_full, PDO::PARAM_INT);
	$query->execute();
	$other_modele = $query->fetchAll();
	return $other_modele;
}
function others_one($modele_id){
	global $connexion;
	$query = $connexion->prepare('SELECT * FROM modele WHERE id != :modele_full');
	$query->bindValue(':modele_full', $modele_id, PDO::PARAM_INT);
	$query->execute();
	$others_modele = $query->fetchAll();
	return $others_modele;
}
function detail($modele_full){
	global $connexion;
	$query = $connexion->prepare('SELECT * FROM details WHERE id_modele = :modele');
	$query->bindValue(':modele', $modele_full, PDO::PARAM_INT);
	$query->execute();
	$details = $query->fetchAll();
	return $details;
}
function modele_select($modele_id){
	global $connexion;
	$query = $connexion->prepare('SELECT * FROM modele WHERE id = :modele');
	$query->bindValue(':modele',$modele_id,PDO::PARAM_INT);
	$query->execute();
	$modele_select = $query->fetch();
	return $modele_select;
}
function details_select($modele_id){
	global $connexion;
	$query = $connexion->prepare('SELECT * FROM details WHERE id_modele = :modele');
	$query->bindValue(':modele',$modele_id,PDO::PARAM_INT);
	$query->execute();
	$details_select = $query->fetchAll();
	return $details_select;
}
function current_cover(){
		global $connexion;
		$query = $connexion->prepare('SELECT * FROM cover_pic WHERE actif = :actif');
		$query->bindValue(':actif', '1', PDO::PARAM_STR);
		$query->execute();
		$cover = $query->fetch();
		return $cover;
	}
