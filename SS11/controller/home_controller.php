<?php
    include 'config/connect.php';
    include 'model/userModel.php';
    include 'model/productsModel.php';
    class Homecontroller{
        public function handleRequest(){
            $controller = isset($_GET['controller'])?$_GET['controller']:'home';
            $action = isset($_GET['action'])?$_GET['action']:'home';
            if($controller == 'home') {
                echo('HomePage');
            }
            elseif($controller == 'users'){
                $user = new userModel();
                switch($action){
                    //
                    case 'addUsers':
                    include './view/users/addUsers.php' ;
                    if(isset($_POST['add_user'])){
                        $username = $_POST['name'];
                        $password = $_POST['pass'];
                        $email = $_POST['email'];
                        $save = 'imageUp/';
                        $imageUpload = $_FILES['image'];
                        $image = uniqid().'-'.$imageUpload['name'];
                        move_uploaded_file($imageUpload['tmp_name'], $save.$image);

                        if($username=='' || $password =='' || $email == '' ||$image ==''){
                            echo'Nhap day du thong tin di!';
                        }
                        else{
                            $user->addUser($username, $password , $email , $image);
                            header("location:index.php?controller=users&action=listUsers")  ;
                            // var_dump($username); 
                            // var_dump($image);
                            // var_dump($_FILES['image']);
                        }
                    }
                    break; 
                    //
                    case 'listUsers' :
                    $query = $user->listUser();
                    include './view/users/listUser.php';
                    break;
                    //
                    case 'editUsers' :
                    $id= isset($_GET['idEdit'])?$id = $_GET['idEdit']:'0';
                    $query = $user->getUser($id);
                    while( $rows = mysqli_fetch_array($query)){
                        $imageEdit = 'imageUp/'.$rows['avatar'];
                        $image = $rows['avatar'];
                        $name = $rows['username'];
                        $pass = $rows['password'];
                        $email = $rows['email'];
                    }
                    include './view/users/editUser.php';
                    if(isset($_POST['update'])){
                        $id = $_GET['idEdit'];
                        $name = $_POST['name'];
                        $pass = $_POST['pass'];
                        $email = $_POST['email'];
                        $imageUpload = $_FILES['image'];
                        if(!$imageUpload['error']){
                            $imageName = uniqid().'-'.$imageUpload['name'];
                            $save = 'imageUp/';
                            move_uploaded_file($imageUpload['tmp_name'], $save.$imageName);
                            $image = $imageName;
                            unlink($imageEdit);          
                        }
                        $query = $user->editUser($name, $pass , $email , $image,$id);
                        header('location: index.php?controller=users&action=listUsers');
                        
                        
                    }
                    break;
                    //
                    case 'deleteUsers' :
                        $id = isset($_GET['idDel'])?$id = $_GET['idDel']:'0';
                        $query = $user->delUser($id);
                        header('location: index.php?controller=users&action=listUsers');
                        break;
                    //
                    case 'shareUsers' :                  
                        include './index.php';                   
                        if(isset($_POST['share'])){
                            $share = $_POST['id'];
                            $query = $user->share($share);
                            header('location: index.php?controller=users&action=shareUsers');
                        }
                }
            }
            elseif($controller == 'products'){
                switch($action){
                    case 'addProducts' :

                }
            }
        }
            // $users = new userModel();
            // if(isset($_POST['share'])){
            //     $id = $_POST['id'];
            //     $query = $user->share($id);
            //     include './view/users/shareUser.php';

            // }
        
    }
?>