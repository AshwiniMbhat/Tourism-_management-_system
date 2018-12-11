<?php
$host="localhost";
$username="root";
$password="";
$db_name="project";
$tbl_name="agent";

$con=mysqli_connect("$host","$username","$password","$db_name") or die("cannot connect");


$name=$_POST['name'];
$age=$_POST['age'];
$sex=$_POST['sex'];
$email=$_POST['email'];
$ph_no=$_POST['ph_no'];
$salary=$_POST['salary'];
$address=$_POST['address'];
$place_name=$_POST['place_name'];


if(!$name || !$age || !$sex || !$email || !$ph_no || !$salary|| !$address || !$place_name)
{
	echo'<body bgcolor="silver">';
	echo'<center>';
	echo "<h2>Please enter the required details</h2>";
	echo "<br/>";
	echo "<br/>";
	echo "<font size='5'>"."Click" . "<a href='agent.php'>"."  ". "here"  . "</a>"  . "  " . "to register"."</font>";
	echo'</center>';
	echo'</body>';

	exit;
}

$sql="insert into $tbl_name(name,age,sex,email,ph_no,salary,address,place_name)
values ('$name','$age','$sex','$email','$ph_no','$salary','$address','$place_name')";
$result=mysqli_query($con,$sql);

if($result){
echo "<script language=\"javascript\">
	alert(\"Successfully Added!...\")
	location.href=\"admin_menu.php\"
	</script>";
}
echo "<br/>";

mysqli_close($con);
?>
