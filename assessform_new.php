<?php include("partials/header.php"); ?>

		<div class="titlename stylesheet" data-title="Stage 1 Meaningful Use Assessment" id="assessform_page" data-css="">
											

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
							<li class="nav-selected nav-path-selected "><a class="nav-selected nav-path-selected "  href="http://www.njhitec.org/Capstone/NJ_HITEC/Sign_In.php">Home</a></li>
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
			
			<div id="header">

				<h1>Stage 1 Meaningful Use Assessment</h1>

			</div>



			<br />



			<form id="assessform" action="assessment.php" method="post" enctype="application/x-www-form-urlencoded" name="assessform">

				<div data-test-ques="met_with">

					<label data-test-num="met_with" for="met_with">Met With </label>

					<input type="text" name="met_with" id="met_with" value="" required="required" />

				</div><br /><br />

				<div data-test-ques="taken_by">

					<label data-test-num="taken_by" for="taken_by">Assessment Taken By </label>

					<input type="text" name="taken_by" id="taken_by" value="" required="required" />

				</div><br /><br />

				<assess-questions data-category-id="1" data-assess-limit="0,7">

				</assess-questions>

				<button type="submit" name="submit-button" id="submit-button" data-button-type="submit">Submit</button>

				<button type="button" data-button-type="previous">Prev <</button>

				<button type="button" data-button-type="next">Next ></button>

				<button type="button" data-button-type="save">Save</button><br />

			</form>

		

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

