<?php
    class homecontroller{
        public function hanleRequest(){
            $controller = isset($_GET["controller"])?$_GET["controller"]:'home';
            $action = isset($_GET['action'])? $_GET["action"]:'home';
            if($controller == 'home'){
                switch($action){
                    case 'home': 
                    $homeInfo = new HomeModel();
                    $gethomepage = $homeInfo->getHomepage();
                    include 'views/home/homepage.php';
                    break;
                    case 'listhome':

                }
            }
            elseif($controller == 'news'){
                 switch($action){
                     case 'listNews' :
                        $newList = new NewsModel();
                        $getNewList = $newList->getNewsList();
                 }
            }
        }
    }
?>