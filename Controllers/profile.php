<?php 
/**
* 
*/
class Profile extends Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function index() {
		$this->view->render('edit_profile/index');
		exit;
	}

}
?>