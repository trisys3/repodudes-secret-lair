<?php

include("account.php");

$data = $_POST;

$assess_id;
$assess_query;
$assess_res;

$assess_query = "SELECT `Assessment ID` FROM `results` WHERE NPI=$user.npi ORDER BY NPI DESC LIMIT 1";

$assess_res = $njhitec_db->query($assess_query);

if($assess_res->num_rows > 0) {
	$assess_id = $assess_res->fetch_array();
}

// start of INSERT statement

$obj_res_query = "";

for($x = 1; $x < 25; $x++) {

	// values from form for putting into SQL
	if($data["numer" + $x] == "yes") {
		$percomp = 1;
		$exc = 0;
	}
	else if($data["numer" + $x] == "no") {
		$percomp = 0;
		$exc = 0;
	}
	else if($data["numer" + $x] == "excluded") {
		$percomp = 0;
		$exc = 1;
	}
	else {
		$percomp = $data["numer" + $x];
		$exc = 0;
	}
	if($data["denom" + $x] >= 0 && $data["denom" + $x] < 1) {
		$totam = $data["denom" + $x];
	}
	else if($data["denom" + $x] >= 1 && $data["denom" + $x] <= 100) {
		$totam = $data["denom" + $x] / 100;
	}
	else if(preg_match(/^1?\d+{2}\(?=%)$/, $data["denom" + $x], $matches) == true) {
		$totam = $matches[0];
	}
	else {
		$totam = 0;
	}
	$comms = $data["comments" + $x];
	$stat = $data["status" + $x];

	// SQL INSERT statement
	$obj_res_query .= "INSERT INTO objective_results (`Assessment ID`, `Objective ID`, `Percent Completed`, `Total Amount`, `Excluded`, `Comments`, `Status`)";
	$obj_res_query .= "VALUES ($assess_id, $x, $percomp, $totam, $exc, '$comms', '$stat');";
}

$njhitec_db->multi_query($obj_res_query);

header("refresh:0; url= assessform.php");

?>