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
	public function run()
	{
		// see login data in the users model
		$this->model->run();
	}
	public static function logout()
	{
		Session::destroy();
		header('Location:'.URL."/login",true);
		die();
	}

	public function sign_up()
	{
		$this->view->render('login/register',0);
	}
	public function register()
	{
		$id = $this->model->sign_up();
		if($id > 0)
		{
			Session::init();
			Session::set('id',$id);
			echo Session::get('id');
			echo 'sussecful registration';
			header("Location:http://localhost/socialiko/index");
		}
		else
			echo 'error in registration form';
	}	

}


 ?>