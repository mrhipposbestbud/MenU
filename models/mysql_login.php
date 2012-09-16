<?php 

	$host="pennapp.db.9865885.hostedresource.com";
	$username="pennapp";// Mysql username 
	$password="Menupass1";// Mysql password 
	$db_name="pennapp";// Database name 
	
	// Connect to server and select databse.
	$con=mysql_connect("$host", "$username", "$password")or die("Cannot Connect"); //Not to Edit
	mysql_select_db("$db_name")or die("Cannot Select DB"); 
