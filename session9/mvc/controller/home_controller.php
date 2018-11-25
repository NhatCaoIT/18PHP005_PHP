<?php 
	include 'model/home_model.php';
	class HomeController {
		public function handleRequest() {
			$action = isset($_GET['action'])?$_GET['action']:'home';
			switch ($action) {
				case 'home':
					# code...
					break;
				case 'about':
					# code...
					// model xu ly du lieu
					$model = new HomeModel();
					$about = $model->getAboutUs();

					// goi view de do du lieu
					include 'views/about/about.php';
					break;
				case 'news':
					// model xu ly du lieu
					$model = new HomeModel();
					$news = $model->getNews();

					// goi view de do du lieu
					include 'views/news/news.php';
					break;
				case 'contact':
					# code...
					break;
				default:
					# code...
					break;
			}
		}
	}
?>