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
		if(
			isset($_FILES['post_picture'])
			&&
			is_uploaded_file($_FILES['post_picture']['tmp_name'])
			)
		{
			$temp = explode('.', $_FILES['post_picture']['name']);
			$imageFileType = end($temp);
			$target_name ='image_' . date('Y-m-d-H-i-s') . '_' . uniqid().".".$imageFileType;
			if(file_exists("Public/posts_pictures/".$target_name)) {
    			chmod("Public/posts_pictures/".$target_name,0755); //Change the file permissions if allowed
 		    	unlink("Public/posts_pictures/".$target_name); //remove the file
			}
			$target_dir = "Public/posts_pictures/";
			$target_file = $target_dir.$target_name;
			$uploadok = 1 ;
			$check = getimagesize($_FILES["post_picture"]["tmp_name"]);
			if($check !== false)
			{
				$uploadok = 1;
			}
			else
			{
				echo "File is not an image\n";
				$uploadok = 0 ;
			}
			if ($_FILES["post_picture"]["size"] > 500000) {
				echo "Sorry, your file is too large.";
				$uploadok = 0 ;
			}
			if($check !==  false)
			{
				$uploadok = 1;
			}
			if($imageFileType != "jpg" && $imageFileType != "png" 
				&& $imageFileType != "jpeg"
				&& $imageFileType != "gif" ) {
				echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$uploadok = 0;
		}
		if($uploadok == 0)
		{
			echo "sorry upload failed";
		}		
		if (move_uploaded_file($_FILES["post_picture"]["tmp_name"], $target_file)) {
			echo "Upload Complete\n";
		}
		else 
		{
			echo 'something went wrong';
		}
	}
	else
	{
		$target_file = null ;
	}
		$query = $this->db->prepare(
			"Insert into posts 
			(user_id,state,caption,image_path,created_at,updated_at)
			values
			(:user_id,:state,:caption,:image_path,:created_at,:updated_at)
			");
		// the null in the array to set the created at time it's not null
		if($query->execute(
			array(
				':user_id' => $id,
				':state' => $_POST['state'],
				':caption' => $_POST['caption'] ,
				':image_path' => $target_file,
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
			"select posts.image_path,posts.caption,posts.state,
			posts.created_at, posts.post_id
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
			and state='public'
			");
		$query->execute(array(
			':x' => $x
			));
		$x = $query->fetchAll();
		return $x ;
	}
}


 ?>