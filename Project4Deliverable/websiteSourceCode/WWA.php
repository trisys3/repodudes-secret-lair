<div class="navbar navbar-inverse">
		<div class="navbar-inner">
				<a class="brand" href="WWA_Inbound.htm">Wrong Way Airlines</a>
				<ul class="nav">
				<li class="active"><a href="WWA_Inbound.htm">Inbound</a></li>
				<li class="divider-vertical"></li>
				<li><a href="WWA_Outbound.html">Outbound</a></li>
				<li class="divider-vertical"></li>
				<li><a href="WWA_Cargo.html">Cargo</a></li>
				<li class = "divider-vertical"></li>
				<li><a href = "WWA_Flights.html">Flights</a></li>
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

include("account.php");
include("connect.php");





$arrivalTime		= $_REQUEST["arrivalTime"];
$arrivalType		= $_REQUEST["arrivalType"];
$tailNum			= $_REQUEST["tailNum"];
$prevAirport		= $_REQUEST["prevAirport"];
$arrivalName		= $_REQUEST["arrivalName"];

//echo "Connected<br>";

$sql_2 = "INSERT INTO Flight (tailNum, arrivalTime, prevAirport, arrivalType, arrivalName)
				VALUES ('$tailNum', '$arrivalTime', '$prevAirport', '$arrivalType','$arrivalName')";
mysql_query($sql_2);
//echo "Input complete";





	 $sql_ret = "SELECT * FROM Flight WHERE tailNum = '$tailNum'";
		//echo "<br>$sql_ret<br>";
		print "<div align=\"center\">";
		 $table = mysql_query($sql_ret);
		 //table code with while loop to cycle
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
		print"</tr>";
		
		}
		 echo"</table>";
		print "</div>";



?>
</div>
</div>
</div>