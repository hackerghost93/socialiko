<?php 
/**
* 
*/
class Index extends Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		//name of folder and file
		require_once('models/index_model.php');
	}
}


 ?>