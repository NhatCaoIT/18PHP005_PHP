<?php 
	$server = 'localhost'; //$server = '127.0.0.1';
	$username = 'root';
	$password = ''; //$password = '';
	$database = 'login';
	$connect = mysqli_connect($server, $username, $password, $database);
	$sql = "SELECT * FROM listusers";
	$result = mysqli_query($connect, $sql);
	if($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			$ID = $row['ID'];
			echo $row['ID'].' - '.$row['Username'].' - '.$row['Password'];
			echo "<a href='delete_user.php?ID=$ID'>DELETE</a>";
			echo '<br>';
			
		}
	} else {
		echo "No user";
	}
?>