<?php
$host="localhost";
$username="root";
$password="";
$db_name="project";
$tbl_name="rating";

$con=mysqli_connect("$host","$username","$password","$db_name") or die("cannot connect");
$place_name=$_POST['place_name'];
$email=$_POST['u_id'];
$rate=$_POST['num_of_stars'];
$comment=$_POST['comments'];

if(!$place_name || !$email || !$rate || !$comment)
{
	echo'<body bgcolor="silver">';
	echo'<center>';
	echo "<h2>Please enter the required details</h2>";
	echo "<br/>";
	echo "<br/>";
	echo "<font size='5'>"."Click" . "<a href='ratings.php'>"."  ". "here"  . "</a>"  . "  " . "to register"."</font>";
	echo'</center>';
	echo'</body>';

	exit;
}
$sql="insert into $tbl_name(place_name,u_id,num_of_stars,comments)
values ('$place_name','$email','$rate','$comment')";

$result=mysqli_query($con,$sql);

if($result){
echo "<script language=\"javascript\">
	alert(\"THANK YOU FOR YOUR FEEDBACK!...\")
	location.href=\"mainpage.php\"
	</script>";
}
echo "<br/>";

mysqli_close($con);
?>
