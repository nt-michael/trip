<?php
/*---------------------------------------------------------------------*/
/* Database file that creates a connection to the DB anytime the file */
/* is imported. 													  */

	$HOST = "localhost";
	$USER = "root";
	$PASSWORD = "Je+5*sus";
	$DATABASE = "wazoo";

//creates a connection
$conn = mysql_connect($HOST, $USER, $PASSWORD);
if(!$conn){
	die('Error while connecting to the Database.');
}

//uses a database in the server.
mysql_select_db($DATABASE, $conn);
?>