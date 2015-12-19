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
		$this->db->prepare("Select id 
			from users 
			where email= :email 
			and password= :password");
		$this->db->execute(array(
			':login' => $_POST['email'] ,
			':password' => $_POST['password']
			));
		// to translate relation
		$data = fetchAll();
		// print an array
		print_r($data);
	}
}

 ?>