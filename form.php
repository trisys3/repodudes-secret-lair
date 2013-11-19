<?php include("header.php"); ?>

	<div class="titlename" data-title="Sign Up">

				
<div class="shadow-wrapper">
		
		<div class="wrapper">
			<header>
				
				<div class="cf">

					</div>
				<div id="logo">
					<a href="/">
						<img src="logo.png" alt="NJ-HITEC" />
					</a>
				</div>
				<div id="search">
			              <a href="http://www.njhitec.org/news/" style="text-decoration:none; color:#ee3524; font-size:16px; font-family: arial, helvetica, sans-serif;">News</a> | 
					<a href="http://www.njhitec.org/events/" style="text-decoration:none; color:#ee3524; font-size:16px; font-family: arial, helvetica, sans-serif;"> Events</a> | 
					<a href="http://www.njhitec.org/blog" style="text-decoration:none; color:#ee3524; font-size:16px; font-family: arial, helvetica, sans-serif;">Blog</a>
					<br><br>
					<a href="https://www.mynjhitec.com" target="_blank" class="portal">Member Portal</a>

				</div>
				<div class="cf"></div>
			</header>
			<nav id="primaryNav">
					<div class="amiant-css3-menu-navigation-bar">
		
						<ul class="navigation-menu nav">
							<li class="nav-selected nav-path-selected "><a class="nav-selected nav-path-selected "  href="http://www.njhitec.org/">Home</a></li>
							<li class="nav-with-sub"><a class="nav-with-sub" href="http://www.njhitec.org/about-us/our-mission-and-vision/"  >About Us </a></li>
							<li class="nav-with-sub"><a class="nav-with-sub" href="http://www.njhitec.org/services/"  >Services </a></li>
							<li class="nav-with-sub"><a class="nav-with-sub" href="http://www.njhitec.org/membership/"  >Membership </a></li>
							<li class="nav-with-sub"><a class="nav-with-sub" href="http://www.njhitec.org/providers/cms-eligibility/"  >Providers </a></li>
							<li class="nav-with-sub"><a class="nav-with-sub" href="http://www.njhitec.org/partners/health-industry-partners/"  >Partners </a></li>
							<li class="nav-with-sub"><a class="nav-with-sub" href="http://www.njhitec.org/patients/"  >Patients </a></li>
							<li class=""><a class="" href="http://www.njhitec.org/membership/"  >Join Now</a></li>
						</ul>


					</div>
			</nav>

	<div id="form-content">		
		<form id="form" action="add_info.php" method="post"> 
			<h2>Create Your Account</h2>  

				<ol>

					

					<li>

						<label for="tax_id">Practice Tax ID</label><span class="redreq">*</span>



						<input  type="text" name="tax_id" autofocus="autofocus" autocomplete="on" id="tax_id" maxlength="9" size="9" required="required" pattern="^[0-9]{9}$" />

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



						<input  type="text" name="npi" id="npi" maxlength="10" size="10" autocomplete="on" required="required" pattern="^[0-9]{10}$"/>	

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

						<label for="ehr_vendor">EHR Vendor</label><span class="redreq">*</span>



						<input  type="text" name="ehr_vendor" id="ehr_vendor" autocomplete="on" required="required" />	

					</li>

					

					<li>

						<label for="register">CMS Registered</label><span class="redreq">*</span>

						<select name="register">

							<option value="unknown">Unknown</option>

						  <option value="yes">Yes</option>

						  <option value="no">No</option>

						</select>

					</li>

					<li>

						<label for="medicare">Medicare or Medicaid</label><span class="redreq">*</span>

						<select name="type_medicare">

							<option value="unknown">Unknown</option>

						  <option value="medicare">Medicare</option>

						  <option value="medicaid">Medicaid</option>

						  <option value="neither">Neither</option>

						</select>

					</li>

					

					<br><br>

					<div id="button">

						<input type="submit" id="submit" value="SUBMIT" />

					</div>

				</ol>
			</form>
				

		</div>

		

	
	
	<div class="cf"></div>

	
	<footer>
				<div id="footerLinks">
					<div>
						<ul>
							<li><a href="/index.php/contact-us/" style="">Contact Us</a></li>
							<li><a href="/index.php/employment-opportunities/" style="">Employment Opportunities</a></li>
							<li><a href="http://www.njhitec.org/Register/MemberRegistration.php" title="Please call us at 973-642-4055" style="">Become a Member</a></li>
							<li><a href="/index.php/sitemap/" style="">Site Map</a></li>
						</ul>
						<div class="cf"></div>
					</div>
					<div id="contactInfo">
						<strong>
							New Jersey Health Information Technology Extension Center (NJ-HITEC)
						</strong>
						211 Warren Street, Suite 307
						Newark, New Jersey 07103<br />
						Phone: 973-642-4055 / Fax: 973-622-2075 / <a href="mailto:info@njhitec.org" style="">info@njhitec.org</a>
					</div>
					<ul id="social">
						<li class="facebook">
							<a href="https://www.facebook.com/pages/NJ-Health-Information-Technology-Extension-Center/178123395570080?sk=wall">Facebook</a>
						</li>
						<li class="twitter">
							<a href="https://twitter.com/nj_hitec">Twitter</a>
						</li>
						<li class="linkedin">
							<a href="http://www.linkedin.com/company/new-jersey's-regional-extension-center-at-njit-newark?trk=fc_badge">LinkedIn</a>
						</li>
					</ul>
				</div>
				<div class="footer-logos"></div>
				<div class="cf"></div>
			</footer>
		</div>
	</div>



</body>



</html>



	

