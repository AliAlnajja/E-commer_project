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
		$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\User");
		return $STMT->fetch();
	}
	
	function getWishList($user_id) {
		$SQL = 'SELECT * FROM wishlist JOIN items ON items.item_id = wishlist.item_id WHERE wishlist.user_id = :user_id';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$user_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Wishlist");
		return $STMT->fetchAll();
	}
	
	function insert() {
		$SQL = 'INSERT INTO wishlist(user_id, item_id, quantity) VALUES(:user_id, :item_id, :quantity)';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$this->user_id, 'item_id'=>$this->item_id, 'quantity'=>$this->quantity]);
	}
	
	function delete($item_id) {
		$SQL = 'DELETE FROM wishlist WHERE item_id = :item_id';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['item_id'=>$item_id]);
	}
}