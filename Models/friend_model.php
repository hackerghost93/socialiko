<?php 

/**
* 
*/
class Friend_Model extends Model
{	
	
	function __construct()
	{
		parent::__construct();
	}

	function getFriends($id)
	{
		$query = $this->db->prepare(
			"Select * from friends 
			join users on users.user_id = friends.friend_id
			where friends.user_id = :id"
			);
		if($query->execute(array(
			':id' => $id 
			)))
		{
			if($query->rowCount() > 0)
				return $query->fetchAll();
			else 
				return null ;
		}
		else
		{
			echo 'something went wrong';
			die();
		}
		
	}

	function addFriend($user ,$friend)
	{
		// echo $user." ".$friend;
		// die();
		$query = $this->db->prepare(
			"Insert into friends (user_id,friend_id)
			values 
			(:user , :friend)"
			);
		return $query->execute(
			array(
			':user' => $user ,
			':friend' => $friend 
			)
		);
	}
}

 ?>