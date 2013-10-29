<html lang="en">

<head>
	<title>Hitec Page</title>
	<meta charset="utf-8"/>

	<link rel="stylesheet" href="test.css" type="text/css"/>
	<style type="text/css">
<!--
@import url("style.css");
-->
</style>
	<meta name="viewport" content="width-device-width, initial-scale-1.0">
	
	<?php

	$con=mysql_connect("linuxserver01.s5-tech.com","db2_capstoneUser","NJHITECCapstone2013");
	// Check connection
	mysql_select_db("db2_capstone");
	if (mysqli_connect_errno($con))
  	{
  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	}
	
	$query="SELECT * FROM `objective results`";
	$result=mysql_query($query) or die(mysql_error()) ;
	$query2="SELECT * FROM `objective results`";
	$result2=mysql_query($query) or die(mysql_error()); 
	$query3="SELECT * FROM `objectives`";
	$result3=mysql_query($query3) or die(mysql_error()) ;
	
/*
$host="linuxserver01.s5-tech.com"; // Host name
$username="db2_capstoneUser"; // username
$password="NJHITECCapstone2013"; // password
$db_name="my_database_name"; // Database name
$pdo = new PDO('mysql:host='.$host.';dbname='.$db_name, $username, $password);

// actually do the query
$statement= $pdo->prepare('
        SELECT 
            time_ID,
            team_name 
        FROM 
            `tbl_teams` 

');
$statement->execute();
// get an array with all the results
$results = $statement->fetchAll(PDO::FETCH_ASSOC);
*/
?>

	<?php $Core=0; $Menu=0; $Public=0;?>
</head>

<body class="body">

<?php while($row2 = mysql_fetch_array($result2)){  
	if($row2['Assessment ID'] == /*$_POST[Assess_Num] */ '0' && $row2['Objective ID'] == '1' && $row2['Percent Completed'] * 100 >= '30' ){
		$Core++;
		}
	if($row2['Assessment ID'] == /*$_POST[Assess_Num] */ '0' && $row2['Objective ID'] == '2' && $row2['Percent Completed'] * 100 == '100' ){
		$Core++;
		}
	if($row2['Assessment ID'] == /*$_POST[Assess_Num] */ '0' && $row2['Objective ID'] == '3' && $row2['Percent Completed'] * 100 >= '40' ){
		$Core++;
		}
	if($row2['Assessment ID'] == /*$_POST[Assess_Num] */ '0' && $row2['Objective ID'] == '4' && $row2['Percent Completed'] * 100 >= '50' ){
		$Core++;
		}
	if($row2['Assessment ID'] == /*$_POST[Assess_Num] */ '0' && $row2['Objective ID'] == '5' && $row2['Percent Completed'] * 100 >= '80' ){
		$Core++;
		}
	if($row2['Assessment ID'] == /*$_POST[Assess_Num] */ '0' && $row2['Objective ID'] == '6' && $row2['Percent Completed'] * 100 >= '80' ){
		$Core++;
		}
	if($row2['Assessment ID'] == /*$_POST[Assess_Num] */ '0' && $row2['Objective ID'] == '7' && $row2['Percent Completed'] * 100 >= '80' ){
		$Core++;
		}
	if($row2['Assessment ID'] == /*$_POST[Assess_Num] */ '0' && $row2['Objective ID'] == '8' && $row2['Percent Completed'] * 100 >= '50' ){
		$Core++;
		}
	if($row2['Assessment ID'] == /*$_POST[Assess_Num] */ '0' && $row2['Objective ID'] == '9' && $row2['Percent Completed'] * 100 >= '50' ){
		$Core++;
		}
	if($row2['Assessment ID'] == /*$_POST[Assess_Num] */ '0' && $row2['Objective ID'] == '10' && $row2['Percent Completed'] * 100 == '100' ){
		$Core++;
		}
	if($row2['Assessment ID'] == /*$_POST[Assess_Num] */ '0' && $row2['Objective ID'] == '11' && $row2['Percent Completed'] * 100 == '100' ){
		//$Core++;
		}	
	if($row2['Assessment ID'] == /*$_POST[Assess_Num] */ '0' && $row2['Objective ID'] == '12' && $row2['Percent Completed'] * 100 >= '50' ){
		$Core++;
		}
	if($row2['Assessment ID'] == /*$_POST[Assess_Num] */ '0' && $row2['Objective ID'] == '13' && $row2['Percent Completed'] * 100 >= '50' ){
		$Core++;
		}
	if($row2['Assessment ID'] == /*$_POST[Assess_Num] */ '0' && $row2['Objective ID'] == '14' && $row2['Percent Completed'] * 100 >= '0' ){
		//$Core++;
		}
	if($row2['Assessment ID'] == /*$_POST[Assess_Num] */ '0' && $row2['Objective ID'] == '15' && $row2['Percent Completed'] * 100 == '100' ){
		$Core++;
		}
	if($row2['Assessment ID'] == /*$_POST[Assess_Num] */ '0' && $row2['Objective ID'] == '16' && $row2['Percent Completed'] * 100 == '100' ){
		$Menu++;
		}
	if($row2['Assessment ID'] == /*$_POST[Assess_Num] */ '0' && $row2['Objective ID'] == '17' && $row2['Percent Completed'] * 100 >= '40' ){
		$Menu++;
		}
	if($row2['Assessment ID'] == /*$_POST[Assess_Num] */ '0' && $row2['Objective ID'] == '18' && $row2['Percent Completed'] * 100 == '100' ){
		$Menu++;
		}
	if($row2['Assessment ID'] == /*$_POST[Assess_Num] */ '0' && $row2['Objective ID'] == '19' && $row2['Percent Completed'] * 100 >= '20' ){
		$Menu++;
		}
	if($row2['Assessment ID'] == /*$_POST[Assess_Num] */ '0' && $row2['Objective ID'] == '20' && $row2['Percent Completed'] * 100 >= '10' ){
		$Menu++;
		}
	if($row2['Assessment ID'] == /*$_POST[Assess_Num] */ '0' && $row2['Objective ID'] == '21' && $row2['Percent Completed'] * 100 >= '10' ){
		$Menu++;
		}
	if($row2['Assessment ID'] == /*$_POST[Assess_Num] */ '0' && $row2['Objective ID'] == '22' && $row2['Percent Completed'] * 100 >= '50' ){
		$Menu++;
		}
	if($row2['Assessment ID'] == /*$_POST[Assess_Num] */ '0' && $row2['Objective ID'] == '23' && $row2['Percent Completed'] * 100 >= '50' ){
		$Menu++;
		}
	if($row2['Assessment ID'] == /*$_POST[Assess_Num] */ '0' && $row2['Objective ID'] == '24' && $row2['Percent Completed'] * 100 >= '100' ){
		$Public++;
		}
	if($row2['Assessment ID'] == /*$_POST[Assess_Num] */ '0' && $row2['Objective ID'] == '25' && $row2['Percent Completed'] * 100 >= '100' ){
		$Public++;
		}
	
	}?>


<aside>
<h1>Total Results</h1>
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
        	<td><?php echo ($Core/13)*100; ?>%</td>
			<td <?php if ((13 - $Core) <= '0') {echo "bgcolor='#78AB46'";} else{echo "bgcolor='#cc0000'";}?> > 
			<?php if ((13 - $Core) <= '0') {echo "You have met the requirements";} else{echo "Need to meet ".(13-$Core)." more core requirements";}?> 
			</td>
			
        </tr>
		
		<tr>
			
			<td>Menu Criteria Achieved</td>
			<td><?php echo $Menu; ?> out of 8</td>
        	<td><?php echo ($Menu/8)*100; ?>%</td>
			<td <?php if ((4 - $Menu) <= '0') {echo "bgcolor='#78AB46'";} else{echo "bgcolor='#cc0000'";}?> > 
			<?php if ((4 - $Menu) <= '0') {echo "You have met the requirements";} else{echo "Need to meet ".(4-$Public)." more Menu Criteria";}?> 
			</td>
			
        </tr>
		
		<tr>
			
			<td>Public Health Measure</td>
			<td><?php echo $Public; ?> out of 2</td>
        	<td><?php echo ($Public/2)*100; ?>%</td>
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

<div id="header">

<h1>Core Measures</h1>
</div>

<div id="main_Review">
<table id="hor-minimalist-b" summary="Survey Data">
    <thead>
    	<tr>
			<th scope="col">Measure Number</th>
			<th scope="col">Objective</th>
        	<th scope="col">Measure</th>
            <th scope="col">Percent Achieved</th>
			<th scope="col">Threshold</th>
        </tr>
    </thead>
</div>

<?php while($row = mysql_fetch_array($result)){  if($row['Assessment ID'] == '0'){?>
<tbody>
	<?php if($row['Objective ID'] == '1'){?>
		<tr>
			
			<td><?php echo $row['Objective ID']; ?> </td>

			<td>Use Computerized Physician Order Entry (CPOE) for medication 
			orders directly entered by any licensed healthcare professional</td>
        	<td>More than 30% of unique patients with at least one medication in their medication list seen by 
			the EP have at least one medication order entered using CPOE</td>

            <td <?php if (($row['Percent Completed']*100)>='30') {echo "bgcolor='#78AB46'";} else{echo "bgcolor='#cc0000'";}?> >
		<?php echo $row['Percent Completed'] * 100; ?>
	    %</td>

			<td>30%</td>
			
        </tr>
		<?php } ?>
		
		<?php if($row['Objective ID'] == '2'){ ?>
        <tr>
        	
			<td><?php echo $row['Objective ID']; ?></td>
        	<td>Implement drug-drug and drug-allergy interactions checks.</td>
        	<td>The EP has enabled this functionality.</td>
           <td <?php if (($row['Percent Completed']*100)=='100') {echo "bgcolor='#78AB46'";} else{echo "bgcolor='#cc0000'";}?> >
			<?php if(($row['Percent Completed']*100)=='100') {
				echo 'Yes';
				}
				else{
				echo 'No';
				} ?>
				</td>
			<td>Yes</td>
			
        </tr>
		<?php } ?>
		<?php if($row['Objective ID'] == '3'){ ?>
        <tr>
        	
			<td><?php echo $row['Objective ID'];?></td>
        	<td>Generate and transmit permissible prescriptions electronically (eRx).</td>
        	<td>More than 40% of all permissible prescriptions written by the EP 
			are transmitted electronically using certified EHR technology.</td>
            <td <?php if (($row['Percent Completed'] * 100)>='40') {echo "bgcolor='#78AB46'";} else{echo "bgcolor='#cc0000'";}?> >
		<?php echo $row['Percent Completed'] * 100;?>%</td>
			<td>40%</td>
			
        </tr>
		<?php } ?>
		<?php if($row['Objective ID'] == '4'){ ?>
		<tr>
			
			<td><?php echo $row['Objective ID'];?></td>
			<td>Record demographics: Preferred Language, 
			Gender, Race, Ethnicity, and Date of Birth.</td>
        	<td>More than 50% of all unique patients seen by the EP have 
			demographics recorded as structured data.</td>
            <td <?php if (($row['Percent Completed']*100)>='50') {echo "bgcolor='#78AB46'";} else{echo "bgcolor='#cc0000'";}?> >
		<?php echo $row['Percent Completed']*100;?>%</td>
			<td>50%</td>
			
        </tr>
        <?php } ?>
		<?php if($row['Objective ID'] == '5'){ ?>
		<tr>
			
			<td><?php echo $row['Objective ID'];?></td>
			<td>Maintain an up-to-date problem list 
			of current and active diagnoses.</td>
        	<td>More than 80% of all unique patients seen by the EP have at least one entry or an indication that no problems are 
			known for the patient recorded as structured data.</td>
            <td <?php if (($row['Percent Completed']*100)>='80') {echo "bgcolor='#78AB46'";} else{echo "bgcolor='#cc0000'";}?> >
		<?php echo $row['Percent Completed']*100;?>%</td>
			<td>80%</td>
			
        </tr>
		<?php } ?>
		<?php if($row['Objective ID'] == '6'){ ?>
		<tr>
			
			<td><?php echo $row['Objective ID'];?></td>
			<td>Maintain active medication list.</td>
        	<td>More than 80% of all unique patients seen by the EP have at least one entry 
			(or an indication that the patient is not currently prescribed any medication) 
			recorded as structured data.</td>
           <td <?php if (($row['Percent Completed']*100)>='80') {echo "bgcolor='#78AB46'";} else{echo "bgcolor='#cc0000'";}?> >
		<?php echo $row['Percent Completed']*100;?>%</td>
			<td>80%</td>
			
        </tr>
		<?php } ?>
		<?php if($row['Objective ID'] == '7'){ ?>
		<tr>
			
			<td><?php echo $row['Objective ID'];?></td>
			<td>Maintain active medication allergy list.</td>
        	<td>More than 80% of all unique patients seen by the EP have at least one entry 
			(or an indication that the patient has no known medication allergies) 
			recorded as structured data.</td>
            <td <?php if (($row['Percent Completed']*100)>='80') {echo "bgcolor='#78AB46'";} else{echo "bgcolor='#cc0000'";}?> >
		<?php echo $row['Percent Completed']*100;?>%</td>
			<td>80%</td>
			
        </tr>
		<?php } ?>
		<?php if($row['Objective ID'] == '8'){ ?>
		<tr>
			
			<td><?php echo $row['Objective ID']; ?></td>
			<td>Record and chart changes in vital signs: Height, Weight, BP, Calculate and display BMI and Plot and 
			display growth charts for ages 2-20, including BMI.</td>
        	<td>For more than 50% of all unique patients age 2 and over seen by the EP; height, weight and blood 
			pressure are recorded as structured data.</td>
            <td <?php if (($row['Percent Completed']*100)>='50') {echo "bgcolor='#78AB46'";} else{echo "bgcolor='#cc0000'";}?> >
		<?php echo $row ['Percent Completed']*100;?>%</td>
			<td>50%</td>
			
        </tr>
		<?php } ?>
		<?php if($row['Objective ID'] == '9'){ ?>
		<tr>
			
			<td><?php echo $row['Objective ID']; ?></td>
			<td>Record smoking status for patients 13 years old or older.</td>
        	<td>More than 50% of all unique patients 13 years old or older seen by the EP have smoking 
			status recorded as structured data.</td>
            <td <?php if (($row['Percent Completed']*100)>='50') {echo "bgcolor='#78AB46'";} else{echo "bgcolor='#cc0000'";}?> >
		<?php echo $row['Percent Completed']*100; ?>%</td>
			<td>50%</td>
			
        </tr>
		<?php } ?>
		<?php if($row['Objective ID'] == '10'){ ?>
		<tr>
			
			<td><?php echo $row['Objective ID']; ?></td>
			<td>Implement one clinical decision support rule relevant to specialty or high clinical priority along with 
			the ability to track compliance that rule.</td>
        	<td>Implement one clinical decision support rule.</td>
            <td <?php if (($row['Percent Completed']*100)=='100') {echo "bgcolor='#78AB46'";} else{echo "bgcolor='#cc0000'";}?> >
		<?php if(($row['Percent Completed']*100)=='100') {
				echo 'Yes';
				}
				else{
				echo 'No';
				} ?></td>
			<td>Yes</td>
			
        </tr>
		<?php } ?>
		<?php if($row['Objective ID'] == '11'){ ?>
		<tr>
			
			<td><?php echo $row['Objective ID']; ?></td>
			<td>Report ambulatory quality measures to CMS or the States.</td>
        	<td>For 2011, provide aggregate numerator and denominator, and 
			exclusions for Clinical Quality Measures</td>
            <td <?php if (($row['Percent Completed']*100)=='100') {echo "bgcolor='#78AB46'";} else{echo "bgcolor='#78AB46'";}?> >
			<?php if(($row['Percent Completed']*100)=='100') {
				echo 'Removed in 2013';
				}
				else{
				echo 'Removed in 2013';
				} ?></td>
			<td>Yes</td>
			
        </tr>
		<?php } ?>
		<?php if($row['Objective ID'] == '12'){ ?>
		<tr>
			
			<td><?php echo $row['Objective ID']; ?></td>
			<td>Provide patients with an electronic copy of their health information (including diagnostic test results, problem list, 
			medication lists, medication allergies), upon request.</td>
        	<td>More than 50% of all patients who request an electronic copy of their health information 
			are provided it within 3 business days.</td>
            <td <?php if (($row['Percent Completed']*100)>='50') {echo "bgcolor='#78AB46'";} else{echo "bgcolor='#cc0000'";}?> >
		<?php echo $row['Percent Completed']*100; ?>%</td>
			<td>50%</td>
			
        </tr>
		<?php } ?>
		<?php if($row['Objective ID'] == '13'){ ?>
		<tr>
			
			<td><?php echo $row['Objective ID']; ?></td>
			<td>Provide clinical summaries for patients for each office visit.</td>
        	<td>Clinical summaries provided to patients for more than 50 percent of all 
			office visits within 3 business days.</td>
            <td <?php if (($row['Percent Completed']*100)>='50') {echo "bgcolor='#78AB46'";} else{echo "bgcolor='#cc0000'";}?> >
		<?php echo $row['Percent Completed']*100; ?>%</td>
			<td>50%</td>
			
        </tr>
		<?php } ?>
		<?php if( $row['Objective ID'] == '14') { ?>
		<tr>
			
			<td><?php echo $row['Objective ID']; ?></td>
			<td>Capability to electronically exchange key clinical information (e.g., problem list, medication list, medication allergies, diagnostic test results) among providers of 
			care and patient authorized entities.</td>
        	<td>Performed at least one test of certified EHR technology's capacity to 
			electronically exchange key clinical information.</td>
            <td bgcolor='#78AB46'>Removed in 2013</td>
			<td>Yes</td>
			
        </tr>
		<?php } ?>
		<?php if($row['Objective ID'] == '15'){ ?>
		<tr>
			
			<td><?php echo $row['Objective ID']; ?></td>
			<td>Protect electronic health information created or maintained by the certified EHR technology through the implementation 
			of appropriate technical capabilities.</td>
        	<td>Conduct or review a security risk analysis per 45 CFR 164.308 (a)(1) and implement security updates as necessary and correct identified security deficiencies 
			as part of its risk management process.</td>

            <td <?php if (($row['Percent Completed']*100)=='100') {echo "bgcolor='#78AB46'";} else{echo "bgcolor='#cc0000'";}?> >
		<?php if(($row['Percent Completed']*100)=='100') {
				echo 'Yes';
				}
				else{
				echo 'No';
				} ?></td>
			<td>Yes</td>
			
        </tr>
		<?php } ?>
		<?php if($row['Objective ID'] == '16'){ ?>
		<tr>
			
			<td><?php echo $row['Objective ID']; ?></td>
			<td>Implement drug-formulary checks.</td>
        	<td>The EP has enabled this functionality and has access to at least 
			one internal or external drug formulary.</td>
            <td <?php if (($row['Percent Completed']*100)=='100') {echo "bgcolor='#78AB46'";} else{echo "bgcolor='#cc0000'";}?> >
		<?php if(($row['Percent Completed']*100)=='100') {
				echo 'Yes';
				}
				else{
				echo 'No';
				} ?></td>
			<td>Yes</td>
			
        </tr>
		<?php } ?>
		<?php if($row['Objective ID'] == '17'){ ?>
		<tr>
			
			<td><?php echo $row['Objective ID']; ?></td>
			<td>Incorporate clinical lab-test results into EHR as structured data.</td>
        	<td>More than 40% of all clinical lab tests results ordered by the EP during the EHR reporting period whose results are either in a positive/negative or numerical format are incorporated 
			in certified EHR technology as structured data.</td>
            <td <?php if (($row['Percent Completed']*100)>='40') {echo "bgcolor='#78AB46'";} else{echo "bgcolor='#cc0000'";}?> >
		<?php echo $row['Percent Completed']*100; ?>%</td>
			<td>40%</td>
			
        </tr>
		<?php } ?>
		<?php if($row['Objective ID'] == '18'){ ?>
		<tr>
			
			<td><?php echo $row['Objective ID']; ?></td>
			<td>Generate lists of patients by specific conditions to use for quality improvement, 
			reduction of disparities, research or outreach.</td>
        	<td>Generate at least one report listing patients of the EP or 
			eligible hospital with a specific condition.</td>
            <td <?php if (($row['Percent Completed']*100)=='100') {echo "bgcolor='#78AB46'";} else{echo "bgcolor='#cc0000'";}?> >
		<?php if(($row['Percent Completed']*100)=='100') {
				echo 'Yes';
				}
				else{
				echo 'No';
				} ?></td>
			<td>Yes</td>
			
        </tr>
		<?php } ?>
		<?php if($row['Objective ID'] == '19'){ ?>
		<tr>
			
			<td><?php echo $row['Objective ID']; ?></td>
			<td>Send reminders to patients per patient preference 
			for preventive/follow up care.</td>
        	<td>More than 20% of all unique patients 65 years or older or 5 years old or younger were sent an appropriate 
			reminder during the EHR reporting period.</td>
            <td <?php if (($row['Percent Completed']*100)>='20') {echo "bgcolor='#78AB46'";} else{echo "bgcolor='#cc0000'";}?> >
		<?php echo $row['Percent Completed']*100; ?>%</td>
			<td>20%</td>
			
        </tr>
		<?php } ?>
		<?php if($row['Objective ID'] == '20'){ ?>
		<tr>
			
			<td><?php echo $row['Objective ID']; ?></td>
			<td>Provide patients with timely electronic access to their health information (including lab results, problem list, medication lists, medication allergies) within four business days of 
			the information being available to the EP.</td>
        	<td>More than 10% of all unique patients seen by the EP are provided timely (available to the patient within four business days of being updated in the certified EHR technology) electronic access to their health 
			information subject to the EP\92s discretion to withhold certain information.</td>
            <td <?php if (($row['Percent Completed']*100)>='10') {echo "bgcolor='#78AB46'";} else{echo "bgcolor='#cc0000'";}?> >
		<?php echo $row['Percent Completed']*100; ?>%</td>
			<td>10%</td>
			
        </tr>
		<?php } ?>
		<?php if($row['Objective ID'] == '21'){ ?>
		<tr>
			
			<td><?php echo $row['Objective Complete']; ?></td>
			<td>Use certified EHR technology to identify patient-specific education resources and provide 
			those resources to the patient if appropriate.</td>
        	<td>More than 10% of all unique patients seen by the EP during the EHR reporting period are 
			provided patient-specific education resources.</td>
            <td <?php if (($row['Percent Completed']*100)>='10') {echo "bgcolor='#78AB46'";} else{echo "bgcolor='#cc0000'";}?> >
		<?php echo $row['Percent Completed']*100; ?>%</td>
			<td>10%</td>
			
        </tr>
		<?php } ?>
		<?php if($row['Objective ID'] == '22'){ ?>
		<tr>
			
			<td><?php echo $row['Objective ID']; ?></td>
			<td>The EP who receives a patient from another setting of care or provider of care or believes an encounter is relevant 
			should perform medication reconciliation.</td>
        	<td>The EP performs medication reconciliation 
			for more than 50% of transitions of care.</td>
            <td <?php if (($row['Percent Completed']*100)>='50') {echo "bgcolor='#78AB46'";} else{echo "bgcolor='#cc0000'";}?> >
		<?php echo $row['Percent Completed']*100; ?>%</td>
			<td>50%</td>
			
        </tr>
		<?php } ?>
		<?php if($row['Objective ID'] == '23'){ ?>
		<tr>
			
			<td><?php echo $row['Objective ID']; ?></td>
			<td>The EP who transitions their patient to another setting of care or provider of care or refers their patient to another provider of care 
			should provide summary of care record for each transition of care or referral.</td>
        	<td>Provide summary of care record for 
			more than 50 percent of transitions of care and referrals.</td>
            <td <?php if (($row['Percent Completed']*100)>='50') {echo "bgcolor='#78AB46'";} else{echo "bgcolor='#cc0000'";}?> >
		<?php echo $row['Percent Completed']*100; ?>%</td>
			<td>50%</td>
			
        </tr>
		<?php } ?>
		<?php if($row['Objective ID'] == '24'){ ?>
		<tr>
			
			<td><?php echo $row['Objective ID']; ?></td>
			<td>Capability to submit electronic data to immunization registries or Immunization Information Systems and actual submission 
			in accordance with applicable law and practice.</td>
        	<td>Perform at least one test of certified EHR technology's capacity to submit electronic data to immunization registries and follow up submission if the test is successful (unless none of the immunization registries to which the EP or eligible hospital submits such information have the 
			capacity to receive the information electronically).</td>

            <td <?php if (($row['Percent Completed']*100)=='100') {echo "bgcolor='#78AB46'";} else{echo "bgcolor='#cc0000'";}?> >
		<?php if(($row['Percent Completed']*100)=='100') {
				echo 'Yes';
				}
				else{
				echo 'No';
				} ?></td>
			<td>Yes</td>
			
        </tr>
		<?php } ?>
		<?php if($row['Objective ID'] == '25'){ ?>
		<tr>
			
			<td><?php echo $row['Objective ID']; ?></td>
			<td>Capability to submit electronic syndromic surveillance data to public health agencies and actual submission 
			in accordance with applicable law and practice.</td>
        	<td>Performed at least one test of certified EHR technology's capacity to provide electronic syndromic surveillance data to public health agencies and follow-up submission if the test is successful (unless none of the public health agencies to which an EP submits such 
			information have the capacity to receive the information electronically).</td>
           <td <?php if (($row['Percent Completed']*100)=='100') {echo "bgcolor='#78AB46'";} else{echo "bgcolor='#cc0000'";}?> >
		<?php if(($row['Percent Completed']*100)=='100') {
				echo 'Yes';
				}
				else{
				echo 'No';
				} ?></td>
			<td>Yes</td>
			
        </tr>
        <?php } ?>
<tr>		<?php } } ?>
<br>
<td><button type='button'> Exit</button></td>
<br>
<td><button type='button'> Save and Exit</button></td>
</tr>
</body>
    </tbody>


</html>
