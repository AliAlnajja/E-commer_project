<?php
namespace app\controllers;

class Wishlist extends \app\core\Controller{
	public function index(){
		//default controller method according to the routing
		$recommendations = new \app\models\Recommendations();
		$items = $recommendations->getAll();
		$this->view('Wishlist/index',$items);
	}
}