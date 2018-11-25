<?php
    // include 'config/connect.php';
    class userModel extends connectDB{
        public $query;
        public function listUser(){
            $sql = "SELECT * FROM users";
            $this->query = mysqli_query($this->connect(),$sql);
            return $this->query;
        }
        public function addUser($username , $password,$email,$image){
            $sql = "INSERT INTO users(username,password , email , avatar)
            VALUE('$username' , '$password' , '$email' , '$image')";
            $this->query = mysqli_query($this->connect() , $sql);
            return $this->query;
        }
        public function getUser($id){
            $sql = "SELECT * FROM users WHERE ID = $id";
            $this->query = mysqli_query($this->connect() , $sql);
            return $this->query;
        }
        public function editUser($name, $pass , $email , $image, $id){
            $sql = "UPDATE users SET username = '$name', password = '$pass', email = '$email' ,avatar = '$image' WHERE ID =$id";
            $this->query = mysqli_query($this->connect(), $sql);
            return $this->query;
        }
        public function delUser($id){
            $sql = "DELETE FROM users WHERE ID = $id";
            $this->query = mysqli_query($this->connect(), $sql);
            return $this->query;
        }
        public function share($share){
            $sql = "SELECT * FROM users WHERE ID LIKE '%$share%'";
            $this->query = mysqli_query($this->connect() , $sql);
            return $this->query;
        }
    }

?>