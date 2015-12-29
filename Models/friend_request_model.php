<?php 

/**
* 
*/
class Friend_Request_Model extends Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function getFriendRequests($id)
	{
		$query = $this->db->prepare("
			Select f.user_id , f.friend_id ,
			u.image_path,u.first_name,u.last_name 
			from friend_requests as f
			join users as u on u.user_id = f.user_id
			where f.friend_id = :id
			order by f.requested_at DESC
			");
		if($query->execute(array(
			':id' => $id
			)))
		{
			if($query->rowCount() > 0)
			{
				return $query->fetchAll();
			}
			else 
				return null ;
		}
		else
		{
			echo 'something went wrong';
			die();
		}
	}

	function deleteRequest($id, $friend_id) {
		$query = $this->db->prepare("
			delete from friend_requests
			where user_id = :id and friend_id = :friend_id
			");
		if($query->execute(array(
			':id' => $id,
			':friend_id' => $friend_id
			))) {
			return true;
		} else {
			echo 'something went wrong';
			die();
		}
	}

	function makeFriendRequest($id , $friend_id)
	{
		$query = $this->db->prepare("
			Insert into friend_requests
			(user_id,friend_id)
			values
			(:id,:friend_id)
			");
		if($query->execute(array(
			':id' => $id,
			':friend_id' => $friend_id
			)))
		{
			return true ;
		}
		else
		{
			echo 'something went wrong';
			die();
		}
	}
	function isRequested($id,$friend)
	{
		$query = $this->db->prepare(
			"Select * from friend_requests
			where (user_id = :id 
			and friend_id = :friend)
			or (user_id = :friend and friend_id = :id)
			");
		if($query->execute(
		 array(':id' => $id,
		 ':friend' => $friend )))
		{
			if($query->rowCount() > 0)
				return true ;
			else 
				return false ;
		}
		else
		{
			echo 'something went wrong';
			die();
		}
	}
}


 ?>