<?php 
	$server = 'localhost'; //$server = '127.0.0.1';
	$username = 'root';
	$password = ''; //$password = '';
	$database = 'login';
	$connect = mysqli_connect($server, $username, $password, $database);
	// GET data from URL
	$ID = $_GET['ID'];
	$sql = "DELETE FROM listusers WHERE ID = $ID";
	mysqli_query($connect, $sql);
	// Redirect
	header("Location: list_user.php");
?>