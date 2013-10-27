<?php

include("account_old.php");

$resid;
$res_query;
$res_res;

$res_query = "SELECT `Assessment ID` FROM `results` WHERE NPI=$user.npi ORDER BY NPI DESC LIMIT 1";

$res_res = mysqli_query($res_query);

if(mysqli_num_rows($res_res) > 0) {
	$resid = mysqli_fetch_array($res_res);
}

$query = "INSERT INTO objective_results (`Assessment ID`, `Objective ID`, ";

mysqli_query()