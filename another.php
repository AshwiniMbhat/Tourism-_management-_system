<?php
$host="localhost";
$username="root";
$password="";
$db_name="tms";
$tbl_name="regester";

$con=mysqli_connect("$host","$username","$password","$db_name") or die("cannot connect");


//Defining Processing variables
$Reg_No=$_POST['Reg'];
$Name=$_POST['Name'];
$Activity=$_POST['Activity'];
$Address=$_POST['Address'];
$Phone=$_POST['Phone'];
$Email=$_POST['Email'];
$Website=$_POST['Website'];
$Region=$_POST['Region'];

//Protecting form submitting an empty data
if (!$Reg_No || !$Name || !$Activity || !$Region )
	{
	echo'<body bgcolor="silver">';
	echo'<center>';
	echo "<h2>Please enter the required details</h2>";
	echo "<br/>";
	echo "<br/>";
	echo "<font size='5'>"."Click" . "<a href='admin.php'>"."  ". "here"  . "</a>"  . "  " . "to register"."</font>";
	echo'</center>';
	echo'</body>';

	exit;
	}

$sql="insert into $tbl_name(Reg,Name,Activity,Address,Phone,Email,Website,Region) 
values('$Reg_No','$Name','$Activity','$Address','$Phone','$Email','$Website','$Region')";
$result=mysqli_query($con,$sql);

if($result){
echo "<script language=\"javascript\">
	alert(\"Successfully Added!...\")
	location.href=\"admin1.php\"
	</script>";
}
echo "<br/>";

mysqli_close();
?>


