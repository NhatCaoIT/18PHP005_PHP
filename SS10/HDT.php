<?php
    class user {
        var $name ;
        var $username ;
        var $password ;
        public function add(){
            echo 'adduser';
        }   
        public function edit(){
            echo 'edituser';
        }
        public function delete(){
            echo 'delete';
        }
        public function view(){
            echo 'show';
        }
        protected function changepassword(){
            echo 'change';
        }
        protected function forgotpassword(){
            echo 'forgot';
        }
    }
    class students extends user{
        var $IDstudents = '';

       public function add1(){
           echo "";
       }
       
    }
    $Students = new students;
    
    
?>