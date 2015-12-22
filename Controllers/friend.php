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
		$data = $this->model->getFriend($id);
		$this->view->friends = $data ;
		$this->view->render('friend/index');
	}


	function addFriend($friend)
	{
		$x = $this->model->AddFriend(Session::get('id'),$friend);
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