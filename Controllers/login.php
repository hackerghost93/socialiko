<?php 
/**
* 
*/
class Login extends Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		//name of folder and file
		$this->view->render('login/login',0);
	}
	public function check()
	{
		// see login data in the users model
		$this->model->run();
	}

}


 ?>