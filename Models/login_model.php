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
		':image_path' => NULL ,
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
}


 ?>