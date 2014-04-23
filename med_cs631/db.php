<?php
	
	$conn = "localhost";

	$user = "root";

	$pw = "password";

	$db = "cs631_med";

	$med_cs631_db = new mysqli($conn, $user, $pw, $db);

	if($med_cs631_db->connect_error) {
		die('Connect error (' . $med_cs631_db->connect_errno . ') ' . $med_cs631_db->connect_error);
	}

?>