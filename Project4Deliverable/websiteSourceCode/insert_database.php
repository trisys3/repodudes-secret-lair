<?php
//Run a PHP script that does Database Insert.


//connect to databaseinclude ("account.php") ;
include ("account.php") ;	//varies with each person's account
include ("connect.php") ;	//same for everyone

//Define ("hard-coded") data to insert into "students" table
$name = "Bertie" ;
$age  = 100 ;
$ssn  = 20  ;

//echo data to browser
print "<br>Name: $name <br>"  ;
print "<br>Age:  $age  <br>"  ;
print "<br>SSN:  $ssn  <br>"  ;

//Define and echo SQL insert statement
$sql = "insert into students values ( '$name', $age, $ssn )";
print "<br>$sql<br>";

//Execute SQL statement
mysql_query ( $sql ) or die ( mysql_error() ) ;

//exit here if successful
print "<br>Bye";

?>