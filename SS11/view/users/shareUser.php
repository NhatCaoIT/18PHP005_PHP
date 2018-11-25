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
<form method = 'post'>
          <input type= 'text' name = 'share' size='15px' >
         <?php echo " <a href='./?controller=users&action=shareUsers&idShare=  '>
            <input type = 'submit' value = 'share' name = 'tim'>
          </a>" ?>
        </form>
</body>
</html>
