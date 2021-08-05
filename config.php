<?php
	//original
	//$servername = "localhost";
	//$username = "root";
	//$password = "";
	//$dbname = "bankmanage";

	//for hosting
	$servername = "remotemysql.com";
	$username = "RCr51CQGc7";
	$password = "wlzVttUsby";
	$dbname = "RCr51CQGc7";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>