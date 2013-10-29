<?php

//Run a PHP script that connects to Database.


include ("account.php") ;

// include("user.php");

// PHP script that get data from the server/browser

$npi = $_REQUEST ['npi'];
$taxId = $_REQUEST ['taxId'];


//execute select query
$sql = "select * from providers where NPI = $npi and Tax_ID = $taxId ";

($result = $njhitec_db->query($sql)) or die(mysql_error());

$number = $result->num_rows;
// print"<br>number of rows: " . $number;

if($number > 0 ){
	
	//redirect user to assessment tool
	// print"Redirect user to assessment tool";
	header("refresh:0; url= assessform.php");
}
 else {
    print "Invalid username or password. Try again<br>";
	echo'<a href="Sign_In.php" alt="back to form html">GO BACK </a>';
}

?>
