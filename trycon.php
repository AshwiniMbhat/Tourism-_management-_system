<?php
$con=mysqli_connect("localhost","root","","project");

if(isset("img")){
$result=mysqli_query($con,"select * from packages where img=$_POST[img]");
if($result)
	echo "congo";
}
?>
	