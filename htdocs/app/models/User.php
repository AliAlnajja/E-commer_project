<?php
namespace app\models;

class User extends \app\core\Model {

	function __construct() {
		parent::__construct();
	}

	function exists() { //returns false if the record does not exist and true otherwise
		return $this->get($this->username) != false;
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
		$SQL = 'INSERT INTO user(username, password_hash, email, address) VALUES(:username, :password_hash, :email, :address)';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['username'=>$this->username, 'password_hash'=>$this->password_hash, 'email'=>$this->email, 'address'=>$this->address]);
	}

	function update(){
		$SQL = 'UPDATE user SET password = :password, email = :email, address = :address WHERE user_id = :user_id';
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
	
}