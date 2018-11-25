<?php
    $id = $_GET['edit'];
    $db = mysqli_connect('localhost' , 'root', '', 'Homeworks');       
    $sql = ( "SELECT * FROM Sanpham WHERE ID = $id");
    mysqli_query($db,  $sql);
    $resultss = mysqli_query($db , $sql);
   
    if(isset($_POST['Update'])){
           
        $id = $_GET['edit'];
        $sp = $_POST['SP'];
        $gia = $_POST['gia'];
        $mota = $_POST['mota'];
        // $hinhanh = $_POST['hinhanh'];
        // $date = $_POST['date'];
        $sqli = "UPDATE Sanpham SET SP = '$sp' , gia = '$gia' , mota = '$mota'  WHERE ID = '$id' ";
        $results = mysqli_query($db , $sqli);
        if(!$results){
            echo('Update ko thanh cong');
        }  
        header('location:index.php');
        var_dump($sp);
        var_dump($id);
        if(mysqli_connect_errno()){
            echo('no connect');
        }
        else{
            echo(' update ok nha');
        }
    }   
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>
<body>
<form method = "POST" action = "">
    <?php while ($row = mysqli_fetch_array($resultss)){ ?>
        <div>
            <label>TenSP :</label>
            <input type = "text" name = "SP" value = " <?php echo $row['SP'] ?>" >
        </div>

        <div>
            <label>Gia :</label>
            <input type = "text" name = "gia" value = " <?php echo $row['gia'] ?>" >
        </div>
        <div>
            <label>Mo Ta :</label>
            <input type = "text" name = "mota" value = " <?php echo $row['mota'] ?>" >
        </div>
        <div>
            <label>Hinh anh :</label>
            <input type = "text" name = "hinhanh" value = " <?php echo $row['hinhanh'] ?>" >
        </div>
        <div>
            <label>Ngay tao :</label>
            <input type = "date" name = "date" value = " <?php echo $row['date'] ?>">
        </div>
        <div>
            <input type = "submit" name = "Update" value = 'Update'>;
        </div>
    <?php } ?>;
        </form>
</body>
</html>