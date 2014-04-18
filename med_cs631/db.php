<?php
	
	$conn = "localhost/phpmyadmin";

	$user = "root";

	$pw = "password";

	$db = "med_cs631";

	$med_cs631_db = new mysqli($conn, $user, $pw, $db);

	if($med_cs631_db->connect_error) {
		die('Connect error (' $mysqli->connect_errno . ') ' . $mysqli->connect_error);
	}

?>