<!DOCTYPE html>
<html>
<head>
	<title>Add user - Session 4</title>
</head>
<body>
	<?php 
		$server = 'localhost'; //$server = '127.0.0.1';
		$username = 'root';
		$password = ''; //$password = '';
		$database = 'login';
		$connect = mysqli_connect($server, $username, $password, $database);
		// Khoi tao 2 bien loi bang "";
		$errName = "";
		$errEmail = "";
		$name = "";
		$email = "";
		$register = '';
		$check = true;
		// Neu chua submit thi k vao duoc cau lenh if nay
		if(isset($_POST['add_user'])){
			$Username  = $_POST['Username'];
			$Password = $_POST['Password'];
			if($Username == "") {
				$check = false;
				$errName = "Please input your name";
			} else {
				$errName = "";
			}
			if($Password == "") {
				$check = false;
				$errEmail = "Please input your pass";
			} else {
				$errEmail = "";
			}
			// if($name != '' && $email != '') {
			// 	$register = 'Register success!';
			// }
			if($check) {
				$register = 'Register success!';
				$sql = "INSERT INTO listusers(Username, Password) 
				VALUES('$Username', '$Password')";
				mysqli_query($connect, $sql);
			}
		}
	?>
	<p><?php echo $register?></p>
	<form name="AddUser" action="#" method="post">
		<p>Name:<input type="text" name="Username" value="<?php echo $Username;?>"></p>
		<span><?php echo $errName;?></span>
		<p>Pass:<input type="text" name="Password" value="<?php echo $Password;?>"></p>
		<span><?php echo $errEmail;?></span>
		<p><input type="submit" name="add_user" value="ADD USER"></p>
	</form>
</body>
</html>