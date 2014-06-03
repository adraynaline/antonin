<?php 
if(isset($_SESSION['login'])){
	include_once('model/admin/index.php');
	$modele = show_cover();
	
	include_once('view/layout/header.admin.php');
	include_once('view/admin/modele.php');
	include_once('view/layout/footer.admin.php');
}
else {
	include_once('controller/admin/index.php');
}
 ?>