<?php include("partials/header.php"); ?>

	<div class="titlename stylesheet" data-title="Redirecting..." data-css="">

		<p>Redirecting to assessment page...</p>

<?php 

//Run a PHP script that connects to Database.


include ("account.php") ;


// PHP script that get data from the server/browser



$npi = $_REQUEST ['npi'];

$tax_id = $_REQUEST ['tax_id'];

$provider_name = $_REQUEST ['provider_name'];

$goLive_date = $_REQUEST ['goLive_date'];

$email = $_REQUEST ['email'];

$ehr_vendor = $_REQUEST ['ehr_vendor'];

$register = $_REQUEST ['register'];

$type_medicare = $_REQUEST ['type_medicare'];



$practice_name = $_REQUEST ['practice_name'];
	
	$s = "select * from providers where NPI = $npi and Tax_ID = $tax_id ";
	($r = $njhitec_db->query($s)) or die($njhitec_db->error);


	$number = $r->num_rows;

	if($number > 0 ){
		header("Location: Sign_In.php"); 
	}

	else {




		$sql = "insert into providers values ( $npi, $tax_id , '$provider_name', '$goLive_date', '$email', '$ehr_vendor',

										'$register', '$type_medicare')";

																	

	   	($result = $njhitec_db->query($sql)) or die($njhitec_db->error);


	  	 //print "<br>Successfully inserted into Provider table";

	   

		$ins = "insert into practices values ( $tax_id, '$practice_name' )";

		($ret = $njhitec_db->query($ins)) or die($njhitec_db->error);
	

		//redirect user to assessment tool

	

		header("Location: assessform.php"); 
	}

?>

	</div>

</body>

</html>

