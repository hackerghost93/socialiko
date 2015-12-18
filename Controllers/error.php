<?php 
/**
* 
*/
class Error extends Controller
{
	

	function __construct($x)
	{
		parent::__construct();
		if($x == 404)
		{
			$this->view->render('error/404',0);
		}
	}


}


 ?>