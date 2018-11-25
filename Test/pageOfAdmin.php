<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php 
        if(!isset($_SESSION['email_Admin'])){
            header('location:admin.php');
        }
     ?>
    <h1> Wellcome: <?php echo $_SESSION['email_Admin'] ?> </h1>

    <div> <a href = 'logout.php'> logout_Admin </a> <div>
</body>
</html>