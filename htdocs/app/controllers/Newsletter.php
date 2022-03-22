<?php
namespace app\controllers;

class Newsletter extends \app\core\Controller{

	public function index(){
		//default controller method according to the routing
		$mySubscribers = new \app\models\Newsletter();
		$subscribers = $mySubscribers->getAll();
		$this->view('Newsletter/index', $subscribers);
	}

	public function create(){
		$newsLetter = new \app\models\Newsletter();
		if(!isset($_POST['action'])){	//display he view if I don't submit the form
			$this->view('Newsletter/index');
		}
		else if (!filter_var($newsLetter->email=$_POST["email"], FILTER_VALIDATE_EMAIL)){
			header("location: /NewsLetter/index?err=email given is invalid");
		}

		else if ($newsLetter->getEmail($_POST['email'])) {
			header("location:/Newsletter/index?err=Subscriber already exists");
		}
		else {
			//process the data
			$newsLetter->first_name=$_POST['first_name'];
			$newsLetter->last_name=$_POST['last_name'];
			$newsLetter->email=$_POST['email'];
			$newsLetter->phone=$_POST['phone'];
			$newsLetter->insert();
			header("location:/Newsletter/index?msg=Thank you for subscrbing to our newsletter");
		}
	}

	public function delete($newsletter_id) {
		$newsLetter = new \app\models\Newsletter();
		if ($newsLetter->get($newsletter_id)) {
			$newsLetter->delete($newsletter_id);
			header("location:/Newsletter/index?msg=Unsubscribed");
		}

		else {
			echo "cant";
		}
	}
}

