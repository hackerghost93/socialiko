<?php 
// this is command for migrating a table 
// only steps need a file.sql and give it as an argument in Schema
// in socialiko termianl 
// php migrate.php table
require 'settings.php';

$conn = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DBNAME);
if ($conn->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}

$location = 'Schema/'.$argv[1].'.sql';
$sql = file_get_contents($location);

if (mysqli_query($conn , $sql)) 
{
	   echo "migration complete\n";
} 
else 
{
	echo "Error:" . mysqli_error($conn)."\n";
}

$conn->close();
 ?>
