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

		<button id="signup-button" type="submit">Sign Up</button>
	</form>
</div>

<div id="loggedout" class="login-page">
	<data-title data-title="Logged Out"></data-title>
	<span>Please <a id="login-link" href="">log in</a> or <a id="signup-link" href="">sign up</a>.</span>
</div>

<div id="loggedin" class="login-page">
	<data-title data-title="Login Successful"></data-title>
	<p><a href="" id="signup-again">Sign Up</a>   <a href="" id="login-again">Log in Again</a>
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