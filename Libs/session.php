<?php 
/**
* 
*/
class Session
{
	public static function init()
	{
		session_start();
	}

	public static function destroy()
	{
		//unset($_SESSION);
		session_destroy();
	}
	public static function set($key , $value)
	{

		$_SESSION[$key] = $value ;
	}
	public static function get($key)
	{
		print_r($_SESSION);
		if(isset($_SESSION[$key]))
			return $_SESSION[$key];
		return null ;
	}
}
 ?>