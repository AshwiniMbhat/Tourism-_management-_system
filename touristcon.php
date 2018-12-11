<?php
$host="localhost";
$username="root";
$password="";
$db_name="project";
$tbl_name="tourist";

$con=mysqli_connect("$host","$username","$password","$db_name") or die("cannot connect");

$u_id=$_POST['u_id'];
$uname=$_POST['uname'];
$age=$_POST['age'];
$ph_no=$_POST['ph_no'];
$email=$_POST['email'];
$address=$_POST['address'];
$sex=$_POST['sex'];

if(!$u_id || !$uname || !$age || !$ph_no || !$email || !$address || !$sex )
{
	echo'<body bgcolor="silver">';
	echo'<center>';
	echo "<h2>Please enter the required details</h2>";
	echo "<br/>";
	echo "<br/>";
	echo "<font size='5'>"."Click" . "<a href='tourist.php'>"."  ". "here"  . "</a>"  . "  " . "to register"."</font>";
	echo'</center>';
	echo'</body>';

	exit;
}

$sql="insert into $tbl_name(u_id,uname,age,ph_no,email,address,sex)
values ('$u_id','$uname','$age','$ph_no','$email','$address','$sex')";
$result=mysqli_query($con,$sql);

if($result){
echo "<script language=\"javascript\">
	alert(\"Successfully Added!...\")
	location.href=\"booking.php\"
	</script>";
	
}
else
{
echo "<script language=\"javascript\">
	alert(\"failed to be Added!...\")
	location.href=\"booking.php\"
	</script>";
}	
echo "<br/>";

mysqli_close($con);
?>

