<?php
	
	class blog 
	{
		//fields
		private $_blogTitle;
		private $_blogCreateDate;
		private $_blogContent;
		private $_blogId;
		private $_blogTags;
		private $_blogProfileImg;
		
		//methods
		
		//getters and setters
		public function getBlogTitle() {
			return $this->_blogTitle;
		}
		
		public function getBlogCreateDate() {
			return $this->_blogCreateDate;
		}
		
		public function getBlogContent() {
			return $this->_blogContent
		}
		
		public function getBlogId() {
			return $this->_blogId;
		}
		
		public function getBlogTags() {
			return $this->_blogTags;
		}
		
		public function getBlogProfileImg() {
			return $this->_blogProfileImg;
		}
		
		public function setBlogTitle($blogTitle) {
			$this->_blogTitle = $blogTitle;
		}
		
		public function setBlogCreateDate($blogCreateDate) {
			$this->_blogCreateDate = $blogCreateDate;
		}
		
		public function setBlogContent($blogContent) {
			$this->_blogContent = $blogContent;
		}
		
		public function setBlogId($blogId) {
			$this->_blogId = $blogId;
		}
		
		public function setBlogTags($blogTags) {
			$this->_blogTags = $blogTags;
		}
		
		public function setBlogProfileImg($blogProfileImg) {
			$this->_blogProfileImg = $blogProfileImg;
		}
		
	}
	
	
?>