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

	public function getPosts($id,$state)
	{
		if($state = "ALL")
		{
			// echo "there";
			// die();
			$query = $this->db->prepare(
			"select posts.user_id,posts.post_id,posts.caption
			from posts
			join users 
			on posts.user_id = users.user_id
			where 
			posts.user_id = :id
			order by posts.updated_at DESC"
			);
			if($query->execute(
			array(
			':id' => $id 
			)))
			{
				if($query->rowCount() > 0)
					return $query->fetchAll();
			}

		}
		else
		{
			echo "here";
			die();
			$query = $this->db->prepare(
			"select * from posts as p 
			join users as u on p.user_id = u.user_id
			where 
			user_id = :id AND state = :state
			order by p.updated_at DESC"
			);
			
			if($query->execute(
			array(
			':id' => $id ,
			':state' => $state)))
			{
			if($query->rowCount() > 0)
				return $query->fetchAll();
			}
		}
		
		return null ;
	}

	public function search($x)
	{
		$query = $this->db->prepare(
			"
			select * 
			from posts
			where 
			caption like Concat('%',:x,'%')
			");
		$query->execute(array(
			':x' => $x
			));
		$x = $query->fetchAll();
		return $x ;
	}
}


 ?>