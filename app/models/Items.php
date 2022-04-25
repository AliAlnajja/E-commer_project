<?php
namespace app\models;

class Items extends \app\core\Model {

	function __construct() {
		parent::__construct();
	}

	function getAll() {
		$SQL = 'SELECT * FROM items';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Items");
		return $STMT->fetchAll();
	}

	function get($item_id) {
		$SQL = 'SELECT * FROM items WHERE item_id = :item_id';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['item_id'=>$item_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Items");
		return $STMT->fetch();
	}	
	function getPrice($item_id) {
		$SQL = 'SELECT price FROM items WHERE item_id = :item_id';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['item_id'=>$item_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Items");
		return $STMT->fetch();
	}	
	function getLowestPrice() {
		$SQL = 'SELECT * FROM items WHERE price BETWEEN 0 AND 2048 ORDER BY price ASC';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Items");
		return $STMT->fetchAll();
	}
	
	function getHighestPrice() {
		$SQL = 'SELECT * FROM items WHERE price BETWEEN 0 AND 2048 ORDER BY price DESC';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Items");
		return $STMT->fetchAll();
	}
	
	function getFromAlphabetAsc() {
		$SQL = 'SELECT * FROM items ORDER BY name ASC';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Items");
		return $STMT->fetchAll();
	}
	
	function getFromAlphabetDesc() {
		$SQL = 'SELECT * FROM items ORDER BY name DESC';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Items");
		return $STMT->fetchAll();
	}
	/*
	function getLowReviews(){
		$SQL = 'SELECT * FROM items ORDER BY name DESC';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Items");
		return $STMT->fetchAll();
	}
	
	function getHighReviews(){
		$SQL = 'SELECT * FROM items ORDER BY name DESC';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Items");
		return $STMT->fetchAll();
	}
	 */
	function getLowRated() {
		$SQL = 'SELECT * FROM items ORDER BY rating ASC';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Items");
		return $STMT->fetchAll();
	}
	
	function getHighRated() {
		$SQL = 'SELECT * FROM items ORDER BY rating DESC';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Items");
		return $STMT->fetchAll();
	}
	
	function getCategoryMeat() {
		$SQL = 'SELECT * FROM items WHERE category = "Meat"';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Items");
		return $STMT->fetchAll();
	}
	
	function getCategoryVege() {
		$SQL = 'SELECT * FROM items WHERE category = "Vegetable"';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Items");
		return $STMT->fetchAll();
	}
	
	function searchBar($text) {
        $SQL = "SELECT * FROM items WHERE (name LIKE :name)";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['name'=>"%$text%"]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Items");
        return $STMT->fetchAll();
    }
}