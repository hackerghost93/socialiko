<?php 
require_once 'Models/login_model.php';
require_once 'Models/friend_model.php';
require_once 'Models/friend_request_model.php';
require_once 'Models/like_model.php';
require_once 'Models/comment_model.php';
require_once 'Controllers/friend_request.php';
require_once 'Controllers/login.php';
require_once 'Controllers/friend.php';
require_once 'Controllers/like.php';
require_once 'Controllers/comment.php';

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

	function create_profile_picture_post() {
		// need to require post model
		$model = new Post_Model();
		$x = $model->create(Session::get('id'));
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
		$requestController = new Friend_Request();
		// only me get access right now
		$friendCon = new Friend();
		$this->view->styles = array();
		array_push($this->view->styles, URL."/Public/bootstrap/css/styles.css");
		array_push($this->view->styles, URL."/Public/bootstrap/css/post.css");
		if($id == null || $id == Session::get('id'))
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
			{
				$this->view->access = true ;
				$this->view->posts = $this->getPosts($id);
			}
			else
			{
				$this->view->access = false ;
				$this->view->requested = $requestController->isRequested($id);
				$this->view->posts = $this->getPosts($id,"public");
			}
			$this->view->id = $id ;
			$this->view->user = $u::getUser($id);
		} 
		$this->view->render('post/index');

	}

	private function getPosts($id,$state="ALL")
	{
		$like_controller = new Like();
		$comment_controller = new Comment();
		$data = $this->model->getPosts($id,$state);
		for($i = 0 ; $i < count($data) ; ++$i) {
			$data[$i]['likes'] = $like_controller->
										   getLikes($data[$i]['post_id']);
			$data[$i]['isLiked'] = $like_controller->
											isLiked($data[$i]['post_id']);
			$data[$i]['comments'] = $comment_controller->
										getComments($data[$i]['post_id']);
		}
		return $data;
	}

	public function search()
	{
		$x = $_GET['val'];
		$posts =$this->model->search($x);
		$controllerLogin = new Login();
		$users = $controllerLogin->search($x);
		$this->view->users = $users ;
		$this->view->posts = $posts ;
		$this->view->styles = array();
		array_push($this->view->styles, URL."/Public/bootstrap/css/styles.css");
		$this->view->render('post/results');
	}

	public function show($id)
	{
		$data = $this->model->show($id);
		$like_controller = new Like();
		$comment_controller = new Comment();
		for($i = 0 ; $i < count($data) ; ++$i) {
			$data[$i]['likes'] = $like_controller->
										   getLikes($data[$i]['post_id']);
			$data[$i]['isLiked'] = $like_controller->
											isLiked($data[$i]['post_id']);
			$data[$i]['comments'] = $comment_controller->
										getComments($data[$i]['post_id']);
		}
		$this->view->post = $data ;
		$this->view->styles = array();
		array_push($this->view->styles, URL."/Public/bootstrap/css/styles.css");
		array_push($this->view->styles, URL."/Public/bootstrap/css/post.css");
		$this->view->render('post/show');
	}

	public function newsFeed()
	{
		$data = $this->model->newsFeed(Session::get('id'));
		$like_controller = new Like();
		for($i = 0 ; $i < count($data) ; ++$i) {
			$data[$i]['isLiked'] = $like_controller->
									isLiked($data[$i]['post_id']);
		}
		$this->view->posts = $data ;
		$this->view->styles = array();
		array_push($this->view->styles, URL."/Public/bootstrap/css/styles.css");
		array_push($this->view->styles, URL."/Public/bootstrap/css/post.css");
		$this->view->render('post/newsfeed');
	}
}
 ?>