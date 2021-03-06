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

					if ($user->secret_key != null) 
						header('location:/User/validate2fa');
					
					else
						header('location:/User/setup2fa');

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
	
	function update_details() {
		$users= new \app\models\User();
		$user = $users->getFromUserId($_SESSION['user_id']);
		
		if (!isset($_POST['action'])) {
			$this->view('User/update_details', $user);
		} else {
			if (!$users->usedUsernameForUpdate($_POST['username'], $_SESSION['user_id'])) {
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
	
	function update_password() {
		$user = new \app\models\User();
		$user = $user->getFromUserId($_SESSION['user_id']);
		
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
	
	function remove_address() {
		$user = new \app\models\User();
		$user->removeAddress($_SESSION['user_id']);
		header('location:/User/index');
	}
	
	#[\app\filters\Login]
	function logout() {
		session_destroy();
		header('location:/Main/index');
	}

	// Use: /Default/makeQRCode?data=protocol://address
	public function makeQRCode(){
		$data = $_GET['data'];
		\QRcode::png($data);
	}

	public function setup2fa(){
		if (isset($_POST['action'])) {
			$currentcode = $_POST['currentCode'];
			if (\App\core\TokenAuth6238::verify($_SESSION['secretkey'], $currentcode)) {
				//the user has verified their proper 2-factor authentication setup
				$user = new \app\models\User();
				$user = $user->getFromUsername($_SESSION['username']);
				$user->secret_key = $_SESSION['secretkey'];
				$user->update2fa();
				header("location:/Main/index/");
			}
			else {
				header('location:/User/setup2fa?error=tokennot verified!');//reload
			}
		} elseif (isset($_POST['cancel'])) {
			$_SESSION['secretkey'] = "empty";
			// here we can check if a seller or consumer exists for given account and if not, redirect to seller/consumer page to put details
			$user = new \app\models\User();
			$user = $user->get($_SESSION['username']);
			header("location:/Main/index/");
		}
		else {
			$secretkey = \app\core\TokenAuth6238::generateRandomClue();
			$_SESSION['secretkey'] = $secretkey;
			$url = \App\core\TokenAuth6238::getLocalCodeUrl($_SESSION['username'], 'Awesome.com', $secretkey,'My Application');
			$this->view('User/twofasetup', $url);
		}
	}

	public function validate2FA() {
		if (isset($_POST['action'])) {
			$code = $_POST['code'];
			$user = new \app\models\User();
			$user = $user->getFromUsername($_SESSION['username']);
			$secret = $user->secret_key;
			if (\App\core\TokenAuth6238::verify($secret, $code)) {
				$_SESSION['secretkey'] = $secret;
				header("location:/Main/index/");

			}
			else
				$this->view('User/validate2fa','Invalid code. Please re-enter.');
		}
		else
			$this->view('User/validate2fa');	
	}

}