<?php session_start(); ?>
<?php include("header.php") ?>

<open class="titlename stylesheet bodyclass" data-title="Hitec Page" data-css="test.css style.css" data-body-class="body">

	
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
	$row3 = $result3->fetch_array();

	$query_cat="SELECT * FROM `objective categories`";
	$result_cat=$njhitec_db->query($query_cat) or die($njhitec_db->error()) ;

	
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


<aside>
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
        	<td><?php echo ($Core/13)*100; ?>%</td>
			<td <?php if ((13 - $Core) <= '0') {echo "bgcolor='#78AB46'";} else{echo "bgcolor='#cc0000'";}?> > 
			<?php if ((13 - $Core) <= '0') {echo "You have met the requirements";} else{echo "Need to meet ".(13-$Core)." more core requirements";}?> 
			</td>
			
        </tr>
		
		<tr>
			
			<td>Menu Criteria Achieved</td>
			<td><?php echo $Menu; ?> out of 8</td>
        	<td><?php echo ($Menu/8)*100; ?>%</td>
			<td <?php if ((8 - $Menu) <= '0') {echo "bgcolor='#78AB46'";} else{echo "bgcolor='#cc0000'";}?> > 
			<?php if ((8 - $Menu) <= '0') {echo "You have met the requirements";} else{echo "Need to meet ".(8-$Menu)." more Menu Criteria";}?> 
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

<div id="main_review">
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

<?php while($row = $result->fetch_array()){  


if($row['Assessment ID'] = '$assess_number'){?>

<tbody>
	<?php if($row['Objective ID'] == '1' && $row3['Objective ID'] == '1'){?>
		<tr>
			
			<td><?php echo $row['Objective ID']; ?> </td>

			<td><?php echo $row3['Objective Name']; ?></td>
        		<td><?php echo $row3['Meaningful Use Measure']; ?></td>

            <td <?php if (($row['Percent Completed']*100)>=$row3['Threshold'] * 100) {echo "bgcolor='#78AB46'";} else{echo "bgcolor='#cc0000'";}?> >
		<?php echo $row['Percent Completed'] * 100; ?>
	    %</td>

			<td><?php echo ($row3['Threshold'] * 100)?>%</td>
			
        </tr>
		<?php } ?>
		
		<?php if($row['Objective ID'] == '2' ){ ?>
        <tr>
        	
			<td><?php echo $row['Objective ID']; ?></td>
        	<td><?php echo $row3['Objective Name']; ?></td>
        	<td><?php echo $row3['Meaningful Use Measure']; ?></td>
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
        	<td><?php echo $row3['Objective Name']; ?></td>
        		<td><?php echo $row3['Meaningful Use Measure']; ?></td>
            <td <?php if (($row['Percent Completed'] * 100)>='40') {echo "bgcolor='#78AB46'";} else{echo "bgcolor='#cc0000'";}?> >
		<?php echo $row['Percent Completed'] * 100;?>%</td>
			<td>40%</td>
			
        </tr>
		<?php } ?>
		<?php if($row['Objective ID'] == '4'){ ?>
		<tr>
			
			<td><?php echo $row['Objective ID'];?></td>
			<td><?php echo $row3['Objective Name']; ?></td>
        		<td><?php echo $row3['Meaningful Use Measure']; ?></td>
            <td <?php if (($row['Percent Completed']*100)>='50') {echo "bgcolor='#78AB46'";} else{echo "bgcolor='#cc0000'";}?> >
		<?php echo $row['Percent Completed']*100;?>%</td>
			<td>50%</td>
			
        </tr>
        <?php } ?>
		<?php if($row['Objective ID'] == '5'){ ?>
		<tr>
			
			<td><?php echo $row['Objective ID'];?></td>
			<td><?php echo $row3['Objective Name']; ?></td>
        		<td><?php echo $row3['Meaningful Use Measure']; ?></td>
            <td <?php if (($row['Percent Completed']*100)>='80') {echo "bgcolor='#78AB46'";} else{echo "bgcolor='#cc0000'";}?> >
		<?php echo $row['Percent Completed']*100;?>%</td>
			<td>80%</td>
			
        </tr>
		<?php } ?>
		<?php if($row['Objective ID'] == '6'){ ?>
		<tr>
			
			<td><?php echo $row['Objective ID'];?></td>
			<td><?php echo $row3['Objective Name']; ?></td>
        		<td><?php echo $row3['Meaningful Use Measure']; ?></td>
           <td <?php if (($row['Percent Completed']*100)>='80') {echo "bgcolor='#78AB46'";} else{echo "bgcolor='#cc0000'";}?> >
		<?php echo $row['Percent Completed']*100;?>%</td>
			<td>80%</td>
			
        </tr>
		<?php } ?>
		<?php if($row['Objective ID'] == '7'){ ?>
		<tr>
			
			<td><?php echo $row['Objective ID'];?></td>
			<td><?php echo $row3['Objective Name']; ?></td>
        		<td><?php echo $row3['Meaningful Use Measure']; ?></td>
            <td <?php if (($row['Percent Completed']*100)>='80') {echo "bgcolor='#78AB46'";} else{echo "bgcolor='#cc0000'";}?> >
		<?php echo $row['Percent Completed']*100;?>%</td>
			<td>80%</td>
			
        </tr>
		<?php } ?>
		<?php if($row['Objective ID'] == '8'){ ?>
		<tr>
			
			<td><?php echo $row['Objective ID']; ?></td>
			<td><?php echo $row3['Objective Name']; ?></td>
        		<td><?php echo $row3['Meaningful Use Measure']; ?></td>
            <td <?php if (($row['Percent Completed']*100)>='50') {echo "bgcolor='#78AB46'";} else{echo "bgcolor='#cc0000'";}?> >
		<?php echo $row ['Percent Completed']*100;?>%</td>
			<td>50%</td>
			
        </tr>
		<?php } ?>
		<?php if($row['Objective ID'] == '9'){ ?>
		<tr>
			
			<td><?php echo $row['Objective ID']; ?></td>
			<td><?php echo $row3['Objective Name']; ?></td>
        		<td><?php echo $row3['Meaningful Use Measure']; ?></td>
            <td <?php if (($row['Percent Completed']*100)>='50') {echo "bgcolor='#78AB46'";} else{echo "bgcolor='#cc0000'";}?> >
		<?php echo $row['Percent Completed']*100; ?>%</td>
			<td>50%</td>
			
        </tr>
		<?php } ?>
		<?php if($row['Objective ID'] == '10'){ ?>
		<tr>
			
			<td><?php echo $row['Objective ID']; ?></td>
			<td><?php echo $row3['Objective Name']; ?></td>
        		<td><?php echo $row3['Meaningful Use Measure']; ?></td>
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
			<td><?php echo $row3['Objective Name']; ?></td>
        		<td><?php echo $row3['Meaningful Use Measure']; ?></td>
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
			<td><?php echo $row3['Objective Name']; ?></td>
        		<td><?php echo $row3['Meaningful Use Measure']; ?></td>
            <td <?php if (($row['Percent Completed']*100)>='50') {echo "bgcolor='#78AB46'";} else{echo "bgcolor='#cc0000'";}?> >
		<?php echo $row['Percent Completed']*100; ?>%</td>
			<td>50%</td>
			
        </tr>
		<?php } ?>
		<?php if($row['Objective ID'] == '13'){ ?>
		<tr>
			
			<td><?php echo $row['Objective ID']; ?></td>
			<td><?php echo $row3['Objective Name']; ?></td>
        		<td><?php echo $row3['Meaningful Use Measure']; ?></td>
            <td <?php if (($row['Percent Completed']*100)>='50') {echo "bgcolor='#78AB46'";} else{echo "bgcolor='#cc0000'";}?> >
		<?php echo $row['Percent Completed']*100; ?>%</td>
			<td>50%</td>
			
        </tr>
		<?php } ?>
		<?php if( $row['Objective ID'] == '14') { ?>
		<tr>
			
			<td><?php echo $row['Objective ID']; ?></td>
			<td><?php echo $row3['Objective Name']; ?></td>
        		<td><?php echo $row3['Meaningful Use Measure']; ?></td>
            <td bgcolor='#78AB46'>Removed in 2013</td>
			<td>Yes</td>
			
        </tr>
		<?php } ?>
		<?php if($row['Objective ID'] == '15'){ ?>
		<tr>
			
			<td><?php echo $row['Objective ID']; ?></td>
			<td><?php echo $row3['Objective Name']; ?></td>
        		<td><?php echo $row3['Meaningful Use Measure']; ?></td>

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
			<td><?php echo $row3['Objective Name']; ?></td>
        		<td><?php echo $row3['Meaningful Use Measure']; ?></td>
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
			<td><?php echo $row3['Objective Name']; ?></td>
        		<td><?php echo $row3['Meaningful Use Measure']; ?></td>
            <td <?php if (($row['Percent Completed']*100)>='40') {echo "bgcolor='#78AB46'";} else{echo "bgcolor='#cc0000'";}?> >
		<?php echo $row['Percent Completed']*100; ?>%</td>
			<td>40%</td>
			
        </tr>
		<?php } ?>
		<?php if($row['Objective ID'] == '18'){ ?>
		<tr>
			
			<td><?php echo $row['Objective ID']; ?></td>
			<td><?php echo $row3['Objective Name']; ?></td>
        		<td><?php echo $row3['Meaningful Use Measure']; ?></td>
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
			<td><?php echo $row3['Objective Name']; ?></td>
        		<td><?php echo $row3['Meaningful Use Measure']; ?></td>
            <td <?php if (($row['Percent Completed']*100)>='20') {echo "bgcolor='#78AB46'";} else{echo "bgcolor='#cc0000'";}?> >
		<?php echo $row['Percent Completed']*100; ?>%</td>
			<td>20%</td>
			
        </tr>
		<?php } ?>
		<?php if($row['Objective ID'] == '20'){ ?>
		<tr>
			
			<td><?php echo $row['Objective ID']; ?></td>
			<td><?php echo $row3['Objective Name']; ?></td>
        		<td><?php echo $row3['Meaningful Use Measure']; ?></td>
            <td <?php if (($row['Percent Completed']*100)>='10') {echo "bgcolor='#78AB46'";} else{echo "bgcolor='#cc0000'";}?> >
		<?php echo $row['Percent Completed']*100; ?>%</td>
			<td>10%</td>
			
        </tr>
		<?php } ?>
		<?php if($row['Objective ID'] == '21'){ ?>
		<tr>
			
			<td><?php echo $row['Objective ID']; ?></td>
			<td><?php echo $row3['Objective Name']; ?></td>
        		<td><?php echo $row3['Meaningful Use Measure']; ?></td>
            <td <?php if (($row['Percent Completed']*100)>='10') {echo "bgcolor='#78AB46'";} else{echo "bgcolor='#cc0000'";}?> >
		<?php echo $row['Percent Completed']*100; ?>%</td>
			<td>10%</td>
			
        </tr>
		<?php } ?>
		<?php if($row['Objective ID'] == '22'){ ?>
		<tr>
			
			<td><?php echo $row['Objective ID']; ?></td>
			<td><?php echo $row3['Objective Name']; ?></td>
        		<td><?php echo $row3['Meaningful Use Measure']; ?></td>
            <td <?php if (($row['Percent Completed']*100)>='50') {echo "bgcolor='#78AB46'";} else{echo "bgcolor='#cc0000'";}?> >
		<?php echo $row['Percent Completed']*100; ?>%</td>
			<td>50%</td>
			
        </tr>
		<?php } ?>
		<?php if($row['Objective ID'] == '23'){ ?>
		<tr>
			
			<td><?php echo $row['Objective ID']; ?></td>
			<td><?php echo $row3['Objective Name']; ?></td>
        		<td><?php echo $row3['Meaningful Use Measure']; ?></td>
            <td <?php if (($row['Percent Completed']*100)>='50') {echo "bgcolor='#78AB46'";} else{echo "bgcolor='#cc0000'";}?> >
		<?php echo $row['Percent Completed']*100; ?>%</td>
			<td>50%</td>
			
        </tr>
		<?php } ?>
		<?php if($row['Objective ID'] == '24'){ ?>
		<tr>
			
			<td><?php echo $row['Objective ID']; ?></td>
			<td><?php echo $row3['Objective Name']; ?></td>
        		<td><?php echo $row3['Meaningful Use Measure']; ?></td>

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
			<td><?php echo $row3['Objective Name']; ?></td>
        		<td><?php echo $row3['Meaningful Use Measure']; ?></td>
           <td <?php if (($row['Percent Completed']*100)=='100') {echo "bgcolor='#78AB46'";} else{echo "bgcolor='#cc0000'";}?> >
		<?php if(($row['Percent Completed']*100)=='100') {
				echo 'Yes';
				}
				else{
				echo 'No';
				} ?></td>
			<td>Yes</td>
			
        </tr>
        <?php  } ?>
<tr>		<?php } } ?>
<br>
<td><button type='button'> Exit</button></td>
<br>
</tr>
</open>
</body>
    </tbody>


</html>
