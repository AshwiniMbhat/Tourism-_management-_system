<?php

//Connect to Database.
$mysql=mysqli_connect('localhost','root','');
if(!$mysql)
{
echo 'Can not Connect';
exit;
}
//Select database to use
$select=mysqli_select_db($mysql,'project');
if(!$select)
{
die('Cannot Connect:'.mysqli_error($select));
exit;
}
$uname=$_POST["uname"];
$u_id=$_POST["u_id"];

//select Data from processing Table
$query="select * from tourist where uname='$uname' and u_id='$u_id'";
$result=mysqli_query($mysql,$query);

if(!$result)
{
echo 'Wrong Username or Password <br/>';
echo 'Please Enter Correct Username and Password';
exit;
}

while($res=mysqli_fetch_array($result))
{
	if($u_id==$res[0]&&$uname==$res[1])
       header("location:booking.php");
	
else
{
	echo "<script language=\"javascript\">
	alert(\"failed to be Added!...\")
	location.href=\"signin.php\"
	</script>";
}
}

?>