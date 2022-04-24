<?php
namespace app\controllers;

class Sales_Details extends \app\core\Controller{
	public function index(){
		//default controller method according to the routing
		$Sales_Details = new \app\models\Sales_Details();
		$data = $Sales_Details->getAll();
		$this->view('Sales_Details/index', $data);
	}
}