<?php 
	$server = 'localhost'; //$server = '127.0.0.1';
	$username = 'root';
	$password = ''; //$password = '';
	$database = 'login';
	$connect = mysqli_connect($server, $username, $password, $database);
	if (mysqli_connect_errno()){
		echo "Connect error! ". mysqli_connect_error();
	} else {
		echo "Connect success!";
	}
	// demo
	$sql = "INSERT INTO listusers(Username, Password) 
	VALUES('TEST ok ok', 'testok@gmail.com')";
	mysqli_query($connect, $sql);
?> 