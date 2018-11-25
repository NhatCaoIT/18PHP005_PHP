<?php
class connectDB {
    var $connect;
    var $sever = 'localhost';
    var $username = 'root';
    var $password = '';
    var $db = '';
    function connect(){
        $this->connect = mysqli_connect($this->sever , $this->username , $this->password, $this->db);
        return $this->connect;
    }
}

?>