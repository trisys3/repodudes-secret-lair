<?php

	$conn = "linuxserver01.s5-tech.com";

	$username = "db2_capstoneUser";

	$password = "NJHITECCapstone2013";

	$proj = "db2_capstone";

	$dbh = mysql_connect ( $conn, $username, $password )
  	or die ( "Unable to connect to MySQL database" );
	print "Connected to MySQL<br>";
	mysql_select_db( $proj );

?>