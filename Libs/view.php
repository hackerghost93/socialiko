<?php 
/**
* 
*/
class View
{
	
	// render can include or not

	public function render($name,$Include = true)
	{
		if($Include == true)
		{
			require('Views/header.php');
			require 'Views/'.$name.'.php';
			require('Views/footer.php'); 
		}
		else
		require 'Views/'.$name.'.php';
	}

}



 ?>