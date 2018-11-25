<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LoginWithAdmin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<h3> LOGIN_ADMIN </h3>
	<form method = 'post' action = ''>
		<label> Email </label>
		<input type = 'text' name = 'email' >
		<label> Password </label>
		<input type = 'text' name = 'password'>
		<input type = 'submit' name = 'login' value = 'LOGIN'>
	</form> <br>

	<?php 
		include('config/connect.php');
		if(isset($_POST['login'])){
			$Email = $_POST['email'];
			$Password = $_POST['password'];
			$sql = "SELECT * FROM  admin WHERE email ='$Email' and password ='$Password'";
			$query = mysqli_query($db , $sql);
			$row = mysqli_num_rows($query);
			if($row == 0){
				echo(' *Sai ten dang nhap hoac mat khau');
			}
			else{
				$_SESSION['email_Admin'] = $Email;
				header('location: pageOfAdmin.php');
			}
			// var_dump($row);
			// var_dump($Email);
			// var_dump($Password);
		} ?> <br>
        <a href = 'login.php' > back </a>
</body>
</html>