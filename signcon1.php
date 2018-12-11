<?php

$username=$_POST['uname'];
$password=$_POST['u_id'];

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

//select Data from processing Table
$query="select * from tourist where uname='$username' and u_id='$password'";
$result=mysqli_query($mysql,$query);
if(!$result)
{
echo 'Wrong Username or Password <br/>';
echo 'Please Enter Correct Username and Password';
exit;
}
$row=mysqli_fetch_row($result);
$count=$row[0];
if($count>0)
{
header("location:admin_menu.php");

}
else
{
	echo'<body bgcolor="silver">';
	echo'<center>';
echo'<h2>login unsuccessful</h2>';
echo'<h3>You are not logged in</h3>';
echo'Only Authorised user can log in.<br/>';
echo'<a href="admin2.php">Back to Login page</a>';
	echo'</center>';
	echo'</body>';
}


?>