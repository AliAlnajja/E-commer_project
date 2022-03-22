<?php
namespace app\models;

class Recommendations extends \app\core\Model {

	function __construct() {
		parent::__construct();
	}

	function getAll(){
		$SQL = 'SELECT * FROM recommendations';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		//TODO:add something here to make the return types cooler
		$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Recommendations");
		return $STMT->fetchAll();
	}	
}