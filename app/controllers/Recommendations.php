<?php
namespace app\controllers;

class Recommendations extends \app\core\Controller {
	
	public function index() {
		$recommendations = new \app\models\Recommendations();
		$items = new \app\models\Items();
		
		$recommendations = $recommendations->getAll();
		$data = array();
		foreach ($recommendations as $recommended) {
			$item = $items->get($recommended->item_id);
			array_push($data, $item);
		}
		
		$this->view('Recommendations/index', $data);
	}

	public function search() {
		$queries= $_POST['search'];
		$item = new \app\models\Items();
		$searchResult = $item->searchBar($queries);
		$this->view('Items/index', $searchResult);
  	}
}