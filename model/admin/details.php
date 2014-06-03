<?php 
	function show_details_model($modele){
		global $connexion;
		$query = $connexion->prepare('SELECT * FROM details WHERE id_modele = :modele');
		$query->bindValue(':modele', $modele, PDO::PARAM_STR);
		$query->execute();
		$details = $query->fetchAll();
		return $details;
	}
	function add_detail($modele, $description, $photo){
		global $connexion;
		$query = $connexion->prepare('INSERT INTO details (id_modele, description, image_detail) VALUES (:modele, :description, :photo)');
		$query->bindValue(':modele', $modele, PDO::PARAM_INT);
		$query->bindValue(':description', $description, PDO::PARAM_STR);
		$query->bindValue(':photo', $photo, PDO::PARAM_STR);
		$query->execute();

	}
	function delete_detail($id){
		global $connexion;
		$query = $connexion->prepare('DELETE FROM details WHERE id = :del');
		$query->bindValue(':del', $id, PDO::PARAM_INT);
		$query->execute();
	}
 ?>