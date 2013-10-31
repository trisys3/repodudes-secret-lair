<?php include("header.php"); ?>

	<div class="titlename" data-title="Redirecting...">

		<p>Redirecting to results page...</p>

<?php

include("account.php");

$data = $_POST;

$assess_id;
$assess_query;
$assess_res;

$assess_query = "SELECT `Assessment ID` FROM `results` WHERE `NPI`=$_SESSION[npi] ORDER BY `NPI` DESC LIMIT 1";

$assess_res = $njhitec_db->query($assess_query);

if($assess_res->num_rows > 0) {
	$assess_row = $assess_res->fetch_array();
}
else {
	$assess_row = Array(
		0 => '0',
		'Assessment ID' => '0',
	);
}
$assess_id = $assess_row["Assessment ID"] + 1;

// start of INSERT statement

$obj_res_query = "";

for($x = 1; $x < 25; $x++) {

	// values from form for putting into SQL
	if($data["numer{$x}"] == "yes") {
		$percomp = 1;
		$exc = 0;
	}
	else if($data["numer{$x}"] == "no") {
		$percomp = 0;
		$exc = 0;
	}
	else if($data["numer{$x}"] == "excluded") {
		$percomp = 0;
		$exc = 1;
	}
	else {
		$percomp = $data["numer{$x}"];
		$exc = 0;
	}
	if($percomp > 0 && $percomp < 1) {
		$percomp = $percomp;
	}
	else if($percomp >= 1 && $percomp <= 100) {
		$percomp = $percomp / 100;
	}
	else {
		$percomp = 0;
	}
	$totam = $data["denom{$x}"];
	$comms = $data["comments{$x}"];
	$stat = $data["status{$x}"];

	// SQL INSERT statement
	$obj_res_query .= "INSERT INTO `objective results` (`Assessment ID`, `Objective ID`, `Percent Completed`, `Total Amount`, `Excluded`, `Comments`, `Status`) ";
	$obj_res_query .= "VALUES ($assess_id, $x, $percomp, $totam, $exc, '$comms', '$stat');";
}

$njhitec_db->multi_query($obj_res_query);

header("refresh:0; url= ReviewPage.php");

?>

	</div>

</body>

</html>