<?php
namespace app\filters;

#[\Attribute]
class Create{

	function execute() {
		$profile = new \app\models\Profile();
		$user_id = $_SESSION['user_id'];
		$profile_id = $profile->getProfileId($user_id);
		
		if (!isset($profile_id)) {
			header('location:/Profile/create');
			return true;
		}
		return false;
	}

}