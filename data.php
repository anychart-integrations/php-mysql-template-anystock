<?php
	// Define MySQL connection data
	$MYSQL['host'] = "localhost";
	$MYSQL['user'] = "anychart_user";
	$MYSQL['password'] = "anychart_pass";
	$MYSQL['database'] = "anychart_db";

	// Connect to MySQL database
	$mysqli = mysqli_connect($MYSQL['host'],$MYSQL['user'],$MYSQL['password'],$MYSQL['database']);

	// Make SQL request
	$result = $mysqli->query("SELECT x, value FROM msftData");

	// Loop through the result and populate an array
	$msftData = Array();
	while ($msftData[] = $result->fetch_assoc()){}
	array_pop($msftData);

	// Return the result and close MySQL connection
	$mysqli->close();
    header('Content-type: application/json');
	echo json_encode($msftData);
?>
