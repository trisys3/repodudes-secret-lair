<?php

//Run a PHP script that connects to Database.


include ("account.php");


// PHP script that get data from the server/browser

$npi = $_REQUEST ['npi'];
$tax_id = $_REQUEST ['tax_id'];
$provider_name = $_REQUEST ['provider_name'];
$goLive_date = $_REQUEST ['goLive_date'];
$email = $_REQUEST ['email'];
$vendor = $_REQUEST ['vendor'];

$product = $_REQUEST ['product'];
$version_num = $_REQUEST ['version_num'];
$register = $_REQUEST ['register'];
$certificate_num = $_REQUEST ['certificate_num'];
$type_medicare = $_REQUEST ['type_medicare'];

$practice_name = $_REQUEST ['practice_name'];




	$sql = "insert into providers values ( $npi, $tax_id , '$provider_name', '$goLive_date', '$email', '$vendor', '$product', 
										'$version_num', '$register', '$certificate_num', '$type_medicare')";
																	
	   mysql_query ( $sql ) or die ( mysql_error() ) ;
	   print "<br>Successfully inserted into Provider table";
	   
	$ins = "insert into practices values ( $tax_id, '$practice_name' )";
	
	//redirect user to assessment tool
	
	header("refresh:4; url= Assessment.html"); 
	
	


?>
