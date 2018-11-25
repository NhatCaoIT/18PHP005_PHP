<?php include('connect.php')?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Update_User</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
    $id = $_GET['Edit'];
    $sql = "SELECT * FROM users WHERE ID = $id";
    $query = mysqli_query($db , $sql);
    while($row = mysqli_fetch_array($query)){ ?>
    <form method = 'post'>
        <label >Username </label>
        <input type = 'text' name = 'username' value = <?php echo $row['Username'] ?> >
        <label >Password </label>
        <input type = 'text' name = 'password' value = <?php echo $row['Password'] ?> >
    <?php } ?>
        <input type = 'submit' value = Save name = 'Update'>
    </form>
</body>
</html>
<?php
 if(isset($_POST['Update'])){
     $id = $_GET['Edit'];
     $name = $_POST['username'];
     $pass = $_POST['password'];
    $sql = "UPDATE users SET Username ='$name' , Password ='$pass' WHERE ID = '$id' ";
    mysqli_query($db , $sql);
    header('location:list.php');
 }

?>