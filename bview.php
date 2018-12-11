<html>
<head>
  <title>Process the HTML form data with the POST method</title>
  <link rel="stylesheet" type="text/css" href="bview.css">
</head>
</head>
<body>
	<table align='left' border='0' width='640' cellpadding='10' cellspacing='0' height='725'>
          <tr>
            <td colspan='3' height='2'></td>
          </tr>
          <tr>
            <td bgcolor="" valign='center'>
			<?php
$host="localhost";
$username="root";
$password="";
$db_name="project";
$tbl_name="booking";

$con=mysqli_connect("$host","$username","$password") or die("cannot connect");
mysqli_select_db($con,"$db_name")or die("cannot connect");

$sel= mysqli_query($con,"select * from $tbl_name");
echo"<table align='center' width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='silver'>
<caption><h3>BOOKING DETAILS</h3></caption>
<tr bgcolor='#CCCCCC'>
<th width='10%'>u_id</th>
<th width='10%'>pid</th>
<th width='10%'>uname</th>
<th width='10%'>payment_type</th>
<th width='10%'>bank</th>
<th width='15%'>from_date</th>


</tr>";

   while($row=mysqli_fetch_array($sel))
{
echo "<tr bgcolor='white'>";
echo  "<td width='5%'>".$row ['u_id']."</td>";
echo  "<td width='10%'>".$row ['pid']."</td>";
echo  "<td width='15%'>".$row ['uname']. "</td>";
echo  "<td width='10%'>".$row ['payment_type']."</td>";
echo  "<td width='10%'>".$row ['bank']."</td>";
echo  "<td width='10%'>".$row ['from_date']."</td>";


echo "</tr>";
}
echo"</table>";

?>

<br/>

			</td>
          </tr>
          <tr>
			<td class="main"><a href="admin_menu.php" target="_parent">Back/menu <b>|</b></a>
			<a href="view.php" target="_parent">View details <b>|</b></a>
			<a href="admin2.php" target="_parent">Log out</a></td>
			
          </tr>
         
	</table>
</body>
</head>
</html>

