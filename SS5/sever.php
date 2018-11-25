<?php
$id = 0;
 $sp = "";
 $gia ="";
 $hinhanh = "";
 $mota = "";
 $date = "";
    $db = mysqli_connect('localhost' , 'root', '' , 'Homeworks');

    if(isset($_POST['save'])){
        $sp = $_POST['SP'];
        $gia = $_POST['gia'];
        $mota = $_POST['mota'];
        $hinhanh = $_POST['hinhanh'];
        $date = $_POST['date'];

        $sql = " INSERT INTO Sanpham(SP , gia, mota, hinhanh , date) 
        VALUE('$sp', '$gia' , '$mota', '$hinhanh' , '$date')";
        mysqli_query($db , $sql);
        header('location:index.php');
    }

    $results = mysqli_query( $db, "SELECT * FROM Sanpham" );

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        mysqli_query($db , "DELETE FROM Sanpham WHERE ID =$id ");
        header('location:index.php');
    }
?>