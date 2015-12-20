<?php 
/**
* 
*/
class Session
{
	public static function init()
	{
		@session_start();
	}

	public static function destroy()
	{
		//unset($_SESSION);
		$_SESSION['id'] = 0 ;
		session_destroy();
	}
	public static function set($key , $value)
	{
		$_SESSION[$key] = $value ;
	}
	public static function get($key)
	{
		if(isset($_SESSION[$key]))
			return $_SESSION[$key];
		return null ;
	}
	public static function authenticate()
	{
		if(!isset($_SESSION['id'])) {
    		// session isn't started
    		return 0 ;
    	}
    	return Session::get('id') ;
	}
}
 ?>