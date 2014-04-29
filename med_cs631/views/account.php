<div id="login" class="login-page">
	<data-title data-title="Log In"></data-title>
	<span><a id="signup-instead" href="">Sign up instead</a></span>
	<form id="login-form" name="login-form" method="post" action="" enctype="application/x-www-form-urlencoded">

		<div class="emp-type">
			<span class="emp-type-lab">I am a:</span>
			<label><input type="checkbox" name="emp-type[]" data-emp-type="physician" value="doctor" autofocus="autofocus" data-is-doctor="yes" />Physician</label>
			<label><input type="checkbox" name="emp-type[]" data-emp-type="surgeon" value="surgeon" data-is-doctor="yes" />Surgeon</label>
			<label><input type="checkbox" name="emp-type[]" data-emp-type="nurse" value="nurse" data-is-doctor="yes" />Nurse</label>
			<label><input type="checkbox" name="emp-type[]" data-emp-type="support" value="support" data-is-doctor="yes" />Support Staff</label>
			<label><input type="checkbox" name="emp-type[]" data-emp-type="patient" value="patient" data-is-doctor="no" />Patient</label>
		</div><br />

		<label id="user-log-lab">
			Username:
			<input type="text" id="user-log" class="user" name="user" autocomplete="on" placeholder="John Doe" required="required" />
		</label><br />

		<label id="pw-log-lab">
			Password:
			<input type="password" id="pw-log" class="pw" name="pw" autocomplete="off" placeholder="********" required="required" />
		</label><br />

		<button id="login-button" type="submit">Log In</button>

	</form>
</div>

<div id="signup" class="login-page">
	<data-title data-title="Sign Up"></data-title>
	<span><a id="login-instead" href="">Log in instead</a></span>
	<form id="signup-form" name="signup-form" method="post" action="" enctype="application/x-www-form-urlencoded">
		<div class="emp-type">
			<span class="emp-type-lab">I am a:</span>
			<label><input type="checkbox" name="emp-type[]" data-emp-type="physician" value="doctor" autofocus="autofocus" data-is-doctor="yes" />Physician</label>
			<label><input type="checkbox" name="emp-type[]" data-emp-type="surgeon" value="surgeon" data-is-doctor="yes" />Surgeon</label>
			<label><input type="checkbox" name="emp-type[]" data-emp-type="nurse" value="nurse" data-is-doctor="yes" />Nurse</label>
			<label><input type="checkbox" name="emp-type[]" data-emp-type="support" value="support" data-is-doctor="yes" />Support Staff</label>
			<label><input type="checkbox" name="emp-type[]" data-emp-type="patient" value="patient" data-is-doctor="no" />Patient</label>
		</div><br />

		<label id="user-sig-lab">
			Username:
			<input type="text" id="user-sig" class="user" name="user" autocomplete="on" placeholder="John Doe" required="required" />
		</label><br />
		<label id="pw-sig-lab">
			Password:
			<input type="password" id="pw-sig" class="pw" name="pw" autocomplete="off" placeholder="********" required="required" />
		</label><br />

		<label id="name-lab">
			Name:
			<input type="text" id="name" name="name" autocomplete="on" placeholder="My Name Is" />
		</label><br />
		<label id="gend-lab">
			Gender:
			<input type="text" id="gend" name="gend" autocomplete="on" placeholder="Gender" />
		</label><br />
		<label id="phone-num-lab">
			Phone Number:
			<input type="text" id="phone-num" name="phone-num" autocomplete="on" placeholder="Phone Number" />
		</label><br />
		<label id="soc-sec-lab">
			Social Security Number:
			<input type="password" id="soc-sec" name="soc-sec" autocomplete="off" placeholder="Social Security Number" />
		</label><br />


		<employee-extra class="signup-extra">
			<label id="emp-num-lab" class="employee-extra signup-extra">
				Employment Number:
				<input type="text" id="emp-num" name="emp-num" autocomplete="on" placeholder="Employment Number" />
			</label><br />
		</employee-extra>

		<doctor-extra class="signup-extra">
			<label id="doc-sal-lab" class="doctor-extra signup-extra">
				Salary:
				<input type="text" id="doc-sal" name="doc-sal" autocomplete="on" placeholder="Salary" />
			</label><br />
			<label id="doc-spec-lab" class="doctor-extra signup-extra">
				Specialty:
				<input type="text" id="doc-spec" name="doc-spec" autocomplete="on" placeholder="Specialty" />
			</label><br />
		</doctor-extra>

		<nurse-extra class="signup-extra">
			<label id="nurse-sal-lab" class="nurse-extra signup-extra">
				Salary:
				<input type="text" id="nurse-sal" name="nurse-sal" autocomplete="on" placeholder="Salary" />
			</label><br />
			<label id="nurse-grade-lab" class="nurse-extra signup-extra">
				Grade:
				<input type="text" id="nurse-grade" name="nurse-grade" autocomplete="on" placeholder="Grade" />
			</label><br />
			<label id="nurse-exp-lab" class="nurse-extra signup-extra">
				Experience:
				<input type="text" id="nurse-exp" name="nurse-exp" autocomplete="on" placeholder="Experience Level" />
			</label><br />
			<label id="nurse-surg-type-lab" class="nurse-extra signup-extra">
				Surgery Type:
				<input type="text" id="nurse-surg-type" name="nurse-surg-type" autocomplete="on" placeholder="Surgery Type" />
			</label><br />
		</nurse-extra>

		<surgeon-extra class="signup-extra">
			<label id="surg-spec-lab" class="surgeon-extra signup-extra">
				Specialty:
				<input type="text" id="surg-spec" name="surg-spec" autocomplete="on" placeholder="Specialty" />
			</label><br />
			<label id="surg-contr-type-lab" class="surgeon-extra signup-extra">
				Contract Type:
				<input type="text" id="surg-contr-type" name="surg-contr-type" autocomplete="on" placeholder="Contract Type" />
			</label><br />
			<label id="surg-contr-length-lab" class="surgeon-extra signup-extra">
				Contract Length:
				<input type="text" id="surg-contr-length" name="surg-contr-length" autocomplete="on" placeholder="Contract Length" />
			</label><br />
		</surgeon-extra>

		<staff-extra class="signup-extra">
		</staff-extra>

		<patient-extra class="signup-extra">
			<label id="pat-blood-type-lab" class="patient-extra signup-extra">
				Blood Type:
				<input type="text" id="pat-blood-type" name="pat-blood-type" autocomplete="on" placeholder="Blood Type" />
			</label><br />
			<label id="pat-nurse-lab" class="patient-extra signup-extra">
				Attending Nurse:
				<input type="text" id="pat-nurse" name="pat-nurse" autocomplete="on" placeholder="Nurse Jane" />
			</label><br />
			<label id="pat-pri-phys-lab" class="patient-extra signup-extra">
				Primary Care Physician:
				<input type="text" id="pat-pri-phys" name="pat-pri-phys" autocomplete="on" placeholder="Doctor John" />
			</label><br />
		</patient-extra>

		<button id="signup-button" type="submit">Sign Up</button>
	</form>
</div>

<div id="loggedout" class="login-page">
	<data-title data-title="Logged Out"></data-title>
	<span>Please <a id="login-link" href="">log in</a> or <a id="signup-link" href="">sign up</a>.</span>
</div>

<div id="loggedin" class="login-page">
	<data-title data-title="Login Successful"></data-title>
	<loc-sto></loc-sto>
	<a href="" id="logout">Log out</a>
	<?php include("$_SERVER[DOCUMENT_ROOT]" . "/views" . "$_SERVER[REQUEST_URI]"); ?>
</div>

<div id="logging-in" class="login-page">
	<data-title data-title="Logging In..."></data-title>
	<p><a href="" id="signup-again">Sign up</a> or <a href="" id="login-again">Log in as someone else</a></p>
	<?php include("$_SERVER[DOCUMENT_ROOT]" . "/views/logging-in.php"); ?>
</div>

<div id="signing-up" class="login-page">
	<data-title data-title="Signing up..."></data-title>
	<p><a href="" id="signup-again">Sign up</a> or <a href="" id="login-again">Log in</a> as someone else</p>
	<?php include("$_SERVER[DOCUMENT_ROOT]" . "/views/signing-up.php"); ?>
</div>

<div id="login-error" class="login-page">
	<data-title data-title="Login Error"></data-title>
	<span id="sess-gone">Please don't modify the session variable.</span>
	<span><a id="login-wrong" href="">back to login page</a> or <a id="signup-wrong" href="">signup page</a></span>
</div>