<html>
<head>
	<meta charset="utf-8">
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="assets/css/admin.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.css">
</head>
<body>
	<?php if(!isset($_SESSION['login'])){ ?>
	<header>
		<p>Administration</p>
	</header>
	<?php } else { ?>
	<header>
		<ul>
			<li><a href="?appli=admin&action=cover">Cover</a></li>
			<li><a href="?appli=admin&action=modele">Modele</a></li>
			<li>Logout</a></li>
		</ul>
		<p>Administration</p>
		
		<div class="clear"></div>
	</header>	
	<?php } ?>
	
