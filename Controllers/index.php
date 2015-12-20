<?php 
/**
* 
*/
class Index extends Controller
{
	
	function __construct()
	{
		parent::__construct();
		if(Session::authenticate() == 0)
		{
		 	header('Location: '.URL.'/login');
		 	exit ;
		}
	}

	function index()
	{
		//name of folder and file
		$this->view->render('index/index',false);
	}
}


 ?>