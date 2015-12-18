<?php
/*
*
*/ 
class Database extends PDO
{
	
	function __construct()
	{
		include_once('settings.php');
		parent::__construct('mysql:dbname='.DBNAME.';host='.HOSTNAME,USERNAME,PASSWORD);
		try 
        { 
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        }
        catch (PDOException $e) 
        {
            die($e->getMessage());
        }
	}
}

 ?>