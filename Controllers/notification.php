<?php 
/**
* 
*/
class Notification extends Controller
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
		$not = $this->model->getNotifications(Session::get('id'));
		$this->view->notifications = $not ;
		$this->view->styles = array();
		array_push($this->view->styles, URL."/Public/bootstrap/css/styles.css");
		array_push($this->view->styles, URL."/Public/bootstrap/css/notification.css");
		$this->view->render('notification/index');
	}

	function createNotification($user_id,$friend_id,$post_id,$type)
	{
		$model = new Notification_Model();
		$model->createNotification($user_id,$friend_id,$post_id,$type);
	}
}
 ?>