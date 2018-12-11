<?php
$host="localhost";
$username="root";
$password="";
$db_name="project";
$tbl_name="booking";

$con=mysqli_connect("$host","$username","$password","$db_name") or die("cannot connect");
$u_id=$_POST['u_id'];
$pid=$_POST['pid'];
$uname=$_POST['uname'];

$payment_type=$_POST['payment_type'];
$bank=$_POST['bank'];
$from_date=$_POST['from_date'];



if(!$u_id|| !$pid || !$uname || !$payment_type  || !$bank ||  !$from_date )
{
	echo'<body bgcolor="silver">';
	echo'<center>';
	echo "<h2>Please enter the required details</h2>";
	echo "<br/>";
	echo "<br/>";
	echo "<font size='5'>"."Click" . "<a href='booking.php'>"."  ". "here"  . "</a>"  . "  " . "to register"."</font>";
	echo'</center>';
	echo'</body>';

	exit;
}
$sql="insert into $tbl_name(u_id,pid,uname,payment_type,bank,from_date)
values ('$u_id','$pid','$uname','$payment_type','$bank','$from_date')";
$result=mysqli_query($con,$sql);

if($result){
echo "<script language=\"javascript\">
	alert(\"Successfully Added!...\")
	location.href=\"tmenu.php\"
	</script>";
}
echo "<br/>";


mysqli_close($con);
?>

