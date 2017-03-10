<?php
	require('vendor/autoload.php');

	$f3 = require('vendor/bcosca/fatfree-core/base.php');

	//adjust error reporting
    $f3->set('DEBUG', 3); //0 - suppress most errors, 3 - verbose error messages
	
	
	//notes
	
	//$f3->set('key', 'value'); is how you set variables to be accessed by the view. should be done in controller.
	
	//$controller = new controllerName($f3); is how you create a controller object
	
	//inside of function() you add ($f3, $params) and then add /@paramName after the route name
	//example:::: 'GET /page1/@paramName', function($f3, $paramName){}
	
	//controller calls the view. not the route
	
	$f3->route('GET /',    function() {
		$controller = new BlogController($f3);
		$controller->getHomePage();
	});
	
	$f3->route('GET /singleBlog', function() {
		$controller = new BlogController($f3);
		$controller->viewSingleBlog();
	});
	
	
	$f3->route('GET /login', function() {
		$controller = new LoginController($f3);
		$controller->displayLogin();
	});
	
	$f3->route('POST /login', function() {
		$controller = new LoginController($f3);
		$controller->login($f3);
	});
	/*
	$f3->route('GET /', function() {
		
	});
	
	$f3->route('GET /', function() {
		
	});
	
	$f3->route('GET /', function() {
		
	});
	*/
	$f3->run();
?>