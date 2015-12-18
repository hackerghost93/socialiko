<?php
 // for this to run you need to AllowOverride All in apache2 settings
 // then do this-> sudo a2enmod rewrite && sudo service apache2 restart
	// you need to fix parser of url trim etc .
// use autoloader
// if there is url typed or not
$url = isset($_GET['url'])?$_GET['url'] : null ;
require 'Libs/model.php';
require 'Libs/controller.php';
require 'Libs/view.php';
require 'Libs/Database.php';
require 'settings.php';
require 'Config/database.php';
 //validate url
 //split url
$url = explode('/',$_GET['url']);
 // print_r for printing array
 // homepage
if(empty($url[0]))
{
 	// he will never be here
 	require 'Controllers/index.php';
 	$controller = new Index();
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

 //validation of url if methods exist
if(isset($url[1]))
{
 	if(method_exists($controller,$url[1]))
	{
	 	if(isset($url[2]))
		 	$controller->{$url[1]}($url[2]);
	 	else $controller->{$url[1]};
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