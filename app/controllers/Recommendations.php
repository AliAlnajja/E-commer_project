<?php
namespace app\controllers;

class Recommendations extends \app\core\Controller{
	public function index() {
		$recommendations = new \app\models\Recommendations();
		$items = $recommendations->getAll();
		$this->view('Recommendations/index',$items);
	}

	public function search() {
		$queries= $_POST['search'];
		$item = new \app\models\Items();
		$searchResult = $item->searchBar($queries);
		$this->view('Items/index', $searchResult);
  	}
}