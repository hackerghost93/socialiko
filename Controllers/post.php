<?php 

/**
* 
*/
class Post extends Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function create()
	{
		$x = $this->model->create(Session::get('id'));
		if($x == true)
		{
			header("Location:".URL."/index");
			echo 'successfuly created'; 
		}
		else 
			echo 'error';
	}

	function getPosts()
	{
		return $this->model->getPosts(Session::get('id'));
	}
}
 ?>