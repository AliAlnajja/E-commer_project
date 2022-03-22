<?php
namespace app\controllers;

class Items extends \app\core\Controller {
	public function index() {
		$this->view('Items/index');
	}

	public function search() {
		$queries= $_POST['search'];
		$item = new \app\models\Items();
		$searchResult = $item->searchBar($queries);
		$this->view('Items/index', $searchResult);
	}
}

