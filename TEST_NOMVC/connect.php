<?php
    $db = mysqli_connect('localhost' , 'root' , '', 'Tets_home');
    if(mysqli_connect_errno()){
        echo('no connect');
    }
    else{
        echo('');
    }
?>