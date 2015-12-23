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
		print_r($data);
		$this->view->friends = $data ;
		$this->view->render('friend/index',0);
	}


	function addFriend($friend)
	{
		$mod = new Friend_Model();
		if(Session::get('id') == $friend)
		{
			// get Error class to work;
			echo 'invalid operation';
			die();
		}
		$x = $mod->AddFriend(Session::get('id'),$friend);
		if($x)
		{
			header("Location:".URL."/friend/getFriends");
			exit;
		}
		echo 'something went wrong';
		die();
	}
}

 ?>