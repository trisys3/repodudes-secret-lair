<data-title data-title="Authenticating..."></data-title>
<?php
	include("$_SERVER[DOCUMENT_ROOT]" . "/db.php");
	$login-query = $med_cs631_db->prepare("SELECT emp_type, emp_num FROM account_info WHERE username=? AND password=?");
	$login-query->bind_param("ss", $username, $password);
	// $username = 
?>