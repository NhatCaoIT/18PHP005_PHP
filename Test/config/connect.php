<?php
    $db = mysqli_connect('localhost' , 'root' , '' , 'login_SS');
    if(mysqli_connect_errno()){
        echo('no conect').mysqli_connect_errno();
    }
   

?>