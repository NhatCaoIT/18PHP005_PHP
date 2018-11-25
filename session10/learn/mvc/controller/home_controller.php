<?php 
	include 'model/home_model.php';
	include 'model/news_model.php';
	class HomeController {
		//public function xulyYeucau();
		public function handleReqquest() {
			$controller = isset($_GET['controller'])?$_GET['controller']:'home';
			$action = isset($_GET['action'])?$_GET['action']:'home';
			if ($controller == 'home') {
				switch ($action) {
					case 'home':
						// lay thong tin trang chu
						// Model lay thong tin trang chu
						$homeInfo = new HomeModel();
						$getHomepage = $homeInfo->getHomepage();
						//Do du lieu ra views
						include 'views/home/homepage.php';
						break;
					case 'listHome':
						# code...
						break; 
					default:
						# code...
						break;
				}
			} elseif($controller == 'news') {
				switch ($action) {
					case 'listNews':
						# code...
						// lay thong tin trang danh sach news
						// Model lay thong tin trang danh sach news
						$newsList = new NewsModel();
						$getNewsList = $newsList->getNewsList();
						//Do du lieu ra views
						include 'views/news/getNewsList.php';
						break;
					case 'newsDetail':
						# code...
						$newsID = $_GET['id'];
						$newsList = new NewsModel();
						$getNewsDetail = $newsList->getNewsDetail($newsID);
						//Do du lieu ra views
						include 'views/news/getNewsDetail.php';
						break;
					default:
						# code...
						break;
				}
			} elseif($controller == 'products') {
				switch ($action) {
					case 'listProducts':
						# code...
						break;
					case 'productDetail':
						# code...
						break;
					default:
						# code...
						break;
				}
			}
		}
	}
?>