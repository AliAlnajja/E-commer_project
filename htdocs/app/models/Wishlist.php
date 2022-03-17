<?php
namespace app\models;

class Wishlist extends \app\core\Model {

	function __construct() {
		parent::__construct();
	}

	function get($username) {
		$SQL = 'SELECT * FROM user WHERE username = :username';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['username'=>$username]);
		//TODO:add something here to make the return types cooler
		$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\User");
		return $STMT->fetch();
	}
	
	function getUsername($user_id) {
		$SQL = 'SELECT username FROM user WHERE user_id = :user_id';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$user_id]);
		//TODO:add something here to make the return types cooler
		$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\User");
		return $STMT->fetch();
	}
	
	function insert() {
		$SQL = 'INSERT INTO wishlist(user_id, item_id, quantity) VALUES(:user_id, :item_id, :quantity)';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$this->user_id, 'item_id'=>$this->item_id, 'quantity'=>$this->quantity]);
	}
	/*
	function update(){
		$SQL = 'UPDATE wishlist SET password = :password, email = :email, address = :address WHERE user_id = :user_id';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['password'=>$this->password, 'email'=>$this->email, 'address'=>$this->address, 'user_id'=>$this->user_id]);
	}
	
	function searchBar($text){
		echo "%$text%";
        $SQL = "SELECT * FROM items WHERE (name LIKE :name)";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['name'=>"%$text%"]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Items");
        return $STMT->fetchAll();
    }
	*/
}