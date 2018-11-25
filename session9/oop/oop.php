<?php
	class User {
		var $username;
		var $password;
		protected function addUser() {
			echo "My name";
		}

		private function editUser() {
			echo "Edit my name";
		}

		public function addMoreUser() {
			$this->addUser();
		}
		public function editMoreUser() {
			echo "abc<br>";
			$this->editUser();

		}
		public function deleteUser(){
			echo "Delete user";
		}
	}
	// ke thua
	class Student extends User {
		public function addStudent() {
			$this->addUser();
		}
		public function editMoreStudent() {
			echo "<br>student <br>";
			$this->editUser();
		}
		public function deleteUser() {
			echo "delete student";
		}
	}

	// class Product {

	// }

	// dong goi
	// public, protected, private

	$user = new User();
	$user->addMoreUser();
	//$user->addUser();
	$user->editMoreUser();

	$student = new Student();
	$student->addStudent();
	//$student->editMoreStudent();

	//var $name;
	echo "<br>----------<br>";
	$student->deleteUser();

?>