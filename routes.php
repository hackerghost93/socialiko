<?php
 // for this to run you need to AllowOverride All in apache2 settings
 // then do this-> sudo a2enmod rewrite && sudo service apache2 restart
	// you need to fix parser of url trim etc .
 $url = explode('/',$_GET['url']);
 // print_r for printing array

 if(file_exists('Controllers/'.$url[0].'.php'))
 	require 'Controllers/'.$url[0].'.php';
 else
 {
 	require 'Controllers/error.php';
 	$controller = new Error(404);
 	return false ;
 }
 $controller = new $url[0] ;

 if(isset($url[2]))
 	$controller->{$url[1]}($url[2]);
 elseif(isset($url[1]))
 	$controller->{$url[1]}();
// if we are calling a function in controller we call it like that the name 
 // parse than the brackets


?>