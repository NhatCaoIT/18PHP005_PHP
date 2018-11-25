<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
</head>
<body>
    <h1> Resgister </h1>
     <form action = '' method = 'post'>
        <div>  Username : </div>  <input type = 'text' name = 'username' placeholder = 'username'>
        <div> Email : </div> <input type = 'text' name = 'email' placeholder = '@gmail.com...' >
        <div>  Password : </div><input type = 'password' name = 'password' placeholder = 'password'>
        <div> Confirm Password : </div> <input type = 'password' name = 'password_check' placeholder = 'confilm password'>
         <br> <br>
        <input type = 'submit' name = 'resgister' value = 'Resgister' >
    </form> <br>
   <?php 
    if(isset($_POST['resgister'])){
        include('config/connect.php');
        $name = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $passcheck = $_POST['password_check'];
        var_dump($passcheck);
        if($pass != $passcheck){
            echo('mat khau khong khop');
        }
        elseif($name =='' || $email = '' || $pass ==''){
            echo('ban phai nhap day du thong tin');     
        } 
        else{
            $qurey = mysqli_query($db , "INSERT INTO users(username , password , email) VALUE('$name' , '$pass' , '$email') ");
            echo("Dang ki thanh cong");
        }
    }
    ?><br>
    <a href ='login.php'> <h3> back to login </h3> </a>
</body>
</html>