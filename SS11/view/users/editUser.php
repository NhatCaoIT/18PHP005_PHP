<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style1.css" />
    <script src="main.js"></script>
</head>
<body> 
    <div class='table'>
        <div id='main'>
         <h1> Change Profile </h1>
       
            <form action = '' method = 'post' enctype="multipart/form-data">
                <div> Username : </div>
                <div> <input type='text' name = 'name' size ='30px' value = <?php echo $name ?> > </div>
                <div> Password </div>
                <div> <input type='password' name = 'pass' size ='30px' value = <?php echo $pass ?>> </div>
                <div> Email </div>
                <div> <input type='text' name = 'email' size ='30px' value = <?php echo $email ?>> </div>
                <div> Avatar </div>
                <div > <input type='file' name = "image"> </div>
                <div> <img src = "<?php echo $imageEdit ?>"  > </div>
                <div> <input type='submit' name = 'update' value = 'Update'> </div>
            
            </form>
        </div>
    </div>    
        
</body>
</html>