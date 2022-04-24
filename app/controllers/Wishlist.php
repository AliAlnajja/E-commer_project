<?php
namespace app\controllers;

class Wishlist extends \app\core\Controller{
	public function index(){
		$wishlist = new \app\models\Wishlist();
		$data = $wishlist->getWishList($_SESSION['user_id']);
		$this->view('Wishlist/index', $data);
	}
}