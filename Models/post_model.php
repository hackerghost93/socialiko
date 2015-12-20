<?php 

/**
* 
*/
class Post_Model extends Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function create($id)
	{
		$query = $this->db->prepare(
			"Insert into posts 
			(user_id,state,caption,created_at,updated_at)
			values
			(:user_id,:state,:caption,:created_at,:updated_at)
			");
		// the null in the array to set the created at time it's not null
		if($query->execute(
			array(
				':user_id' => $id,
				':state' => $_POST['state'],
				':caption' => $_POST['caption'] ,
				':created_at' => null ,
				':updated_at' => null  
				)
			))
		return true ;
		else return false ;
	}

	function delete()
	{

	}

	public function getPosts($id)
	{
		// get all posts for this id
	}
}


 ?>