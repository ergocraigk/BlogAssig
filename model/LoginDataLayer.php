<?php
	
	interface LoginDataLayer
	{
		private $f3;
		private $model;
		private $user;
		
		public function __construct($f3);
		
		public function createUser($userName, $password, $profileImg, $bio);
		
		public function changePassword($userId, $password);
		
		public function login($userName, $password);
		
	}
	
	
?>