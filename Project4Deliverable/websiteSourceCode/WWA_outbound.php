<div class="navbar navbar-inverse">
		<div class="navbar-inner">
				<a class="brand" href="WWA_Inbound.htm">Wrong Way Airlines</a>
				<ul class="nav">
				<li><a href="WWA_Inbound.htm">Inbound</a></li>
				<li class="divider-vertical"></li>
				<li class="active"><a href="WWA_Outbound.html">Outbound</a></li>
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




$departTime			= $_REQUEST["departTime"];
$departType			= $_REQUEST["departType"];
$tailNum			= $_REQUEST["tailNum"];
$nextAirport		= $_REQUEST["nextAirport"];
$departName			= $_REQUEST["departName"];

//echo "Connected<br>";

$sql_2 = "INSERT INTO Outbound (tailNum, departTime, nextAirport, departType, departName)
				VALUES ('$tailNum', '$departTime', '$nextAirport', '$departType','$departName')";
mysql_query($sql_2);
//echo "Input complete";

$sql_ret = "SELECT * FROM Outbound WHERE tailNum = '$tailNum'";
		print "<div align=\"center\">";
		 $table = mysql_query($sql_ret);
		 //table code with while loop to cycle
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
		 while( $r = mysql_fetch_array ( $table ) )
		{
		 //row of a table is <tr> cells or columns are <td>
		
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
		print "</div>";


?>
</div>
</div>
</div>