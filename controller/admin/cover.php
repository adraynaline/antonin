<?php 
	include_once('model/admin/cover.php');
	$cover = current_cover();
	include_once('view/layout/header.admin.php');
	include_once('view/admin/cover.php');
	include_once('view/layout/footer.admin.php');
 ?>