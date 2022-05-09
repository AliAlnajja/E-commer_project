<?php
namespace app\controllers;

class Main extends \app\core\Controller {
	
	public function index() {
		$this->view('Main/index');
	}

	// Use: /Default/makeQRCode?data=protocol://address
	public function makeQRCode(){
		$data = $_GET['data'];
		\QRcode::png($data);
	}

	
	#[\app\filters\Login]
public function setup2fa(){
 	if(isset($_POST['action'])){
 		$currentcode = $_POST['currentCode'];
 		if(\app\core\TokenAuth6238::verify(
 			$_SESSION['secretkey'],$currentcode)){
//the user has verified their proper 2-factor authentication setup
 			$user = new \App\models\User();
 			$user->user_id = $_SESSION['user_id'];
 			$user->secret_key = $_SESSION['secretkey'];
 			$user->update2fa();
 			header('location:'.BASE.'/Somewhere***');
 		}else{
 			header('location:'.BASE.'/Main/setup2fa?error=token
not verified!');//reload
 		}
 	}else{
 		$secretkey =
\app\core\TokenAuth6238::generateRandomClue();
 		$_SESSION['secretkey'] = $secretkey;
 		$url = \App\core\TokenAuth6238::getLocalCodeUrl(
 			$_SESSION['username'],
 			'Awesome.com',
 			$secretkey,
 			'Awesome App');
 		$this->view('Main/twofasetup', $url);
 		}
	}
}