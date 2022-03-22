<?php
namespace app\controllers;

class Recommendations extends \app\core\Controller{
	public function index(){
		//default controller method according to the routing
		$recommendations = new \app\models\Recommendations();
		$items = $recommendations->getAll();
		$this->view('Recommendations/index',$items);
	}

}