<?php

	$conn = "linuxserver01.s5-tech.com";

	$username = "db2_capstoneUser";

	$password = "NJHITECCapstone2013";

	$proj = "db2_capstone";

	$dbh = mysqli_connect ( $conn, $username, $password, $proj )
  	or die ( "Unable to connect to MySQL database" );
	// print "Connected to MySQL<br>";
	// mysqli_select_db( $proj );

?>