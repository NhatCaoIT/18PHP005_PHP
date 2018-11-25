<!DOCTYPE html>
<html>
<head>
	<title>My shop</title>
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
</head>
<body>
	<?php include 'controller/home_controller.php';?>
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="index.php?controller=news&action=listNews">News</a></li>
		<li><a href="index.php?controller=products&action=listProduct">Products</a></li>
	</ul>
	<?php 
		$handleRequest = new HomeController();
		$handleRequest->handleReqquest();
	?>
</body>
</html>