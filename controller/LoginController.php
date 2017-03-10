<?php
	
	class LoginController
	{
		private $_f3;
		private $model;
         
        public function __construct($f3)
        {
            $this->_f3 = $f3;
        }
		
		public function displayLogin()
		{
			echo Template::instance()->render('view/login.php');
		}
		
		public function createAccount()
		{
			
		}
		
		public function changePassword()
		{
			
		}
		
		public function login($f3)
		{
			//PERFORM login actions
			$userName = $this->$f3->get("POST.userName");
			$password = $this->$f3->get("POST.password");
			
			$model = new blogDataLayer();
			
			
			
			
		}
		
		public function isLoggedIn()
		{
		
		}
		
		public function logout()
		{
			
		}
		
		
		
	}
?>