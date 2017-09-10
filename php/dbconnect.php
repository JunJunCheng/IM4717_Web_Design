<?php
@$dbcnx = new mysqli('localhost','f33im','f33im','f33im');
// @ to ignore error message display //
if ($dbcnx->connect_error){
	echo "Database is not online"; 
	exit;
	// above 2 statments same as die() //
	}
/*	else
	echo "Congratulations...  MySql is working..";
*/
if (!$dbcnx->select_db ("f33im"))
	exit("<p>Unable to locate the f33im database</p>");
?>	