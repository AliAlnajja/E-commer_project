<?php 
namespace app\controllers;

class User extends \app\core\Controller {

	function index() {
		$users = new \app\models\User();
		$data = $users->get($_SESSION['username']);
		$this->view('User/index', $data);
	}
	
	function login() {
		if (!isset($_POST['action'])) {
			$this->view('User/login');
		} else {
			$user = new \app\models\User();
			$user = $user->get($_POST['username']);
			if ($user != false) {
				if (password_verify($_POST['password'], $user->password_hash)) {
					$_SESSION['username'] = $user->username;
					$_SESSION['user_id'] = $user->user_id;
					header('location:/Main/index');
				} else {
					$this->view('User/login', 'Incorrect username/password combination.');
				}
			} else {
				$this->view('User/login', 'Incorrect username/password combination.');
			}
		}
	}
	
	function register() {
		if (!isset($_POST['action'])) {
			$this->view('User/register');
		} else {
			$newUser = new \app\models\User();
			$newUser->username = $_POST['username'];
			$newUser->email = $_POST['email'];
			$newUser->address = $_POST['address'];

			 if (!$newUser->exists() && $_POST['password'] == $_POST['password_confirm']) {
			 	$newUser->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
			 	$newUser->insert();
			 	header('location:/User/index');
			 } else {
				$this->view('User/register', 'The user account with that username already exists.');
			 }
		}
	}
	
	function update($user_id) {
		$users = new \app\models\User();
		$user = $users->get($user_id);
		
		if (!isset($_POST['action'])) {
			$this->view('User/update', $user);
		} else {
			$user->email = $_POST['email'];
			$user->address = $_POST['address'];
			$user->update();
			header('location:/User/index/');
		}
	}
	
	#[\app\filters\Login]
	function logout() {
		session_destroy();//deletes the session ID and all data
		header('location:/Main/index');
	}
}