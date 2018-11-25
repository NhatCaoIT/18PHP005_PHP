<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ADD_user</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1> ADD_User </h1>
    <form method = 'post' action =''>
        USERNAME:<input type='text' name = 'username' >
        PASS:<input type='text' name = 'pass'>
        <input type ='submit' name = 'add' value='ADD_user'>
    </form>
</body>
</html>
<?php
    if(isset($_POST['add'])){
        $name = $_POST['username'];
        $pass = $_POST['pass'];
        include('connect.php');
        $sql = "INSERT INTO users(Username , Password) VALUE('$name' , '$pass') ";
        $query = mysqli_query($db , $sql);
        header('location:list.php');
    }
?>