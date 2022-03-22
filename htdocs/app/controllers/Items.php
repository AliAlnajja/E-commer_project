<?php
namespace app\controllers;

class Items extends \app\core\Controller {
	public function index() {
		$this->view('Items/index');
	}
    
  	public function addToWishList() {
		$wishlist = new \app\models\Wishlist();
		$wishlist->user_id = $_SESSION['user_id'];
		$wishlist->item_id = $_GET['item_id'];
		$wishlist->quantity = 1;
		$wishlist->insert();
		header('location:/Items/index');
	}
	public function deleteFromWishList() {
		$wishlist = new \app\models\Wishlist();
		//$wishlist->user_id = $_SESSION['user_id'];
		//$wishlist->item_id = $_GET['item_id'];
		
		$wishlist->delete($_GET['item_id']);
		header('location:/Items/index');
	}

  
}

