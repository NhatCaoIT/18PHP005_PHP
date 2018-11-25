<?php
    include('connect.php');
    $id = $_GET['idDelete'];
    $sql = "DELETE FROM users WHERE ID = $id";
    mysqli_query($db , $sql);
    header('location:list.php');
?>