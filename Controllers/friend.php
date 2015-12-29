<?php 

/**
* 
*/
class Friend extends Controller
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

	function getFriends($id = null)
	{
		if($id == null)
		{
			$id = Session::get('id');
		}
		$data = $this->model->getFriends($id);
		if(empty($data))
			$data = null ;
		$this->view->styles = array();
		array_push($this->view->styles, URL."/Public/bootstrap/css/styles.css");
		$this->view->friends = $data ;
		$this->view->render('friend/index');
	}


	public static function addFriend($id,$friend)
	{
		$mod = new Friend_Model();
		$x = $mod->addFriend($id,$friend);
		if($x)
		{
			header("Location:".URL."/friend/getFriends");
			exit;
		}
		echo 'something went wrong';
		die();
	}
	
	public function isFriend($id,$friend)
	{
		$model = new Friend_Model();
		return $model->isFriend($id,$friend);
	}

	public static function removeFriend($friend) {
		$model = new Friend_Model();
		$id = Session::get('id');
		$x = $model->removeFriend($id, $friend);
		if($x) {
			header("Location:".URL."/friend/getFriends");
			exit;
		}
		echo 'something went wrong';
		die();
	}

}

 ?>