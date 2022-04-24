<?php
namespace app\controllers;

class Recommendations extends \app\core\Controller{
	public function index() {
		$recommendations = new \app\models\Recommendations();
		$items = $recommendations->getAll();
		$this->view('Recommendations/index',$items);
	}
}