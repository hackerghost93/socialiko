<?php 
require_once 'Models/login_model.php';
require_once 'Controllers/login.php';
/**
* 
*/
class Post extends Controller
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

	function create()
	{
		$x = $this->model->create(Session::get('id'));
		if($x == true)
		{
			header("Location:".URL."/post");
			echo 'successfuly created'; 
		}
		else 
			echo 'error';
	}

	function index($id = null)
	{
		//name of folder and file
		$u = new Login();
		// only me get access right now
		if($id == null)
		{
			$this->view->access = true ;
			$this->view->user = $u::getUser(Session::get('id'));
			$this->view->posts = $this->getPosts(Session::get('id'));
		}
		else
		{
			$this->view->access = false ;
			$this->view->user = $u::getUser($id);
			$this->view->posts = $this->getPosts($id,"public");
		} 
		$this->view->render('post/index',false);

	}

	private function getPosts($id,$state="ALL")
	{
		$data = $this->model->getPosts($id,$state);
		return $data ;
	}
}
 ?>