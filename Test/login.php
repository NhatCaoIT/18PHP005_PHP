<!-- <?php
	setcookie('email' , 'Email' , time() + 3600 ) ;
?> -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>LOGIN</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>
<body>
	<h3> LOGIN </h3>
	<form method = 'post' action = ''>
		<label> Email </label>
		<input type = 'text' name = 'email'>
		<label> Password </label>
		<input type = 'text' name = 'password'>
		<input type = 'submit' name = 'login' value = 'LOGIN'>
	</form> <br>

	<?php 
		include('config/connect.php');
		if(isset($_POST['login'])){
			session_start();
			$Email = $_POST['email'];
			$Password = $_POST['password'];
			$sql = "SELECT * FROM  users WHERE email ='$Email' and password ='$Password'";
			$query = mysqli_query($db , $sql);
			$row = mysqli_num_rows($query);
			if($row == 0){
				echo(' *Sai ten dang nhap hoac mat khau');
			}
			else{
				$_SESSION['email'] = $Email;
				header('location: index.php');
			}
			// var_dump($row);
			// var_dump($Email);
			// var_dump($Password);
		}
		
		?> <br>
	<a href = 'resgister.php' > <h4> Resgister new account </h4> </a> <br>
	<div><a href = 'admin.php'> <h3>Login with Admin </h3> </a> </div>

</body>
</html>