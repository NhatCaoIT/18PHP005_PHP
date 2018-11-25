<a href="index.php?action=home">Home</a>
| <a href="index.php?action=about">About</a>
| <a href="index.php?action=news">News</a>
| <a href="index.php?action=contact">Contact</a>
<?php 
	include 'controller/home_controller.php';
	// dieu huong thong tin
	$controller = new HomeController();
	$controller->handleRequest();
	
?>