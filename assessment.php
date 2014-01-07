<?php include("partials/header.php"); ?>

	<div class="titlename stylesheet bodyclass" data-title="Redirecting..." data-css="" data-body-class="assessment_body">

		<p>Redirecting to results page...</p>

<?php

include("account.php");

$data = $_POST;

$assess_id;
$assess_query;
$assess_res;
$submitted_date = date("F, j Y");
$met_with = $data["met_with"];
$taken_by = $data["taken_by"];

$assess_query = "SELECT `Assessment ID`, `Assessment Finished` FROM `results` WHERE `NPI` = $_SESSION[npi] ORDER BY `Assessment ID` DESC LIMIT 1";
$assess_res = $njhitec_db->query($assess_query);

if($assess_res->num_rows > 0) {
	$assess_row = $assess_res->fetch_array();
	if($assess_row["Assessment Finished"] == 0) {
		$assess_saved = true;
	}
	else {
		$assess_saved = false;
	}
}
else {
	$assess_row = Array(
		0 => '0',
		'Assessment ID' => '0',
		1 => '1',
		'Assessment Finished' => '1',
	);
	$assess_saved = false;
}

$assess_npi_query = "SELECT `Assessment ID`, `Assessment Finished` FROM `results` ORDER BY `Assessment ID` DESC LIMIT 1";
		$assess_npi_row = $njhitec_db->query($assess_npi_query)->fetch_array();
		$assess_id = $assess_npi_row["Assessment ID"] + 1;

if($assess_saved == false) {
	$results_query = "INSERT INTO `results` (`Assessment ID`, `NPI`, `Start Date`, `Submission Date`, `Met With`, `Assessment Taken By`, `Assessment Finished`)
										VALUES ($assess_id, $_SESSION[npi], '$met_with', '$taken_by', '$submitted_date', '$submitted_date', 1)";
}
else {
	$results_query = "INSERT INTO `results` (`Assessment ID`, `NPI`, `Submission Date`, `Met With`, `Assessment Taken By`, `Assessment Finished`)
										VALUES ($assess_id, $_SESSION[npi], '$met_with', '$taken_by', '$submitted_date', 1";
}
$njhitec_db->query($results_query);
	
// start of INSERT statement
$obj_res_query = "";

for($x = 1; $x <= 25; $x++) {

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
		$percomp = $data["numer{$x}"] / $data["denom{$x}"];
		$exc = 0;
	}
	$totam = $data["denom{$x}"];
	$comms = $data["comments{$x}"];
	$stat = $data["status{$x}"];

	// SQL INSERT statement
	$obj_res_query .= "INSERT INTO `objective results` (`Assessment ID`, `Objective ID`, `Percent Completed`, `Total Amount`, `Excluded`, `Comments`, `Status`)
										 VALUES ($assess_id, $x, $percomp, $totam, $exc, '$comms', '$stat');";
}

$njhitec_db->multi_query($obj_res_query);

header("refresh:0; url= ReviewPage.php");

?>

	</div>

</body>

</html>