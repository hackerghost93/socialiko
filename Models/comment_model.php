<?php 

/**
* 
*/
class Comment_Model extends Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function getComments($post_id) {
		$query = $this->db->prepare("
			Select u.first_name, u.last_name,
			c.post_id, c.user_id, c.comment_text,
			u.image_path  
			from comments as c
			join users as u on u.user_id = c.user_id
			where c.post_id = :post_id
			order by c.created_at DESC
		");

		if($query->execute(array(
			':post_id' => $post_id
			))) {
			if($query->rowCount() > 0)
				return $query->fetchAll();
			else return null;
		} else {
			echo 'something went wrong';
			die();
		}
	}

	function createComment($user_id, $post_id, $comment_text) {
		$query = $this->db->prepare("
			Insert into comments
			(user_id, post_id, comment_text)
			values (:user_id, :post_id, :comment_text)
		");

		if($query->execute(array(
			'user_id' => $user_id,
			':post_id' => $post_id,
			':comment_text' => $comment_text
			))) {
			return true;
		} else {
			echo 'something went wrong';
			die();
		}
	}

	function removeComment($user_id, $post_id) {
		$query = $this->db->prepare("
			Delete from comments
			where user_id = :user_id
			and post_id = :post_id
		");

		if($query->execute(array(
			'user_id' => $user_id,
			':post_id' => $post_id
			))) {
			return true;
		} else {
			echo 'something went wrong';
			die();
		}
	}


}

?>