<?php 
	function add_image($nom,$description, $photo, $photo_2){
		try {
		global $connexion;
		$query = $connexion->prepare('INSERT INTO modele (nom, description, image, min_img) VALUES (:nom, :description,:photo,:photo_2)');
		$query->bindValue(':nom', $nom, PDO::PARAM_STR);
		$query->bindValue(':description', $description, PDO::PARAM_STR);
		$query->bindValue(':photo', $photo, PDO::PARAM_STR);
		$query->bindValue(':photo_2', $photo_2, PDO::PARAM_STR);
		$query->execute();
	}
			catch(Exception $e)
	{
		echo "La requete n'a pas marché" ,$e->getMessage();
		die();
	}
		
	}

	function show_cover(){
		global $connexion;
		$query = $connexion->prepare('SELECT * FROM modele');
		$query->execute();
		$modele = $query->fetchAll();
		return $modele;
	}
	function delete_modele($id){
		global $connexion;
		$query = $connexion->prepare('DELETE FROM modele WHERE id = :del');
		$query->bindValue(':del', $id, PDO::PARAM_INT);
		$query->execute();
	}
 ?>