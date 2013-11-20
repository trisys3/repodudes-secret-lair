
<?php include("partials/header.php") ?>



<meta http-equiv="Content-Type" content="charset=utf-8">

<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="toggle.js"></script>

<link rel="stylesheet" type="text/css" href="http://www.njhitec.org/Capstone/NJ_HITEC/css/style.css">

</head>
	<div class="titlename stylesheet" data-title="Results Page" data-css=""  >
		
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
					<!--<form action="/search" method="get">
						<input type="search" id="txtSearch" name="query" placeholder=" Search...">
					</form> -->
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
	
	<?php
	
	include("account.php");
	

	$query4="SELECT * FROM `objective results` ORDER BY `Assessment ID` DESC LIMIT 1";
	
	$result4=$njhitec_db->query($query4) or die($njhitec_db->error()) ;
	$row4 = $result4->fetch_array();
	
	$assess_number= $row4['Assessment ID'];

	$query="SELECT * FROM `objective results` WHERE `Assessment ID`='$assess_number'";
	$result=$njhitec_db->query($query) or die($njhitec_db->error()) ;

	

	$query2="SELECT * FROM `objective results` WHERE `Assessment ID`='$assess_number'";
	$result2=$njhitec_db->query($query) or die($njhitec_db->error()); 

	
	$query3="SELECT * FROM `objectives` ";
	$result3=$njhitec_db->query($query3) or die($njhitec_db->error()) ;
	

	$query_cat="SELECT * FROM `objective categories`";
	$result_cat=$njhitec_db->query($query_cat) or die($njhitec_db->error()) ;

?>

	<?php $Core=0; $Menu=0; $Public=0;?>
</head>

<div id="body">

<?php while($row2 = $result2->fetch_array()){  
	if( $row2['Objective ID'] == '1' && $assess_number = $row2['Assessment ID'] && $row2['Percent Completed'] * 100 >= '30' ){
		$Core++;
		}
	if( $row2['Objective ID'] == '2' && $assess_number = $row2['Assessment ID'] && $row2['Percent Completed'] * 100 == '100' ){
		$Core++;
		}
	if( $row2['Objective ID'] == '3' && $assess_number = $row2['Assessment ID'] && $row2['Percent Completed'] * 100 >= '40' ){
		$Core++;
		}
	if( $row2['Objective ID'] == '4' && $assess_number = $row2['Assessment ID'] && $row2['Percent Completed'] * 100 >= '50' ){
		$Core++;
		}
	if( $row2['Objective ID'] == '5' && $assess_number = $row2['Assessment ID'] && $row2['Percent Completed'] * 100 >= '80' ){
		$Core++;
		}
	if( $row2['Objective ID'] == '6' &&  $assess_number = $row2['Assessment ID'] && $row2['Percent Completed'] * 100 >= '80' ){
		$Core++;
		}
	if( $row2['Objective ID'] == '7' && $assess_number = $row2['Assessment ID'] && $row2['Percent Completed'] * 100 >= '80' ){
		$Core++;
		}
	if( $row2['Objective ID'] == '8' && $assess_number = $row2['Assessment ID'] && $row2['Percent Completed'] * 100 >= '50' ){
		$Core++;
		}
	if( $row2['Objective ID'] == '9' && $assess_number = $row2['Assessment ID'] && $row2['Percent Completed'] * 100 >= '50' ){
		$Core++;
		}
	if( $row2['Objective ID'] == '10' && $assess_number = $row2['Assessment ID'] && $row2['Percent Completed'] * 100 == '100' ){
		$Core++;
		}
	if( $row2['Objective ID'] == '11' && $assess_number = $row2['Assessment ID'] && $row2['Percent Completed'] * 100 == '100' ){
		//$Core++;
		}	
	if( $row2['Objective ID'] == '12' && $assess_number = $row2['Assessment ID'] && $row2['Percent Completed'] * 100 >= '50' ){
		$Core++;
		}
	if( $row2['Objective ID'] == '13' && $assess_number = $row2['Assessment ID'] && $row2['Percent Completed'] * 100 >= '50' ){
		$Core++;
		}
	if( $row2['Objective ID'] == '14' && $assess_number = $row2['Assessment ID'] && $row2['Percent Completed'] * 100 >= '0' ){
		//$Core++;
		}
	if( $row2['Objective ID'] == '15' && $assess_number = $row2['Assessment ID'] && $row2['Percent Completed'] * 100 == '100' ){
		$Core++;
		}
	if( $row2['Objective ID'] == '16' && $assess_number = $row2['Assessment ID'] && $row2['Percent Completed'] * 100 == '100' ){
		$Menu++;
		}
	if( $row2['Objective ID'] == '17' && $assess_number = $row2['Assessment ID'] && $row2['Percent Completed'] * 100 >= '40' ){
		$Menu++;
		}
	if($row2['Objective ID'] == '18' && $assess_number = $row2['Assessment ID'] && $row2['Percent Completed'] * 100 == '100' ){
		$Menu++;
		}
	if( $row2['Objective ID'] == '19' && $assess_number = $row2['Assessment ID'] && $row2['Percent Completed'] * 100 >= '20' ){
		$Menu++;
		}
	if( $row2['Objective ID'] == '20' && $assess_number = $row2['Assessment ID'] && $row2['Percent Completed'] * 100 >= '10' ){
		$Menu++;
		}
	if( $row2['Objective ID'] == '21' && $assess_number = $row2['Assessment ID'] && $row2['Percent Completed'] * 100 >= '10' ){
		$Menu++;
		}
	if( $row2['Objective ID'] == '22' && $assess_number = $row2['Assessment ID'] && $row2['Percent Completed'] * 100 >= '50' ){
		$Menu++;
		}
	if( $row2['Objective ID'] == '23' && $assess_number = $row2['Assessment ID'] && $row2['Percent Completed'] * 100 >= '50' ){
		$Menu++;
		}
	if( $row2['Objective ID'] == '24' && $assess_number = $row2['Assessment ID'] && $row2['Percent Completed'] * 100 >= '100' ){
		$Public++;
		}
	if( $row2['Objective ID'] == '25' && $assess_number = $row2['Assessment ID'] && $row2['Percent Completed'] * 100 >= '100' ){
		$Public++;
		}
	
	}?>


<!--<aside>
<h1>Total Results </h1> 
<table id="hor-minimalist-b" summary="Final Data">
<thead>
    	<tr>
			<th scope="col">Criteria</th>
			<th scope="col">Achieved</th>
        	<th scope="col">Progress</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
	
	<tbody>
    	<tr>
			
			<td>Core Criteria Achieved</td>
			<td><?php echo $Core; ?> out of 13</td>
        	<td><?php echo number_format(($Core/13)*100); ?>%</td>
			<td <?php if ((13 - $Core) <= '0') {echo "bgcolor='#78AB46'";} else{echo "bgcolor='#cc0000'";}?> > 
			<?php if ((13 - $Core) <= '0') {echo "You have met the requirements";} else{echo "Need to meet ".(13-$Core)." more core requirements";}?> 
			</td>
			
        </tr>
		
		<tr>
			
			<td>Menu Criteria Achieved</td>
			<td><?php echo $Menu; ?> out of 8</td>
        	<td><?php echo number_format((($Menu/8)*100)); ?>%</td>
			<td <?php if ((8 - $Menu) <= '0') {echo "bgcolor='#78AB46'";} else{echo "bgcolor='#cc0000'";}?> > 
			<?php if ((8 - $Menu) <= '0') {echo "You have met the requirements";} else{echo "Need to meet ".(8-$Menu)." more Menu Criteria";}?> 
			</td>
			
        </tr>
		
		<tr>
			
			<td>Public Health Measure</td>
			<td><?php echo $Public; ?> out of 2</td>
        	<td><?php echo number_format((($Public/2)*100)); ?>%</td>
			<td <?php if ((2 - $Public) <= '0') {echo "bgcolor='#78AB46'";} else{echo "bgcolor='#cc0000'";}?> > 
			<?php if ((2 - $Public) <= '0'){echo "You have met the requirements";} else{echo "Need to meet ".(2-$Public)." more Public Health Measures";}?>
			</td>
			
        </tr>
		
		<tr>
			
			<td>Final Analysis</td>
			<td colspan="3" <?php if(((2 - $Public) <= '0') && ((8 - $Menu) <= '0') && ((13 - $Core) <= '0')){echo 				"bgcolor='#78AB46'";}
			else{echo "bgcolor='#cc0000'";}?> >		
			<?php if(((2 - $Public) <= '0') && ((8 - $Menu) <= '0') && ((13 - $Core) <= '0')){echo "You have no gap";}
			else{echo "You still have a gap";}?>
			</td>
			
        </tr>
	</tbody>
</table>
</aside>

<aside2>
<h1>More Information </h1> 
<table id="hor-minimalist-b" summary="Final Data">
<thead>
    	
</table>
</aside2>-->


<div id="Measure">

<table id="hor-minimalist-b" summary="Survey Data">
    <thead>
    	<tr>
			<th scope="col">Measure</th>
			<th scope="col">Objective</th>
        	<th scope="col">Measure</th>
            <th scope="col">Percent Achieved</th>
			<th scope="col">Threshold</th>
        </tr>
    </thead>


<?php $a=0; while($row = $result->fetch_array()){
	$row3 = $result3->fetch_array(); 
	
	$a++;
	

if($row['Assessment ID'] = '$assess_number'){?>

<tbody>
	<?php if($row['Objective ID'] == $a && $row3['Objective ID'] == $a ){?>
		<tr>
			
			<td><?php echo $row['Objective ID']; ?> </td>

			<td><?php echo $row3['Objective Name']; ?></td>
        		<td><?php echo $row3['Meaningful Use Measure']; ?></td>

            <td <?php if (($row['Percent Completed']*100)>=$row3['Threshold']*100) 
		{echo "bgcolor='#78AB46'";} else{echo "bgcolor='#cc0000'";}?> >
		<?php if($row['Objective ID'] == '2'||$row['Objective ID'] =='10'||$row['Objective ID'] =='11'||$row['Objective ID'] =='14'||$row['Objective ID'] =='15'||$row['Objective ID'] =='16'||$row['Objective ID'] =='18'||$row['Objective ID'] =='24'||$row['Objective ID'] =='25'){ if(($row['Percent Completed']*100)=='100') {
				echo 'Yes';
				}
				else{
				echo 'No';
				} ?>
				</td>
			<td>Yes</td>

			<?php } 
			else {

				echo $row['Percent Completed'] * 100; ?>
	    %</td>
			
			<td><?php echo ($row3['Threshold'] * 100)?>%</td>
			
        </tr>
		<?php } } ?>
<tr>		<?php } } ?>
<br>

<br>
<td><button type='button'> Exit</button></td>
</tr>
</table>

</div>



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

	</div>

</body>

<div id = "wrapper">

<div class = "open-intro"> + </div>

<div class = "close-intro"> - </div>

<div id="Results">
<table id="hor-minimalist-b" summary="Survey Data">
<thead>Results</thead>
<tr>
<td <?php if ((13 - $Core) <= '0') {echo "bgcolor='#78AB46'";} else{echo "bgcolor='#cc0000'";}?> > 
			<?php if ((13 - $Core) <= '0') {echo "You have met the requirements";} else{echo "Need to meet ".(13-$Core)." more core requirements";}?> 
			</td>	
</tr>

<tr>
<td <?php if ((8 - $Menu) <= '0') {echo "bgcolor='#78AB46'";} else{echo "bgcolor='#cc0000'";}?> > 
			<?php if ((8 - $Menu) <= '0') {echo "You have met the requirements";} else{echo "Need to meet ".(8-$Menu)." more Menu Criteria";}?> 
			</td>
</tr>

<tr>

<td <?php if ((2 - $Public) <= '0') {echo "bgcolor='#78AB46'";} else{echo "bgcolor='#cc0000'";}?> > 
			<?php if ((2 - $Public) <= '0'){echo "You have met the requirements";} else{echo "Need to meet ".(2-$Public)." more Public Health Measures";}?>
			</td>
</tr>

<tr>

			<td colspan="3" <?php if(((2 - $Public) <= '0') && ((8 - $Menu) <= '0') && ((13 - $Core) <= '0')){echo 				"bgcolor='#78AB46'";}
			else{echo "bgcolor='#cc0000'";}?> >		
			<?php if(((2 - $Public) <= '0') && ((8 - $Menu) <= '0') && ((13 - $Core) <= '0')){echo "Final Analysis: You have no gap";}
			else{echo "Final Analysis: You still have a gap";}?>
			</td>

</tr>
</table>


</div>

</div>

<div id = "wrapper2">
<div id="moreInfo">
<h1>More Information </h1> 
<table id="hor-minimalist-b" summary="Final Data">
<thead>
    	
</table>
</div>
</div>


<div id="buttonDiv">
<h1>Toggle Options</h1>
<button onclick="toggleResults()">Toggle Results</button>

<br>

<button onclick="toggleInfo()">Toggle More Info</button>
</div>

</html>

