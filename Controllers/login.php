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
		require_once('Models/login_model.php');
		$model = new Login_Model();
		$this->view->render('login/login',0);
	}

	function other()
	{
		require_once('models/login_model.php');
		$model = new Login_Model();
	}
}


 ?>