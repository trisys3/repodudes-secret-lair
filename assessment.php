<?php

include("account.php");

$resid;
$res_query;
$res_res;

$res_query = "SELECT `Assessment ID` FROM `results` WHERE NPI=$user.npi ORDER BY NPI DESC LIMIT 1";

$res_res = $njhitec_db->query($res_query);

if($res_res->num_rows > 0) {
	$resid = $res_res->fetch_array();
}

$query = "INSERT INTO objective_results (`Assessment ID`, `Objective ID`, `Total Amount`, `Percent Completed`, `Excluded`, `Comments`";

$njhitec_db->multi_query($query);