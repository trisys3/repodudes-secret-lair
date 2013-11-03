<?php include("header.php"); ?>
	<div class="titlename" data-title="">
				<br><br>
		<form id="form" action="add_info.php" method="post"  >

			<div id="content">
			  
				<ol>
					
					<li>
						<label for="tax_id">Practice Tax ID</label><span class="redreq">*</span>

						<input  type="number" name="tax_id" pattern="\d*" autofocus="autofocus" autocomplete="on" id="tax_id" maxlength="9" required="required" />
					</li>

					<li>
						<label for="practice_name">Practice Name</label><span class="redreq">*</span>

						<input  type="text" name="practice_name" id="practice_name" autocomplete="on" required="required" />	
					</li>
					
					<li>
						<label for="provider_name">Provider Name</label><span class="redreq">*</span>

						<input  type="text" name="provider_name" id="provider_name" autocomplete="on" required="required" />	
					</li>
					
					<li>
						<label for="npi">NPI</label><span class="redreq">*</span>

						<input  type="number" name="npi" id="npi" pattern="\d*" maxlength="10" autocomplete="on" required="required" />	
					</li>
					<li>
						<label for="assessed_by">Assessment Taken By</label><span class="redreq">*</span>

						<input  type="text" name="assessed_by" id="assessed_by" autocomplete="on" required="required" />	
					</li>
					
					<li>
						<label for="met_with">Met With</label><span class="redreq">*</span>

						<input  type="text" name="met_with" id="met_with" autocomplete="on" />
					</li>
					
					<li>
						<label for="assess_date">Assessment Date</label><span class="redreq">*</span>

						<input  type="date" name="assess_date" id="assess_date" placeholder="mm/dd/yyyy" required="required" 
						pattern="^(0[1-9]|1[0-2])/(0[1-9]|[12][0-9]|3[01])/((19|20)\d\d)" autocomplete="on" />		
					</li>
					
					<li>
						<label for="goLive_date">Product Go Live Date</label><span class="redreq">*</span>

						<input  type="date" name="goLive_date" id="goLive_date" placeholder="mm/dd/yyyy" pattern="^(0[1-9]|1[0-2])/(0[1-9]|[12][0-9]|3[01])/((19|20)\d\d)" autocomplete="on" />
					</li>
					
					<li>
						<label for="email">Contact E-mail Address</label><span class="redreq">*</span>

						<input type="email" name="email" id="email" autocomplete="on" required="required" pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$" autocomplete="on" /><br>
					</li>
					
					<li>
						<label for="vendor">Vendor</label><span class="redreq">*</span>

						<input  type="text" name="vendor" id="vendor" autocomplete="on" required="required" />	
					</li>
					
					<li>
						<label for="Product">Product</label><span class="redreq">*</span>

						<input  type="text" name="product" id="product" autocomplete="on" required="required" />	
					</li>
					
					<li>
						<label for="version_num">Version Number</label><span class="redreq">*</span>

						<input  type="text" name="version_num" id="version_num" autocomplete="on" />	
					</li>
					
					<li>
						<label for="register">CMS Registered</label><span class="redreq">*</span>

						<select name="register">
							<option value="no"></option>
						  <option value="yes">Yes</option>
						  <option value="no">No</option>
						</select>
					</li>
					
					<li>
						<label for="certificate_num">ONC Certification Number (On CHPL)</label><span class="redreq">*</span>
						<input type="text" name="certificate_num" id="certificate_num" required="required" autocomplete="on" />
					</li>
					<br>
					<li>
						<label for="medicare">Medicare or Medicaid</label><span class="redreq">*</span>

						<select name="type_medicare">
						  <option value="medicare">Medicare</option>
						  <option value="medicaid">Medicaid</option>
						  <option value="neither">Neither</option>
						</select>
					</li>
					
					<br><br><br>
					<div id="button">
						<input type="submit" id="submit" value="SUBMIT" />
					</div>
				</ol>
				
			</div>
		</form>
	</div>

</body>

</html>

	
