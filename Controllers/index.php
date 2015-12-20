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
		 	//Session::destroy();
		 	echo Session::authenticate();
		 	header('Location: '.URL.'/login');
		 	// to stop code flow
		 	exit ;
		}
	}

	function index()
	{
		//name of folder and file
		$this->view->render('index/index',0);
	}
}


 ?>