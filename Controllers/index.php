<?php 
/**
* 
*/
class Index extends Controller
{
	
	function __construct()
	{
		parent::__construct();
		Session::init();
		$logged = Session::get('id');
		if(is_null($logged))
		{
			Session::destroy();
			header('Location: '.URL.'/login');
			// to stop code flow
			exit ;
		}
	}

	function index()
	{
		//name of folder and file
		$this->view->render('index/index');
	}
}


 ?>