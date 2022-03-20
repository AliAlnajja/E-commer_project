<?php
namespace app\models;

class Newsletter extends \app\core\Model {

	function __construct() {
		parent::__construct();
	}

	function getAll(){
		$SQL = 'SELECT * FROM newsletter';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		//TODO:add something here to make the return types cooler
		$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Newsletter");
		return $STMT->fetchAll();
	}
	
	function insert(){
		$SQL = 'INSERT INTO newsletter(first_name,last_name,email,phone) VALUES(:first_name,:last_name,:email,:phone)';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['first_name'=>$this->first_name,'last_name'=>$this->last_name,'email'=>$this->email,'phone'=>$this->phone]);
	}

	function delete($newsletter_id){
		$SQL = 'DELETE FROM newsletter WHERE newsletter_id = :newsletter_id';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['newsletter_id'=>$newsletter_id]);
	}
}