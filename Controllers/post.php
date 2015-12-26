<?php 
require_once 'Models/login_model.php';
require_once 'Models/friend_model.php';
require_once 'Controllers/login.php';
require_once 'Controllers/friend.php';
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
			echo 'successfuly created'; 
			header("Location:".URL."/post");
			exit;
		}
		else 
			echo 'error';
		exit;
	}

	function index($id = null)
	{
		//name of folder and file
		$u = new Login();
		// only me get access right now
		$friendCon = new Friend();
		$this->view->styles = array();
		array_push($this->view->styles, URL."/Public/bootstrap/css/styles.css");
		if($id == null)
		{
			$this->view->me = true ;
			$this->view->id = Session::get('id');
			$this->view->access = true ;
			$this->view->user = $u::getUser(Session::get('id'));
			$this->view->posts = $this->getPosts(Session::get('id'));
		}
		else
		{
			$this->view->me = false ;
			if($friendCon->isFriend(Session::get('id'),$id))
				$this->view->access = true ;
			else
				$this->view->access = false ;
			$this->view->id = $id ;
			$this->view->user = $u::getUser($id);
			$this->view->posts = $this->getPosts($id,"public");
		} 
		$this->view->render('post/index');

	}

	private function getPosts($id,$state="ALL")
	{
		echo $state ;
		$data = $this->model->getPosts($id,$state);
		return $data ;
	}

	public function search()
	{
		$x = $_GET['val'];
		$posts =$this->model->search($x);
		$controllerLogin = new Login();
		$users = $controllerLogin->search($x);
		$this->view->users = $users ;
		$this->view->posts = $posts ;
		$this->view->render('post/results');
	}
}
 ?>