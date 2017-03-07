<?php

	//$f3->set('key', 'value'); is how you set variables to be accessed by the view.
	
	class BlogController
	{
		private $_f3;
         
        public function __construct($f3)
        {
            $this->_f3 = $f3;
        }
		
		public function getHomePage()
		{	
			
			
			//load the view
            //echo Template::instance()->render('view/home.php');
		}
		
		public function getBlogByUser()
		{
			
			
			
			//load the view
            //echo Template::instance()->render('view/home.php');
		}
		
		public function viewSingleBlog()
		{
			
			
			
			//load the view
            //echo Template::instance()->render('view/home.php');
		}
		
		public function createBlog()
		{
			
			
			
			//load the view
            //echo Template::instance()->render('view/home.php');
		}
		
		public function editBlog()
		{
			
			
			
			//load the view
            //echo Template::instance()->render('view/home.php');
		}
		
		
		
		
			
	}
	
?>