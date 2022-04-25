<?php
namespace app\models;

class User extends \app\core\Model {

	function __construct() {
		parent::__construct();
	}

	function exists() {
		return $this->getFromUsername($this->username) != false;
	}
	
	function usedUsername($username) {
		$SQL = 'SELECT * FROM user WHERE username = :username';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['username'=>$username]);
		return $STMT->fetch() >= 1;
	}
	
	function getFromUsername($username) {
		$SQL = 'SELECT * FROM user WHERE username = :username';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['username'=>$username]);
		//TODO:add something here to make the return types cooler
		$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\User");
		return $STMT->fetch();
	}

	function getFromUserId($user_id) {
		$SQL = 'SELECT * FROM user WHERE user_id = :user_id';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$user_id]);
		//TODO:add something here to make the return types cooler
		$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\User");
		return $STMT->fetch();
	}
	
	function insert() {
		$SQL = 'INSERT INTO user(username, password_hash, email, address) VALUES(:username, :password_hash, :email, :address)';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['username'=>$this->username, 'password_hash'=>$this->password_hash, 'email'=>$this->email, 'address'=>$this->address]);
	}
	
	function updateDetails() {
		$SQL = 'UPDATE user SET username = :username, email = :email, address = :address WHERE user_id = :user_id';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['username'=>$this->username, 'email'=>$this->email, 'address'=>$this->address, 'user_id'=>$this->user_id]);
	}
	
	function updatePassword() {
		$SQL = 'UPDATE user SET password_hash = :password_hash WHERE user_id = :user_id';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['password_hash'=>$this->password_hash, 'user_id'=>$this->user_id]);
	}
	
	function removeAddress($user_id) {
		$SQL = 'UPDATE user SET address = NULL WHERE user_id = :user_id';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$user_id]);
	}
	
	function searchBar($text) {
		echo "%$text%";
        $SQL = "SELECT * FROM items WHERE (name LIKE :name)";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['name'=>"%$text%"]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Items");
        return $STMT->fetchAll();
    }
}
