<?php
require_once 'Models/notification_model.php';
require_once 'Controllers/notification.php'; 
/**
* 
*/
class Comment extends Controller
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

	function getComments($post_id) {
		$model = new Comment_Model();
		$x = $model->getComments($post_id);
		return $x;
	}

	function createComment($post_id, $owner_id) {
		// owner_id owner of post
		$model = new Comment_Model();
		$x = $model->createComment(Session::get('id'), 
									$post_id, $_POST['comment_text']);
		if($x == true)
		{
			$contNot = new Notification();
			$contNot->createNotification($owner_id,
			Session::get('id'),$post_id,"comment");
			echo 'Comment successfuly created'; 
			header("Location:".URL."/post/newsfeed");
		}
		else 
			echo 'error';
		exit;
	}
	
	function removeComment($post_id) {
		$model = new Comment_Model();
		$x = $model->removeComment(Session::get('id'), $post_id);
		if($x == true)
		{
			echo 'Comment successfuly removed'; 
			header("Location:".URL."/post/newsfeed");
		}
		else 
			echo 'error';
		exit;
	} 

}
?>