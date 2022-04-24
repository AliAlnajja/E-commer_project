<?php 
namespace app\controllers;

class User extends \app\core\Controller {

	function index() {
		$users = new \app\models\User();
		$data = $users->getFromUserId($_SESSION['user_id']);
		$this->view('User/index', $data);
	}
	
	function login() {
		if (!isset($_POST['action'])) {
			$this->view('User/login');
		} else {
			$user = new \app\models\User();
			$user = $user->getFromUsername($_POST['username']);
			if ($user != false) {
				if (password_verify($_POST['password'], $user->password_hash)) {
					$_SESSION['username'] = $user->username;
					$_SESSION['user_id'] = $user->user_id;
					header('location:/Main/index');
				} else {
					$this->view('User/login', 'Incorrect username/password combination.');
					echo '<script>alert("Incorrect username/password combination")</script>';
				}
			} else {
				$this->view('User/login');
				echo '<script>alert("Incorrect username/password combination.")</script>';
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
			 	header('location:/User/login');
			} else {
				$this->view('User/register');
				echo '<script>alert("The user account with that username already exists.")</script>';
			}
		}
	}
	
	function update_details($user_id) {
		$users= new \app\models\User();
		$user = $users->getFromUserId($user_id);
		
		if (!isset($_POST['action'])) {
			$this->view('User/update_details', $user);
		} else {
			if (!$users->usedUsername($_POST['username'])) {
				$user->username = $_POST['username'];
				$user->email = $_POST['email'];
				$user->address = $_POST['address'];
				$user->updateDetails();
				header('location:/User/index');
			} else {
				$this->view('User/update_details', $user);
				echo '<script>alert("That username is already in use.")</script>';
			}
		}
	}
	
	function update_password($user_id) {
		$user = new \app\models\User();
		$user = $user->getFromUserId($user_id);
		
		if (!isset($_POST['action'])) {
			$this->view('User/update_password', $user);
		} else {
			if (password_verify($_POST['oldPassword'], $user->password_hash) && $_POST['newPassword'] == $_POST['confirm']) {
				$user->password_hash = password_hash($_POST['newPassword'], PASSWORD_DEFAULT);
				$user->updatePassword();
				header('location:/User/index');
			} else {
				$this->view('User/update_password', 'Incorrect password.');
				echo '<script>alert("Incorrect password.")</script>';
			}
		}
	}
	
	function remove_address($user_id) {
		$user = new \app\models\User();
		$user->removeAddress($user_id);
		header('location:/User/index');
	}
	
	#[\app\filters\Login]
	function logout() {
		session_destroy();//deletes the session ID and all data
		header('location:/Main/index');
	}
}