<?php
	
	interface BlogDataLayer
	{
		private $f3;
		private $model;
		private $user;
		
		//get blog data from DB action
			public function getAllBloggers();
			public function getAllUsers();
			public function getBlog($user);
			public function getBlogsByUser($user);
			public function getTotalBlogs($user);
		
		//send blog data to DB action
			//create blog actions
				public function createBlog($title, $content, $tags);
				
			//edit blog actions
				public function updateBlog($blogId, $title, $content, $tags);

	}
	
	
	
?>