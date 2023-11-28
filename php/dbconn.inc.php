<?php function dbConnect(){
	$host = "localhost"; // for uta.cloud server, "localhost" is the host name.  Do not edit.
	$user = "baa5459_main"; // put your own user name here.
	$pwd = "baa5459_main"; // put your own database password here
	$database = "baa5459_donut_palace"; // put your database name here
	$port = "3306"; // server-specific.  For uta.cloud, the port number is 3306 (the default port)
 
	// initiate a new mysqli object to connect to the Database.  Store the mysqli object in a variable $conn.
	$conn = new mysqli($host, $user, $pwd, $database, $port) or die("could not connect to server");

	// return $conn to the fucntion call
	return $conn;}
?>