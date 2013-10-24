<?php include("header.php"); ?>

<div class="titlename" data-title="Log In Page" id="sign_in_page">

<div class="main">
<form id="SignIn" action="logIn.php" method="post"  >

	<div id="left_column">
  
		<ol>

		<li>
		<label for="npi">NPI</label> 

		<input  type="number" name="npi" autofocus id="npi" maxlength="10" required="required" />	
		</li>
		
		<li>
		<label for="taxId">Practice Tax ID</label> 

		<input  type="number" name="taxId" id="taxId" maxlength="9" required="required" />	
		</li>
		
		<br>
		
		<input type= "submit" id="log_in" value="SIGN IN" />
		
		<br><br>
		</ol>
	
	</div>

</form>
	

	<div id="right_column">
		
		New member &nbsp; &nbsp; <a href="form.html">Register here</a>
	</div>

</div>

</div>
</body>

</html>
