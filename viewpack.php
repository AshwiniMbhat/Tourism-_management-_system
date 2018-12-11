<html>
<head><title></title>
<link rel="stylesheet" type="text/css" href="place1.css">
</head>
<body>
<h1>OUR PACKAGES</h1>
<div class="main">
<a href="mainpage.php">LOGOUT</a>
</div>
<div id="content">
<?php
$db=mysqli_connect("localhost","root","","project");
$sql="select * from packages";
$result=mysqli_query($db,$sql);
while($row=mysqli_fetch_array($result)) {
	
	echo "<div  id='img_div'>";
	echo "<img src='images/".$row['image']."'  height='250px' width='300px'><a href='details.php? id=".$row['pid']."'>";
	
	echO "<p>"."a_id: ".$row['a_id']."</p>";
	echo "<p>"."place_name: ".$row['place_name']."</p>";
	echo "<p>"."num_of_days: ".$row['num_of_days']."</p>";
	echo "<p>"."total_cost: ".$row['total_cost']."</p>";
	echo "<p>"."validity: ".$row['validity']."</p>";
	echo "<p>"."trans_type: ".$row['trans_type']."</p>";
	echo "<p>"."start_from: ".$row['start_from']."</p>";
	echo"<input type='submit' value='more_info' name='more'>";
	echo "</div>";
	print"</form>";
}
?>


</div>

</body>
</html>