<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
        session_start();
        if(!isset($_SESSION['email'])){
            header('location:login.php');
        }
    ?>
    <h3> Wellcome <?php echo $_SESSION['email']  ?> too my website  </h3>
    <a href = 'logout.php' >Logout </a>
</body>
</html>