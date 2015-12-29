<?php 
/**
* 
*/
class Like extends Controller
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

	function createLike($post_id)
	{
		$model = new Like_Model();
		$x = $model->createLike(Session::get('id'), $post_id);
		echo 'here';
		if($x == true)
		{
			echo 'Like successfuly created'; 
			header("Location:".URL."/post");
		}
		else 
			echo 'error';
		exit;
	}

	function getLikes($post_id) {
		$model = new Like_Model();
		$x = $model->getLikes($post_id);
		return $x;
	}

	function isLiked($post_id) {
		$model = new Like_Model();
		$x = $model->isLiked(Session::get('id'), $post_id);
		return $x;
	}

	function removeLike($post_id) {
		$model = new Like_Model();
		$x = $model->removeLike(Session::get('id'), $post_id);
		if($x == true)
		{
			echo 'Like successfuly created'; 
			header("Location:".URL."/post");
		}
		else 
			echo 'error';
		exit;
	}
	
}
?>