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
			where email= :email 
			AND password= :password");
		$query->execute(array(
			':email' => $_POST['email'] ,
			':password' => $_POST['password']
			));
		// to translate relation
		$data = $query->fetchAll();
		// if exist one with that id or pass
		if($query->rowCount() > 0)
		{
			//login and start session
			Session::init();
			Session::set('id',$data[0]['user_id']);
			header("location:".URL."/index");
			die();
		}
		else
		{
			// show error
			echo 'invalid email or password';
			header('Location:'.URL."/login",true);
			die();
		}
		// print an array for debug
		//print_r($data);
	}
}

 ?>