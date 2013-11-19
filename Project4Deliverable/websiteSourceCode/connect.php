<?php

$dbh = mysql_connect ( $hostname, $username, $password )
	           or die ( "Unable to connect to MySQL database" );
//print "Connected to MySQL<br>";
mysql_select_db( $project );

/*$dbh = mysql_connect ( $mysql_host, $mysql_user, $mysql_password )
	or die ( "Unable to connect to MYSQL DB" );
print "Connected to MYSQL<br>";
mysql_select_db( $mysql_database );
*/



?>
