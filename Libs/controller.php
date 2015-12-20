<?php 
/**
* Main controller class
*/
class Controller 
{
	
	function __construct()
	{
		//parent will make view which i can call
		Session::init();
		$this->view = new View();
	}

	function LoadModel($name)
	{
		$path = 'Models/'.$name.'_model.php';
		if(file_exists($path))
		{
			require($path) ;
			// upper the first letter -> ucfirst
			$modelName = ucfirst($name).'_Model';
			$this->model = new $modelName();
		}
	}


}



 ?>