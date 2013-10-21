<?php

//Run a PHP script that connects to Database.


include ("account.php") ;

// PHP script that get data from the server/browser

$npi = $_REQUEST ['npi'];
$taxId = $_REQUEST ['taxId'];


//execute select query
$sql = "select * from providers where NPI = $npi and Tax_ID = $taxId ";

($result = mysql_query($sql)) or die(mysql_error());

$number = mysql_num_rows($result);
print"<br>number of row " . $number;

if($number > 0 ){
	
	//redirect user to assessment tool
	print"Redirect user to assessment tool";
	header("refresh:2; url= Assessment.html"); 
}
 else {
    print "Invalid username or password. Try again<br>";
	echo'<a href="Sign_In.html" alt="back to form html">GO BACK </a>';
}

?>
