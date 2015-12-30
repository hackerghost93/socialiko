<?php 
require_once('Models/friend_model.php');
require_once('Controllers/friend.php');

/**
* 
*/
class Friend_Request extends Controller
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
		$id = Session::get('id');
		$this->view->styles = array();
		array_push($this->view->styles, URL."/Public/bootstrap/css/styles.css");
		array_push($this->view->styles, URL."/Public/bootstrap/css/request.css");
		$this->view->requests = $this->model->getFriendRequests($id);
		$this->view->render('request/index');
	}

	function request($friend_id)
	{
		$model = new Friend_Request_Model();
		if($model->makeFriendRequest(Session::get('id') , $friend_id))
		{
			echo 'request sent';
			header('Location: '.URL.'/post');
			exit;
		}
		else
		{
			echo 'something went wrong';
			die();
		}
	}

	function isRequested($friend_id)
	{
		$model = new Friend_Request_Model();
		$id = Session::get('id');
		return $model->isRequested($id,$friend_id);
	}

	function accept($friend_id)
	{
		$id = Session::get('id');
		$this->model->deleteRequest($id, $friend_id);
		Friend::addFriend($friend_id,$id);
		header('Location:'.URL.'/friend/getFriends');
		die();
	}

	function ignore($friend_id) {
		$id = Session::get('id');
		$this->model->deleteRequest($id, $friend_id);
		header('Location:'.URL.'/friend/getFriends');
		die();
	}

	static function getFriendRequestsCount() {
		require_once('Models/friend_request_model.php');
		$model = new Friend_Request_Model();
		return $model->getFriendRequestsCount(Session::get('id'));
	}

}

 ?>