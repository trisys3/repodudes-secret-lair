<?php
	
	include("account.php");
	$assessdata = $_REQUEST["assessdata"];

	$assessquery = "SELECT `Objective ID`, `Objective Description`, `Short Name`, `Numerator Description`, `Denominator Description`, `Threshold Description`, `YesNo or Number`, `Exclusion Checkbox`, `Exclusion Requirements`
	FROM `objectives`";
	if($assessdata["categ"] == "1") {
		$assessquery .= "WHERE `Objective Categories ID`=1
										 LIMIT $assessdata[limit]";
	}
	else {
		$assessquery .= "WHERE `Objective Categories ID` = $assessdata[categ]";
	}

	unset($assessdata["categ"], $assessdata["limit"]);

	foreach($njhitec_db->query($assessquery) as $assessrow => $assessresult) {
		array_push($assessdata, $assessresult);
	}

	echo json_encode($assessdata);

?>