<?php
namespace app\controllers;

class Wishlist extends \app\core\Controller{
	public function index(){
		//default controller method according to the routing
		$wishlist = new \app\models\Wishlist();
		
		$data = $wishlist->getWishList($_SESSION['user_id']);
		$this->view('Wishlist/index', $data);
	}
	

}