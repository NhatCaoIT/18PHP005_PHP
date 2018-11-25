<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./assets/css/main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1> ADD </h1>
    <form method = 'post' action = '#' enctype="multipart/form-data" >
    <div> Username : </div> <div> <input type = 'text' name = 'name' size = '40px'> </div>
    <div> Password :</div> <div> <input type = 'password' name = 'pass' size = '40px'></div>
    <div> Email :</div> <div> <input type = 'text' name = 'email' size = '40px'></div>
    <div>Image :</div> <div> <input type = 'FILE' name = 'image' > </div>
    <div> <input type = 'submit' name = 'add_user' value='add_user'> </div>
    </form>
</body>
</html>