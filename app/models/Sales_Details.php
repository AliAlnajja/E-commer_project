<?php
namespace app\models;

class Sales_Details extends \app\core\Model {

	function __construct() {
		parent::__construct();
	}

	function getAll() {
		$SQL = 'SELECT * FROM sales_details';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Sales_Details");
		return $STMT->fetchAll();
	}	
	
	function get($item_id) {
		$SQL = 'SELECT * FROM sales_details WHERE item_id = :item_id';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['item_id'=>$item_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Sales_Details");
		return $STMT->fetchAll();
	}

	function delete($item_id) {
		$SQL = 'DELETE FROM sales_details WHERE item_id = :item_id';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['item_id'=>$item_id]);
	}

	function insert() {
		$SQL = 'INSERT INTO sales_details(item_id, quantity, price) VALUES(:item_id, :quantity, :price)';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['item_id'=>$this->item_id, 'quantity'=>$this->quantity, 'price'=>$this->price]);
	}
	
	function clearCart() {
		$SQL = 'DELETE FROM sales_details';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
	}
}