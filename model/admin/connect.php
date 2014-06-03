<?php
function connect($login,$password)
{
	try
	{	
		global $connexion;
			
		$sql = $connexion->prepare('SELECT * FROM admin WHERE login = :login AND password = :password');

		$sql->bindValue(':login', $login, PDO::PARAM_STR);
		$sql->bindValue(':password', md5($password), PDO::PARAM_STR);
					
		$sql->execute();

		$verif_co = $sql->rowCount();

		if($verif_co != 0){
			$rows = $sql->fetchAll();
		
			foreach ($rows as $row) {
				$_SESSION["login"] = $row['login'];
				$_SESSION["password"] = $row['password'];
			}
		}
		
		
		
		return $verif_co;

		}
	catch(Exception $e)
	{
		echo "La requete n'a pas marché" ,$e->getMessage();
		die();
	}
}
?>