		

<div class="navbar navbar-inverse">
		<div class="navbar-inner">
				<a class="brand" href="WWA_Inbound.htm">Wrong Way Airlines</a>
				<ul class="nav">
				<li><a href="WWA_Inbound.htm">Inbound</a></li>
				<li class="divider-vertical"></li>
				<li><a href="WWA_Outbound.html">Outbound</a></li>
				<li class="divider-vertical"></li>
				<li><a href="WWA_Cargo.html">Cargo</a></li>
				<li class = "divider-vertical"></li>
				<li class="active"><a href = "WWA_Flights.html">Flights</a></li>
		</ul>
	</div>
</div>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="WWA.css">
<link rel = "stylesheet" href = "table.css"/>
		<div class = "container" >
			<div class = "page">
				<div class = "pagination-centered">
<?php
echo" ";
include("account.php");
include("connect.php");

$skidID				= $_REQUEST["skidID"];
$missionVal			= $_REQUEST["missionValue"];
$cargoLoc			= $_REQUEST["cargoLocation"];
$departTime			= $_REQUEST["departTime"];
$departType			= $_REQUEST["departType"];
$tailNum			= $_REQUEST["tailNum"];
$nextAirport		= $_REQUEST["nextAirport"];
$departName			= $_REQUEST["departName"];
$arrivalTime		= $_REQUEST["arrivalTime"];
$arrivalType		= $_REQUEST["arrivalType"];
$prevAirport		= $_REQUEST["prevAirport"];
$arrivalName		= $_REQUEST["arrivalName"];





$sql_ret = "SELECT * FROM Flight WHERE tailNum='$tailNum'";
 $def_ret = "SELECT * FROM Flight";

$temp_sql;
$temp_sql2;
$temp_sql3;

if($tailNum == "")
	$temp_sql = $def_ret;
else
	$temp_sql = $sql_ret;
		//echo "<br>$sql_ret<br>";
		print "<div style = \"float: right\">"; 
		 $table = mysql_query($temp_sql);
		 //table code with while loop to cycle
		 print "INBOUND";
		 print "<br><table>";
		 print"<tr>";
			print "<td>";
				print "tailNum";
			print "</td>";
			print "<td>";
				print "arrivalTime";
			print "</td>";
			print "<td>";
				print "arrivalName";
			print "</td>";
			print "<td>";
				print "prevAirport";
			print "</td>";
			print "<td>";
				print "arrivalType";
			print "</td>";
		print"</tr>";
			while( $r = mysql_fetch_array ( $table ) )
		{
		 //row of a table is <tr> cells or columns are <td>
		
		print "<tr>";
			print "<td>";
				print $r["tailNum"];
			print "</td>";
			print "<td>";
				print $r["arrivalTime"];
			print "</td>";
			print "<td>";
				print $r["arrivalName"];
			print "</td>";
			print "<td>";
				print $r["prevAirport"];
			print "</td>";
			print "<td>";
				print $r["arrivalType"];
			print "</td>";
		print "</tr>";
		} 
		echo "</table>";
		print "</div>";



	$sql_ret2 = "SELECT * FROM Outbound WHERE tailNum='$tailNum'";
	$def_ret2 = "SELECT * FROM Outbound";
	if($tailNum == "")
		$temp_sql2 = $def_ret2;
	else
		$temp_sql2 = $sql_ret2;

	 $table2 = mysql_query($temp_sql2);
			print "OUTBOUND";
		 print "<br><table>";
		print"<tr>";
			print "<td>";
				print "tailNum";
			print "</td>";
			print "<td>";
				print "departTime";
			print "</td>";
			print "<td>";
				print "departName";
			print "</td>";
			print "<td>";
				print "nextAirport";
			print "</td>";
			print "<td>";
				print "departType";
			print "</td>";
		print"</tr>";
		while( $r = mysql_fetch_array ( $table2 ) )
		{
		print "<tr>";
			print "<td>";
				print $r["tailNum"];
			print "</td>";
			print "<td>";
				print $r["departTime"];
			print "</td>";
			print "<td>";
				print $r["departName"];
			print "</td>";
			print "<td>";
				print $r["nextAirport"];
			print "</td>";
			print "<td>";
				print $r["departType"];
			print "</td>";
		print"</tr>";
		
		}
		 echo"</table>";



$sql_ret3 = "SELECT * FROM Cargo WHERE tailNum = '$tailNum'";
$def_sql3 = "SELECT * FROM Cargo";
	
	if($tailNum == "")
		$temp_sql3 = $def_sql3;
	else
		$temp_sql3 = $sql_ret3;  

		//print "<div style = \"float: right\">"; 
		print "<div align=\"center\">";
		 $table = mysql_query($temp_sql3);
		 //table code with while loop to cycle
		 print "CARGO";
		 print "<br><table>";
		 print"<tr>";
			print "<td>";
				print "tailNum";
			print "</td>";
			print "<td>";
				print "skidID";
			print "</td>";
			print "<td>";
				print "missionValue";
			print "</td>";
			print "<td>";
				print "cargoLocation";
			print "</td>";
		print"</tr>";
		 while( $r = mysql_fetch_array ( $table ) )
		{
		 //row of a table is <tr> cells or columns are <td>
		
		print "<tr>";
			print "<td>";
				print $r["tailNum"];
			print "</td>";
			print "<td>";
				print $r["skidID"];
			print "</td>";
			print "<td>";
				print $r["missionValue"];
			print "</td>";
			print "<td>";
				print $r["cargoLocation"];
			print "</td>";
		print"</tr>";
		
		}
		 echo"</table>";
		 print "</div>";









?>
</div>
</div>
</div>