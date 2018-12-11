<html>
<head>
  <title>Process the HTML form data with the POST method</title>
  <link rel="stylesheet" type="text/css" href="rview.css">
</head>
</head>
<body>
	<table align='right' border='0' width='640' cellpadding='10' cellspacing='0' height='725'>
          <tr>
            <td colspan='3' height='2'></td>
          </tr>
          <tr>
            <td colspan='3' height='1' align='right'><a href='mainpage.php' >log out </a></td>
          </tr>
          <tr>
            <td bgcolor="" valign='center'>
<?php

$host="localhost";
$username="root";
$password="";
$db_name="project";
$tbl_name="rating";

$con=mysqli_connect("$host","$username","$password") or die("cannot connect");
mysqli_select_db($con,"$db_name")or die("cannot connect");

$sel= mysqli_query($con,"select * from $tbl_name");
echo"<table align='center' width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='silver'>
<caption><h3>COMMENTS</h3></caption>
<tr bgcolor='#CCCCCC'>
<th width='10%'>place_name</th>
<th width='10%'>u_id</th>
<th width='15%'>num_of_stars</th>
<th width='10%'>comments</th>


</tr>";

   while($row=mysqli_fetch_array($sel))
{
echo "<tr bgcolor='white'>";
echo  "<td width='5%'>".$row ['place_name']."</td>";
echo  "<td width='10%'>".$row ['u_id']."</td>";
echo  "<td width='10%'>".$row ['num_of_stars']."</td>";
echo  "<td width='15%'>".$row ['comments']. "</td>";



echo "</tr>";
}
echo"</table>";

?>

<br/>

			</td>
          </tr>
          <tr>
			<td class="main"><a href="mainpage.php" target="_parent">Back/menu <b>|</b></a>
			<a href="mainpage.php" target="_parent">Log out</a></td>
			
          </tr>
         
	</table>
</body>
</head>
</html>

