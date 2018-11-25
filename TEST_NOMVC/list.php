<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LIST_USER</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script src="main.js"></script>
</head>
<body id = 'main'>
    <div id=table>
    <h1>List Users</h1>
    <form method='post' Action=''>
        <input type='text' name='nameId' size = '25px' placeholder='nhập ID'>
        <input type='submit' name='Share' value='Share' id='button'>
    <form> <br> <br>
    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Password</th>
            <th colspan = "2">Action</th>
        </tr>
        <?php 
            include('connect.php');
            $query = mysqli_query($db ,"SELECT * FROM users" );
            while($row = mysqli_fetch_array($query)){
             ?>
            <tr>
                <td> <?php echo($row['ID']) ?></td>
                <td> <?php echo($row['Username']) ?> </td>
                <td> <?php echo($row['Password']) ?> </td>
                <td> <a href = "delete.php?idDelete= <?php echo ($row['ID']) ?>"> Delete </a> </td>
                <td> <a href = "update.php?Edit= <?php echo ($row['ID']) ?>"> Update </a> </td>
            </tr>
        <?php } ?>

    </table> <br>
    <a href = 'add.php'> <input type = 'button' value = 'Add_User' id = 'button'> </a> <br> <br>
    <!-- khi click tim kiem --> 
    <?php 
        if(isset($_POST['Share'])){
            echo('Kết quả tìm kiếm :');
            include('connect.php');
            $id = $_POST['nameId'] ;
            $results = mysqli_query($db , "SELECT * FROM users WHERE ID = $id");
            // var_dump($id);              
            while($rows = mysqli_fetch_array($results)){ ?>
                <!-- bang de show ra thong tin tim kiem -->
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th colspan = "2">Action</th>
                    </tr>
                    <tr>
                        <td> <?php echo($rows['ID']) ?></td>
                        <td> <?php echo($rows['Username']) ?> </td>
                        <td> <?php echo($rows['Password']) ?> </td>
                        <td> <a href = "delete.php?idDelete= <?php echo ($rows['ID']) ?>"> Delete </a> </td>
                        <td> <a href = "update.php?Edit= <?php echo ($rows['ID']) ?>"> Update </a> </td>
                    </tr>
            <?php }?>
        <?php } ?>
                </table>
    </div>
</body>
</html>
