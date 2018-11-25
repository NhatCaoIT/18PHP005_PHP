<?php 
	class NewsModel {
		public function getNewsList() {
			$newsList = "News list info";
			return $newsList;
		}
		public function getNewsDetail($newsID) {
			$newsDetail = "News detail info $newsID";
			return $newsDetail;
		}
	}
?>