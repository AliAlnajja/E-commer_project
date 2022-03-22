<?php
namespace app\controllers;

class Contact extends \app\core\Controller{

	public function index(){
		//default controller method according to the routing
		
		$this->view('Contact/index');
	}
}