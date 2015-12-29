<?php 
/**
* 	
*/		
class Notification_Model extends Model
{
	
	function __construct()
	{
		parent::__construct();
	}


	function getNotifications($id)
	{
		$query = $this->db->prepare("
			Select n.post_id ,u.first_name,u.last_name , n.notification_type,
			count(*),n.created_at
			from notifications as n 
			join posts as p 
			on p.post_id = n.post_id 
			join users as u
			on u.user_id = n.friend_id
			where n.user_id = :id
			group by n.notification_id
			order by n.created_at
			");
		if($query->execute(
			array(':id' => $id)
			))
		{
			if($query->rowCount() > 0)
			{
				return $query->fetchAll();
			}
			else
			{
				return null ;
			}
		}
		else
		{
			echo "something went wrong\n";
			die();
		}
	}

	function createNotification($id , $friend_id , $post_id , $type)
	{
		$query = $this->db->prepare("
			Insert into notifications
			(user_id,friend_id,post_id,notification_type)
			values
			(:id,:friend_id,:post_id,:not_id)
			");
		if($query->execute(
			array(
				':id' => $id,
				':friend_id' => $friend_id,
				':post_id' => $post_id,
				':not_id' => $type
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



}
 ?>