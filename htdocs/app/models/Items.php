<?php
namespace app\models;

class Items extends \app\core\Model {

	function __construct() {
		parent::__construct();
	}

	function getAll(){
		$SQL = 'SELECT * FROM items';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		//TODO:add something here to make the return types cooler
		$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Items");
		return $STMT->fetchAll();
	}
	function get($item_id){
		$SQL = 'SELECT * FROM items WHERE item_id = :item_id';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['item_id'=>$item_id]);
		//TODO:add something here to make the return types cooler
		$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Items");
		return $STMT->fetch();
	}

	function searchBar($text){
		echo "%$text%";
        $SQL = "SELECT * FROM items WHERE (name LIKE :name)";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['name'=>"%$text%"]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Items");
        return $STMT->fetchAll();
    }
	
}