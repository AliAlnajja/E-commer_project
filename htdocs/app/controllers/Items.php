<?php
namespace app\controllers;

class Items extends \app\core\Controller{
	public function index(){
		//default controller method according to the routing
		$myitems = new \app\models\Items();
		$items = $myitems->getAll();
		$this->view('Items/index',$items);
	}

	public function search(){
		$queries= $_POST['search'];
		$item = new \app\models\Items();
		$searchResult = $item->searchBar($queries);
		$this->view('Items/index' , $searchResult);
	}
}

