<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./assets/css/style1.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1> List User </h1>
    <table  border='1' style ='width:100%'>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Password</th>
            <th>Email</th>
            <th>Avatar</th>
            <th colspan = '2'>Action</th>
        </tr>
    <?php
        while($row = mysqli_fetch_array($query) ){ 
            
                $image = 'imageUp/'.$row['avatar'];
            ?>
                <tr>
                    <td><?php echo $row['ID'] ?></td>
                    <td><?php echo $row['username'] ?></td>
                    <td><?php echo $row['password'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo "<img src='$image'>" ?></td>
                    <td> <?php echo' <a href="./?controller=users&action=editUsers&idEdit='.$row['ID'].' " >  EDIT </a>'  ?> </td>
                    <td> <?php echo' <a href="./?controller=users&action=deleteUsers&idDel= '.$row['ID'].' "> DELETE</a>'  ?> </td>
                </tr>

       <?php } ?>
            </table>  <br>

            <h1> Ket qua tim kiem </h1>

            <table border ='1' style = 'width:100%'>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Image</th>
                </tr>
                <?php while($row = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                    <td><?php echo $row['ID'] ?></td>
                    <td><?php echo $row['username'] ?></td>
                    <td><?php echo $row['password'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo "<img src='$image'>" ?></td>
                    <td> <?php echo' <a href="./?controller=users&action=editUsers&idEdit='.$row['ID'].' " >  EDIT </a>'  ?> </td>
                    <td> <?php echo' <a href="./?controller=users&action=deleteUsers&idDel= '.$row['ID'].' "> DELETE</a>'  ?> </td>
                </tr>

                <?php } ?>
            </table>
      
        
</body>
</html>