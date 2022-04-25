<?php
namespace app\controllers;

class Sales_Details extends \app\core\Controller {
	
	public function index() {
		$Sales_Details = new \app\models\Sales_Details();
		$data = $Sales_Details->getAll();
		$this->view('Sales_Details/index', $data);
	}
	public function search() {
		$queries= $_POST['search'];
		$item = new \app\models\Items();
		$searchResult = $item->searchBar($queries);
		$this->view('Items/index', $searchResult);
  	}
}