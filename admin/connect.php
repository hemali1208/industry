<?php
//error_reporting(0);
/*
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'db_help');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
*/
//error_reporting(0);
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', '');
	define('DBNAME', 'dr_services');

 
 $conn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);
 $con = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);
 //$dbcon = mysql_select_db(DBNAME);
 
 if ( !$conn ) {
  die("Connection failed : " . mysql_error());
 }
 
 

?>

