<?php
//This is the flow of the website
 // for this to run you need to AllowOverride All in apache2 settings
 // then do this-> sudo a2enmod rewrite && sudo service apache2 restart
	// you need to fix parser of url trim etc .
// use autoloader
require 'settings.php';
require 'Libs/session.php';
require 'Libs/database.php';
require 'Libs/model.php';
require 'Libs/controller.php';
require 'Libs/view.php';
require 'Config/database.php';
// if there is url typed or not
$url = isset($_GET['url'])?$_GET['url'] : null ;
 //validate url
 //split url
$url = explode('/',$_GET['url']);
 // print_r for printing array

 // homepage
if(empty($url[0]))
{
 	// he will never be here
 	require 'Controllers/post.php';
 	$controller = new Post();
 	$controller->index();
 	echo $url[0];
 	return false ;
}
if($url[0] == 'error')
{
 	require ('Controllers/error.php');
 	$controller = new Error(404);
 	return false ;
}
if(file_exists('Controllers/'.$url[0].'.php'))
	require 'Controllers/'.$url[0].'.php';
else
{
 	require 'Controllers/error.php';
 	$controller = new Error(404);
 	// to stop the stream of code
 	return false ;
}
$controller = new $url[0] ;
$controller->LoadModel($url[0]);

 //validation of url if methods exist
 // add valid urls to validation

if(isset($url[1]))
{
 	if($url[0] == 'comment' && $url[1] == 'createComment') {
 		if(isset($url[2]) && isset($url[3])) {
 			$controller->createComment($url[2],$url[3]);
 			exit;
 		}
 		else {
 			require 'Controllers/error.php';
			$controller = new Error(404);
 		}
 	}

 	if($url[0] == 'like' && $url[1] == 'createLike') {
 		if(isset($url[2]) && isset($url[3])) {
 			$controller->createLike($url[2],$url[3]);
 			exit;
 		}
 	}

	if($url[0] == 'post' && $url[1] !='index')
	{
		if($url[1] == 'create')
		{
			$controller->create();
			exit;
		}
		if($url[1] == 'search')
		{
			$controller->search();
			exit;
		}
		if($url[1]=='show')
		{
			if(isset($url[2]))
			{
				$controller->show($url[2]);
				exit;
			}
		}
		if($url[1]=="newsfeed")
		{
			$controller->newsFeed();
			exit;
		}
		header('Location:'.URL.'/post/index/'.$url[1]);
		exit ;
	}
 	else if(method_exists($controller,$url[1]))
	{
	 	if(isset($url[2]))
		{
			$controller->{$url[1]}($url[2]);
		}
	 	else $controller->{$url[1]}();
	}
	else
 	{
 		require 'Controllers/error.php';
		$controller = new Error(404);
 	}

}
else
	$controller->index();

 
// if we are calling a function in controller we call it like that the name 
 // parse than the brackets


?>