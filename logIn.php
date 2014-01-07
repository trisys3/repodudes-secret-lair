<?php include("partials/header.php"); ?>

<div class="titlename stylesheet" data-title="Redirecting..." data-css="">

<?php

//Run a PHP script that connects to Database.


include ("account.php") ;

// include("user.php");

// PHP script that get data from the server/browser

$npi = $_REQUEST ['npi'];
$taxId = $_REQUEST ['taxId'];


//execute select query
$sql = "select * from providers where NPI = $npi and Tax_ID = $taxId";

($result = $njhitec_db->query($sql)) or die($njhitec_db->error());

$number = $result->num_rows;
// print"<br>number of rows: " . $number;

if($number > 0 ){

	$_SESSION["npi"] = $npi;
	$_SESSION["taxId"] = $taxId;
	
	//redirect user to assessment tool
	// print"Redirect user to assessment tool";
	header("Location: assessform.php");
}
 else {
    print "Invalid username or password. Try again<br>";
	echo'<a href="Sign_In.php" alt="back to form html">GO BACK </a>';
}

?>

</div>

</body>

</html>
