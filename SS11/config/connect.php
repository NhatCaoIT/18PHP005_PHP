<?php
    class connectDB{
        var $sever = 'localhost';
        var $name = 'root';
        var $password= '';
        var $DB = '1805_mvc_oop';
        var $connect;
        public function connect(){
            $this->connect = mysqli_connect($this->sever , $this->name, $this->password,$this->DB);
            return $this->connect;
            if(mysqli_connect_errno()){
                echo'noconnect';
            }
            else{
                echo'ok';
            }
        }
    }
?>