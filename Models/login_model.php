	<?php 
	/**
	* 
	*/
	class Login_Model extends Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function run()
		{
			// for better performance and security
			// and because it's going to repeat it self
			// badal :password -> md5(:password) to hash password
			$query = $this->db->prepare("Select user_id 
				from users 
				where email=:email 
				AND password=md5(:password)");
			if(
				$query->execute(array(
					':email' => $_POST['email'] ,
					':password' =>$_POST['password']
					))
				)
			{
				if($query->rowCount() > 0)
				{
					// return id 
					$data = $query->fetch();
					return $data['user_id'];
				}
				// return invalid id
				else 
					return -1 ;
			}
			else 
			{
				echo 'error access database';
				exit;
			}
		}


		public function sign_up()
		{
			//insert query
			// for images manipulation on localhost please update permissions 
			// for others
			if(
				isset($_FILES['profile_picture'])
				&&
				is_uploaded_file($_FILES['profile_picture']['tmp_name'])
				)
			{
				$temp = explode('.', $_FILES['profile_picture']['name']);
				$imageFileType = end($temp);
				$target_name ='image_' . date('Y-m-d-H-i-s') . '_' . uniqid().".".$imageFileType;
				if(file_exists("Public/profile_pictures/".$target_name)) {
	    			chmod("Public/profile_pictures/".$target_name,0755); //Change the file permissions if allowed
	 		    	unlink("Public/profile_pictures/".$target_name); //remove the file
	 		    }
	 		    $target_dir = "Public/profile_pictures/";
	 		    $target_file = $target_dir.$target_name;
	 		    $uploadok = 1 ;
	 		    $check = getimagesize($_FILES["profile_picture"]["tmp_name"]);
	 		    if($check !== false)
	 		    {
	 		    	$uploadok = 1;
	 		    }
	 		    else
	 		    {
	 		    	echo "File is not an image\n";
	 		    	$uploadok = 0 ;
	 		    }
	 		    if ($_FILES["profile_picture"]["size"] > 500000) {
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
	 		//     if($extension=="jpg" || $extension=="jpeg" )
	 		//     {
	 		//     	$_FILES["profile_picture"]["tmp_name"] = $_FILES['file']['tmp_name'];
	 		//     	$src = imagecreatefromjpeg($_FILES["profile_picture"]["tmp_name"]);
	 		//     }
	 		//     else if($extension=="png")
	 		//     {
	 		//     	$_FILES["profile_picture"]["tmp_name"] = $_FILES['file']['tmp_name'];
	 		//     	$src = imagecreatefrompng($_FILES["profile_picture"]["tmp_name"]);
	 		//     }
	 		//     else 
	 		//     {
	 		//     	$src = imagecreatefromgif($_FILES["profile_picture"]["tmp_name"]);
	 		//     }
	 		//     list($width,$height)=getimagesize($_FILES["profile_picture"]["tmp_name"]);
				// $newwidth=60;
				// $newheight=($height/$width)*$newwidth;
				// imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,
 			// 		$width,$height);

				// $x = imagejpeg($tmp,$target_name,100);
				// echo $x ;
				// echo $tmp ;
				// die();
				// imagedestroy($src);
				// imagedestroy($tmp);
	 		}
	 		if($uploadok == 0)
	 		{
	 			echo "sorry upload failed";
	 		}		
	 		if (move_uploaded_file($_FILES['profile_picture']['tmp_name'], $target_file)) {
	 			echo "Upload Complete\n";
	 		}
	 		else 
	 		{
	 			echo 'something went wrong';
	 		}
	 	}
	 	else
	 	{
	 		if($_POST['gender'] == "male")
	 		{
	 			$target_file = URL."/Public/profile_pictures/male.png";
	 		}
	 		else if($_POST['gender'] == "female")
	 		{
	 			$target_file = URL."/Public/profile_pictures/female.jpg";	
	 		}
	 	}
	 	$query = $this->db->prepare("Insert into users 
	 		(first_name,last_name,email,password
	 			,phone,gender,birthdate,hometown,
	 			martial_status,about_me,image_path
	 			,created_at,updated_at)
	 	Values
	 	(:firstname , :lastname , :email , 
	 		md5(:password),:phone,:gender,:birthdate,:hometown
	 		,:status,:aboutme,:image_path,:created_at,:updated_at)
	 	");


	 	if($query->execute(array(
	 		':firstname' => $_POST['firstname'],
	 		':lastname' => $_POST['lastname'],
	 		':email' => $_POST['email'],
	 		':password' => $_POST['password'],
	 		':phone' => $_POST['phone'],
	 		':gender' =>$_POST['gender'],
	 		':birthdate' => $_POST['birthday'],
	 		':hometown' => $_POST['hometown'],
	 		':status' => $_POST['status'],
	 		':aboutme' => $_POST['aboutme'],
	 		':created_at' => NULL ,
	 		':updated_at' => NULL ,
	 		':image_path' => $target_file ,
	 		))
	 		)
	 		return $this->db->lastInsertId();
	 	else 
	 		return 0 ;

	 }

	 public function getUser($id)
	 {

	 	$query = $this->db->prepare(
	 		"Select * from users 
	 		where user_id = :id"
	 		);

	 	$query->execute(array(':id' => $id));
	 	return $query->fetchAll();

	 }
		// get request
	 public function search($x)
	 {
	 	$id = Session::get('id');
	 	$query = $this->db->prepare(
	 		"
	 		select * 
	 		from users 
	 		where 
	 		(email like Concat('%',:x,'%') or
	 		first_name like Concat('%',:x,'%') or
	 		last_name = Concat('%',:x,'%') or
	 		phone = Concat('%',:x,'%') or
	 		hometown = Concat('%',:x,'%'))
	 		and user_id != :id 
	 		");
	 	if($query->execute(array(
	 		':x' => $x,
	 		':id' => $id
	 		)))
	 	{
	 		if($query->rowCount()>0)
	 			$x = $query->fetchAll();
	 		else
	 			$x = null ;
	 		return $x ;
	 	}
	 	else{
	 		echo "Something went wrong";
	 		die();
	 	} 
	 }
	}


	?>