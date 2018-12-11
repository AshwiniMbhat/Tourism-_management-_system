<?php
if(isset($_GET['id']))
{
	$id=$_GET['id'];
}
?>
<!DOTYPE html>
<html lang="en">
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="place.css" /></head>
<body>
<?php

$con=mysqli_connect("localhost","root","","project");
$query="select * from place_info 
   where pid=$id";
   $result=mysqli_query($con,$query) or die("sorry");
   echo "<table id='results'>";
   
   while($row=mysqli_fetch_array($result))
   {
	   echo "<tr><td><img src='images/".$row['image']."'height='250px' width='300px'></td><td valign='top'><b>place_name:".$row['place_name']."</b><br/><br/>package_id:".$row['pid']."<br/><br/>malls:".$row['malls']."<br/><br/>parks:".$row['parks'].
	   "<br/><br/> MEUSEUMS:".$row['meuseums']."<br/><br/>whether:".$row['whether']."<br/><br/>speciel:".$row['speciel']."<br/><br/>RESTAURANTS:".$row['restaurants']
	   ."<br/><br/>DETAILS:".$row['details']."<br/><br/></td></tr>";
   }
    echo "<div>
	<a href='tourist.php'><input type='submit' value='book now'> </a></div>";
   echo "</table>";
   
   ?>
   </body>
   </html>
   