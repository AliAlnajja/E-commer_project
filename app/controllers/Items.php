<?php
namespace app\controllers;

class Items extends \app\core\Controller {
	
	public function index() {
		$item = new \app\models\Items();
		$items = $item->getAll();
		$this->view('Items/index', $items);
	}
    
	public function all() {
		$this->index();
	}
	
	public function lowPrice() {
		$item = new \app\models\Items();
		$items = $item->getLowestPrice();
		$this->view('Items/index', $items);
	}
	
	public function highPrice() {
		$item = new \app\models\Items();
		$items = $item->getHighestPrice();
		$this->view('Items/index', $items);
	}
	
	public function ascending() {
		$item = new \app\models\Items();
		$items = $item->getFromAlphabetAsc();
		$this->view('Items/index', $items);
	}
	
	public function descending() {
		$item = new \app\models\Items();
		$items = $item->getFromAlphabetDesc();
		$this->view('Items/index', $items);
	}
	
		
	public function lowRating() {
		$item = new \app\models\Items();
		$items = $item->getLowRated();
		$this->view('Items/index', $items);
	}
	
	public function highRating() {
		$item = new \app\models\Items();
		$items = $item->getHighRated();
		$this->view('Items/index', $items);
	}
	
	public function cateMeat() {
		$item = new \app\models\Items();
		$items = $item->getCategory("Meat");
		$this->view('Items/index', $items);
	}
	
	public function cateVegetable() {
		$item = new \app\models\Items();
		$items = $item->getCategory("Vegetable");
		$this->view('Items/index', $items);
	}
	
	public function cateBaked() {
		$item = new \app\models\Items();
		$items = $item->getCategory("Baked");
		$this->view('Items/index', $items);
	}
	
	public function cateUseless() {
		$item = new \app\models\Items();
		$items = $item->getCategory("Useless");
		$this->view('Items/index', $items);
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
		$wishlist->delete($_GET['item_id']);
		header('location:/Wishlist/index');
	}

	public function addToCart() {
		$sales_details = new \app\models\Sales_Details();
		$sales_details->item_id = $_GET['item_id'];
		$sales_details->quantity = 1;
		$sales_details->price = $_GET['price'];
		$sales_details->insert();
		header('location:/Items/index');
	}

	public function deleteFromCart() {
		$sales_details = new \app\models\Sales_Details();
		$sales_details->delete($_GET['item_id']);
		header('location:/Sales_Details/index');
	}
	
  	public function search() {
		$queries= $_POST['search'];
		$item = new \app\models\Items();
		$searchResult = $item->searchBar($queries);
		$this->view('Items/index', $searchResult);

  	public function search() {
		$queries= $_POST['search'];
		$item = new \app\models\Items();
		$searchResult = $item->searchBar($queries);
		$this->view('Items/index', $searchResult);

  	}	
	
  	public function checkOut() {
  		$sales_details = new \app\models\Sales_Details();
  		$sales_details->clearCart();
  		$this->view('Items/checkOut');
  	}
}

