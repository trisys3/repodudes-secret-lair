<data-title data-title="Authenticating..."></data-title>
<?php
	$username = $_REQUEST["user"];
	$password = $_REQUEST["pw"];
	include("$_SERVER[DOCUMENT_ROOT]" . "/db.php");
	$login_type_1 = $med_cs631_db->prepare("SELECT emp_type, emp_num FROM account_info WHERE username=? AND password=?");
	$login_type_1->bind_param("ss", $username, $password);
	$login_type_1->execute();
	$login_type_1->bind_result($emp_type_db, $emp_num);
	$login_type_1->store_result();
	if($login_type_1->num_rows > 2) {
		?>
		<p>It seems you have more than 1 account in the system. Please <a href="mailto:admin@med.cs631">contact the system admin</a>.</p>
		<p><a href="" class="signup-new">Sign up</a> or <a href="" class="login-soe">login as someone else</a></p>
		<?php
	}
	else if($login_type_1->num_rows < 1) {
		?>
		<p id="wrong-login">The username or password was not valid. Please <a href="" class="signup-new">sign up</a> or try
		<a href="" class="login-soe">logging in</a> again.</p>
		<?php
	}
	$login_type_1->fetch();
	$login_type_1->close();
	if($emp_type_db == "patient") {
		$emp_type_patient = true;
		$patient_num = $emp_num;
		unset($emp_num);
		$login_cross = $med_cs631_db->prepare("SELECT employment_num FROM staff_patients WHERE patient_num=?");
		$login_cross->bind_param("s", $patient_num);
		$login_cross->execute();
		$login_cross->bind_result($emp_num);
		$login_cross->store_result();
		if($login_cross->num_rows > 1) {
			?>
			<p>It seems you have more than 1 account in the system. Please <a href="mailto:admin@med.cs631">contact the system admin</a>.</p>
			<?php
		}
		$login_cross->fetch();
		$login_cross->close();
		if(isset($emp_num)) {
			$login_backcross = $med_cs631_db->prepare("SELECT emp_type FROM account_info WHERE emp_num=?");
			$login_backcross->bind_param("s", $emp_num);
			$login_backcross->execute();
			$login_backcross->bind_result($emp_type_employee);
			$login_backcross->store_result();
			if($login_backcross->num_rows > 1) {
				?>
				<p>It seems you have more than 1 account in the system. Please <a href="mailto:admin@med.cs631">contact the system admin</a>.</p>
				<?php
			}
			$login_backcross->fetch();
			$login_backcross->close();
		}
	}
	else {
		$emp_type_employee = $emp_type_db;
		$login_cross = $med_cs631_db->prepare("SELECT patient_num FROM staff_patients WHERE employment_num=?");
		$login_cross->bind_param("s", $emp_num);
		$login_cross->execute();
		$login_cross->bind_result($patient_num);
		$login_cross->store_result();
		if($login_cross->num_rows > 1) {
			?>
			<p>It seems you have more than 1 account in the system. Please <a href="mailto:admin@med.cs631">contact the system admin</a>.</p>
			<?php
		}
		$login_cross->fetch();
		$login_cross->close();
		if(isset($patient_num)) {
			$login_backcross = $med_cs631_db->prepare("SELECT emp_type FROM account_info WHERE emp_num=?");
			$login_backcross->bind_param("s", $patient_num);
			$login_backcross->execute();
			$login_backcross->store_result();
			if($login_backcross->num_rows > 1) {
				?>
				<p>It seems you have more than 1 account in the system. Please <a href="mailto:admin@med.cs631">contact the system admin</a>.</p>
				<?php
			}
			if($login_backcross->num_rows > 0) {
				$emp_type_patient = true;
			}
			$login_backcross->close();
		}
	}
	if(isset($_REQUEST["emp-type"])) {
		$emp_type_user = $_REQUEST["emp-type"];
		if(isset($emp_type_employee) && (!isset($emp_type_user[0]) || $emp_type_employee !== $emp_type_user[0]) && (!isset($emp_type_user[1]) || $emp_type_employee !== $emp_type_user[1])) {
			?>
			<p id="spec-match-not">Our records indicate that your specialty does not match the specialty you logged in as. Would you like to
				<a id="keep-logging-in" href="">keep logging in with your reported specialty</a>, <a href="mailto:admin@med.cs631" id="login-change">contact the admin to change your
				specialty</a>, <a href="" class="login-soe">log in as someone else</a>, or <a href="" class="signup-new">sign up with
				a new identity</a>?
			</p>
			<?php
		}
		else {
			?>
			<div id="page"></div>
			<?php
		}
	}
?>