<?php 
/**
* 
*/
class Like_Model extends Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function getLikes($post_id) {
		$query = $this->db->prepare("
			Select* from likes as l
			join users as u on u.user_id = l.user_id
			where l.post_id = :post_id
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

	function isLiked($user_id, $post_id) {
		$query = $this->$db->prepare("
			Select* from likes
			where user_id = :user_id post_id = :post_id
		");

		if($query->execute(array(
			':post_id' => $post_id,
			'user_id' => $user_id
			))) {
			if($query->rowCount() > 0)
				return true;
			else return false;
		} else {
			echo 'something went wrong';
			die();
		}

	}

	function createLike($user_id, $post_id) {
		$query = $this->$db->prepare("
			Insert into likes
			(user_id, post_id)
			values (:user_id, :post_id)
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

	function removeLike($user_id, $post_id) {
		$query = $this->$db->prepare("
			Delete from likes
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