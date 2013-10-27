<?php

	$conn = "linuxserver01.s5-tech.com";

	$username = "db2_capstoneUser";

	$password = "NJHITECCapstone2013";

	$proj = "db2_capstone";

	$njhitec_db = new mysqli($conn, $username, $password, $proj);

	if ($njhitec_db->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
  }

?>