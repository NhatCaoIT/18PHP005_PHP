<?php 
	class User{
		var $name;
		var $username;
		var $password;
		public function add(){
			echo "Add user <br>";
		}
		public function edit(){
			echo "Edit user <br>";
		}
		public function view(){
			echo "View user <br>";
		}
		public function delete(){
			echo "Delete user <br>";
		}
		protected function changePassword(){
			echo "Change password user <br>";
		}
		protected function forgotPassword(){
			echo "Forgot password user <br>";
		}
	}
	$user = new User();
	$user->add();
	$user->edit();
	$user->view();
	$user->delete();
?>