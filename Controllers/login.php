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

	function edit() {
		$this->view->styles = array();
		array_push($this->view->styles, URL."/Public/bootstrap/css/styles.css");
		$this->view->jss = array();
		array_push($this->view->jss, URL."/Public/bootstrap/js/validate_edit.js");
		$this->view->user = $this->getUser(Session::get('id'));
		$this->view->render('login/edit_profile', 1);
	}

	public function run()
	{
		// see login data in the users model
		$bool = $this->model->run(); 
		if($bool > 0)
		{
			Session::init();
			Session::set('id',$bool);
			header('Location:'.URL.'/post/index');
		}
		else
		{
			header('Location:'.URL.'/login');
		}
		exit;
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
		$model = new Login_Model();
		if($model->email_exists()) {
			echo 'email already exists';
			die();
		}

		$id = $this->model->sign_up();
		if($id > 0)
		{
			Session::init();
			Session::set('id',$id);
			echo Session::get('id');
			echo 'successful registration';
			header("Location:http://localhost/socialiko/post");
		}
		else
			echo 'error in registration form';
	}

	public function getUser($id)
	{
		$model = new Login_Model();
		return $model->getUser($id);
	}

	public function search($x)
	{
		$model = new Login_Model();
		$x = $_GET['val'];
		$data =$model->search($x);
		return $data ;
	}

	public function update() {
		$model = new Login_Model();
		if($model->on_update_email_check()) {
			echo 'email already exists';
			die();
		}
		$x = $model->update();
		if($x) {
			header('Location: '.URL.'/post/index');
			exit;
		} else echo 'error in profile edit';
	}

	public function editProfilePic()
	{
		$this->model->editProfilePic(Session::get('id'));
		header("Location:".URL."/post/index");
	}

	public function removeProfilePic()
	{
		$this->model->removeProfilePic(Session::get('id')); 	
		header("Location:".URL."/post/index");
	}

}


 ?>