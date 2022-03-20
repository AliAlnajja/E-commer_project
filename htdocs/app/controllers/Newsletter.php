<?php
namespace app\controllers;

class Newsletter extends \app\core\Controller{
	public function index(){
		//default controller method according to the routing
		
		$this->view('Newsletter/index');
	}

	public function create(){
		if(!isset($_POST['action'])){	//display he view if I don't submit the form
			$this->view('Newsletter/index');
		}
		else if (!filter_var($_POST['email']), FILTER_VALIDATE_EMAIL)){
			header("location: /NewsLetter/index?err=email given is invalid");
		}	
		else {
			//process the data
			$newsLetter = new \app\models\Newsletter();
			$newsLetter->first_name=$_POST['first_name'];
			$newsLetter->last_name=$_POST['last_name'];
			$newsLetter->email=$_POST['email'];
			$newsLetter->phone=$_POST['phone'];
			$newsLetter->insert();
			header("location:/Newsletter/index?msg=Thank you for subscrbing to our newsletter");
		}
	}
}